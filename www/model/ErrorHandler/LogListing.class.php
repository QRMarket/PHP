<?php
namespace model\ErrorHandler;
use model\Config;
use model\curl\Curl;
use model\RequestData;
/**
 * php hatalarını raporlayan class
 *
 * @author Kemal Çağrı
 */
class LogListing extends RequestData{
	/**
	 * hata tipleri
	 *
	 * @var array
	 */
	public static $errorTyprArr = array(
			1 =>	'E_ERROR',
			2 => 	'E_WARNING',
			4=>		'E_PARSE',
			8=>		'E_NOTICE',
			16=>	'E_CORE_ERROR',
			32=>	'E_CORE_WARNING',
			64=>	'E_COMPILE_ERROR',
			99=>	'Policy Falsified',
	        100=>   'E_ANDROID',
	        101=>   'E_IOS',
			128=>	'E_COMPILE_WARNING',
			256=>	'E_USER_ERROR',
			512=>	'E_USER_WARNING',
			1024=>	'E_USER_NOTICE',
			2048=>	'E_STRICT',
			4096=>	'E_RECOVERABLE_ERROR',
			8192=>	'E_DEPRECATED',
			16384=>	'E_USER_DEPRECATED',
			32767=>	'E_ALL'
	);
	
	/**
	 * hata listesini get eder
	 *
	 * @return array
	*/
	public function getList(){
		$paramArr = array('kacTane'=>20,'sc'=>$this->criteria['sf']);
		$paramArr['url'] = $this->criteria['url'];
		$paramArr['tarihBas'] = $this->criteria['tarihBas'];
		$paramArr['tarihBit'] = $this->criteria['tarihBit'];
		$paramArr['execute_time'] = $this->criteria['execute_time'];
		$paramArr['error_no'] = $this->criteria['error_no'];
	 	$paramArr['host'] = $this->criteria['host'];// ErrorLog::getHostName();
		if(array_key_exists('id', $this->criteria) && $this->criteria['id']!='')
			$paramArr['id'] = $this->criteria['id'];
		//Debug::dump($paramArr);
		$CURL = new Curl(Config::JSON_URL.'/EDV03_PORTAL_PHPError/PhpErrorJSON', $paramArr);
		return $CURL->getArray();
	}
	
	public static function getHostNames(){	 
		 
		$CURL = new Curl(Config::JSON_URL.'/EDV03_PORTAL_PHPError/PhpErrorJSON', ['islemKodu'=>'hostNames']);
		$arr = $CURL->getArray();
		if(count($arr) > 0){
		return self::setCombo($arr,'itemKey','itemValue');
		}
		return self::getDataListener();
	}
	/**
	 * hataları silen method
	 *
	 * @return array
	 */
	public function setDelete(){
		if($this->criteria['file']!=''){
			$paramArr = array('islemKodu'=>'toplusil','file'=>$this->criteria['file'],'line'=>$this->criteria['line']);
		}
		else{
			$paramArr = array('islemKodu'=>'sil','id'=>preg_replace('/,$/', '', $this->criteria['id']));
		}
		$CURL = new Curl(Config::JSON_URL.'/EDV03_PORTAL_PHPError/PhpErrorJSON', $paramArr);
		return $CURL->getArray();
	}
}