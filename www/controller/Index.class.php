<?php

namespace controller;
use model\Config;
use model\Address;
use model\mvc\Controller;

//use model\Functions;

class Index extends Controller{
    public function __construct(){
        parent::__construct($_GET);
    }
    public function index(){

        // -- ** -- GET Twig & city list
            $twig = Config::getTwig();
            $cityList = Address::getCityList();
            //die($_SERVER['REQUEST_URI']);
        // -- ** -- Check $cityList content is exist with isset method
            $result = array('cityList' => json_decode($cityList)->content);
            //echo $result;
        // -- ** -- Render result with twig
            return $twig->render('index.html', $result);
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
