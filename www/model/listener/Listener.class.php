<?php
namespace model\listener;
use model\Singleton;
/**
 * Listener sınıfı
 * @author Kemal Çağrı
 *
 */
class Listener implements \ArrayAccess {
	/**
	 * singleton trait
	 */
	use Singleton;
	
	private $data = array();

	public function offsetGet($offset) {
		return isset($this->data[$offset]) ? $this->data[$offset] : null;
	}

	public function offsetSet($offset, $value) {
		if ($offset === null) {
			$this->data[] = $value;
		} else {
			$this->data[$offset] = $value;
		}
	}
	public function offsetExists($offset) {
		return isset($this->data[$offset]);
	}

	public function offsetUnset($offset) {
		unset($this->data[$offset]);
	}
}