function EmptyInput(data) {
    let flag = 0;
    data.forEach(function (elm, index) {
        if (elm["value"].length <= 0 && elm["name"]) {
            $("#__" + elm["name"]).html("<br/>*) kolom tidak boleh kosong");
            flag += 1;
        } else
            $("#__" + elm['name']).html(" ");
    });

    return flag == 0 ? true : false;
}

function konfirmasi_password(password, kpassword) {
    let TampungPassword = $('input[name=' + password + ']').val();
    let TampungKPassword = $('input[name=' + kpassword + ']').val();
    if (TampungPassword != "" && TampungKPassword != "") {

        if (TampungPassword != TampungKPassword) {
            $("#__" + password).html("<br/>*) password tidak sesuai")
            $("#__" + kpassword).html("<br/>*) konfirmasi password tidak sesuai")
            return false;
        } else {
            $("#__" + password).html("")
            $("#__" + kpassword).html("")
            return true;
        }
    }

    return false;
}
$('#daftar').submit(function (evt) {
    evt.preventDefault();
    LoadingButton('on', 'Tunggu sebentar', 'daftar');
    let CekData = EmptyInput($(this).serializeArray());
    const CekPassword = konfirmasi_password('password', 'kpassword');
    if (CekData == false) {
        pesan_warning('Kesalahan', 'silahkan isi semua kolom inputan');
        LoadingButton('off', 'Daftar', 'daftar');
        return false;
    }
    if (CekPassword == false) {
        LoadingButton('off', 'Daftar', 'daftar');
        return false;
    }
    let GetData = new FormData(this);
    const NameToken = $('#token').attr('name');
    const ValueToken = $('#token').val();
    GetData.append(NameToken, ValueToken);
    $.ajax({
        type: 'POST',
        url: url + 'daftar/store',
        data: GetData,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function (response) {
            $('#token').val(response.token);
            if (response.status == 200) {
                LoadingButton('on', 'Pendaftaran berhasil, silahkan tunggu', 'daftar');
                document.location = response.action

            } else {
                pesan_warning('Kesalahan', response.message)
                LoadingButton('off', 'Daftar', 'daftar');
            }


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
            LoadingButton('off', 'Daftar', 'daftar');

        }
    })

})