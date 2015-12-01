<?php

    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Kemal Sami
     * @Maintainer  : Guppy Org.
     * @Created     : 01/12/2015
     * @Modified    : 01/12/2015
     * @Description : İlçe/Semt listesinin render eden class'tır
     ********************************************************/

    namespace controller\client;
    use model\Config;
    use model\mvc\Controller;
    use model\RegionModal;
    error_reporting(E_ALL);

    class Region extends Controller{

            public function __construct(){
                parent::__construct($_GET);
            }

            public function index(){

                    $twig = Config::getTwig();

                    $addressList = RegionModal::searchAddress('Ankara');

                return $twig->render('client/region_select.html', array('addressList' => json_decode($addressList)->content));

            }
    }
?>
<!-- - - - - - - - - - - - - - Page Wrapper - - - - - - - - - - - - - - - - -->
