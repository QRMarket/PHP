<?php

namespace model;
    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Guppy Org.
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

    //include './util/constants/ContentType.class.php';
    use util\constants\ContentType;
    use model\Result;


    class Address{

        const SERVICE = 'AddressServlet';

        var $id;
        var $city;
        var $borough;
        var $locality;


        public static function getAddress($id)
        {
            $params['do'] = 'getAddressById';
            $params['id'] = $id;
            $curlResult = Curl::get_data( Config::JSON_URL . Address::SERVICE,
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

        public static function getCityList()
        {

            $params['do'] = 'getCityList';
            $curlResult = Curl::get_data(Config::JSON_URL . 'AddressServlet',
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

        public static function searchAddress($cityName)
        {
            $params['do'] = 'searchAddress';
            $params['city'] = $cityName;
            $curlResult = Curl::get_data(Config::JSON_URL . 'AddressServlet',
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

}