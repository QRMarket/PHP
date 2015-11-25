<?php
namespace model\cache;
use model\cache\interfaces\CacheInterface;
use model\Config;
use model\Singleton;
use model\cache\driver\CacheAbstract;
/**
 * site içeriği cache'lerinin yürütüldüğü class
 * 
 * @author Kemal Çağrı
 *
 */
class NewMemcached extends CacheAbstract implements CacheInterface
{
    use Singleton;
    /**
     * static connection
     *
     * @return \model\cache\Memcached
     */
	public function __construct()
	{
	    $this->conection(Config::$SITE_CACHE_HOST,true);
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