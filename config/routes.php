<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:39
 */
return array(
    'eshop/product/([0-9]+)'                => 'product/view/$1',
    'eshop/catalog'                         => 'catalog/index',

    'eshop/category/([0-9]+)/page-([0-9]+)' => 'catalog/category/$1/$2',
    'eshop/category/([0-9]+)'               => 'catalog/category/$1',

    'eshop/cart/checkout'                   => 'cart/checkout',
    'eshop/cart/delete/([0-9]+)'            => 'cart/delete/$1',
    'eshop/cart/add/([0-9]+)'               => 'cart/add/$1',
    'eshop/cart/addAjax/([0-9]+)'           => 'cart/addAjax/$1',
    'eshop/cart'                            => 'cart/index',

    'eshop/user/register'                   => 'user/register',
    'eshop/user/login'                      => 'user/login',
    'eshop/user/logout'                     => 'user/logout',

    'eshop/cabinet/edit'                    => 'cabinet/edit',
    'eshop/cabinet'                         => 'cabinet/index',

//                               Управление товарами

    'eshop/admin/product/create'           => 'adminProduct/create',
    'eshop/admin/product/update/([0-9]+)'  => 'adminProduct/update/$1',
    'eshop/admin/product/delete/([0-9]+)'  => 'adminProduct/delete/$1',
    'eshop/admin/product'                  => 'adminProduct/index',

//                              Управление категориями

    'eshop/admin/category/create'           => 'adminCategory/create',
    'eshop/admin/category/update/([0-9]+)'  => 'adminCategory/update/$1',
    'eshop/admin/category/delete/([0-9]+)'  => 'adminCategory/delete/$1',
    'eshop/admin/category'                  => 'adminCategory/index',

//                                  Админка

    'eshop/admin'                           => 'admin/index',

    'eshop'                                 => 'site/index',
);