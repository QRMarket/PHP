<?php

namespace controller;
use model\Config;
use model\Address;
error_reporting(E_ALL);

include './model/Config.class.php';
include './model/Address.class.php';
include './model/Functions.class.php';

class Start{
    
    public static function index(){

        $twig = Config::getTwig();
        $cityList = \model\GuppyFunctions::getCityList();
        $addressList = null;
        $distributerList = null;
        $add = null;


        if (isset($_POST['selectCity'])){
            $selectedCity = $_POST['selectCity'];
            $addressList = \model\GuppyFunctions::searchAddress($selectedCity);
        }

        if (isset($_GET['distributerAddress'])){
            $selectedAddress = $_GET['distributerAddress'];
            $distributerList = \model\GuppyFunctions::getDistributerList($selectedAddress);
        }

        $add = Address::getAddress('c_06_000');

        $result = array('cityList' => $cityList,
                        'addressList' => $addressList,
                        'address' => $add,
                        'distributerList' => $distributerList);

        return $twig->render('startpage.html', $result);
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
