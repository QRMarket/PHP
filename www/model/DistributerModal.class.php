<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Kemal Sami
     * @Maintainer  : Guppy Org.
     * @Created     : 01/12/2015
     * @Modified    : 01/12/2015
     * @Description :
     ********************************************************/

    namespace model;
    use util\constants\ContentType;
    use model\Result;


    class DistributerModal{

            const SERVICE = 'DistributerServlet';

            public static function getDistibuterList($addressId)
            {

                $params['do'] = 'getDistributerList';
                $params['addressId'] = $addressId;
                $curlResult = Curl::get_data( Config::JSON_URL . self::SERVICE,
                                                http_build_query($params),
                                                ContentType::header_content_urlencoded);

                return json_encode($curlResult);
            }
    }