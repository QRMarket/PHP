<?php

/********************** PAGE DETAILS ********************/
/* @Programmer  : baldemir
 * @Maintainer  : Guppy Org.
 * @Created     : 02/12/2015
 * @Modified    :
 * @Description : This is the API result object
 ********************************************************/

namespace controller\admin;
use model\Config;
use model\Order;
use model\Functions;
use model\mvc\Controller;
error_reporting(E_ALL);

/*include './model/Config.class.php';
include './model/Dene.class.php';
include './model/Functions.class.php';*/

class Index extends Controller{

    public function __construct(){
        parent::__construct($_GET);
    }
    public function index(){

        // -- ** -- GET Twig & city list
        $twig = Config::getTwig();


        return $twig->render('admin/index.html', array());

    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
