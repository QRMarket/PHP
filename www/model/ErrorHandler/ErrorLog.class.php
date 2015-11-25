<?php
namespace model\ErrorHandler;
use model\Header;
use model\Config;
use model\curl\Curl;
use model\listener\Listener;
/**
 * Hata kayıtlarını tutan class
 *
 * @author Kemal Çağrı
 */
class ErrorLog{
	/**
	 *
	 * @param int $errno
	 * @param string $errmsg
	 * @param string $filename
	 * @param int $linenum
	 * @param string $vars
	 * @param boolean $redirect
	 * @return void
	 */
	public static function errorHandler($errno,$errmsg,$filename,$linenum,$vars,$redirect=true){
		if(is_integer($errno) && ($errno > E_NOTICE || $errno==1)) {
			$host = self::getHostName();
			$time = (microtime(true) - (float) \model\Request::_session('microtime'));

			$arr = debug_backtrace();
			$len = count($arr);
			for($i=0;$i<$len;$i++){
				$arr[$i]['args'][4]=array();
			}
			$paramArr = array(
					'islemKodu'=>'ekle',
					'ip_address'=>Header::getIpAddress(),
					'url'=>$_SERVER['REQUEST_URI'],
					'get'=>json_encode($_GET),
					'post'=>json_encode($_POST),
					'session'=>json_encode($_SESSION),
					'cookie'=>json_encode($_COOKIE),
					'execute_time'=>$time,
					'server_ip'=>$_SERVER['SERVER_ADDR'],
					'error_no'=>$errno,
					'message'=>$errmsg,
					'file'=>$filename,
					'line'=>$linenum,
					'host'=>$host,
					'error_data'=>json_encode($arr),
					'parameters'=>json_encode(Listener::getInstance()->parameters)
			);
			
			$CURL = new Curl(Config::JSON_URL.'/EDV03_PORTAL_PHPError/PhpErrorJSON',$paramArr);
			$CURL->getArray();
			if($redirect){
				Header::redirect(Config::ERROR_URL);
			}
		}
	}
	/**
	 * en son çağrılacak method
	 * @return void
	 */
	public static function setFatalErrorLog(){
		$errorArr = error_get_last();
		self::errorHandler($errorArr['type'], $errorArr['message'], $errorArr['file'], $errorArr['line'],array());
	}
	/**
	 * host name get eder
	 *
	 * @return string
	 */
	public static function getHostName(){
		return preg_match('/^dev/', $_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME']: 'www.turkiye.gov.tr';
	}
}
