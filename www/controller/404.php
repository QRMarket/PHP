<?php
use model\validate\Validate;
use model\Config;


$twig = Config::getTwig();
echo $twig->render('client/404error.html', array());