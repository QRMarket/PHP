<?php
namespace controller;
use model\Config;
error_reporting(E_ALL);

class ProductList{
    
    public static function index(){

            $twig = Config::getTwig();
            $sectionList = null;

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
