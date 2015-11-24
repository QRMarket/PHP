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


    class Distributer{

        const SERVICE = 'DistributerServlet';

        var $id;

        public static function getDistributerList($addressId)
        {
            Result::initializeStaticObjects();
            $params['do'] = 'getDistributerList';
            $params['addressId'] = $addressId;
            $curlResult = Curl::get_data( Config::JSON_URL . Distributer::SERVICE,
                                            http_build_query($params),
                                            ContentType::header_content_urlencoded);

            return json_encode($curlResult);
        }

}