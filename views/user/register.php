<?php include ROOT . '/views/layouts/header.php'; ?>



<?php if ($result) : ?>

    <center> <span class="message">Вы зарегистрированы!</span> </center>
<?php else : ?>
    <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>


                <li>
                    <center> <span class="message">- <?php echo $error; ?></span> </center>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>



    <form action="#" class="forms" method="post">


        <span id="p">Регистрация на сайте</span>



        <label><span>Имя:</span>
            <input type="text" name="name" placeholder="Имя" value="<?php echo $name; ?>" />
        </label>

        <label><span>Телефон:</span>
            <input type="tel" name="tell" autocomplete="on"></label>
        <label><span>Ведите Ваш: e-mail:</span>
            <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />

        </label>

        <label><span>Пароль:</span>
            <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
        </label>

        <input class="knopf" type="submit" name="submit" value="Зарегистрировать">


    </form>






<?php endif; ?>






<?php include ROOT . '/views/layouts/footer.php'; ?>