<?php
namespace model;
/**
 * class'ların contruct methodunda parametre almıyorsa class'lara singleton oluşturur
 *
 * @author Kemal Çağrı
 */
trait Singleton {

	/**
	 * class içeriğini tutan obje
	 *
	 * @var object
	 */
	private static $instance;

	/**
	 * class'ın singleton methodu
	 *
	 * @return validate\Validate|io\File|listener\KurumHizmet
	 */
	public static function &getInstance() {
		if (! (self::$instance instanceof self))
			self::$instance = new self();
		return self::$instance;
	}
}
