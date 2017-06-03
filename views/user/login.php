<?php include ROOT.'/views/layouts/header.php'; ?>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 padding-right">
                        <?php if (isset($errors) && is_array($errors)):?>
                            <ul>
                                <?php foreach ($errors as $error):?>
                                    <li> - <?php echo $error; ?></li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                        <div class="signup-form">
                            <h2>Регистрация на сайте</h2>
                            <form action="#" method="post">
                                <input type="email" name="email" placeholder="Электронная почта" value="<?php echo $email;?>"/>
                                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password;?>"/>
                                <input type="submit" name="submit" class="btn btn-default" value="Авторизоваться">
                                <br><br><br><br>
                            </form>
                        </div>
                </div>
            </div>
        </div>
    </section>
<?php include ROOT.'/views/layouts/footer.php';?>