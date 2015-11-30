<?php
namespace controller\client;
use model\Config;
use model\mvc\Controller;
use model\Request;

//use model\ProductList;

//error_reporting(E_ALL);

class ProductDetail extends Controller{

    public function __construct(){
        parent::__construct($_GET);
    }

    public function index(){

        $twig = Config::getTwig();
        $productId = Request::_request('productId');
        $productDetail = \model\ProductList::getProduct($productId);
        //die( $productDetail) ;
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

        $result = array('productDetail' => json_decode($productDetail)->content);
        //$result = array('products' => $productList);

        return $twig->render('client/product_detail2.html', $result);

    }
}