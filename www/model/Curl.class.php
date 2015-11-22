<?php
namespace model;
use model\Config;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Curl{
    
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
    return $data;
   }
}
?>