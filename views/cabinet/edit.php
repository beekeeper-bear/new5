<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-sm-offset-12 padding-right">

                <?php if ($result) : ?>
                    <p>Данные отредактированы!</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>



                    <form action="#" class="forms" method="post">


                        <span id="p">Редактирование данных</span>



                        <label><span>Имя:</span>
                            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" />
                        </label>

                        <label><span>Телефон:</span>
                            <input type="tel" name="tell" autocomplete="on"></label>
                        <label><span>e-mail:</span>

                            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />

                        </label>

                        <label><span>Пароль:</span>
                            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
                        </label>

                        <input class="knopf" type="submit" name="submit" value="Редактировать">


                    </form>




                <?php endif; ?>
                <br />
                <br />
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>