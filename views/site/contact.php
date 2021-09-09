<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">
        <div class="row">

            <div class="col-sm-12 col-sm-offset-12 padding-right">

                <?php if ($result) : ?>
                    <p>Сообщение отправлено! Мы ответим Вам на указанный email.</p>
                <?php else : ?>
                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <div class="signup-form">


                        <form action="#" class="forms" method="post">


                            <span id="p"> Обратная связь </span>

                            <p class="p-span"> Есть вопрос? Напишите нам </p>



                            <label><span>Ведите ваш: e-mail:</span>
                                <input type="email" name="userEmail" autocomplete="on" onfocus="if(this.value == 'Введите ваш e-mail:') this.value=''" onblur="if(this.value == '') this.value='Введите ваш e-mail:'" value="<?php echo $userEmail; ?>">

                            </label>




                            <label><span>Сообщение:</span>
                                <textarea name="userText" wrap="hard" cols="80" onfocus="if(this.value == 'Примечания к заказу:') this.value=''" onblur="if(this.value == '') this.value='Примечания к заказу:'"></textarea></label>

                            <input class="knopf" type="submit" name="submit" value="Отправить">



                        </form>





                    </div>
                    <!--/sign up form-->
                <?php endif; ?>


                <br />
                <br />
            </div>
        </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>