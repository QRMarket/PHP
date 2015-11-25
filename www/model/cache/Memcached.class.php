<?php
namespace model\cache;
use model\cache\interfaces\CacheInterface;
use model\Config;
use model\Singleton;
use model\cache\driver\CacheAbstract;
/**
 * memcached class
 *
 * @author Kemal Çağrı
 */
class Memcached extends CacheAbstract implements CacheInterface
{
    use Singleton;
    /**
     * static connection
     *
     * @return \model\cache\Memcached
     */
	public function __construct()
	{
	    $this->conection(Config::$CACHE_HOST,false);
	}
	/**
	 * destruct method
	 *
	 * @return void
	 */
	public function __destruct ()
	{
		$this->memcache->quit();
	}
}
