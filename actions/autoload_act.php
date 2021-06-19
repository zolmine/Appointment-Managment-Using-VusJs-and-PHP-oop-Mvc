<?php

spl_autoload_register(function ($class_name){

    $file = '../Models/' . $class_name . '_class.php';

    if (!file_exists($file)){
        $file = '../../Models/' . $class_name . '_class.php';
    }

    include $file;

});