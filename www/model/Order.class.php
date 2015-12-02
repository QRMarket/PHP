<?php

namespace model;
    /********************** PAGE DETAILS ********************/
    /* @Programmer  : baldemir
     * @Maintainer  : Guppy Org.
     * @Created     : 02/12/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

//include './util/constants/ContentType.class.php';
use util\constants\ContentType;
use model\Result;


class Order{

    const SERVICE = 'OrderServlet';




    public static function getOrders()
    {
        $params['do'] = 'getOrderList';
        $params['userId'] = '123461';
        $curlResult = Curl::get_data( Config::JSON_URL . self::SERVICE,
            http_build_query($params),
            ContentType::header_content_urlencoded);

        return $curlResult;
    }

}