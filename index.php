<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:52
 */

session_start();
define('ROOT', dirname(__FILE__));
//echo ROOT . '<br>';

require_once (ROOT . '/components/Autoload.php');


//require_once (ROOT . '/components/Router.php');
//require_once(ROOT.'/components/DB.php');
//echo 'main index';

// 4. Вызов Router
$router = new Router();
$router->run();
