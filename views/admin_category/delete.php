<?php include ROOT . '/views/layouts/admin_header.php';?>
    <section>
        <div class="container">
            <div class="row">

                <br/>

                <div class="breadcrumbs">
                    <ol class="breadcrumb">
                        <li><a href="/eshop/admin">Админпанель</a></li>
                        <li><a href="/eshop/admin/category">Управление категориями</a></li>
                        <li class="active">Удалить категорию</li>
                    </ol>
                </div>


                <h4>Удалить категорию #<?php echo $id; ?></h4>


                <p>Вы действительно хотите удалить эту категорию?</p>

                <form method="post">
                    <input type="submit" name="submit" value="Удалить" />
                </form>

            </div>
        </div>
    </section>
<?php include ROOT . '/views/layouts/admin_footer.php';?>