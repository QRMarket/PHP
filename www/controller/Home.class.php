<?php
namespace controller;
use model\Config;
error_reporting(E_ALL);

include './model/Config.class.php';
include './model/Functions.class.php';

class Home{
    
    public static function index(){

            $twig = Config::getTwig();

            if (isset($_GET['marketId'])){
                $marketId = $_GET['marketId'];

                // ##########################################
                // ##########################################
                // -- ** --
                // Burada market sayfası için gerekli diğer sorgular yapılacaktır
                // - section Listesi
                // - genel ürün listesi (çok satılan vs)
                // - (+) diğer istekler
                // ##########################################
                // ##########################################

                $sectionList = \model\GuppyFunctions::prepareCategoryMenu();
            }

            $result = array('sections' => $sectionList);

        return $twig->render('home.html', $result);
        
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
