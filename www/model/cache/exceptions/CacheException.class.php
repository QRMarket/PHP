<?php
/**
 * arayüz namespace
 */
namespace model\cache\exceptions;
/**
 * arayüz class
 * @author Kemal Çağrı
 */
class CacheException extends \Exception{
	public function __construct($message = null, $file=null, $line=null){
		trigger_error($message->getMessage(),E_USER_ERROR);
	}
}