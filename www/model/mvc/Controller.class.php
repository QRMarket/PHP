<?php
namespace model\mvc;
use model\Request;
use model\Loader;
//use model\TPL;
use model\form\FormData;
use model\validate\Validate;
use model\Header;
//use model\Queue;
//use model\portal\HizmetSonu;
use model\ErrorMessage;
//use model\hizmetler\LeftMenu;
use model\URL;
use model\curl\Curl;
/*use model\Api;
use model\log\HizmetSonuLogAbstract;*/
use model\PageController;
/**
 * tüm controller class'larda kullanılması gerekir.
 * 
 * @author Kemal Çağrı
 *
 */
abstract class Controller{
	/**
	 * sol menüde yazan metin
	 * @var array
	 */
	protected  $serviceInfoArr = array();
	/**
	 * aşama array
	 * @var array
	 */
	protected  $asamaArr = array();
	/**
	 * tüm linklerin ana sayfalarının çıkabilmesi için index methodun bulunması gerekir.
	 */
	public abstract function index();
	/**
	 * request array
	 *
	 * @var array
	 */
	protected $criteria=array();
	/**
	 * smarty objesi
	 * @var \Smarty
	*/
	protected $SMARTY;
	/**
	 * tpl'leri tutan değişken
	 * 
	 * @var array
	 */
	protected $tplArray=array();
	/**
	 * formDataArr değişkeni
	 * @var array
	 */
	protected $formDataArr = array();
	/**
	 * TPL
	 * @var \model\TPL
	 */
	protected $TPL;
	/**
	 * api
	 * @var \model\Api
	 */
	protected $API;
	/**
	 * asenkron ajax connection'ları yapıldığında "bana özel widget'lerde kullanılır" işlem bittiğinde çalıştırılacak fonksiyonun adı
	 * @var null|string
	 */
	protected $functionName=null;
	/**
	 * construct method
	 *
	 * @param array $criteria
	 */
	public function __construct(Array &$criteria){
		$this->criteria = Request::addslashes_array($criteria);
		//$this->SMARTY =& Loader::loadClass('Smarty');
		$this->formDataArr = (array)Request::_session(FormData::FORMDATANAME);
		//$this->TPL = new TPL();
		/*if(PageController::checApi()){
		    $this->API = new Api();
		}*/
	}
	/**
	 * TPL'leri add eder
	 * 
	 * @param TPL $TPL
	 */
	/*protected function addTPL(TPL $TPL){
		$this->tplArray[] = $TPL;
	}*/
	/**
	 * sol menüyü add eder
	 * 
	 * @param integer $toplamAsama
	 * @param integer $suankiAsama
	 * @param integer $dakika
	 * @param  array $assignArray
	 */
	/*protected function addServiceInfo($toplamAsama, $suankiAsama, $dakika, Array $assignArray=array()){
		$TPL = new TPL();
		$TPL->tplFile = 'hizmetler/box/serviceInfo.tpl';
		$TPL->assignArr = $assignArray;
		$this->addTPL($TPL);
		#left menü
		LeftMenu::set($toplamAsama, $suankiAsama, $dakika, $this->asamaArr, $this->serviceInfoArr);
	}
	/**
	 * bana özel widget asenkron hizmetlerde ajax connection'larda sonuç geldiğinde html içeriği getirecek olan fonksiyonun adının set edildiği methoddur.
	 * @param string $functionName
	 */
	public function runFunction($functionName){
	    $this->functionName = $functionName;
	}
	/**
	 * kuyruk için ajax connection yapar
	 * 
	 * @param array $getParameter
	 * @param boolean $acikHizmet
	 * @param boolean $acikHizmetLogBasacakmi
	 * @return json
	 */
	/*private function queueAjax(Array $getParameter,$acikHizmet=false, $acikHizmetLogBasacakmi=false){
		if (Validate::ajaxTokenValidation () && Validate::_isset('queue', $_POST)){
			Header::setContentType ( 'application/json' );
			$Queue = new Queue($_POST);
			$responseArr = $Queue->getData($getParameter,$acikHizmet,$acikHizmetLogBasacakmi);
			if($responseArr['sorguSonuc']['requestStatus'] == 'SONUCLANDI' && !is_null($this->functionName)){
			    $responseArr['sorguSonuc']['finalHTML'] = call_user_func($this->functionName, $Queue->getQueueArray());
			}
			die(json_encode($responseArr));
		}
	}*/
	/**
	 * hizmetlerin queue sonuçlarını işleyen method
	 * 
	 * @param \model\TPL
	 * @param array $dataArr
	 * @return array
	 */
	/*protected function getQueueResponse(TPL &$TPL,Array $dataArr){
		if(array_key_exists(Curl::PARAM_NAME, $dataArr)){			
			# kuyruk için ajax connection
			$this->queueAjax($dataArr[Curl::PARAM_NAME]->getParamArr(), $dataArr[Curl::PARAM_NAME]->getAcikHizmet(), $dataArr[Curl::PARAM_NAME]->getAcikHizmetLogBasacakmi());
		}
		
		if(count($dataArr)>0 && $dataArr['error']!=1){
			$TPL->assignArr['responseDataStatus'] = $dataArr['status'];
			$dataArr = json_decode($dataArr['methodOutputJson'],true);
			if(is_array($dataArr) && $dataArr['kod']==0){				
				$class = $this->logClassName;
				$method = $this->logClassMethodName;
				if($class!=''){
    				if(count($this->logClassMethodParamArr)==0){
    					$class::$method();
    				}
    				else{
    					$class::$method($this->logClassMethodParamArr);
    				}
				}				
				HizmetSonu::hizmetSonuIslemleriniYap($dataArr);
				$TPL->assign('detailArr', $dataArr);
				$TPL->assign('hizmetSonuIslemYapildi',true);
				return $dataArr;
			} else {
				$TPL->assignArr['kuyrukMu']=1;
				if($dataArr ['kod'] == 1){
					ErrorMessage::setPageMessage(0, ErrorMessage::ERROR_MESSAGE_1);
				}
				elseif($dataArr ['kod'] == 3){
					if(count($dataArr['mesajlar'])>0){
						ErrorMessage::setPageMessage($dataArr['mesajlar'][0]['htmlClass'], $dataArr['mesajlar'][0]['mesaj']);
					}else{
						ErrorMessage::setPageMessage(0, ErrorMessage::ERROR_MESSAGE_1);
					}
				}
			}
		}else{
			ErrorMessage::setPageMessage(0, ErrorMessage::ERROR_MESSAGE_1);
		}
		$TPL->assign('hizmetSonuIslemYapildi',false);
		return array();
	}
	/**
	 * form ekranları için 4. menüyü çıkartır
	 * @param array $assignArray
	 */
	/*protected function addServiceHelper(Array $assignArray=array()){
		$TPL = new TPL();
		$TPL->tplFile = 'hizmetler/box/serviceHelper.tpl';
		$TPL->assignArr = $assignArray;
		$this->addTPL($TPL);
	}
	/**
	 * hizmet sayfa bilgilerini getirir 
	 * 
	 * @return void
	 */
	/*protected function showContent(){
		$TPL = new TPL();
		$TPL->tplFile = 'hizmetler/box/title.tpl';
		
		$len = count($this->tplArray);
		$tplArray = array();
		$tplArray[] = $TPL;
		for($i=0;$i<$len;$i++){
			$tplArray[] = $this->tplArray[$i];
		}		
		$this->SMARTY->assign('serviceBlockArr', $tplArray);
		$this->SMARTY->display('hizmetler/index.tpl');
	}
	protected function showPortalContent($titleAssignArr=array()){		
		$TPL = new TPL();
		$TPL->tplFile = 'portal/box/title.tpl';
		$TPL->assignArr = $titleAssignArr;
		
		$len = count($this->tplArray);
		$tplArray = array();
		$tplArray[] = $TPL;
		for($i=0;$i<$len;$i++){
			$tplArray[] = $this->tplArray[$i];
		}		
		$this->SMARTY->assign('serviceBlockArr', $tplArray);
		$this->SMARTY->display('portal/index.tpl');
	}
	/**
	 * aşamalarda sayfa yetkisi oup olmadığını kontrol eder
	 * 
	 * @param string $asama
	 * @param string $securityMessage
	 * @param string $url
	 */
	protected function pageSecurity($asama,$securityMessage=null,$url=null){
		$asama =(int) $asama;
		if($this->formDataArr['asama']<$asama){
			if($securityMessage!=null){
				ErrorMessage::setPageMessage(2, $securityMessage);
			}
			if($asama==1){
				Header::redirect(URL::setURL([]));
			}
			if(is_null($url)){
				Header::redirect(URL::setURL(['asama'=>--$asama]));
			}else{
				Header::redirect($url);
			}
		}
	}
}
