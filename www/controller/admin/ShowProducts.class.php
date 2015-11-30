<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : baldemir
     * @Maintainer  : Guppy Org.
     * @Created     : 25/11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

    namespace controller\admin;
    use model\Config;
    use model\ProductList;
    use model\Functions;
    use model\mvc\Controller;
    error_reporting(E_ALL);

    /*include './model/Config.class.php';
    include './model/Dene.class.php';
    include './model/Functions.class.php';*/

    class ShowProducts extends Controller{

        public function __construct(){
            parent::__construct($_GET);
        }
        public function index(){

            // -- ** -- GET Twig & city list
            $twig = Config::getTwig();

            $loginResult = ProductList::getAllProducts();
            //die($_SERVER['REQUEST_URI']);
            // -- ** -- Check $cityList content is exist with isset method
            $result = array('products' => $loginResult->content);

            // -- ** -- Render result with twig
            if($loginResult->isSuccess()) {
                return $twig->render('admin/pages/tables/products.html', $result);
            }
            else{
                return $twig->render('admin/pages/tables/products.html', $result);
            }

        }
    }
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
