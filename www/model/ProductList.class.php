<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Guppy Org.
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

    namespace model;
    include './util/constants/ContentType.class.php';
    use util\constants\ContentType;
    use Result;


    class ProductList{

        const SERVICE = 'ProductServlet';

        var $id;
        var $city;
        var $borough;
        var $locality;


        public static function getProduct($id)
        {
             
            $params['do'] = 'getAddressById';
            $params['id'] = $id;
            $curlResult = Curl::get_data( Config::JSON_URL . Address::SERVICE,
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

        public static function getProductList($distributerId)
        {
             
            $params = array('do'=>'getProductList', 'distributerId'=>$distributerId);
            $curlResult = Curl::get_data(Config::JSON_URL .ProductList::SERVICE ,
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

        public static function getAllProducts()
        {

            $params = array('do'=>'getProductList');
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