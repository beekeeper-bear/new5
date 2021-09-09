<?php include ROOT . '/views/layouts/header.php'; ?>

<section>

    <?php if (isset($errors) && is_array($errors)) : ?>
        <ul>
            <?php foreach ($errors as $error) : ?>


                <li>
                    <center> <span class="message">- <?php echo $error; ?></span> </center>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <div class="signup-forms">



        <form action="#" class="forms" method="post">

            <span id="p">Вход на сайт</span>

            <label><span>e-mail:</span>
                <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>" />

            </label>

            <label><span>Пароль:</span>
                <input type="password" name="password" placeholder="Пароль" value="<?php echo $password; ?>" />
            </label>

            <input class="knopf" type="submit" name="submit" value="Войти">
        </form>
    </div>

</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>