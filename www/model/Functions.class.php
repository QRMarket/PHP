<?php
namespace model;
include './model/Curl.class.php';

class GuppyFunctions
{

    public static function prepareCategoryMenu()
    {

        $params['do'] = 'getSections';
        $array = Curl::get_data(
            Config::JSON_URL . 'SectionServlet',
            http_build_query($params),
            'Content-Type: application/x-www-form-urlencoded');

        return json_decode($array)->content;
    }


}

?>