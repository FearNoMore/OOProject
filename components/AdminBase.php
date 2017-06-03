<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 22.05.2017
 * Time: 21:42
 */
abstract class AdminBase{

    public static function checkAdmin(){

        $userId = User::checkLogged();

        $user = User::getUserById($userId);

        if ($user['role'] == 'admin'){
            return true;
        }else{
            die('Ты не админ,ты лох - вали отседова');
        }
    }
}