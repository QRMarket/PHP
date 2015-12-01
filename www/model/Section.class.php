<?php

namespace model;
    /********************** PAGE DETAILS ********************/
    /* @Programmer  : baldemir
     * @Maintainer  : Guppy Org.
     * @Created     : 01/12/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

//include './util/constants/ContentType.class.php';
use util\constants\ContentType;
use model\Result;


class Section{

    const SERVICE = 'SectionServlet';




    public static function getSections()
    {
        $params['do'] = 'getSections';
        $curlResult = Curl::get_data( Config::JSON_URL . self::SERVICE,
            http_build_query($params),
            ContentType::header_content_urlencoded);

        return json_encode($curlResult);
    }
}