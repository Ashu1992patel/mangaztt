/**
 * Site : http:www.smarttutorials.net
 * @author muni
 */

//adds extra table rows
var i = $('table tr').length;
$(".addmore").on('click', function () {
    html = '<tr>';
    html += '<td><input class="case" type="checkbox"/></td>';
    html += '<td class="hidden"><input data-type="productCode" name="itemId[]" id="itemId_' + i + '" class="form-control" autocomplete="off"></td>';

    html += '<td><input type="text" data-type="productName" name="itemName[]" id="itemName_' + i + '" class="form-control auto-text pname required" placeholder="Search Items by Name" autocomplete="off"></td>';

    html += '<td><input type="text" name="quantity[]" id="quantity_' + i + '" class="form-control value-change pqty required numberOnly" placeholder="Quantity" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '</tr>';
    $('table').append(html);
    $('#itemName_' + i).focus();
    i++;

    rowCounter('#itemTable > tbody > tr', '#msg');
});


//to check all checkboxes
$(document).on('change', '#check_all', function () {
    $('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});

//deletes the selected table rows
$(".delete").on('click', function () {
    $('.case:checkbox:checked').parents("tr").remove();
    $('#check_all').prop("checked", false);
    calculateTotal();

    rowCounter('#itemTable > tbody > tr', '#msg');

});
$(document).ready(function () {
    if (typeof errorFlag !== 'undefined') {
        $('.message_div').delay(5000).slideUp();
    }
});

// item row counter
function rowCounter(_table, _msg) {
    //var rowCount = $(_table).length;
    //alert(rowCount);
    if ($(_table).length == 0) {
        $('#btn').addClass('disabled');
        _msg.text("At least one item/product need to be added!");
    }
    else {
        $('#btn').removeClass('disabled');
        _msg.text('');
    }
}