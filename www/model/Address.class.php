<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Guppy Org.
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

    namespace model;
    include './util/constants/ContentType.php';
    use util\constants\ContentType;
    use Result;


    class Address{

        const SERVICE = 'AddressServlet';

        var $id;
        var $city;
        var $borough;
        var $locality;


        public static function getAddress($id){

                Result::initializeStaticObjects();

                $params['do'] = 'getAddressById';
                $params['id'] = $id;
                $curlResult = Curl::get_data( Config::JSON_URL . Address::SERVICE,
                                                http_build_query($params),
                                                ContentType::header_content_urlencoded);

                // -- check operation is success
                // -- 1 -- if success then create Address object and return that object
                // -- 2 -- else return null
                echo json_encode($curlResult);

    //        return json_decode($curlResult)->content;
        }

}