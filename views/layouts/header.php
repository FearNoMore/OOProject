<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Главная</title>
    <link href="/eshop/template/css/bootstrap.min.css" rel="stylesheet">
    <link href="/eshop/template/css/font-awesome.min.css" rel="stylesheet">
    <link href="/eshop/template/css/prettyPhoto.css" rel="stylesheet">
    <link href="/eshop/template/css/price-range.css" rel="stylesheet">
    <link href="/eshop/template/css/animate.css" rel="stylesheet">
    <link href="/eshop/template/css/main.css" rel="stylesheet">
    <link href="/eshop/template/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <!--<script src="template/js/html5shiv.js"></script>-->
    <!--<script src="template/js/respond.min.js"></script>-->
    <![endif]-->
    <link rel="shortcut icon" href="template/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="template/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="template/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="template/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="template/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="#"><i class="fa fa-phone"></i> </a></li>
                            <li><a href="#"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo pull-left">
                        <a href="/eshop/"><img height="150px" width="200px" src="/eshop/template/images/home/logo.png" alt="" / id="logo"></a>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="shop-menu pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="/eshop/cart/"><i class="fa fa-shopping-cart"></i> Корзина
                                    (<span id="cart-count"><?php echo Cart::countItems();?></span>)</a>
                            </li>
                            <?php if (User::isGuest()): ?>
                                <li><a href="/eshop/user/login"><i class="fa fa-lock"></i> Вход</a></li>
								<li><a href="/eshop/user/register"><i class="fa fa-sign-in"></i> Зарегистрироваться</a></li>
                            <?php else: ?>
                                <li><a href="/eshop/cabinet/"><i class="fa fa-user"></i> Аккаунт</a></li>
                                <li><a href="/eshop/user/logout"><i class="fa fa-unlock"></i> Выход</a></li>
                            <?php endif;?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="/eshop/">Главная</a></li>
                            <li class="dropdown"><a href="#">Магазин<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="/eshop/catalog/">Каталог товаров</a></li>
                                    <li><a href="/eshop/cart/">Корзина</a></li>
                                </ul>
                            </li>
                            <li><a href="/eshop/blog/">Блог</a></li>
                            <li><a href="/eshop/about/">О магазине</a></li>
                            <li><a href="/eshop/contacts/">Контакты</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-bottom-->

</header><!--/header-->
<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:48
 */