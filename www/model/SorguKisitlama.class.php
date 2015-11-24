<?php
namespace model;
use model\cache\Cache;

/**
 * Sorgu kısıtlaması için kullanılan class
 * Mesela 1 saat boyunca 30 adet plaka sorgulayabilme özelliği için kullanılır.
 *
 * @author Kemal Çağrı
 */
class SorguKisitlama extends RequestData{
	/**
	 * singleton
	 */
	use Singleton;
	/**
	 * Cache
	 * @var Cache
	 */
	private static $CACHE;
	/**
	 * construct method
	 * @return void
	 */
	public function __construct(){
		parent::__construct($_REQUEST);
		self::$CACHE =& Cache::factory(Config::CACHE_CLASS);
	}
	/**
	 * sorgu kısıtlaması yapmak istiyorsanız her sorgunun sonunda bu method çağrılır
	 *
	 * @param integer $maxSorgu
	 * @param integer $timeout
	 * @return void
	 */
	public function set($maxSorgu,$timeout,$ip=null){
		$cacheArr = $this->getCache($ip);
		# daha önce sorgulama yapıldı
		if(is_array($cacheArr)){
			$index = $cacheArr['index'];
			$cacheArr = ['index'=>++$index,'maxSorgu'=>$maxSorgu];
			self::$CACHE->replace($this->getCacheId($ip),$cacheArr,$timeout);
		}
		# daha önce sorgulama yapılmadı ilkkez sorgulama yapılıyor
		else{
			$cacheArr = ['index'=>1,'maxSorgu'=>$maxSorgu];
			self::$CACHE->setCache($this->getCacheId($ip),$cacheArr,$timeout);
		}
	}
	/**
	 * sorgu kısıtlaması olup olmadığına bakar
	 *
	 * @return boolean
	 */
	public function validate($ip=null,$maxSorgu=null){
		$cacheArr = $this->getCache($ip);
		//Debug::dump($cacheArr);
		if(is_array($cacheArr)){
			$cacheArr['maxSorgu'] = ($maxSorgu==null?$cacheArr['maxSorgu']:$maxSorgu);
			return $cacheArr['maxSorgu']>$cacheArr['index'];
		}
		else
			return true;
	}
	/**
	 * Sayfa için cache id oluşturur
	 *
	 * @return string
	 */
	private function getCacheId($ip){
		if($ip==null){
			return Cryptography::sha(Request::_session('tc_kimlik_no').__CLASS__.$this->criteria['page']);
		}
		else{
			return Cryptography::sha(Header::getIpAddress().__CLASS__.$this->criteria['page']);
		}
	}
	/**
	 * Cache bilgisini get eder
	 *
	 * @return boolean
	 */
	private function getCache($ip){
		//die($this->getCacheId($ip));
		return self::$CACHE->getCache($this->getCacheId($ip));
	}
}