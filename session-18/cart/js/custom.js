$(document).ready(function() {
    /* Cat list page */
    $(".catEdit").click(function() {
        event.preventDefault();
        $(".catEdit").hide();
        var value = $(this).parent().siblings(".catName").text();
        var id = $(this).parent().siblings(".catID").children("span.id").text();
        console.log(id);
        $(this).parent().siblings(".catName").replaceWith(`
            <td class="catName">
                <form id="f` + id + `" action="cat_edit.php" method="post">
                    <input class="form-control mb-2" type="text" name="name" value="` + value + `"/>
                    <input type='hidden' name='id' value="` + id + `"/>
                    <input class="form-control btn btn-primary save"  type="submit" form="f` + id + `" value="Save"/>
                </form>
            </td>`);
    });
    
    var check = 0;
    $(".catAdd").click(function() {
        event.preventDefault();
        if (check == 0) {
            $(this).text('Hide');
            check = 1;
        } else {
            $(this).text('Add');
            check = 0;
        }
        $(".formCatAdd").toggle();
    });
    /* End cat List page */

    // Get cat page

    // 
});