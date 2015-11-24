<?php
/**
 * Created by PhpStorm.
 * User: alirzayev
 * Date: 24.11.15
 * Time: 03:14
 */

include './model/Curl.class.php';
include './model/Config.class.php';
include './model/Distributer.class.php';

$distributer = new \model\Distributer();
$distributer = $distributer->getDistributerList($_POST['addressId']);

header('Content-Type: application/json');
echo json_encode($distributer);
