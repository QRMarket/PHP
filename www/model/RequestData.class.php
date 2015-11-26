<?php
namespace model;
use model\listener\DataListener;

/**
 * request için türetilebileceğimiz class
 *
 * @author Kemal Çağrı
 */
abstract class RequestData{
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
	 * construct method
	 *
	 * @param array $criteria
	 */
	public function __construct(Array &$criteria){
		$this->criteria = Request::addslashes_array($criteria);
		$this->SMARTY =& Loader::loadClass('Smarty');
	}
	/**
	 * combobx'lar için veri doldurur
	 * 
	 * @param array $dataArr
	 * @param string $key
	 * @param string $value
	 * @param string|null $enSonaEklenecekDeger
	 * @return \model\listener\DataListener
	 */
	protected static function setCombo(Array $dataArr,$key=null,$value=null,$enSonaEklenecekDeger=null){
		$DATALISTENER = self::getDataListener();
		if($enSonaEklenecekDeger!=null){
		    $DATALISTENER->setEnSonaEklenecekDeger($enSonaEklenecekDeger);
		}
		$ArrayObject = new \ArrayObject($dataArr);
		$DATALISTENER->add($ArrayObject,$key,$value);		
		return $DATALISTENER;
	}
	/**
	 * DataListener get eder
	 * 
	 * @return \model\listener\DataListener
	 */
	protected static function getDataListener(){
		return new DataListener();
	}
}