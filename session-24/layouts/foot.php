<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/owl-carousel/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script>
$(document).ready(function () {
  $(".cart-icon-img").attr("data-after", "<?php echo count($_SESSION['cart']); ?>");
});
</script>
</body>

</html>
