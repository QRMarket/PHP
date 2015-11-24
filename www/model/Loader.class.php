<?php
namespace model;

/**
 * class yaratmaya yarayan class
 *
 * @author Kemal Çağrı
 */
class Loader {

	private static $instence = array ();

	/**
	 * classın construct methodu yoktur.
	 * dolayısıyla new Loader şeklinde çağrılamaz.
	 * Bunun için fonksiyonu final private şeklinde tanımladık
	 *
	 * @return void
	*/
	final private function __construct() {

	}

	/**
	 * class klonlanamaz.
	 *
	 * @return void
	 */
	final private function __clone() {

	}

	/**
	 * class çağıran method.
	 * Eğer class önceden yaratılmışsa aynen alır yaratılmamışsa
	 * eğer yaratılmamışsa yeni bir class yaratır
	 *
	 * @param string $class
	 * @return \Smarty
	 */
	public static function &loadClass($class) {
		if (! array_key_exists ( $class, self::$instence ) || ! (self::$instence [$class] instanceof $class))
			self::$instence [$class] = new $class ();
		return self::$instence [$class];
	}
}