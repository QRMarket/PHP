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


    class RegionModal{

            const SERVICE = 'AddressServlet';

            public static function searchAddress($cityName)
            {

                $params['do'] = 'searchAddress';
                $params['city'] = $cityName;
                $curlResult = Curl::get_data( Config::JSON_URL . self::SERVICE,
                                                http_build_query($params),
                                                ContentType::header_content_urlencoded);

                return json_encode($curlResult);
            }
    }