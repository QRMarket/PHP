<?php
/**
 * Created by PhpStorm.
 * User: kemalsamikaraca
 * Date: 23/11/15
 * Time: 14:12
 */

    include './model/Curl.class.php';
    include './model/Config.class.php';
    include './model/Address.class.php';

    $address = new \model\Address();
    $address->getAddress('c_06_005');
//    echo json_encode($address);