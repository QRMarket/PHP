<?php
namespace model;
use model\Request;
use model\PageController;
/**
 * Controller class
 *
 * @author Kemal Çağrı
 */
final class Controller extends PageController
{
    /**
     * sitenin çalışabilmesi için gerekli bileşenlerin load edildiği method
     *
     * @return void
     */
    final public static function setPage()
    {
        // session bilgilerini set eder
        Session::set();
        
        $LANGUAGE = new \model\language\Language($_GET);
        $LANGUAGE->init();
        
        // login bilgilerini set eder
        //$AUTH = Auth::getInstance();
        //$AUTH->init();
        // formlar için token oluşturur
        Token::createTokenSession();
        // ################################################################
        //die(substr($_SERVER['REQUEST_URI'],11));
       // parent::init($_SERVER['REQUEST_URI']);
        $substr = substr($_SERVER['REQUEST_URI'],12);
        //echo $substr;
        /*if($substr==''){
            echo $_SERVER['REQUEST_URI'];
        }*/
        parent::init($substr);
        // formMessage bilgisini siliyoruz
        Session::deleteSession(['formMessage']);
        // session commit
        Session::commit();
    }
}
