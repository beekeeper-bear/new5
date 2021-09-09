<?php include ROOT . '/views/layouts/header.php'; ?>



<section class="main-content">

    <div class="conteiner">

        <div class="row">

            <?php foreach ($categoryProducts as $product) : ?>

                <div class=" col-xl-3 col-lg-4 col-sm-6">


                    <div class="product-card mt-4">
                        <div class="product-thumb">
                            <a href="#"><img src="<?php echo Product::getImage($product['id']); ?>" alt=""></a>
                        </div>

                        <div class="product-detalis">
                            <h4><a href="#"><?php echo $product['name']; ?></a></h4>

                            <p><?php echo $product['description']; ?>
                            </p>
                        </div>

                        <div class="product-bottom-details"> </div>

                        <div class="product-links">
                            <div class="product-price text-center">
                                <?php echo $product['price']; ?> гр.
                            </div>

                            <div class="counter__container">

                                <button class="minus">
                                    <span class="icon-minus">-</span>
                                </button>

                                <div class="counter-input">
                                    <input class="counter" type="text" value="1" data-max="999999" data-step="1" data-min="1">
                                </div>

                                <button class="plus">
                                    <span class="icon-plus">+</span>
                                </button>


                            </div>

                            <div class="button-links ">

                                <a href="#" data-id="<?php echo $product['id']; ?>" class="btn btn-outline-success pe-1 ps-1 add-to-cart   type=" submit">Купить</a>

                            </div>




                        </div>

                    </div><!-- produkt-card -->

                </div>



            <?php endforeach; ?>




            <?php echo $pagination->get(); ?>


        </div>

</section>
<!-- main-content -->


</div> <!--  main-- -->

<?php include ROOT . '/views/layouts/footer.php'; ?>