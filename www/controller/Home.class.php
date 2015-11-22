<?php
namespace controller;
use model\Config;
error_reporting(E_ALL);

class Home{
    
    public static function index(){

        include './model/Config.class.php';
        include './model/Functions.class.php';

        $twig = Config::getTwig();

        $returnArr = \model\GuppyFunctions::prepareCategoryMenu();
        $returnArr = array('sections' => $returnArr);

        echo $twig->render('home.html', $returnArr);
        
        
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
