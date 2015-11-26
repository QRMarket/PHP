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
        //die(substr(dirname(__FILE__),0, strlen(dirname(__FILE__))-11));
            //die(mbstr(dirname(__FILE__)));
        // -- ** -- GET Twig & city list
            $twig = Config::getTwig();
            $cityList = Address::getCityList();
        //die($cityList);
            //die($_SERVER['REQUEST_URI']);
        // -- ** -- Check $cityList content is exist with isset method
            $result = array('cityList' => json_decode($cityList)->content);
            //echo $result;
        // -- ** -- Render result with twig
            return $twig->render('index.html', $result);
    }

    public function asama_1(){
        //die(substr(dirname(__FILE__),0, strlen(dirname(__FILE__))-11));
        //die(mbstr(dirname(__FILE__)));
        // -- ** -- GET Twig & city list
        $twig = Config::getTwig();
        $cityList = Address::getCityList();
        //die($cityList);
        //die($_SERVER['REQUEST_URI']);
        // -- ** -- Check $cityList content is exist with isset method
        $result = array('cityList' => json_decode($cityList)->content);
        print_r($cityList);
        // -- ** -- Render result with twig
        return $twig->render('index.html', $result);
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
