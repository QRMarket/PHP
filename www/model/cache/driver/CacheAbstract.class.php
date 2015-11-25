<?php
namespace model\cache\driver;
use model\listener\KurumHizmet;
use \Memcached as CoreMemcached;
use model\cache\exceptions\CacheException;
/**
 * memcache işlemlerinin yürütüdüğü class
 * 
 * @author Kemal Çağrı
 *
 */
abstract class CacheAbstract 
{
    const DUPLICATE_CACHE_ID_SEPERATOR = '_';
    /**
     * memcached instance değişkeni
     * @var \Memcached $memcache
     */
    protected $memcache;
    /**
     * jsongw'mi web memcache'mi kullanılacağını tanımlayıcı
     * 
     * @var boolean
     */
    public $extraMemcache;
    /**
     * connection işleminin yürütüldüğü method
     * 
     * @param array $hostArr
     */
    protected function conection(Array $hostArr,$extraMemcache){
        try {
            if(!$this->memcache instanceof CoreMemcached){
                $this->memcache = new CoreMemcached();
                $this->memcache->setOption(CoreMemcached::OPT_BINARY_PROTOCOL, true);  
                if(!is_bool($extraMemcache)){
                    throw new CacheException('bilinmeyen bir cis parametre');
                }              
                $this->extraMemcache = $extraMemcache;
                $len = count($hostArr);
                for ($i = 0; $i < $len; $i ++) {
                    $this->memcache->addServer($hostArr[$i]['host'], $hostArr[$i]['port']);
                }
            }
        } catch (\MemcachedException $error) {
            new CacheException($error, __FILE__, __LINE__);
        }
    }
    /**
     * get cache object
     *
     * @param string $cache_id
     * @return object
     */
    public function getCache($cache_id)
    {
        $cacheData = $this->memcache->get($cache_id);
        if($cacheData!=''){
            $KURUMHIZMET =& KurumHizmet::getInstance();
            if(!preg_match("/$cache_id/", $KURUMHIZMET->curlCacheIdStr)){
                $KURUMHIZMET->curlCacheIdStr .= $this->getCacheSizeRow($cache_id, $cacheData);
            }
        }
        return $cacheData;
    }
    /**
     * oluşturulan cache boyutunu byte cinsinden get eder
     * 
     * @param string $cache_id
     * @param json $data
     * @return string
     */
    private function getCacheSizeRow($cache_id,$cacheData){
        if(is_array($cacheData)){
            $serialized = serialize($cacheData);
            $cacheSize = mb_strlen($serialized, '8bit');
        }else{
            $cacheSize = mb_strlen($cacheData,'UTF-8');
        }
        return json_encode(['id'=>$cache_id,'type'=>gettype($cacheData),'size'=>$cacheSize]).'~';
    }
    /**
     * Sets a new expire time for an existing key
     *
     * @param string $cache_id
     * @param int $newexpiration
     * @return bool
     */
    public function touch( $cache_id, $newexpiration = null){
        if(is_null($newexpiration))
            return false;
        return $this->memcache->touch( $cache_id, $newexpiration);
    }
    /**
     * 
     * @param unknown $server
     * @param unknown $cache_id
     * @param unknown $newexpiration
     * @return boolean
     */
    public function touchByKey( $server, $cache_id, $newexpiration=null){
        if(is_null($newexpiration))
            return false;
        return $this->memcache->touchByKey( $server, $cache_id, $newexpiration);
    }
    
    /**
     * array olarak çoklu cache get eder
     *
     * @param array $cacheArray
     * @return mixed
     */
    public function getMulti($cacheArray)
    {
        return $this->memcache->getMulti($cacheArray);
    }    
    /**
     * set cache
     *
     * @param string $cache_id
     * @param object $result
     * @param integer $timeout
     * @return boolean
     */
    public function setCache($cache_id, $result, $timeout=null)
    {
        if(is_null($timeout))
            return false;
        $sonuc = $this->memcache->set($cache_id, $result, $timeout);
        # şayet site içeriği cache'e atılacaksa bilgiyi sonsuzaa kadar farklı bir key'de memcache'e atıyoruz
        if($this->extraMemcache){
            $cache_id .= self::DUPLICATE_CACHE_ID_SEPERATOR;
            $this->deleteCache($cache_id);
            $this->memcache->set($cache_id, $result, 0);
        }
        return $sonuc;
    }
    
    /**
     * flush all cache
     *
     * @return void
     */
    public function flush()
    {
        $this->memcache->flush(10);
    }
    /**
     * tüm memcache key'lerini get eder
     * @return array
     */
    public function getAllKeys(){
        return $this->memcache->getAllKeys();
    }
    /**
     * delete cache
     *
     * @param string $cache_id
     * @return boolean
     */
    public function deleteCache($cache_id)
    {
        return $this->memcache->delete($cache_id);
    }    
    /**
     * var olan bir cache'i değiştirir
     *
     * @param string $cache_id
     * @param object $result
     * @param integer $timeout
     * @return boolean
     */
    public function replace($cache_id, $result, $timeout=null)
    {
        if($this->getCache($cache_id)){
            if(is_null($timeout))
                return false;
            return $this->memcache->replace($cache_id, $result, $timeout);
        }
        else
            $this->setCache($cache_id, $result, $timeout);
    }    
    /**
     * cache id oluşturur
     *
     * @param $index
     * @return string
     */
    public function cacheId($index)
    {
        return $index;
    }
}