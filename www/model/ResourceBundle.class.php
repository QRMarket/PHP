<?php
namespace model;

final class ResourceBundle{
    /********************** PAGE DETAILS ********************/
    /* @Programmer  : Guppy Org.
     * @Maintainer  : Guppy Org.
     * @Created     : 11/2015
     * @Modified    :
     * @Description : These are the RESULT Constants
     ********************************************************/
    const ResultGuppy001Code = 'GUPPY.001';
    const ResultGuppy010Code = 'result.guppy.010';
    const ResultGuppy101Code = 'result.guppy.101';
    const ResultGuppy511Code = 'result.guppy.511';
    const ResultGuppy521Code = 'result.guppy.521';
    const ResultGuppy531Code = 'result.guppy.531';

    const ResultGuppy001Status = 'SUCCESS';
    const ResultGuppy010Status = 'SUCCESS_EMPTY';
    const ResultGuppy101Status = 'FAILURE_AUTH';
    const ResultGuppy511Status = 'FAILURE_PARAM_MISMATCH';
    const ResultGuppy521Status = 'FAILURE_EXCEPTION';
    const ResultGuppy531Status = 'FAILURE_PERMISSION';

    const GUPPYPAGELINKS = array(array('url'=>'login2', 'link'=>'controller\\admin\\Login'),
        array('url'=>'showproducts', 'link'=>'controller\\admin\\ShowProducts'),
        array('url'=>'', 'link'=>'controller\\Index'),
        array('url'=>'productlist', 'link'=>'controller\\ProductList'),
        array('url'=>'home2', 'link'=>'controller\\client\\Home'),
        array('url'=>'productlist2', 'link'=>'controller\\client\\ProductList'),
        array('url'=>'productdetail', 'link'=>'controller\\client\\ProductDetail'));
   /* define( 'ResultGuppy001Code'    , 'GUPPY.001');
    define( 'ResultGuppy010Code'    , 'result.guppy.010');
    define( 'ResultGuppy101Code'    , 'result.guppy.101');
    define( 'ResultGuppy511Code'    , 'result.guppy.511');
    define( 'ResultGuppy521Code'    , 'result.guppy.521');
    define( 'ResultGuppy531Code'    , 'result.guppy.531');

    define( 'ResultGuppy001Status'  , 'SUCCESS');
    define( 'ResultGuppy010Status'  , 'SUCCESS_EMPTY');
    define( 'ResultGuppy101Status'  , 'FAILURE_AUTH');
    define( 'ResultGuppy511Status'  , 'FAILURE_PARAM_MISMATCH');
    define( 'ResultGuppy521Status'  , 'FAILURE_EXCEPTION');
    define( 'ResultGuppy531Status'  , 'FAILURE_PERMISSION');*/
}
?>