<?php

namespace controller;
use model\Config;
use model\Address;
error_reporting(E_ALL);

include './model/Config.class.php';
include './model/Address.class.php';
include './model/Functions.class.php';

class Index{
    
    public static function index(){

        // -- ** -- GET Twig & city list
            $twig = Config::getTwig();
            $cityList = \model\Address::getCityList();

        // -- ** -- Check $cityList content is exist with isset method
            $result = array('cityList' => json_decode($cityList)->content);

        // -- ** -- Render result with twig
            return $twig->render('index.html', $result);
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
