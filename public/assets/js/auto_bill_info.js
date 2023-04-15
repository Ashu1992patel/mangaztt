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

    //html += '<td><select name="itemId[]" class ="form-control requiredDD" id="itemId_' + i + '"</td>';

    html += '<td><input type="text" name="quantity[]" id="quantity_' + i + '" class="form-control changesNo  value-change qty pqty required numberOnly" placeholder="Quantity" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '<td><input type="text" name="itemRate[]" id="itemRate_' + i + '" class="form-control rate required changesNo" placeholder="Rate" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"><input type="hidden" name="itemR[]" id="itemR_' + i + '" class="form-control required changesNo" placeholder="Rate" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"><input type="hidden" name="itemAmt[]" id="itemAmt_' + i + '" class="form-control required" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '<td><input type="text" name="av_quantity_[]" id="av_quantity_' + i + '" class="form-control required " placeholder="Available Qty" autocomplete="off" readonly="readonly"  onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '<td><input type="text" name="itemGst[]" id="itemGst_' + i + '" class="form-control changeGst required" placeholder="GST%" readonly="readonly" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '<td><input type="text" name="itemGstAmt[]" id="itemGstAmt_' + i + '" class="form-control required" placeholder="GST Amt" readonly="readonly" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '<td><input type="text" name="itemAmount[]" id="itemAmount_' + i + '" class="form-control row-total" readonly="readonly" placeholder="Amount" autocomplete="off" onkeypress="return IsNumeric(event);" ondrop="return false;" onpaste="return false;"></td>';

    html += '</tr>';
    $('table').append(html);
    $('#itemName_' + i).focus();
    i++;
    //rowCounter('#itemTable > tbody > tr', '#msg');
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

    //rowCounter('#itemTable > tbody > tr', '#msg');

});
//$(".typeDD").select2({
//    placeholder: "Select Vendor"
//});

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
    gst = $('#itemGst_' + id[1]).val();
    if (quantity != '' && rate != '') {
        $('#itemAmt_' + id[1]).val((parseFloat(rate) * parseFloat(quantity)).toFixed(2));
        $('#itemGstAmt_' + id[1]).val((parseFloat(rate) * parseFloat(quantity)) / parseFloat(gst).toFixed(2));
    }
    calculateQuotationTotal();
    calculateGrandTotal();
//            calculateServiceTax();
//    calculateVatPercent();
}

$(document).on('change', '.qty', function () {
    id_arr = $(this).attr('id');
    id = id_arr.split("_");
    itemAmt = 0;
    itemGstAmt = 0;
    itemAmount = 0;
    quantity = $('#quantity_' + id[1]).val();
    av_quantity = $('#av_quantity_' + id[1]).val();
    if (parseFloat(quantity) > parseFloat(av_quantity)) {
        $('#quantity_' + id[1]).val(parseFloat(av_quantity));
//                $('.msg').text('Enter Qty is more than available Quantity');
    } else {
        $('.msg').text('');
    }
});

$(document).on('change keyup blur', '.changesNo', function () {
    id_arr = $(this).attr('id');
    id = id_arr.split("_");
    quantity = $('#quantity_' + id[1]).val();
    rate = $('#itemRate_' + id[1]).val();
    gst = $('#itemGst_' + id[1]).val();
    if (quantity != '' && rate != '') {
        $('#itemAmt_' + id[1]).val((parseFloat(rate) * parseFloat(quantity)).toFixed(2));
        $('#itemGstAmt_' + id[1]).val((parseFloat(rate) * parseFloat(quantity) * parseFloat(gst) / 100).toFixed(2));
        $('#itemAmount_' + id[1]).val((parseFloat(rate) * parseFloat(quantity) * parseFloat(gst)) / 100 + ((parseFloat(rate) * parseFloat(quantity)).toFixed(2)));

    }
    //calculateQuotationTotal();
    calculateGrandTotal();
    //calculateVatPercent();
});
$(document).on('change keyup blur', '.changeGst', function () {
    id_arr = $(this).attr('id');
    id = id_arr.split("_");
    amt = $('#itemAmt_' + id[1]).val();
    gst = $('#itemGst_' + id[1]).val();
    if (quantity != '' && rate != '') {
        $('#itemGstAmt_' + id[1]).val((parseFloat(amt) * parseFloat(gst) / 100).toFixed(2));
        $('#itemAmount_' + id[1]).val((parseFloat(amt) * parseFloat(gst) / 100 + parseFloat(amt)).toFixed(2));
    }
    calculateQuotationTotal();
    calculateGrandTotal();
    //calculateVatPercent();
});
function calculateGST() {
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

$(document).ready(function () {
    if (typeof errorFlag !== 'undefined') {
        $('.message_div').delay(5000).slideUp();
    }
});

// item row counter
//function rowCounter(_table, _msg) {
//    //var rowCount = $(_table).length;
//    //alert(rowCount);
//    if ($(_table).length == 0) {
//        $('#btn').addClass('disabled');
//        _msg.text("At least one item/product need to be added!");
//    }
//    else {
//        $('#btn').removeClass('disabled');
//        _msg.text('');
//    }
//}