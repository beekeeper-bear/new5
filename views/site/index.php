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

<div class="container-xxl">

    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner ">
            <div class="carousel-item active justify-content-center">

                <div class="row">
                    <div class="col ">
                        <img src="/upload/images/products/33.jpg" class="d-block width_imgs " alt="...">
                    </div>
                    <div class="col ">
                        <img src="/upload/images/products/34.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col ">
                        <img src="/upload/images/products/37.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col ">
                        <img src="/upload/images/products/35.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col ">
                        <img src="/upload/images/products/38.jpg" class="d-block width_imgs" alt="...">
                    </div>

                </div>

            </div>
            <div class="carousel-item">

                <div class="row">
                    <div class="col">
                        <img src="/upload/images/products/36.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/37.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/38.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/33.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/34.jpg" class="d-block width_imgs" alt="...">
                    </div>
                </div>
            </div>

            <div class="carousel-item">

                <div class="row">
                    <div class="col">
                        <img src="/upload/images/products/39.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/40.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/41.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/36.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/37.jpg" class="d-block width_imgs" alt="...">
                    </div>
                </div>
            </div>

            <div class="carousel-item">

                <div class="row">
                    <div class="col">
                        <img src="/upload/images/products/42.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/43.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/44.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/42.jpg" class="d-block width_imgs" alt="...">
                    </div>
                    <div class="col">
                        <img src="/upload/images/products/43.jpg" class="d-block width_imgs" alt="...">
                    </div>
                </div>
            </div>


        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Предыдущий</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Следующий</span>
        </button>
    </div>

</div>




</div> <!--  main-- -->



<?php include ROOT . '/views/layouts/footer.php'; ?>