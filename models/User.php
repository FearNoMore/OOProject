<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 28.04.2017
 * Time: 17:20
 */
class User{

    public static function register($name, $email, $password){

        $db = DB::getConnection();

        $sql = 'INSERT INTO user (name, email, password) '
            .   'VALUES (:name, :email, :password)';

        $result = $db->prepare($sql);

        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        return $result->execute();
    }
    public static function checkName($name){
        if (strlen($name) >= 2){
            return true;
        }else{
            return false;
        }
    }
    public static function checkEmail($email){
        if (filter_var($email, FILTER_VALIDATE_EMAIL)){
            return true;
        }else{
            return false;
        }
    }
    public static function checkPhone($phone){
        if (strlen($phone) >= 10) {
            return true;
        }
        return false;
    }
    public static function checkPassword($password){
        if (strlen($password) >= 6){
            return true;
        }else{
            return false;
        }
    }
    public static function checkEmailExists($email){

        $db = DB::getConnection();

        $sql = 'SELECT COUNT(*) FROM user WHERE email = :email';
        $result = $db->prepare($sql);

        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->execute();

        if ($result->fetchColumn()){
            return true;
        }else{
            return false;
        }
    }
    public static function checkUserData($email, $password){

        $db = DB::getConnection();

        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';
        $result = $db->prepare($sql);

        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);

        $result->execute();

        $user = $result->fetch();
        if ($user){
            return $user['id'];
        }else{
            return false;
        }
    }

    public static function auth($userId){
//        session_start();
        $_SESSION['user'] = $userId;
    }

    public static function checkLogged(){

//        session_start();

        if ($_SESSION['user']){
            return $_SESSION['user'];
        }else{
            header("Location:/eshop/user/login");
        }
    }

    public static function isGuest(){

//        session_start();
        if (isset($_SESSION['user'])){
            return false;
        }else{
            return true;
        }
    }
    public static function getUserById($id){

        if ($id){
            $db = DB::getConnection();

            $sql = 'SELECT * FROM user WHERE id = :id';

            $result = $db->prepare($sql);

            $result->bindParam(':id', $id, PDO::PARAM_INT);

//            Указываем,что хотим получить

            $result->setFetchMode(PDO::FETCH_ASSOC);
            $result->execute();

            return $result->fetch();
        }
    }

    public static function edit($id, $name, $password){

        $db = DB::getConnection();

        $sql = 'UPDATE user SET name = :name, password = :password
        WHERE id = :id';

        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->bindParam(':name', $name, PDO::PARAM_STR );
        $result->bindParam(':password', $password, PDO::PARAM_STR );

        return $result->execute();

    }
}