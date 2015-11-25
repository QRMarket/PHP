<?php
namespace model;
use model\language\Language;
/**
 * Hata mesajı çıkartan class
 *
 * @author Kemal Çağrı
 */
class ErrorMessage {
	/**
	 * kod=0 geldiğinde çıkan hata mesajı
	 *
	 * @var string
	 */
	const ERROR_MESSAGE_1 = 'Sistemde yaşanan bir teknik aksaklık nedeni ile işleminiz tamamlanamadı.';
	/**
	 * form alanlarını hatalı girdiğimizde çıkacak olan hata mesajı
	 *
	 * @var string
	 */
	const ERROR_MESSAGE_2 = 'Lütfen formunuzdaki hatalı alanları düzelterek yeniden deneyiniz.';
	/**
	 * form alanlarının validate özelliği için kullanılan array
	 *
	 * @var array
	 */
	public $formErrorArr = [];
	
	const ERROR_FORM_MESSAGE_NAME = 'formMessage';
	/**
	 * error css class'ları
	 *
	 * @var array
	 */
	public static $errorCssArr = [
	'errorContainer',
	'confirmContainer',
	'reminderContainer',
	'warningContainer',
	'progressContainer'
			];

	/**
	 * error mesaj arrayı
	 *
	 * @var array
	 */
	private $errorMessage = array ();
	/**
	 * dil dosyası
	 * @var string
	 */
	private $languageFile;
	public function __construct($lang=''){
		$this->languageFile = $lang;
	}
	/**
	 * language file dosyasını get eder
	 * @return string
	 */
	public function getLanguageFile(){
		return $this->languageFile;
	}
	/**
	 * error mesajı set eder
	 *
	 * @param string $message
	*/
	protected function setErrorMessage($message) {
		array_push ( $this->errorMessage, $message );
	}

	/**
	 * tüm hata mesajlarını set eder
	 *
	 * @param array $errorArray
	 * @return void
	 */
	protected function setFullErrorMessage(Array $errorArray) {
		$this->errorMessage = $errorArray;
	}

	/**
	 * error mesajını get eder
	 *
	 * @return Array
	 */
	public function getErrorMessage() {
		return $this->errorMessage;
	}

	/**
	 * merror mesajını flush eder
	 *
	 * @return void
	 */
	protected function flushErrorMessage() {
		array_splice ( $this->errorMessage, 0 );
		$this->errorMessage = array ();
	}
	/**
	 * Toplu hata mesajı set eder
	 *
	 * @return void
	 */
	public static function setMultiError($type_id, Array $messageArr){
		$len = count($messageArr);
		for($i=0;$i<$len;++$i){
			self::setPageMessage($type_id, $messageArr[$i]);
		}
	}
	/**
	 * sayfada yayınlanacak olan hata mesajını session'a set eder
	 *
	 * @param int $type_id
	 * @param string $message
	 * @param bool $global "her sayfada çıkmasını istediğimizde bu alan true olarak gönderilmeli. Default'u false"
	 */
	public static function setPageMessage($type_id, $message, $global=false)
    {
        $errorMessageArr = Request::_session('errorMessageArr', false);
        $page = Request::_get('page');
        if (!(self::isPageMessageAlreadySet($page, $errorMessageArr, $message))) {
            $arr = ['errorMessageArr' => $errorMessageArr];
            if($global)
                $arr['errorMessageArr'][] = ['pageMessageTypeId' => $type_id, 'pageMessage' => $message];
            else
                $arr['errorMessageArr'][$page][] = ['pageMessageTypeId' => $type_id, 'pageMessage' => $message];
            Session::createSession($arr);
        }
	}

    /**
     * Sayfada gosterilecek mesaj listesine bir mesajin ondecen eklenip eklenmedigini kontrol eder.
     * @param $page
     * @param $errorMessageArr
     * @param $newMessage
     * @return bool
     */
    public static function isPageMessageAlreadySet($page,$errorMessageArr,$newMessage){
        $pageMessages=$errorMessageArr[$page];
        foreach ($pageMessages as $value) {
            if($newMessage === $value['pageMessage']){
                return true;
            }
        }
        return false;
    }

