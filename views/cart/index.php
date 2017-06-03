<?php include ROOT.'/views/layouts/header.php';?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Каталог</h2>
                    <div class="panel-group category-products">
                        <?php foreach ($categories as $categoryItem):?>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a href="/eshop/category/<?php echo $categoryItem['id'];?>">
                                            <?php echo $categoryItem['name'];?>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                </div>
            </div>

            <div class="col-sm-9 padding-right">
                <div class="features_items"><!--features_items-->
                    <h2 class="title text-center">Корзина</h2>

                    <?php if($productsInCart): ?>
                    <p>Вы выбрали следующие товары: </p>
                    <table class="table-bordered table-striped table">
                        <tr>
                            <th>Код товара</th>
                            <th>Название</th>
                            <th>Стоимость,руб</th>
                            <th>Количество,шт</th>
                            <th>Удалить</th>
                        </tr>
                        <?php foreach ($products as $product): ?>
                            <tr>
                                <td><?php echo  $product['code'];?></td>
                                <td>
                                    <a href="/eshop/product/<?php echo $product['id'];?>">
                                       <?php echo  $product['name'];?>
                                    </a>
                                </td>
                                <td><?php echo $product['price'];?></td>
                                <td><?php echo $productsInCart[$product['id']];?></td>
                                <td>
                                    <a href="/eshop/cart/delete/<?php echo $product['id'];?>">
                                        <i class="fa fa-times"></i>
                                    </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                            <tr>
                                <td colspan="4">Итого: </td>
                                <td><?php echo $totalPrice; ?></td>
                            </tr>
                    </table>
                        <a class="btn btn-default checkout" href="/eshop/cart/checkout"><i class="fa fa-shopping-cart"></i> Оформить заказ</a>
                        <br><br>
                    <?php else: ?>
                        <p>Ваша корзина пуста ;(</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>

<?php include ROOT.'/views/layouts/footer.php';?>
