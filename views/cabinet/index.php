<?php include ROOT.'/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">
            <h1>Кабинет пользователя</h1>

            <h3>Приветствую тебя,о великий  <?php echo $user['name'];?>!</h3>
            <ul>
                <li><a href="/eshop/cabinet/edit">Редактировать данные</a></li>
                <li><a href="/eshop/user/history">Список покупок</a></li>
            </ul>

        </div>
    </div>
</section>

<?php include ROOT.'/views/layouts/footer.php'; ?>
