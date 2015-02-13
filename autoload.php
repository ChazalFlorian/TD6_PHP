<?php
//set_include_path(__DIR__.'PATH_TO_LIB');
//spl_autoload_extensions(".php");
spl_autoload_register(function ($class) {
    include  $class.".php";
});
?>