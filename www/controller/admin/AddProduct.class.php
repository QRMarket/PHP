<?php

/********************** PAGE DETAILS ********************/
/* @Programmer  : baldemir
 * @Maintainer  : Guppy Org.
 * @Created     : 01/12/2015
 * @Modified    :
 * @Description : This is the API result object
 ********************************************************/

namespace controller\admin;
use model\Config;
use model\ProductDetail;
use model\ProductList;
use model\Functions;
use model\mvc\Controller;
use model\Request;
use model\Brand;
use model\Section;
error_reporting(E_ALL);

/*include './model/Config.class.php';
include './model/Dene.class.php';
include './model/Functions.class.php';*/

class AddProduct extends Controller{

    public function __construct(){
        parent::__construct($_GET);
    }
    public function index(){

        // -- ** -- GET Twig & city list
        $twig = Config::getTwig();

        #$loginResult = ProductList::getAllProducts();
        //die($_SERVER['REQUEST_URI']);

        $brands = Brand::getBrands();
        $sections = Section::getSections();
        // -- ** -- Render result with twig
        if(Request::_request_post('product_name')) {
            $array["do"]="addProduct";
            if(Request::_request_post("product_brand")){
                $array['brand_id']=Request::_request_post("product_brand");
            }
            $array['name']=Request::_request_post("product_name");
            if(Request::_request_post("product_code")){
                $array['barcode']=Request::_request_post("product_code");
            }
            if(Request::_request_post("product_desc")){
                $array['desc']=Request::_request_post("product_desc");
            }
            if(Request::_request_post("product_section")){
                $array['section_id']=Request::_request_post("product_section");
            }
            if($_FILES["product_image"]){

            }else{
                echo "lkşkşki";
            }
            $array["admin_id"]="123459";
            $res = ProductDetail::addProduct($array);
            if($res->isSuccess()){
                $result = array('addProductSuccess' => true, 'brands' => json_decode($brands)->content,'sections' => json_decode($sections)->content);
            }else{
                $result = array('addProductFailure' => true, 'brands' => json_decode($brands)->content,'sections' => json_decode($sections)->content);
            }

            return $twig->render('admin/pages/forms/general2.html', $result);
        }
        else{

            $result = array('brands' => json_decode($brands)->content,'sections' => json_decode($sections)->content);

            return $twig->render('admin/pages/forms/general2.html', $result);
        }

    }
}
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
