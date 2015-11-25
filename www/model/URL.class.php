<?php
namespace model;
use model\form\Form;

/**
 * Tüm URL'ler bu class üzerinden işletilecektir
 *
 * @author Kemal Çağrı
 */
final class URL
{

	/**
	 * url array set eder
	 *  
	 * @param array $urlArr
	 * @return string
	 */
	final public static function setURL ($urlArr)
	{
		if (!isset($urlArr['page']))
			$urlArr = array_merge(['page' => Request::_get('page')], $urlArr);
		if (Config::REWRITE) {
			return '/' . self::arrayToUrl($urlArr);
		} else {
			return '/index.php?' . self::arrayToUrl($urlArr);
		}
	}

	/**
	 * array'den link oluşturur
	 *
	 * @param array $arr
	 * @return strıng
	 */
	private static function arrayToUrl (Array $arr)
	{
		$url = '';
		foreach ($arr as $name => $value) {
			if ($name == 'page')
				$url .= trim($value).'?';
			else
				$url .= $name . '=' . Form::setInput(trim($value)).'&';
		}
		return preg_replace('/\?$|&$|=$|=+&$/','', $url);
	}
}
