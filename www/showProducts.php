<?php
    /********************** PAGE DETAILS ********************/
    /* @Programmer  : baldemir
     * @Maintainer  : Guppy Org.
     * @Created     : 25/11/2015
     * @Modified    :
     * @Description : This is the API result object
     ********************************************************/

    require_once './model/ClassAutoloader.class.php';
    require_once './model/GlobalConfig.class.php';
    require_once './model/Config.class.php';
    require_once './model/Functions.class.php';
    $CLASS =& \model\ClassAutoloader::getInstance();
    //require_once $CLASS->getPharFile(). 'model/smarty/Smarty.class.php';

    ###############################################################
    spl_autoload_register ('\model\ClassAutoloader::load');
    ###############################################################

    //set_error_handler("myErrorHandler");
    //register_shutdown_function('shutdown');
    //\model\Controller::setPage();

    require_once './controller/admin/ShowProducts.class.php';

    @ini_set('display_errors', 1);



    echo \controller\admin\ShowProducts::index();

?>

