<?php
namespace model\form;
use model\validate\Validate;
use model\Request;
use model\Session;
use model\RequestData;
/**
 * FormData bilgilerini yürütür
 *
 * @author Kemal Çağrı
 */
class FormData extends RequestData{
	/**
	 * formDataName
	 * @var string
	 */
	const FORMDATANAME = 'formDataArr';
	/**
	 * request verilerinin tutulduğu array
	 *
	 * @var array
	 */
	private $dataArr = array();
	/**
	 * request verilerini ekler
	 *
	 * @param string $requestName
	*/
	public function add($requestName){
		$this->dataArr[$requestName] = $this->criteria[$requestName];
		return $this;
	}
	/**
	 * request verisine key value değeri atar
	 *
	 * @param string $requestName
	 * @param string $requestValue
	 */
	public function addRequest($requestName,$requestValue){
		$this->dataArr[$requestName] = $requestValue;
		return $this;
	}
	/**
	 * eklenen verilerden siler
	 *
	 * @param string $requestName
	 */
	public function remove($requestName){
		if(array_key_exists($requestName, $this->dataArr)){
			unset($this->dataArr[$requestName]);
			unset($_SESSION[self::FORMDATANAME][$requestName]);
		}
		return $this;
	}
	/**
	 * formData session'ından key siler
	 * 
	 * @param string $childKey
     * @return bool
     */
	public static function removeKey($childKey){
		return Session::deleteSessionKey(self::FORMDATANAME, $childKey);
	}
	/**
	 * tüm request bilgilerini ekler
	 *
	 * @return void
	 */
	public function setAll(){
		$this->dataArr = array_merge($this->dataArr, $this->criteria);
		return $this;
	}
	/**
	 * tüm form datalarını boşalt
	 * @return bool
	 */
	public function flush(){
		$this->dataArr = array();
		Session::deleteSession([self::FORMDATANAME]);
		return $this;
	}
	public static function pageValidateControle($suankiAsama,$kucuktur=true){
		
		$func = function(Array $formDataArr){
			# şayet farklı
			if(Request::_get('page')!= $formDataArr['page']){
				Session::deleteSession([self::FORMDATANAME]);
			}
		};
		
		
		$formDataArr = (array) Request::_session(self::FORMDATANAME);
		//Debug::dump($formDataArr);
		if($kucuktur){
			$func($formDataArr);	
			
			if(doubleval($formDataArr['asama'])< $suankiAsama){
				return true;
			}
		}else{
			$func($formDataArr);
			if(doubleval($formDataArr['asama'])== $suankiAsama){
				return true;
			}
		}
		return false;
	}
	/**
	 * bir önceki session verilerinden bilgileri birleştirerek session'a set eder
	 *
	 * @return void
	 */
	public function set(){
		if(Validate::_isset(self::FORMDATANAME, $_SESSION)){
			$sessionArr = (array) Request::_session(self::FORMDATANAME);
			$this->dataArr['page'] = Request::_get('page');
			Session::createSession([self::FORMDATANAME=>array_merge($sessionArr,$this->dataArr)]);
		}else{
			Session::createSession([self::FORMDATANAME=>$this->dataArr]);
		}
		return $this;
	}
}
