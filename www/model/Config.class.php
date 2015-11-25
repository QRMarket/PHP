<?php
namespace model;

class Config implements GlobalConfig{

    /**
     * projenin dosya ana dizini
     *
     * @var string
     */
    const ROOT_PATH = '/Users/ulakbim/NetBeansProjects/PHP/www';
    /**
     * json datalarının döndüğü url
     *
     * @var string
     */
//    const JSON_URL = 'http://46.101.168.27:8080/QR_Market_Web/';
    const JSON_URL = 'http://192.168.35.123:8080/QR_Market_Web/';

    public static function getTwig()
    {
        include './vendor/autoload.php';
        $loader = new \Twig_Loader_Filesystem('./view/');
        $twig = new \Twig_Environment($loader, array());
        return $twig;
    }



    /*$config = array(

        "urls" => array(
            "baseUrl" => "http://example.com"
        ),
        "paths" => array(
            "resources" => "/path/to/resources",

            "images" => array(
                "content" => $_SERVER["DOCUMENT_ROOT"] . "/images/content",
                "layout" => $_SERVER["DOCUMENT_ROOT"] . "/images/layout"
            )
        )
    );*/

    /*
        I will usually place the following in a bootstrap file or some type of environment
        setup file (code that is run at the start of every page request), but they work
        just as well in your config file if it's in php (some alternatives to php are xml or ini files).
    */

    /*
        Creating constants for heavily used paths makes things a lot easier.
        ex. require_once(LIBRARY_PATH . "Paginator.php")
    */
    /*defined("ROOT_PATH")
        or define("ROOT_PATH", "/projects/GuppyWebFront/");


    defined("LIBRARY_PATH")
        or define("LIBRARY_PATH", realpath(dirname(__FILE__) . '/library'));


    defined("TEMPLATES_PATH")
        or define("TEMPLATES_PATH", realpath(dirname(__FILE__) . '/templates'));

    defined("CSS_PATH")
        or define("CSS_PATH", realpath(dirname(__FILE__).'/css'));*/


    /*
        Error reporting.
    */
//ini_set("error_reporting", "true");
//error_reporting(E_ALL|E_STRCT);
}

?>