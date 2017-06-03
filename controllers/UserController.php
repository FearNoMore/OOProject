<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 28.04.2017
 * Time: 17:06
 */

class UserController{

    public function actionRegister(){
        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            /*
             * if (isset($name)){
                echo '<br> name: ' . $name;
            }
            if (isset($email)){
                echo '<br> email: ' . $email;
            }
            if (isset($password)){
                echo '<br> password: ' . $password;
            }
            */

            $errors = false;

            if (!User::checkName($name)){
                $errors[] =  'Имя не должно быть короче 2 символов';
            }

            if (!User::checkEmail($email)){
                $errors[] =  'Некорректный email';
            }

            if (!User::checkPassword($password)){
                $errors[] = 'Пароль должен быть не короче 6 символов';
            }

            if (User::checkEmailExists($email)){
                $errors[] = 'Такой email уже используется';
            }

            if ($errors == false){
                $result = User::register($name, $email, $password);
            }
        }

        require_once ROOT . '/views/user/register.php';

        return true;
    }

    public function actionLogin(){

        $email = '';
        $password = '';

        if (isset($_POST['submit'])){

            $email = $_POST['email'];
            $password = $_POST['password'];

            $errors = false;

            if (!User::checkEmail($email)){
                $errors[] = 'Неправильный email';
            }
            if (!User::checkPassword($password)){
                $errors[] = 'Неверный пароль';
            }

//            Проверка существования пользователя в БД

            $userId = User::checkUserData($email, $password);

            if ($userId == false){
                $errors[] = ' Такого пользователя не существует';
            }else{

                User::auth($userId);   // Если данные верные - запоминаем пользователя

//                Перенаправление в Личный Кабинет

                header("Location:/eshop/cabinet/");
            }
        }
        require_once ROOT . '/views/user/login.php';

        return true;
    }

    public function actionLogout(){

    //    session_start();
        unset($_SESSION["user"]);
        header("Location: /eshop/");
    }
}