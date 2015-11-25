<?php

namespace controller\admin;
use model\Config;
use model\User;
use model\Functions;
error_reporting(E_ALL);

/*include './model/Config.class.php';
include './model/Dene.class.php';
include './model/Functions.class.php';*/

class Login{

    public static function index(){

        // -- ** -- GET Twig & city list
        $twig = Config::getTwig();
        if(isset($_POST["mail"]) && isset($_POST["pass"])) {
            $loginResult = User::login($_POST["mail"] , $_POST["pass"] );
            //die($_SERVER['REQUEST_URI']);
            // -- ** -- Check $cityList content is exist with isset method
            $result = array('user' => $loginResult->content);

            // -- ** -- Render result with twig
            if($loginResult->isSuccess()) {
                header("Location: index.php");
            }
            else{
                return $twig->render('admin/pages/examples/login.html', $result);
            }
        }else{

            return $twig->render('admin/pages/examples/login.html', array());
        }
    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
