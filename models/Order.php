<?php
/**
 * Created by PhpStorm.
 * User: Lonedrow
 * Date: 19.05.2017
 * Time: 21:47
 */
class Order{
    public static function save($userName, $userPhone, $userComment, $userId, $products)
    {
        $products = json_encode($products);

        $db = DB::getConnection();

        $sql = 'INSERT INTO product_order (user_name, user_phone, user_comment, user_id, products) '
            . 'VALUES (:user_name, :user_phone, :user_comment, :user_id, :products)';

        $result = $db->prepare($sql);
        $result->bindParam(':user_name', $userName, PDO::PARAM_STR);
        $result->bindParam(':user_phone', $userPhone, PDO::PARAM_STR);
        $result->bindParam(':user_comment', $userComment, PDO::PARAM_STR);
        $result->bindParam(':user_id', $userId, PDO::PARAM_STR);
        $result->bindParam(':products', $products, PDO::PARAM_STR);

        return $result->execute();
    }
}