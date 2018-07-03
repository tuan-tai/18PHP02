$(document).ready(function() {
    $(".catAdd").click(function (e) {
        e.preventDefault();
        $(this).hide();
        $(this).parent().append(
            `<form method=\"post\" action=\"cat_add.php\" class="ml-auto">
                <input type="text" name="name" placeholder="Enter new category name"/>
                <input type="submit" class="btn btn-primary"/>
            </form>`
        );
    })
});