	/**
	 * JSON'dan hata array'i dolu geldiyse hata mesajını set edip form sayfasına yönlendirme yapar.
	 *
	 * @return void
	 */
	public static function errorRedirectPage(Array $dataArr){
		$len = count($dataArr['mesajlar']);
		for($i=0;$i<$len;++$i){
			self::setPageMessage($dataArr['mesajlar'][$i]['htmlClass'],$dataArr['mesajlar'][$i]['mesaj']);
		}
		Header::redirect(Request::_get('page'));
	}

	/**
	 * hata mesajını siteye echo eder
	 *
	 * @return mixed
	 */
	public static function getMessage() {
		$errorArr = (array)Request::_session('errorMessageArr',false);
		$pageKey = Request::_get('page');
		
		$SMARTY =& Loader::loadClass ( 'Smarty' );
		if(array_key_exists($pageKey, $errorArr) && is_array($errorArr[$pageKey])){
			$errorMessageArr=$errorArr[$pageKey];
			$count = count($errorMessageArr);
			$type_0 = false;
			for($i=0;$i<$count;$i++){
				if(($errorMessageArr[$i]['pageMessageTypeId']!=0 || $errorMessageArr[$i]['pageMessageTypeId']!='errorContainer') || $type_0===false){
					self::addErrorMessage($SMARTY, $errorMessageArr, $i);
				}
				if($errorMessageArr[$i]['pageMessageTypeId']==0 && $type_0===false){
					$type_0 = true;
				}
			}			
			Session::deleteSessionKey('errorMessageArr', $pageKey);
			$SMARTY->assign ('pageError',true);
            Session::createSession(['pageError'=>true]);
		}else{
			$SMARTY->assign ('pageError',false);
            Session::createSession(['pageError'=>false]);
		}
		# global mesajları sayfada yazdırmak için
		$count = count($errorArr);
		for($i=0;$i<$count;$i++){
		    self::addErrorMessage($SMARTY, $errorArr, $i);
		    Session::deleteSessionKey('errorMessageArr', $i);
		    if($i==0){
		        $SMARTY->assign ('pageError',true);
		        Session::createSession(['pageError'=>true]);
		    }
		}		
	}
	/**
	 * hata mesajı add eder
	 * 
	 * @param \Smarty $SMARTY
	 * @param array $errorMessageArr
	 * @param int $i
	 * @return void
	 */
	private static function addErrorMessage(\Smarty $SMARTY,Array $errorMessageArr,$i){
	    $SMARTY->assign ( 'type_id', isset(self::$errorCssArr[$errorMessageArr[$i]['pageMessageTypeId']]) ? self::$errorCssArr[$errorMessageArr[$i]['pageMessageTypeId']]:$errorMessageArr[$i]['pageMessageTypeId']);
	    $SMARTY->assign ( 'message',stripslashes ($errorMessageArr[$i]['pageMessage'] ) );
	    $SMARTY->display( 'box/errorMessage.tpl' );
	}
	/**
	 * validate için field değişkenlerini array'e merge yapar
	 */
	public function addFieldError($fieldName,$message='Lütfen alanı boş geçmeyiniz!'){
		$this->formErrorArr = array_merge_recursive($this->formErrorArr, [self::ERROR_FORM_MESSAGE_NAME=>[$fieldName=> Language::getText($message,$this->getLanguageFile())]]);
	}
	/**
	 * hatalı alanları session'a set eder
	 *
	 * @return void
	 */
	public function setErrorField(){
		Session::createSession($this->formErrorArr);
	}
	/**
	 * formda hatalı giriş yapıldığında hata mesajı çıkartmak için kullanılır
	 *
	 * @param string $fieldName
	 * @param string $message
	 * @return void
	 */
	public static function addFieldErrorMessage($fieldName, $message){
		$sessionArr = (array)Request::_session(self::ERROR_FORM_MESSAGE_NAME);
		$arr = array(self::ERROR_FORM_MESSAGE_NAME => array_merge($sessionArr,array($fieldName=>$message)));
		Session::createSession($arr);
	}
	/**
	 * hatalı alanları dizi değişkene set eder
	 *
	 * @return void
	 */
	public static function setFormError($fieldName,$message='Lütfen alanı boş geçmeyiniz!'){
		Session::createSession([self::ERROR_FORM_MESSAGE_NAME=>[$fieldName=>$message]]);
	}
}