<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:42
 */
                //   AUTOLOADED
//include_once ROOT . ('/models/Category.php');
//include_once ROOT . ('/models/Product.php');

class SiteController{

    public function actionIndex(){

        $categories = array();
        $categories = Category::getCategoriesList();

        $latestProducts = array();
        $latestProducts = Product::getLatestProducts(6);
//        echo ROOT;

        $sliderProducts = Product::getRecommendedProducts();

        require_once (ROOT . '/views/site/index.php');


        return true;
    }
}