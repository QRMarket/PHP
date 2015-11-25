<?php
/**
 *
 * @author msamli
 */
namespace model\cache;
/**
 * memcache ile sorgu cacheleme yapıyoruz
 *
 * @author Kemal Çağrı
 */
use model\Singleton;

use model\Loader;
use model\Config;

final class Memcache {
	use Singleton;

	/** @var \Memcache $memcache */
    private static $memcache;

    /**
     * static connection
     *
     * @return \model\cache\Memcache
     */
	public function __construct() {
		try {
			$hostArr = Config::$CACHE_HOST;
            /** @var \Memcache $MEMCACHE */
			$MEMCACHE = & Loader::loadClass ( '\Memcache' );
			$len = count ( $hostArr );
			for($i = 0; $i < $len; $i ++)
				$MEMCACHE->addServer ( $hostArr [$i] ['host'], $hostArr [$i] ['port'] );
			self::$memcache = & $MEMCACHE;
		} catch ( \Exception $error ) {
			trigger_error ( $error->getMessage (), E_USER_ERROR );
		}
	}

	/**
	 * get cache object
	 *
	 * @param string $cache_id
	 * @return object
	 */
	public function getCache($cache_id) {
		return self::$memcache->get ( self::cacheId ( $cache_id ) );
	}

	/**
	 * set cache
	 *
	 * @param string $cache_id
	 * @param object $result
	 * @param integer $timeout
	 * @return void
	 */
	public function setCache($cache_id, $result, $timeout) {
		self::$memcache->add ( self::cacheId ( $cache_id ), $result, MEMCACHE_COMPRESSED, $timeout );
	}

	/**
	 * flush all cache
	 *
	 * @return void
	 */
	public function flush() {
		self::$memcache->flush ();
	}

	/**
	 * delete cache
	 *
	 * @param string $cache_index
	 * @return void
	 */
	public function deleteCache($cache_index) {
		self::$memcache->delete ( self::cacheId ( $cache_index ), 0 );
	}

    /**
     * cache id oluşturur
     *
     * @param string $index
     * @return string
     */
	public function cacheId($index) {
		return $index;
	}

	/**
	 * destruct method
	 *
	 * @return void
	 */
	public function __destruct() {
		self::$memcache->close ();
	}
}

