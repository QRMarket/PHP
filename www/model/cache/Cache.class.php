<?php
namespace model\cache;

/**
 * Description of Cache
 *
 * @author Kemal Çağrı
 */
final class Cache {
	/**
	 * factory pattern method
	 *
	 * @param $className
	 * @return \model\cache\Memcached
	 */
	public static function &factory($className) {
		try {
            return $className::getInstance();
		} catch ( \Exception $error ) {
			trigger_error ( $error->getMessage(), E_USER_ERROR );
		}
        return null;
	}

	/**
	 * cache ne zaman oluşturulduğu bilgisini get set eder
	 *
	 * @param array $istatistikArr
     * @return string
     */
	public static function setCacheMessage(Array $istatistikArr) {
		return "*Bu grafik {$istatistikArr['date']} tarihinde {$istatistikArr['hour']} itibari ile geçerli veriler ile oluşturulmuştur.";
	}
}
