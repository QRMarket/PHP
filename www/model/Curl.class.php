<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Guppy Org.
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : These are the RESULT Constants
     ********************************************************/

    namespace model;
    use Result;
    include 'Result.php';

    class Curl{

        /**
         * @param $url
         * @param $params
         * @param $ct
         * @return mixed
         *
         * This function returns Result Object
         */
        public static function get_data($url, $params, $ct) {
                $ch = curl_init();
                $connectionTimeout = 5;
                $timeout = 15;

                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $connectionTimeout);
                curl_setopt($ch, CURLOPT_POST, 1);
                curl_setopt($ch, CURLOPT_POSTFIELDS,$params);

                curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
                curl_setopt($ch, CURLOPT_HEADER, false);
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
                curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
                curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                                                        $ct, "ACCEPT: */*"
                                                        ));
                $data = curl_exec($ch);
                curl_close($ch);

                $resultObj = Result::constructor_from_string($data);
            return $resultObj;
        }


    }
?>