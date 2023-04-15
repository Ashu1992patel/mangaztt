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

    html += '<td><input type="text" data-type="productName" name="itemName[]" id="itemName_' + i + '" class="form-control auto-text item-no pname required" placeholder="Search Items by Name" autocomplete="off"></td>';

    //html += '<td><select name="itemId[]" class ="form-control requiredDD" id="itemId_' + i + '"</td>';

    html += '<td><input type="text" name="quantity[]" id="quantity_' + i + '" class="form-control value-change pqty required numberOnly" placeholder="Quantity" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '<td><input type="text" name="av_quantity[]" id="av_quantity_' + i + '" class="form-control" readonly="readonly" placeholder="Available Qty"></td>';

    html += '</tr>';
    $('table').append(html);
    $('#itemName_' + i).focus();
    i++;

    rowCounter('#itemTable > tbody > tr', '#msg');
    //
    ////$(document).ready(function () {
    //    var detail = '<option value="0">Select</option>';
    //    var arr = [];
    //    var data = $('#item_arr').val();
    //    alert(data);
    //    console.log(data);
    //
    //    if (data.length > 0) {
    //        arr = JSON.parse(data);
    //        for (var j = 0; j < JSON.parse($('#item_arr').val()).length; j++) {
    //            detail += '<option value="' + arr[j]['value'] + '">' + arr[j]['value'] + '</option>';
    //        }
    //    }
    //    //alert(JSON.parse(data)['2']);
    //    //alert(data);
    //    $('#itemId_' + i).html(detail);
    //    //$('#itemId_' + i).focus();
    //    i++;

    //});
});

//$(document).ready(function () {
//    var detail = '<option value="0">Select</option>';
//    var data = $('#item_arr').val();
//    arr = JSON.parse(data);
//    for (var j = 0; j < JSON.parse($('#item_arr').val()).length; j++) {
//        detail += '<option value="' + arr[j]['value'] + '">' + arr[j]['value'] + '</option>';
//    }
//    $('#itemId_1').html(detail);
//    //$('#itemId_1').focus();
//});


//to check all checkboxes
$(document).on('change', '#check_all', function () {
    $('input[class=case]:checkbox').prop("checked", $(this).is(':checked'));
});

//deletes the selected table rows
$(".delete").on('click', function () {
    $('.case:checkbox:checked').parents("tr").remove();
    $('#check_all').prop("checked", false);
    calculateTotal();
    calculateQuotationTotal();
    calculateGrandTotal();
    calculateVatPercent();

    rowCounter('#itemTable > tbody > tr', '#msg');

});
$(".typeDD").select2({
    placeholder: "Select Vendor"
});

function calculateTotal() {
    //subTotal = 0;
    //total = 0;
    //$('.value-change').each(function () {
    //    if ($(this).val() != '')
    //        subTotal += parseFloat($(this).val());
    //});
    //total = subTotal;
    //$('#totalQty').val(total);

    id_arr = $(this).attr('id');
    id = id_arr.split("_");
    quantity = $('#quantity_' + id[1]).val();
    rate = $('#itemRate_' + id[1]).val();
    if (quantity != '' && rate != '') {
        $('#itemAmount_' + id[1]).val((parseFloat(rate) * parseFloat(quantity)).toFixed(2));
    }
    calculateQuotationTotal();
    calculateGrandTotal();
//            calculateServiceTax();
    calculateVatPercent();
}

$(document).on('change keyup blur', '.changesNo', function () {
    id_arr = $(this).attr('id');
    id = id_arr.split("_");
    quantity = $('#quantity_' + id[1]).val();
    rate = $('#itemRate_' + id[1]).val();
    if (quantity != '' && rate != '') {
        $('#itemAmount_' + id[1]).val((parseFloat(rate) * parseFloat(quantity)).toFixed(2));
    }
    calculateQuotationTotal();
    calculateGrandTotal();
    calculateVatPercent();
});
function calculateVatPercent() {
    vat_amount = 0;
    grand_total = 0;
    vat_percent = parseFloat($('.vat_percent').val());
    quotAmt = $('.quotAmt').val();
    $('.vat_percent').each(function () {
        vat_amount += (quotAmt * ( parseFloat(vat_percent) / 100 ));
    });
    $('#vat_amount').val(vat_amount.toFixed(2));
    grand_total = parseFloat(quotAmt) + parseFloat(vat_amount);
    $('#grand_total').val(grand_total.toFixed(2));

}

//Grand Total calculation
function calculateGrandTotal() {
    grand_total = 0;
    $('.row-total').each(function () {
        if ($(this).val() != '')grand_total += parseFloat($(this).val());
    });
    $('#grand_total').val(grand_total.toFixed(2));
}

//$(document).on('change keyup blur', function () {
//    calculateTotal();
//});

//It restrict the non-numbers
var specialKeys = new Array();
specialKeys.push(8, 46); //Backspace
function IsNumeric(e) {
    var keyCode = e.which ? e.which : e.keyCode;
    console.log(keyCode);
    var ret = ((keyCode >= 48 && keyCode <= 57) || specialKeys.indexOf(keyCode) != -1);
    return ret;
}

//datepicker
$(function () {
    $('#material_req_date').datepicker({
        format: "dd-M-yyyy",
        maxViewMode: 0,
        todayBtn: "linked",
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });
});
$(function () {
    $('#quotation_date').datepicker({
        format: "dd-M-yyyy",
        maxViewMode: 0,
        todayBtn: "linked",
        daysOfWeekHighlighted: "0",
        autoclose: true,
        todayHighlight: true
    });
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