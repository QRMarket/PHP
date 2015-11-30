<?php

    namespace model;

    /**
     * @author      : Kemal Çağrı
     * @Maintainer  : Guppy Org.
     * @Created     : 25/11/2015
     * @Modified    :
     * @Description :
     */

    final class Controller extends PageController
    {

        /**
         * @return void
         * @Description Sitenin çalışabilmesi için gerekli bileşenlerin load edildiği method
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
            parent::init();
            // formMessage bilgisini siliyoruz
            Session::deleteSession(['formMessage']);
            // session commit
            Session::commit();
        }
}
