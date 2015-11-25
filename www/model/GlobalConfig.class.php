<?php
namespace model;
/**
 * herkes için aynı olması gereken ayarların tutulduğu class
 * production'a bu dosya gönderilebilir lakin Config class gönderilemez.
 *
 * @author Kemal Çağrı
 */
interface GlobalConfig {
	/**
	 * projenin dosya karakter seti
	 *
	 * @var string
	 */
	const CHARACTER_SET = 'UTF-8';
	/**
	 * rewrite kullanıp kullanmama
	 *
	 * @var boolean
	 */
	const REWRITE = true;
	/**
	 * cookie domain
	 *
	 * @var string
	 */
	const COOKIE_DOMAIN = '.guppy.com.tr';
	/**
	 * cookie part
	 *
	 * @var string
	 */
	const COOKIE_PATH = '/';
	/**
	 * web servisten dönen doğru kod
	 *
	 * @var string
	 */
	const TRUE_CODE = 'GUPPY.001';

	/**
	 * listeleme sayısı
	 *
	 * @var integer
	 */
	const TABLE_ROW_PER_PAGE = 10;
	/**
	 * sistem içerisinde kullanılan cache class'ının adı.
	 *
	 * İçeride factory pattern ile burada belirtilen class'ı kullanacaktır.
	 *
	 * @var string
	 */
	const CACHE_CLASS = 'model\cache\Memcached';
	/**
	 * site içeriği cache'lerinin tutulduğu class
	 *
	 * @var string
	 */
	const CACHE_SITE_CLASS = 'model\cache\NewMemcached';
	/**
	 * hata sayfalarının yönlendirileceği URL
	 *
	 * @var string
	 */
	const ERROR_URL = '/error';



	/**
	 * 404 hata sayfası
	 * @var string
	 */
	const ERROR_404 = '/404';
	/**
	 * javascript version
	 *
	 * @var string
	 */
	const JS_VERSION = '?version=2.01';
	/**
	 * template yolunu verir
	 *
	 * @var string
	 */
	const TEMPLATE_PATH = '/view/';
}