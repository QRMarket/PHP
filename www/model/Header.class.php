<?php
namespace model;
use model\cache\Timeout;
use model\curl\Curl;
use model\form\Form;
use model\Config;
use model\validate\Validate;
/**
 * Tüm header'da oluşturulan işlemlerin toplandığı class'dır
 *
 * @author Kemal Çağrı
 */
final class Header {

	/**
	 * sayfanın karakter setini set eder
	 *
	 * @param string $contentType
	 * @param string $encoding
	 */
	public static function setContentType($contentType) {
		header ( "Content-Type:{$contentType};charset=" . Config::CHARACTER_SET );
		header ( "X-Powered-By: Turkiye" );
		header ( "Server: Turkiye Web Server" );
	}

	/**
	 * sayfa redirect yapar
	 *
	 * @param string $url
	 */
	public static function redirect($url) {
		if (! headers_sent ()){
            header ( "Location: {$url}" );
		}else{
		    if(preg_match('/api\./', $_SERVER['SERVER_NAME'])){
		        $API = new Api();
		        $API->setReturn(false);
		        $API->setData($url);
		        $API->setMessage('Sayfa Yönlendirme');
		        echo $API->get();		        
		    }else{
                printf ( "<script type=\"text/javascript\">window.location.href='%s'</script>", Form::setInput ( $url ) );
		    }
		}
		exit ( 0 );
	}

	/**
	 * client'ın ip adresini get eder
	 *
	 * @return string
	 */
	public static function getIpAddress() {	    
	    if(preg_match('/api\./', $_SERVER['SERVER_NAME']) && Validate::_isset('_mobileIpAddress', $_REQUEST)){
	        return Request::_request('_mobileIpAddress');
	    }
		if (getenv ( "HTTP_X_FORWARDED_FOR" ) != '')
			return getenv ( "HTTP_X_FORWARDED_FOR" );
		return getenv ( "REMOTE_ADDR" );
	}
	/**
	 * HTML header içerisindeki bilgileri get eder
	 * 
	 * @return array
	 */
	public static function getHeaderDetail(){
		$CURL = new Curl(Config::JSON_URL.'',
            ['param1'=>'HizmetLinkindenHizmetBilgisiGetir','link'=>Request::_get('page'),
                'tip'=>1],Timeout::get(1, Timeout::HOUR),true);
		return  $CURL->getArray();
	}
}
