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
$('#login').submit(function (evt) {
    evt.preventDefault();
    LoadingButton('on', 'Tunggu sebentar', 'masuk');
    let CekData = EmptyInput($(this).serializeArray());
    if (CekData == false) {
        pesan_warning('Kesalahan', 'silahkan isi semua kolom inputan');
        LoadingButton('off', 'Masuk', 'masuk');
    } else {

        let GetData = new FormData(this);
        const NameToken = $('#token').attr('name');
        const ValueToken = $('#token').val();
        GetData.append(NameToken, ValueToken);
        $.ajax({
            type: 'POST',
            url: url + 'login/store',
            data: GetData,
            dataType: 'json',
            processData: false,
            contentType: false,
            success: function (response) {
                $('#token').val(response.token);
                if (response.status == 200)
                    document.location = response.action
                else
                    pesan_warning('Kesalahan', response.message)

                LoadingButton('off', 'Masuk', 'masuk');

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
            }
        })
    }
})