<?php
namespace model;
/**
 * site içerisinde ki tüm session işlemlerini yürüten class
 *
 * @author Kemal Çağrı
 */
use model\validate\Validate;

final class Session {
	/**
	 * session name
	 */
	const SESSION_NAME = 'GUPPYSESSIONID';
	/**
	 * class'ın ana construct'ı
	 * Bu alanda session name belirtilip session start edilir
	 *
	 * @return void
	 */
	public static function set() {
		self::setSessionName();
		self::startSesssion();
		self::createSession(['microtime'=> (float) microtime(true)]);
	}
	/**
	 * session işlemini açar
	 *
	 * @return void
	 */
	private static function startSesssion() {
		session_start();
	}
	/**
	 * session'ı commit eder
	 * @return void
	 */
	public static function commit(){
		session_write_close();
	}
	/**
	 * session name set eder
	 * construct metodunda çağrılır
	 *
	 * @return void
	 */
	private static function setSessionName() {   
	    session_set_cookie_params(0, '/', \model\Config::COOKIE_DOMAIN);
		session_name ( self::SESSION_NAME );
	}
	/**
	 * session atan method.
	 * Session için array olarak giden parametredeki
	 * tüm değerleri session olarak atar
	 * array('name'=>'Mehmet')
	 *
	 * @param Array $sessionArr
	 * @return boolean
	 */
	public static function createSession(Array $sessionArr) {
		if (is_array ( $sessionArr )) {
			foreach ( $sessionArr as $name => $value ) {
				$_SESSION[Request::addslashes_array($name)] = $value;
			}
			return true;
		}
		return false;
	}
	/**
	 * session işlemlerini sonlandırmak için kullanılan method
	 * tek tek session'ları array olarak göndererek de silebildiği gibi
	 * $all parametresini true olarak göndererek tüm session'ları silebilir
	 *
	 * @param array $sessionArr array('fname','lname')
	 * @param boolean $all
	 * @return boolean
	 */
	public static function deleteSession($sessionArr, $all = false) {
		/**
		 * tüm session'ları siler
		 */
		if ($all) {
			session_destroy();
			return true;
		}
		/**
		 * dizi olarak gelen session'ları siler
		 */
		if (is_array ( $sessionArr )) {
			$count = count ( $sessionArr );
			for($i = 0; $i < $count; $i ++) {
				if(Validate::_isset($sessionArr[$i], $_SESSION))
					unset($_SESSION[$sessionArr[$i]]);
			}
			return true;
		}
		return false;
	}
	/**
	 * çok boyutlu session'ların 2. boyutlarının keylerini siler
	 * 
	 * @param string $sessionParentKey
	 * @param string $sessionChildKey
	 * @return boolean
	 */
	public static function deleteSessionKey($sessionParentKey, $sessionChildKey){
		if(Validate::_isset($sessionParentKey, $_SESSION)){
			unset($_SESSION[$sessionParentKey][$sessionChildKey]);
			return true;
		}
		return false;
	}

	/**
	 * session id'sini veren method
	 * $reGenerate parametresi true olarak gönderilirse
	 * session_id yi yeniden düzenleyerek response eder
	 *
	 * @param boolean $reGenerate
	 * @return string
	 */
	public static function getSessionId($reGenerate = false) {
		if ($reGenerate)
			session_regenerate_id ();
		return session_id ();
	}

	/**
	 * session datasının hangi dizinde olduğunu get eder
	 *
	 * @return string
	 */
	public static function getSessionPath() {
		return session_save_path ();
	}
}
