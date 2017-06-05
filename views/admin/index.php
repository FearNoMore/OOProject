<?php include ROOT . '/views/layouts/admin_header.php';?>
<section>
    <div class="container">
        <div class="row"><br>
            <h4>Добрый день, шеф!</h4>
            <br>
            <p>Вам доступны следующие действия:</p>
            <br>
            <ul id="admin-actions">
                <li>
                    <a href="/eshop/admin/product">
                        <button type="button" class="btn btn-info btn-lg btn-block">Управление товарами</button>
                    </a>
                </li>
                <li>
                    <a href="/eshop/admin/category">
                        <button type="button" class="btn btn-success btn-lg btn-block">Управление категориями</button>
                    </a>
                </li>
                <li>
                    <a href="/eshop/admin/order">
                        <button type="button" class="btn btn-default btn-lg btn-block">Управление заказами</button>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</section>


<?php include ROOT . '/views/layouts/admin_footer.php';?>
