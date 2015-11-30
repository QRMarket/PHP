<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : baldemir
     * @Maintainer  : Guppy Org.
     * @Created     : 25/11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

    error_reporting(E_ALL & ~E_STRICT & ~E_NOTICE & ~E_WARNING);

    require_once 'model/ClassAutoloader.class.php';
    require_once 'model/GlobalConfig.class.php';
    require_once 'model/Config.class.php';

    $CLASS =& \model\ClassAutoloader::getInstance();
    //require_once $CLASS->getPharFile(). 'model/smarty/Smarty.class.php';

    ###############################################################
    spl_autoload_register ('\model\ClassAutoloader::load');
    ###############################################################

//    var_dump($_GET);
//    print_r ($_GET);
//    print_r($_SERVER);
//    die ($_SERVER['REQUEST_URI']);

    \model\Controller::setPage();
