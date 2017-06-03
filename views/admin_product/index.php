<?php include ROOT . '/views/layouts/admin_header.php';?>
<section>
    <div class="container">
        <div class="row"><br>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/eshop/admin">Админпанель</a></li>
                    <li class="active">Управление товарами</li>
                </ol>
            </div>
            <a href="/eshop/admin/product/create" class="btn btn-default back"><i class="fa fa-plus"></i>Добавить товар</a>

            <h4>Список товаров</h4>
            <br>
            <table class="table-bordered table-striped table">
                <tr>
                    <th>Id товара</th>
                    <th>Артикул</th>
                    <th>Название товара</th>
                    <th>Цена</th>
                    <th>Редактировать</th>
                    <th>Удалить</th>
                </tr>
                <?php foreach ($productsList as $product): ?>
                    <tr>
                        <td><?php echo $product['id'];?></td>
                        <td><?php echo $product['code'];?></td>
                        <td><?php echo $product['name'];?></td>
                        <td><?php echo $product['price'];?></td>
                        <td><a href="/eshop/admin/product/update/<?php echo $product['id']; ?>" title="Редактировать"><i class="fa fa-pencil-square-o"></i></a></td>
                        <td><a href="/eshop/admin/product/delete/<?php echo $product['id']; ?>" title="Удалить"><i class="fa fa-times"></i></a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/admin_footer.php';?>
