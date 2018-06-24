$(document).ready(function () {
    $(".btn-addCart").click(function () {
        $(".btn-addCart").hide();
        $(this).siblings("form").show();
    });
    $(".productTotal").html($(".productQuantity p.btn").html() * $(".productPrice").html());
});