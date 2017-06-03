<?php include ROOT . '/views/layouts/admin_header.php';?>
<section>
    <div class="container">
        <div class="row"><br>
            <div class="breadcrumbs">
                <ol class="breadcrumb">
                    <li><a href="/eshop/admin">Админка</a></li>
                    <li><a href="/eshop/admin/product">Управление товарами</a></li>
                    <li class="active">Удалить товар</li>
                </ol>
            </div>

            <h4>Удалить товар #<?php echo $id; ?></h4>

            <p>Вы действительно хотите удалить этот товар?</p>

            <form method="post">
                <input type="submit" name="submit" value="Уничтожить">
            </form>
        </div>
    </div>
</section>
<?php include ROOT . '/views/layouts/admin_footer.php';?>
