$(document).ready(function() {
    $(".catAdd").click(function(e) {
        e.preventDefault();
        $(this).hide();
        $(this).parent().append(
            `<form method=\"post\" action=\"cat_add.php\" class="ml-auto">
                <input type="text" name="name" placeholder="Enter new category name" class="catAdd"/>
                <input type="submit" class="btn btn-primary"/>
            </form>`
        );
    });
    $(".catEdit").click(function(e) {
        e.preventDefault();
        var oldValue = $(this).parent().siblings(".catName").html();
        $(".catEdit").hide();
        $(this).parent().siblings(".catName").html(`
            <form method="post" action="cat_edit.php">
                <input type="text" value="`+oldValue+`"/>
                <input type="submit" value="Edit" class="btn btn-primary"/>
            </form>
        `);
    });
});
