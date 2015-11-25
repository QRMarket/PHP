<?php
namespace model\listener;
/**
 * data tutan class
 * 
 * @author Kemal Çağrı
 *
 */
class DataListener
{
	/**
	 * hata kontrol değişkeni
	 * @var boolean
	 */
	public $error=true;
	/**
	 * Query sonucunda dönen satır sayısı
	 *
	 * @var integer
	 */
	public $num_rows;
	/**
	 * Query sonucunda oluşan data'nın aktarılacağı Array
	 *
	 * @var array
	 */
	public $dataArr;
	private $enSonaEklenecekDeger=null;
	public function setEnSonaEklenecekDeger($enSonaEklenecekDeger){
	    $this->enSonaEklenecekDeger = $enSonaEklenecekDeger;
	}
	public function getEnSonaEklenecekDeger(){
	    return $this->enSonaEklenecekDeger;
	}
	/**
	 * construct method
	 */
	public function __construct() {
		$this->num_rows = 0;
		$this->dataArr = array();
	}
	
	/**
	 * array object değeri add edilir
	 * 
	 * @param \ArrayObject $ArrayObject
	 * @param string $key
	 * @param string $name
	 * @return void
	 */
	public function add(\ArrayObject $ArrayObject,$key=null,$name=null){
		$iterator = $ArrayObject->getIterator();
		$this->num_rows = $iterator->count();

		if($key==null && $name==null){
			while($iterator->valid()) {
				$arr = $iterator->current();
				$this->dataArr[] = ['id' => $arr, 'name' => $arr];
				$iterator->next();
				$this->error=false;
			}
		}else{
		    $sonaEklenecek = array();
			while($iterator->valid()) {
				$arr = $iterator->current();
				if($this->getEnSonaEklenecekDeger()==null){
				    $this->dataArr[] = ['id' => $arr[$key], 'name' => trim($arr[$name])];
				}else{
				    $value = trim($arr[$name]);
				    if($this->getEnSonaEklenecekDeger()==$value) {
				        $sonaEklenecek =['id' => $arr[$key], 'name' => $value];
				    }else{
				        $this->dataArr[] = ['id' => $arr[$key], 'name' => $value];
				    }
				}
				$iterator->next();
				$this->error=false;
			}
			if(count($sonaEklenecek)!=0){
			    $this->dataArr[] = $sonaEklenecek;
			}
		}
	}
}