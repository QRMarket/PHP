<?php
/**
 * User: kemalsamikaraca
 * Date: 23/11/15
 * Time: 14:12
 */
/*use model\Curl;
use model\Config;
use model\Address;*/
require_once 'model/ClassAutoloader.class.php';
require_once 'model/GlobalConfig.class.php';
require_once 'model/Config.class.php';
require_once 'model/Functions.class.php';
$CLASS =& \model\ClassAutoloader::getInstance();
//require_once $CLASS->getPharFile(). 'model/smarty/Smarty.class.php';

###############################################################
spl_autoload_register ('\model\ClassAutoloader::load');
###############################################################

require_once 'model/Address.class.php';
    //$address = new \model\Address();
    $address = \model\Address::searchAddress($_POST['city']);
    //die($address);
    //$address = $address->searchAddress($_POST['city']);

    header('Content-Type: application/json');
    echo json_encode($address);


//    $address = new \model\Address();
//    $distributer = new \model\Distributer();

//    echo $address->getAddress('c_06_005');
//    echo $address->getCityList();
//    echo $address->searchAddress("Ank");

//    echo $distributer->getDistributerList("c_06_001");

//    echo json_encode($address);