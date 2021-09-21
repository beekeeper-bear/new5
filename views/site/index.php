<?php include ROOT . '/views/layouts/header.php'; ?>

<section class="main-content">

    <div class="conteiner">

        <div class="row">

            <?php foreach ($categories as $categoryItem) : ?>

                <div class=" col-xl-3 col-lg-4 col-sm-6">
                    <div class="product-card mt-4">
                        <div class="product-thumb">
                            <a href="/category/<?php echo $categoryItem['id']; ?>"><img src="/template/images/home/<?php echo $categoryItem['id']; ?>.jpeg" alt=""></a>
                        </div>
                        <div class="product-detalis">
                            <h4><a href="/category/<?php echo $categoryItem['id']; ?>"> <?php echo $categoryItem['name']; ?></a></h4>


                        </div>


                    </div><!-- produkt-card -->

                </div>

            <?php endforeach; ?>


        </div> <!-- row -->

    </div>

</section>
<!-- main-content -->


</div> <!--  main-- -->



<?php include ROOT . '/views/layouts/footer.php'; ?>