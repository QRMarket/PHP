<?php
    include './controller/Index.class.php';

    @ini_set('display_errors', 1);

    echo \controller\Index::index();

?>

