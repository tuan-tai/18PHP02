$(document).ready(function() {

    // Cat list page
    $(".catListEdit").click(function() {
        var value = $("." + $(this).attr('id')).text();
        $("." + $(this).attr('id')).replaceWith(`<td class=` + $(this).attr('id') + `><form id="f` + $(this).attr('id') + `" action="cat_edit.php" method="post"><input type="text" name="name" value="` + value + `"/><input type='hidden' name='id' value="` + $(this).attr('id').slice(1) + `"/><input type="submit" form="f` +  $(this).attr('id')  + `" value="Save" class="save" /></form></td>`);
        $(this).hide();
    });
    $('#catList').dataTable({
        "paging": false,
        "ordering": true,
        "info": false,
    });
    // End cat List page

    // Get cat page
    
    // 
});