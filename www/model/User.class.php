<?php

/**
 * Created by baldemir.
 * User: ulakbim
 * Date: 25/11/15
 * Time: 12:17
 */

namespace model;

use util\constants\ContentType;
use model\Result;

class User
{
    const SERVICE = 'Auth';
    public static function login($mail, $pass)
    {
        $params['do'] = 'login';
        $params['mail'] = $mail;
        $params['pass'] = $pass;
        $params["type"] = "admin";

        $curlResult = Curl::get_data(Config::JSON_URL . User::SERVICE,
            http_build_query($params),
            ContentType::header_content_urlencoded);
        return $curlResult;
    }
}