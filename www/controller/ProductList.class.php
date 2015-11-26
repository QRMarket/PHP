<?php
namespace controller;
use model\Config;
use model\mvc\Controller;
use model\Address;
//use model\ProductList;

//error_reporting(E_ALL);

class ProductList extends Controller{

    public function __construct(){
        parent::__construct($_GET);
    }

    public function index(){

            $twig = Config::getTwig();
            $productList = null;

            $productList = \model\ProductList::getProductList();
            //die( $productList) ;
            /*if (isset($_GET['marketId'])){
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
            }*/

            $result = array('products' => json_decode($productList)->content);
            //$result = array('products' => $productList);

        return $twig->render('client/list2.html', $result);
        
    }


    public function asama_1(){
        //die(substr(dirname(__FILE__),0, strlen(dirname(__FILE__))-11));
        //die(mbstr(dirname(__FILE__)));
        // -- ** -- GET Twig & city list
        $twig = Config::getTwig();
        $cityList = Address::getCityList();
        //die($cityList);
        //die($_SERVER['REQUEST_URI']);
        // -- ** -- Check $cityList content is exist with isset method
        $result = array('cityList' => json_decode($cityList)->content);
        print_r($cityList);
        // -- ** -- Render result with twig
        return $twig->render('index.html', $result);
    }
}