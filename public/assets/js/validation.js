function CheckLen(input, maxlen) {
    if ((input.value.length > maxlen - 1 && event.keyCode != 8) || event.keyCode == 86)
        return false;
}


$(".textWithSpace").keypress(function () {
    if (event.keyCode == 8 || event.keyCode == 32) return true;
    if (!((event.keyCode >= 65 && event.keyCode <= 90) || (event.keyCode >= 97 && event.keyCode <= 122))) return false;
});

$(".numberOnly").keypress(function () {
    if (event.keyCode == 8) return true;
    if (!(event.keyCode >= 48 && event.keyCode <= 57)) return false;
});


$(".amount").keypress(function () {
    if (event.keyCode == 8 || event.keyCode == 46) return true;
    if (!(event.keyCode >= 48 && event.keyCode <= 57)) return false;
});

$("form").submit(function (event) {
    var $btn = $(document.activeElement);
    if ($btn.attr('formnovalidate') != 'formnovalidate')
        return validate(this);
});

function validate(frm) {
    var frmId = $(frm).attr('id');
    var ret = true;

    function setError(dispMsg) {
        $(this).next('.errorText').remove();
        $(this).addClass('errorClass');
        // $(this).after("<p class='errorText'>" + dispMsg + "</p>");
        //event.preventDefault();
         ret = false;
    }

    function unsetError() {
        $(this).next('.errorText').remove();
        $(this).removeClass('errorClass');
    }

    $("#" + frmId + " .required").each(function () {
        if ($(this).val().length == 0)
            setError.call(this, "Please Enter " + $(this).attr('placeholder'));
        else
            unsetError.call(this);
    });

    $("#" + frmId + " .requiredDD").each(function () {
        if ($(this).val() == 0) {
            var label = $("label[for='" + $(this).attr('id') + "']");
            setError.call(this, "Please Select " + label.html());
        }
        else
            unsetError.call(this);
    });

    if (ret != false) {
        $("#" + frmId + " .contact").each(function () {
            if ($(this).val().length != 10)
                setError.call(this, "Please Enter a Valid Contact");
            else
                unsetError.call(this);
        });


        $("#" + frmId + " .email").each(function () {
            var re = /^[-a-z0-9~!$%^&*_=+}{\'?]+(\.[-a-z0-9~!$%^&*_=+}{\'?]+)*@([a-z0-9_][-a-z0-9_]*(\.[-a-z0-9_]+[a-z][a-z])|([0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}))(:[0-9]{1,5})?$/i;
            if (!re.test($(this).val()))
                setError.call(this, "Invalid Email");
            else
                unsetError.call(this);
        });


        $("#" + frmId + " .amount").each(function () {
            var re = /^[0-9]+(\.[0-9]+)?$/;
            if (!re.test($(this).val()))
                setError.call(this, "Invalid Amount");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .name").each(function () {
            if ($(this).val().length < 2)
                setError.call(this, "Name must have atleast 2 characters");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .zip").each(function () {
            if ($(this).val().length != 6)
                setError.call(this, "ZIP Code must have 6 digits");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .pan").each(function () {
            var re = /^[A-Z]{5}[0-9]{4}[A-Z]{1}$/;
            if (!re.test($(this).val()))
                setError.call(this, "PAN No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .tinno").each(function () {
            var re = /^[0-9]{11}[A-Z]{1}$/;
            if (!re.test($(this).val()))
                setError.call(this, "TIN No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .cstno").each(function () {
            var re = /^[0-9]{11}[A-Z]{1}$/;
            if (!re.test($(this).val()))
                setError.call(this, "CST No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .servtaxno").each(function () {
            var re = /^[A-Z]{5}[0-9]{4}[A-Z]{3}[0-9]{3}$/;
            if (!re.test($(this).val()))
                setError.call(this, "Service TAX No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .ifsc").each(function () {
            var re = /^[A-Z]{4}[0-9]{7}$/;
            if (!re.test($(this).val()))
                setError.call(this, "IFSC No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .micr").each(function () {
            var re = /^[0-9]{9}$/;
            if (!re.test($(this).val()))
                setError.call(this, "MICR No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .chequeno").each(function () {
            var re = /^[0-9]{6}$/;
            if (!re.test($(this).val()))
                setError.call(this, "Cheque No. should be 6 digits");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .aadhar").each(function () {
            var re = /^[0-9]{12}$/;
            if (!re.test($(this).val()))
                setError.call(this, "Aadhaar No. format is invalid");
            else
                unsetError.call(this);
        });

        $("#" + frmId + " .password").each(function () {
            if ($(this).val().length < 6)
                setError.call(this, "Password must have atleast 6 digits");
            else
                unsetError.call(this);
        });
    }
    //$('p').delay(5000).fadeOut('slow');
    return ret;
}