<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:39
 */
class DB{

    public static function getConnection()
    {
        $paramsPath = ROOT . '/config/db_params.php';
        $params = include($paramsPath);


        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);
        $db->exec("set names utf8");

        return $db;
    }

}