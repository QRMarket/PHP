<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Kemal Sami
     * @Maintainer  : Guppy Org.
     * @Created     : 01/12/2015
     * @Modified    : 01/12/2015
     * @Description : Market Listesinin getirildiği sayfadır
     ********************************************************/

    namespace controller\client;
    use model\Config;
    use model\DistributerModal;
    use model\mvc\Controller;
    use model\Request;

    error_reporting(E_ALL);

    class Distributer extends Controller{

            public function __construct(){
                parent::__construct($_GET);
            }

            public function index(){

                    $distributerList = DistributerModal::getDistibuterList(Request::_get('dist'));

                return Config::getTwig()->render('client/dummy_place_select.html', array('distributerList' => json_decode($distributerList)->content));

            }
    }
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
