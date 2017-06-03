<div class="page-buffer"></div>
</div>

<footer id="footer" class="page-footer"><!--Footer-->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <p class="pull-left"><b>La-Merk Industries ™</b></p>
                <p class="pull-right"><i>Powered By Sombra inc <b>VS</b> Tet-Corporation</i></p>
            </div>
        </div>
    </div>
</footer><!--/Footer-->



<script src="/eshop/template/js/jquery.js"></script>
<script src="/eshop/template/js/jquery.cycle2.min.js"></script>
<script src="/eshop/template/js/jquery.cycle2.carousel.min.js"></script>
<script src="/eshop/template/js/bootstrap.min.js"></script>
<script src="/eshop/template/js/jquery.scrollUp.min.js"></script>
<script src="/eshop/template/js/price-range.js"></script>
<script src="/eshop/template/js/jquery.prettyPhoto.js"></script>
<script src="/eshop/template/js/main.js"></script>
<script>
    $(document).ready(function(){
        $(".add-to-cart").click(function () {
            var id = $(this).attr("data-id");
            $.post("/cart/addAjax/"+id, {}, function (data) {
                $("#cart-count").html(data);
            });
            return false;
        });
    });
</script>

</body>
</html>