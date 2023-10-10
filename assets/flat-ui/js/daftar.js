$('#customFile').on('change', function (evt) {
    let tampung = $(this).val().split('\\');
    let fileName = tampung[tampung.length - 1];
    if ($('#nameFile')) {
        $('#nameFile').remove();
        $('#imgSRC').prop('src', 'https://cdn.iconscout.com/icon/free/png-256/account-269-866236.png');
    }
    if ($(this).val() != '') {
        $('#upload-list').prepend("<b id='nameFile'>" + fileName + "<br/></b>");

        var tmppath = URL.createObjectURL(evt.target.files[0])
        $('#imgSRC').prop('src', tmppath);
    }
});
// Datepicker
$('#date').bootstrapMaterialDatePicker({
    weekStart: 0,
    time: false,
    maxDate: new Date()
});

function validate(evt) {
    var theEvent = evt || window.event;

    // Handle paste
    if (theEvent.type === 'paste') {
        key = event.clipboardData.getData('text/plain');
    } else {
        // Handle key press
        var key = theEvent.keyCode || theEvent.which;
        key = String.fromCharCode(key);
    }
    var regex = /[0-9]|\./;
    if (!regex.test(key)) {
        theEvent.returnValue = false;
        if (theEvent.preventDefault) theEvent.preventDefault();
    }
}
$('.choose-box-model').on('click', function (evt) {
    // remove input
    if ($('input[name=jk]').val() != '') {
        $('input[name=jk]').remove();
        $('.choose-box-model').css('background', '#2C3A47');

    }
    // get value selected
    let selected = $(this).attr('value')

    // create tag input
    let inputData = document.createElement("input")
    inputData.setAttribute("type", "hidden")
    inputData.setAttribute("value", selected)
    inputData.setAttribute("name", "jk")
    inputData.setAttribute("readonly", "true")
    $('#jkdiv').append(inputData);
    // set box if selected

    $(this).css('background', '#396afc');
    $(this).css('background', ' -webkit-linear-gradient(to right, #2948ff, #396afc) ');
    $(this).css('background', 'linear-gradient(to right, #2948ff, #396afc) ');


})

$('#_REG').submit(function (evt) {
    evt.preventDefault();

    // loading start
    $('button[name=daftar]').html(
        "<i class='fas fa-circle-notch fa-spin' style='font-size:16px'></i> Tunggu Sebentar...")
    $('button[name=daftar]').attr('disabled', 'true')

    // get data inputan 
    var data = $(this).serializeArray();

    // set flag
    let flag = 0;
    let cekpass = 0
    let cekfile = 0


    if ($('input[name=jk]').val() == undefined) {
        $("#__jk").html(
            "<i style='font-size:13px; color:red'> *) kolom tidak boleh kosong</i>");
        flag = 1
    }
    // cek errors inputan kalau kosong 
    data.forEach(function (elm, index) {
        //validasi kosong 

        if (elm["value"].length <= 0) {
            $("#__" + elm["name"]).html(
                " *) kolom tidak boleh kosong");
            flag += 1;
        } else {
            $("#__" + elm['name']).html(" ");
        }
    });

    // kalau lulus validasi password
    if ($('input[name=password]').val() != $('input[name=cpassword]').val()) {
        $('#__cpassword').html(
            "kolom tidak sesuai dengan kolom password")
        flag += 1
    } else $('#__cpassword').html(" ")

    // kalau lulus validasi password
    // if ($('input[name=foto]').val() == '') {
    //     $('#__foto').html(
    //         "*) kolom tidak boleh kosong")
    //     flag += 1
    // } else $('#__foto').html("")


    const rules = 1 * flag;
    if (rules == 0) {

        $.ajax({
            url: base_url + "daftar/store",
            data: new FormData(this),
            type: 'post',
            contentType: false,
            processData: false,
            success: function (result) {
                // alert(result)
                // return false;
                let Convert = JSON.parse(result);
                if (Convert.status == 200)
                    document.location = Convert.action
                else
                    pesan_error(Convert.title, Convert.message)
                // loading end
                $('button[name=daftar]').html(
                    "Daftar")
                $('button[name=daftar]').removeAttr('disabled')

            },
            error: function (jqXHR, exception) {
                if (jqXHR.status === 0) {
                    msg = 'Not connect.n Verify Network.';
                } else if (jqXHR.status == 404) {
                    msg = 'Requested page not found. [404]';
                } else if (jqXHR.status == 500) {
                    msg = 'Internal Server Error [500].';
                } else if (exception === 'parsererror') {
                    msg = 'Requested JSON parse failed.';
                } else if (exception === 'timeout') {
                    msg = 'Time out error.';
                } else if (exception === 'abort') {
                    msg = 'Ajax request aborted.';
                } else {
                    msg = 'Uncaught Error.n' + jqXHR.responseText;
                }
                pesan_error('Error', msg);
                $('button[name=daftar]').html(
                    "Daftar")
                $('button[name=daftar]').removeAttr('disabled')
            }
        })
    } else {
        $('button[name=daftar]').html(
            "Daftar")
        $('button[name=daftar]').removeAttr('disabled')

    }

})