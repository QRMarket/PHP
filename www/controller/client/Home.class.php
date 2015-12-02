<?php
/********************** PAGE DETAILS ********************/
/* @Programmer : Guppy Org.
 * @Developer :Orxan Alirzayev
 * @Maintainer  : Guppy Org.
 * @Created     : 01/12/2015
 * @Modified    : 02/12/2015
 * @Description : Market sayfasını render eden class'tır
 ********************************************************/
namespace controller\client;
use model\Config;
use model\mvc\Controller;
use model\Category;
error_reporting(E_ALL);


class Home extends Controller{

    public function __construct(){
        parent::__construct($_GET);
    }
    

    public function index(){

        $twig = Config::getTwig();

        $addressList = Category::getCategoryList();

        return $twig->render('home.html', array('addressList' => json_decode($addressList)->content));

    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
