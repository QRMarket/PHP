<?php 
    include './controller/Home.class.php';

    @ini_set('display_errors', 1);

    echo \controller\Home::index();
?>

