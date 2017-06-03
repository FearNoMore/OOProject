<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 22.05.2017
 * Time: 21:35
 */
class AdminController extends AdminBase{

    public function actionIndex(){

        self::checkAdmin();

        require_once (ROOT . '/views/admin/index.php');
        return true;
    }
}