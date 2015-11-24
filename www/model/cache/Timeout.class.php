<?php
namespace model\cache;
/**
 * cache veya cookie'ler için zamanaşımı süreleri için kullanılan class
 *
 * @author Kemal Çağrı
 */
final class Timeout
{

	const SECOND='second';
	const MINUTE = 'minute';
	const HOUR = 'hour';
	const DAY = 'day';
	const WEEK = 'week';
	const MONTH = 'month';
	const YEAR = 'year';


	/**
	 * zaman aşımı için tanımlı zamanların saniye cinsinden değerleri
	 * @var array
	 */
	private static $time = array('second' => 1, 'minute' => 60, 'hour' => 3600,
			'day' => 86400, 'week' => 604800, 'month' => 2592000,
			'year' => 31557600);
	/**
	 * timeout için belirtilen zamanı saniye cinsinden get eder
	 *
	 * @param integer $timeout
	 * @param string $duration : 'second', 'minute', 'hour', 'day', 'week', 'month', 'year'
	 * return integet
	*/
	public static function get ($timeout, $duration)
	{
		if (isset(self::$time[$duration])){
			return  self::$time[$duration] * $timeout;
		}
		else
			return  $timeout;
	}
}