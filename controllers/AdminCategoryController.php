<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 23.05.2017
 * Time: 20:15
 */
class AdminCategoryController extends AdminBase {

    public function actionIndex(){

        self::checkAdmin();

        $categoriesList = Category::getCategoriesListForAdmin();

        require_once (ROOT . '/views/admin_category/index.php');
        return true;
    }

    public function actionCreate(){
        self::checkAdmin();

        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];
//            Флаг ошибок в форме

            $errors = false;

            if (!isset($name) || empty($name)){
                $errors[] = 'Пожалуйста, заполните все поля';
            }
            if ($errors == false){

                Category::createCategory($name, $sortOrder, $status);

                header("Location:/eshop/admin/category");

            }
        }
        require_once ROOT . '/views/admin_category/create.php';
        return true;
    }
    public function actionUpdate($id){
        self::checkAdmin();

//        Получаем данные о конкретной категории
        $category = Category::getCategoryById($id);

        if (isset($_POST['submit'])){
            $name = $_POST['name'];
            $sortOrder = $_POST['sort_order'];
            $status = $_POST['status'];

            Category::updateCategoryById($id, $name, $sortOrder,$status);

            header("Location:/eshop/admin/category");
        }
        require_once ROOT . '/views/admin_category/update.php';
        return true;
    }
    public function actionDelete($id){

        self::checkAdmin();

        if (isset($_POST['submit'])){
            Category::deleteCategoryById($id);
            header("Location:/eshop/admin/category");
        }
        require_once(ROOT . '/views/admin_category/delete.php');
        return true;
    }

}