<?php
namespace controller;
use model\Config;
error_reporting(E_ALL);

include './model/Config.class.php';
include './model/Functions.class.php';

class Start{
    
    public static function index(){

        $twig = Config::getTwig();
        $cityList = \model\GuppyFunctions::getCityList();
        $addressList = null;
        $distributerList = null;


        if (isset($_POST['selectCity'])){
            $selectedCity = $_POST['selectCity'];
            $addressList = \model\GuppyFunctions::searchAddress($selectedCity);
        }

//        if (isset($_POST['selectDistributer'])){
//            $selectedAddress = $_POST['selectDistributer'];
//            $distributerList = \model\GuppyFunctions::getDistributerList($selectedAddress);
//        }

        $result = array('cityList' => $cityList,
                        'addressList' => $addressList,
                        'distributerList' => $distributerList);

        return $twig->render('startpage.html', $result);
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
