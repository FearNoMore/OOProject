<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:41
 */
//            Autoload

//include_once ROOT . ('/models/Category.php');
//include_once ROOT . ('/models/Product.php');
//include_once ROOT . ('/components/Pagination.php');

class CatalogController{

    public function actionIndex(){

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);
//        echo ROOT;
        require_once (ROOT . '/views/catalog/index.php');


        return true;
    }
    public function actionCategory($categoryId, $page = 1){

//        echo 'Category: ' . $categoryId .'<br>';
//        echo 'Page: ' . $page;

        $categories = array();
        $categories = Category::getCategoriesList();

        $categoryProducts = array();
        $categoryProducts = Product::getProductsListByCategory($categoryId, $page);

        $total = Product::getTotalProductsInCategory($categoryId);

//                      Создаем объект пагинация

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT,'page-');

        require_once ROOT . '/views/catalog/category.php';
        return true;
    }
}