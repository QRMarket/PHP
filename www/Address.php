<?php
/**
 * Created by PhpStorm.
 * User: kemalsamikaraca
 * Date: 23/11/15
 * Time: 14:12
 */

    include './model/Curl.class.php';
    include './model/Config.class.php';

//    include './model/Address.class.php';
    include './model/Distributer.class.php';

//    $address = new \model\Address();
    $distributer = new \model\Distributer();

//    echo $address->getAddress('c_06_005');
//    echo $address->getCityList();
//    echo $address->searchAddress("Ank");

    echo $distributer->getDistributerList("c_06_001");

//    echo json_encode($address);