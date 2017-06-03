<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 28.04.2017
 * Time: 16:18
 */
function __autoload($class_name){

    #    Список всех директорий ,где содержатся классы

    $array_paths = array(

        '/models/',
        '/components/'
    );

    foreach ($array_paths as $path){

        $path = ROOT . $path . $class_name . '.php';

        if (is_file($path)){
            include_once $path;
        }
    }
}