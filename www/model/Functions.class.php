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

    public static function getCityList()
    {
        $params['do'] = 'getCityList';
        $array = Curl::get_data(
            Config::JSON_URL . 'AddressServlet',
            http_build_query($params),
            'Content-Type: application/x-www-form-urlencoded');

        return json_decode($array)->content;
    }

    public static function searchAddress($cityName){
        $params['do'] = 'searchAddress';
        $params['city'] = $cityName;
        $array = Curl::get_data(
            Config::JSON_URL . 'AddressServlet',
            http_build_query($params),
            'Content-Type: application/x-www-form-urlencoded');

        return json_decode($array)->content;
    }

    public static function getDistributerList($addressId){
        $params['do'] = 'getDistributerList';
        $params['addressId'] = $addressId;
        $array = Curl::get_data(
            Config::JSON_URL . 'DistributerServlet',
            http_build_query($params),
            'Content-Type: application/x-www-form-urlencoded');

        return $result = json_decode($array)->content;
    }

}

?>