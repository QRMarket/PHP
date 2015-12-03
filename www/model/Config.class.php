<?php

    namespace model;

    class Config implements GlobalConfig{

        /**
         * projenin dosya ana dizini
         *
         * @var string
         */
        //const ROOT_PATH = '/Users/kemalcagri/Desktop/Guppy/PHP/trunk/www';
        const ROOT_PATH = '/var/www/res/www';
        /**
         * json datalarının döndüğü url
         *
         * @var string
         */
//           const JSON_URL = 'http://46.101.168.27:8080/QR_Market_Web/';
        const JSON_URL = 'http://192.168.35.210:8080/QR_Market_Web/';

        public static function getTwig()
        {
            include './vendor/autoload.php';
            $loader = new \Twig_Loader_Filesystem('./view/');
            $twig = new \Twig_Environment($loader, array(
                'debug' => true,
                // ...
            ));
            $twig->addExtension(new \Twig_Extension_Debug());
            //$twig = new \Twig_Environment($loader, array());
            return $twig;
        }

    }

?>