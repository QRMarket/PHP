<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Guppy Org.
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

namespace model;
use util\constants\ContentType;
use model\Result;


class ProductList{

        const SERVICE = 'ProductServlet';

        var $id;
        var $city;
        var $borough;
        var $locality;

        public static function getProduct($id)
        {
             
            $params['do'] = 'getProduct';
            $params['productId'] = $id;
            $curlResult = Curl::get_data( Config::JSON_URL . ProductList::SERVICE,
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return $curlResult;
        }

        public static function getProductList()
        {
             
            $params = array('do'=>'getProductList', 'limit'=>100);
            $curlResult = Curl::get_data(Config::JSON_URL .ProductList::SERVICE ,
                http_build_query($params),
                ContentType::header_content_urlencoded);
            return json_encode($curlResult);
        }

        public static function getProductListByDistributer($distributerId)
        {
            Result::initializeStaticObjects();
            $params = array('do'=>'getProductList', 'distributerId'=>$distributerId);
            $curlResult = Curl::get_data(Config::JSON_URL .ProductList::SERVICE ,
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

        public static function getAllProducts()
        {

            $params = array('do'=>'getProductList', 'limit'=>'100');

            $curlResult = Curl::get_data(Config::JSON_URL .ProductList::SERVICE ,
                http_build_query($params),
                ContentType::header_content_urlencoded);

            return $curlResult;
        }

        public static function getProductListBySection($sectionId, $distributerId)
        {
             
            $params = array('do'=>'getProductList', 'sectionId'=>$sectionId, 'distributerId'=>$distributerId);
            $curlResult = Curl::get_data(Config::JSON_URL . ProductList::SERVICE ,
                http_build_query($params),
                ContentType::header_content_urlencoded);

            return $curlResult;
        }

}