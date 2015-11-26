<?php

/********************** PAGE DETAILS ********************/
/* @Programmer  : baldemir
 * @Maintainer  : Guppy Org.
 * @Created     : 25/11/2015
 * @Modified    :
 * @Description : This is the API result object
 ********************************************************/

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