<?php
namespace model\cache;
use model\cache\Cache;
use model\Cryptography;
use model\Debug;
/**
 * 
 * @author Kemal Çağrı
 *
 */
class PrefixCacheDataManagement{
    /**
     * kurumlar ve recommendation cache key
     * @var string
     */
    const KURUMLAR_PREFIX = 'MOBILE_KURUMLAR_PREFIX'; 
    const RECOMMENDATION_PREFIX = 'MOBILE_RECOMMENDATION_PREFIX'; 
    /**
     * anlık zaman bilgisi
     * @var int
     */
    private $time;
    /**
     *cache Obje
     * @var \model\cache\NewMemcached
     */
    private $CACHE;
    /**
     * cache id key name
     * @var satring
     */
    const CACHE_KEY='cacheKey';
    /**
     * timeout key name
     * @var string
     */
    const CACHE_TIMEOUT='timeout';
    /**
     * construct
     */
    public function __construct(){
        $this->time = time();
        $this->CACHE = & Cache::factory(\model\Config::CACHE_SITE_CLASS);
    }
    /**
     * prefix cache'ine atacağı get eder
     * 
     * @param string $cacheKey
     * @param string $timeout
     * @return array
     */
    private function getCacheData($cacheKey,$timeout){
        return [self::CACHE_KEY=>$cacheKey,self::CACHE_TIMEOUT=>(intval($this->time)+intval($timeout))];
    }
    /**
     * prefix cache id'yi get eder
     * 
     * @param string $prefix
     * @return string
     */
    private function getPrefixCacheId($prefix){
        return Cryptography::sha($prefix);
    }
    /**
     * curl class'da jsongw'de connection yaparken prefix set edilmişse
     * set edilen prefix'e göre bir cache id oluşturup, jsongw'de connection sonucu oluşan cache_id'leri timeout sürelerine göre prefix key'e set eder.
     * 
     * @param string $prefix
     * @param string $cacheKey
     * @param integer $timeout
     */
    public function init($prefix,$cacheKey,$timeout){     
        $allCache = $this->CACHE->getCache($prefix);
        $reGeneratedCacheDataArr = array();
        if(is_null($allCache)){         
            $reGeneratedCacheDataArr[] = [$this->getCacheData($cacheKey, $timeout)];            
        }else{
            $allCacheArray = json_decode($allCache,true);
            foreach ($allCacheArray as $cacheRowArray){
                if(array_key_exists(self::CACHE_TIMEOUT, $cacheRowArray)){
                    if($cacheRowArray[self::CACHE_TIMEOUT]<$this->time){
                        $this->CACHE->deleteCache($cacheRowArray[self::CACHE_KEY]);
                    }else{
                        $reGeneratedCacheDataArr[] = $cacheRowArray;
                    }
                }
            }
            $reGeneratedCacheDataArr[] = $this->getCacheData($cacheKey, $timeout);
            $this->CACHE->deleteCache($prefix);
        }
        $keyArray=array();
        $array=array();
        foreach ($reGeneratedCacheDataArr as $rowArr){
            if(!in_array($rowArr['cacheKey'],$keyArray)){
                $array[]    = $rowArr;
                $keyArray[] = $rowArr['cacheKey'];
            }
        }
        $this->CACHE->setCache($prefix, json_encode($array),0);
        
    }
    /**
     * belli bir prefix içerisinde yer alan tüm cache id'leri siler
     * 
     * @param string $prefix
     * @return array "silinen cache id'leri get eder"
     */
    public function deletePrefixInnerCache($prefix){
        $deleteCacheIdArr = array();
        $allCache = $this->CACHE->getCache($prefix);
        
        if(!is_null($allCache)){
            $allCacheArray = json_decode($allCache,true);
            foreach ($allCacheArray as $cacheRowArray){
                if(array_key_exists(self::CACHE_TIMEOUT, $cacheRowArray)){                    
                    $this->CACHE->deleteCache($cacheRowArray[self::CACHE_KEY]);
                    $deleteCacheIdArr[] = $cacheRowArray[self::CACHE_KEY];
                }
            }
        }
        $this->CACHE->deleteCache($prefix);
        return $deleteCacheIdArr;
    } 
}