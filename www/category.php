<?php
/********************** PAGE DETAILS ********************/
/* @Programmer  : Guppy Org.
 * @Maintainer  : Guppy Org.
 * @Created     : 24.11.15
 * @Modified    :
 * @Description : This is the API result object
 ********************************************************/

require_once 'model/ClassAutoloader.class.php';
require_once 'model/GlobalConfig.class.php';
require_once 'model/Config.class.php';
require_once 'model/Functions.class.php';
require_once 'model/Category.class.php';

$CLASS =& \model\ClassAutoloader::getInstance();

###############################################################
spl_autoload_register ('\model\ClassAutoloader::load');
###############################################################


$category = \model\Category::getCategoryList();


header('Content-Type: application/json');
echo json_encode($category);

