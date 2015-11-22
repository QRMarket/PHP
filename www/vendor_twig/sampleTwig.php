<?php
/**
 * Created by PhpStorm.
 * User: kemalsamikaraca
 * Date: 22/11/15
 * Time: 04:06
 */

require_once '../vendor/autoload.php';

$loader = new Twig_Loader_Filesystem('./vendor_twig/');
$twig = new Twig_Environment($loader, array(
));

//$loader = new Twig_Loader_Filesystem('./vendor_twig/');
//$twig = new Twig_Environment($loader, array(
//    'cache' => '/path/to/compilation_cache',
//));