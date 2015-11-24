<?php
namespace model\language;
use model\validate\Validate;
use model\Config;
use model\Request;
use model\Session;
use model\Header;
use model\URL;
use model\listener\Listener;
/**
 * dil işlemlerini yürütür
 * 
 * 
 * @author Kemal Çağrı
 */
class Language{
	/**
	 * varsayılan dil
	 * @var string
	 */
	const DEFAULT_LANGUAGE= 'tr_TR.UTF-8';
	/**
	 * session dil key'i
	 * @var string
	 */
	const SESSION_NAME = 'language';
	/**
	 * language
	 * @var string
	 */
	private $language;
	/**
	 * construct method
	 * @param array $criteria
	 */
	public function __construct(){
		
		if(Validate::_isset('language', $_SESSION)){
			$this->language = Request::_session('language');
		}else{
			$this->language = self::DEFAULT_LANGUAGE;
		}
		self::setLanguageGettext($this->language);
		if(!Validate::_isset(self::SESSION_NAME, $_SESSION)){
			Session::createSession(['language'=>self::DEFAULT_LANGUAGE]);
		}
	}
	/**
	 * gettext için dil dosyasını set eder
	 * 
	 * @param string $lang
	 */
	private static function setLanguageGettext($lang){
	    putenv("LANG=" . $lang);
	    setlocale(LC_MESSAGES, $lang);
	}
	/**
	 * set edilen method
	 * @param string $page
	 */
	public function init($page=null){
		$this->setLang();
		/*if($page==null)
			$page = Request::_get('page');
		if($page==null)
			$page='index';
		$page = 'page/'.$page;		
		bindtextdomain($page, Config::ROOT_PATH.'/language');	*/	
		bind_textdomain_codeset($page,  Config::CHARACTER_SET);		
		textdomain($page);
	}
	/**
	 * dil dosyalarına göre çeviri yapan method
	 * 
	 * @param string $message
	 * @param string $domain
	 * @return string
	 */
	public static function getText($message,$domain=null,$defaultLanguage=null){
	    
	    # parametrik olarak dil dosyasını set eder
	    if(!is_null($defaultLanguage)){
	        self::setLanguageGettext($defaultLanguage);
	    }
	    
		if($domain!=null){
			$LISTENER =& Listener::getInstance();
			if(property_exists($LISTENER,'getTextDomainArr') && is_array($LISTENER->getTextDomainArr)){
				if(!in_array($domain, $LISTENER->getTextDomainArr)){
					bindtextdomain($domain,Config::ROOT_PATH.'/language');
					bind_textdomain_codeset($domain, Config::CHARACTER_SET);
					$LISTENER->getTextDomainArr[] = $domain;				
				}				
			}else{
				bindtextdomain($domain,Config::ROOT_PATH.'/language');
				bind_textdomain_codeset($domain, Config::CHARACTER_SET);
				$LISTENER->getTextDomainArr[] = $domain;
			}			
			return dgettext($domain, $message);
		}
		else{
			return gettext($message);
		}	

		if(!is_null($defaultLanguage)){
		    self::setLanguageGettext(Request::_session('language'));
		}
	}
	/**
	 * dil dosyası set eder
	 * @return void
	 */
	private function setLang(){
		if(Validate::_isset('lang', $_GET)){
		    $lang = Request::_get('lang');
			if(is_dir(Config::ROOT_PATH.'/language/'.$lang)){
				Session::createSession(['language'=>$lang.'.UTF-8']);
				$paramArr = array();
				foreach ($_GET as $key=>$value){	
					if($key != 'page'&&$key!='lang'){
						$paramArr[$key] = $value;
					}
				}
				Header::redirect(URL::setURL($paramArr));
			}
		}
	}
	/**
	 * hangi language dosyalarını çalıştıracağını get eder
	 * 
	 * @return string
	 */
	public function getLanguage(){
	    return $this->language;
	}
}