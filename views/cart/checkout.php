<?php include ROOT . '/views/layouts/header.php'; ?>

<section>
    <div class="container">


        <div class=" col-xl-12 col-lg-12 col-sm-12">

            <h2 class="title text-center">Корзина</h2>


            <?php if ($result) : ?>
                <p>Заказ оформлен. Мы Вам перезвоним.</p>
            <?php else : ?>

                <p>Выбрано товаров: <?php echo $totalQuantity; ?>, на сумму: <?php echo $totalPrice; ?>, $</p><br />

                <?php if (!$result) : ?>


                    <?php if (isset($errors) && is_array($errors)) : ?>
                        <ul>
                            <?php foreach ($errors as $error) : ?>
                                <li> - <?php echo $error; ?></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <p>Для оформления заказа заполните форму. Наш менеджер свяжется с Вами.</p>

                    <div class="login-form">


                        <form action="#" class="forms" method="post">


                            <span id="p"> Оформление заказа</span>

                            <label><span>Фамилия:.</span>
                                <input type="text" name="userSurname" required autocomplete="on"></label>

                            <label><span>Имя:</span>
                                <input type="text" name="userName" required autocomplete="on" value="<?php echo $userName; ?>"></label>

                            <label><span>Отчество:</span>
                                <input type="text" name="userPatronymic" required autocomplete="on"></label>

                            <label><span>Ведите ваш телефон:</span>
                                <input type="tel" name="userPhone" autocomplete="on" pattern=[0-9]{10} required placeholder="0XX-XXXXXXX" value="<?php echo $userPhone; ?>"></label>
                            <label><span>Ведите ваш: e-mail:</span>
                                <input type="email" name="userMail" autocomplete="on" onfocus="if(this.value == 'Введите ваш e-mail:') this.value=''" onblur="if(this.value == '') this.value='Введите ваш e-mail:'">

                            </label>

                            <label><span>Доставка:</span>

                                <select onchange="changeDelivery(this)">

                                    <option value="np">Новая Почта</option>
                                    <option value="up">Укрпочта </option>
                                    <option value="sm">Самовывоз</option>

                                </select>

                            </label>



                            <label id="address2"><span>Введите адресс доставки:</span>
                                <textarea name="userDelivery" id="address" wrap="hard" autocomplete="on" cols="80" onfocus="if(this.value == 'Введите адресс доставки:') this.value=''" onblur="if(this.value == '') this.value='Введите адресс доставки:'"></textarea>


                            </label>

                            <label><span>Примечания к заказу:</span>
                                <textarea wrap="hard" name="userComment" cols="80" onfocus="if(this.value == 'Примечания к заказу:') this.value=''" onblur="if(this.value == '') this.value='Примечания к заказу:'" value="<?php echo $userComment; ?>" /></textarea></label>

                            <input type="submit" name="submit" class="btn btn-default" value="Оформить" />









                        </form>
                    </div>


                <?php endif; ?>

            <?php endif; ?>



        </div>
    </div>
    </div>
</section>

<?php include ROOT . '/views/layouts/footer.php'; ?>