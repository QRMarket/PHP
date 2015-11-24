<?php
namespace model\listener;
use model\Singleton;
/**
 * kurum ve hizmet bilgilerinin tuan class
 *
 * @author Kemal Çağrı
 */
class KurumHizmet
{
	/**
	 * singleton trait
	 */
	use Singleton;
	/**
	 * verilerin tutulduğu array
	 * @var array
	 */
	private $dataArr = array();
	/**
	 * overloading set methodu
	 *
	 * @param string $key
	 * @param string $value
	*/
	public function __set($key, $value){
		$this->dataArr[$key] = $value;
	}
	/**
	 * overloading get methodu
	 *
	 * @param string $key
	 * @return array
	 */
	public function __get($key){
		if (array_key_exists($key, $this->dataArr)) {
			return $this->dataArr[$key];
		}
	}
	/**
	 * overloading key değeri siler
	 *
	 * @param string $key
	 */
	public function __unset($key)
	{
		unset($this->dataArr[$key]);
	}
}