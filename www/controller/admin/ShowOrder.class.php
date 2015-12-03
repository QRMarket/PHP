<?php

/********************** PAGE DETAILS ********************/
/* @Programmer  : baldemir
 * @Maintainer  : Guppy Org.
 * @Created     : 03/12/2015
 * @Modified    :
 * @Description : This is the API result object
 ********************************************************/

namespace controller\admin;
use model\Config;
use model\Order;
use model\Functions;
use model\mvc\Controller;
use model\Request;

error_reporting(E_ALL);

/*include './model/Config.class.php';
include './model/Dene.class.php';
include './model/Functions.class.php';*/

class ShowOrder extends Controller{

    public function __construct(){
        parent::__construct($_GET);
    }
    public function index(){

        // -- ** -- GET Twig & city list
        $twig = Config::getTwig();
        $loginResult = Order::getOrder(Request::_get("id"));
        //die($_SERVER['REQUEST_URI']);
        // -- ** -- Check $cityList content is exist with isset method
        $result = array('order' => $loginResult->content);
        // -- ** -- Render result with twig
        if($loginResult->isSuccess()) {
            return $twig->render('admin/pages/examples/invoice.html', $result);
        }
        else{
            return $twig->render('admin/pages/examples/invoice.html', $result);
        }

    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
