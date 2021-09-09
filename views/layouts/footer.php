</div> <!--  main-- -->
e
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-6">
                <h4> Информация</h4>
                <ul class="list-unstyled">
                    <li><a href="/">Главная</a></li>
                    <li><a href="/about/">О магазине </a></li>
                    <li><a href="/about/">Оплата и доставка</a></li>
                    <li><a href="/contacts/">Контакты</a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6">
                <h4> Время работы</h4>
                <ul class="list-unstyled">
                    <li><a href="#">пн-вс: 9 <sup>00</sup> - 18 <sup>00</sup></a></li>
                    <li><a href="#">без перерыва </a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6">
                <h4>Телефоны</h4>
                <ul class="list-unstyled">
                    <li><a href="#">0977416330</a></li>
                    <li><a href="#">0667070775</a></li>
                    <li><a href="#" class="icon-gmail"></a></li>
                </ul>
            </div>

            <div class="col-md-3 col-6">
                <h4>Мы в сети</h4>
                <ul class="list-unstyled footer-icons">
                    <li><a href="#" class="icon-facebook-rect"></a></li>

                    <li><a href="#" class="icon-vk"></a></li>
                    <li><a href="#" class="icon-twitter"></a></li>


                </ul>
            </div>

        </div>

    </div>
</footer>



<script src="/template/js/bootstrap.bundle.min.js"></script>
<script src="/template/js/jquery-git.min.js"></script>
<script>
    $(document).ready(
        function() {
            $(".add-to-cart").click(function() {
                var id = $(this).attr("data-id");
                $.post("/cart/addAjax/" + id, {}, function(data) {
                    $("#cart-count").html(data);
                });
                return false;
            });


            one();

        });



    /* if (typeof dfshkhdkjfh !== "undefined")
         alert('Defined');
     else
         alert('Not defined');*/


    /*var initialize = _.once(createApplication);
    initialize();
    initialize();
    // Application is only created once.*/


    function one() {
        if (one.isRun) {
            return false;
        }

         $.post("/cart/AddAjaxCount/", {}, function(data) {
             $("#cart-count").html(data);
         });


      /*  $.ajax({
                method: "POST",
                   url: "/cart/AddAjaxCount/",
              //  url: "/cart/addAjax/34",
              //  data: {
                    text: '34'
                

            })

            .done(function(data) {
                //  alert ('Запрос выполнен');
                $("#cart-count").html(data);
            });*/



    
       // console.log('oneoneoneoneoneoneoneone');
        one.isRun = true;
    }
</script>



</body>

</html>