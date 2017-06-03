<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 22.05.2017
 * Time: 21:58
 */
class AdminProductController extends AdminBase{

    public function actionIndex(){

        self::checkAdmin();

        $productsList = Product::getProductsList();

        require_once (ROOT . '/views/admin_product/index.php');
        return true;
    }
    public function actionCreate(){

        self::checkAdmin();

        $categoriesList = Category::getCategoriesListForAdmin();

        if (isset($_POST['submit'])){

            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['code'] = $_POST['code'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            $errors = false;

            if (!isset($options['name']) || empty($options['name'])){
                $errors[] = 'Пожалуйста заполните все поля';
            }
            if ($errors == false){

                $id = Product::createProduct($options);

                if ($id){

                    if (is_uploaded_file($_FILES["image"]["tmp_name"])) {
                        // Если загружалось, переместим его в нужную папке, дадим новое имя
                        move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/eshop/upload/images/products/{$id}.jpg");
                    }
                };
                header("Location:/eshop/admin/product");
            }
        }
        require_once (ROOT . '/views/admin_product/create.php');
        return true;
    }
    public function actionUpdate($id){
        self::checkAdmin();
//        Получаем список категорий

        $categoriesList = Category::getCategoriesListForAdmin();

//        Получаем данные о конкретном товаре

        $product = Product::getProductById($id);

        if (isset($_POST['submit'])){


            $options['name'] = $_POST['name'];
            $options['price'] = $_POST['price'];
            $options['code'] = $_POST['code'];
            $options['category_id'] = $_POST['category_id'];
            $options['brand'] = $_POST['brand'];
            $options['availability'] = $_POST['availability'];
            $options['description'] = $_POST['description'];
            $options['is_new'] = $_POST['is_new'];
            $options['is_recommended'] = $_POST['is_recommended'];
            $options['status'] = $_POST['status'];

            if (Product::updateProductById($id, $options)){

                if (is_uploaded_file($_FILES["image"]["tmp_name"])){
//                        Если загружалось, переместим в нужную папку, дадим новое имя
                    move_uploaded_file($_FILES["image"]["tmp_name"], $_SERVER['DOCUMENT_ROOT'] . "/eshop/upload/images/products/{$id}.jpg");
                }
            }
            header("Location:/eshop/admin/product");
        }
        require_once (ROOT . '/views/admin_product/update.php');
        return true;
    }
    public function actionDelete($id){

        self::checkAdmin();

        if (isset($_POST['submit'])){
//            Если форма отправлена,удаляем товар
            Product::deleteProductById($id);

            header("Location:/eshop/admin/product");
        }
        require_once (ROOT. '/views/admin_product/delete.php');
        return true;
    }

}