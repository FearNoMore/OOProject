<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 11.04.2017
 * Time: 15:41
 */
//   AUTOLOADED

//include_once ROOT . '/models/Category.php';
//include_once ROOT . '/models/Product.php';

class ProductController
{

    public function actionView($productId)
    {

        $categories = array();
        $categories = Category::getCategoriesList();

        $product = Product::getProductById($productId);

        require_once(ROOT . '/views/product/view.php');

        return true;
    }

}