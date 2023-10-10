$('#see-more').click(function (evt) {
    $('#description').text($('#see-more-val').val());
})


function GetData() {
    $('#display-mode').html(loading())
    let segment = $('meta[name=segment]').attr('content');
    $.ajax({
        type: "GET",
        url: url + "path/getdatadetail/" + segment,
        dataType: 'json',
        success: function (response) {
            if (response.status == 200)
                show(response.data, response.count)
            else {
                const back = "<a class='btn btn-hover btn-yellow-el' href='" + url + 'path' + "'>kembali</a>"
                $('#display-mode').html("<div class='col-lg-12 mt-5 text-center'><h4 class='poppins-400'>" + response.message + "</h4>" + back + " </div>");
            }
        },
    });
}
GetData()
function show(data, count) {
    let html = '', subs, encode;
    const link = url + 'kelas/';

    const LenSubstr = IsMobile() == true ? 30 : 180;
    if (count > 0) {
        for (let x = 0; x < count; x++) {
            encode = link + hashids.encode(data[x]['id_course']);
            subs = data[x]['course_description'];
            if (data[x]['course_description'].length >= LenSubstr)
                subs = stripHtml(data[x]['course_description']).substr(0, LenSubstr) + '...';

            html += "<div class='col-lg-12 mb-4'>";
            html += "<div class='card h-100 flex-row radius-card card-shadow-el'> ";
            html += "<div class='d-none d-md-block d-lg-block d-xl-block radius-card-img-list '><img class='card-img-left radius-card-img-list' src='" + UrlMedia('course') + data[x]['course_photo'] + "' style='height:185px'></div>";
            html += "<div class='card-body'>";
            html += "<h4 class='card-title montserrat-700'>" + data[x]['course_name'] + "</h4>";
            html += "<div class='card-text poppins-400 text-muted text-size-6 text-justify'>" + subs;
            html += "<br/><a href='" + encode + "' class='mt-4 float-right btn btn-hover btn-blue-el text-size-2'>Akses kelas</a>"
            html += "</div></div></div></div>";
        }
        $('#display-mode').html(html)
    } else {
        pesan_warning("Kesalahan", "Daftar kelas tidak tersedia");
    }
}


$('#learning-path-free').submit(function (event) {
    event.preventDefault();
    let GetData = new FormData(this);
    const NameToken = $('#token').attr('name');
    const ValueToken = $('#token').val();
    GetData.append(NameToken, ValueToken);
    iziToast.show({
        timeout: 15000,
        theme: 'dark',
        close: true,
        overlay: true,
        displayMode: 'once',
        id: 'question',
        zindex: 999,
        progressBarColor: '#20bf6b',
        message: "<center>Apakah anda yakin, ingin mendaftar <b>learning path</b> ini ?</center>",
        position: 'center',
        buttons: [
            ["<button><b class='montserrat-700'>YA</b>, saya mau</button>", function (
                instance, toast) {
                $.ajax({
                    type: 'POST',
                    url: url + 'path/coursefree',
                    data: GetData,
                    processData: false,
                    contentType: false,
                    success: function (response) {
                        const parse = JSON.parse(response);
                        document.location = parse.action;
                        instance.hide({
                            transitionOut: 'fadeOut'
                        }, toast, 'button');

                    }, error: function (jqXHR, exception) {
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
                        LoadingButton('off', 'Masuk', 'masuk');

                    }

                })

            }],
            ["<button class='montserrat-700'>KEMBALI</button>", function (instance, toast) {

                instance.hide({
                    transitionOut: 'fadeOut'
                }, toast, 'button');

            }],
        ],
        onClosing: function (instance, toast, closedBy) {
            console.info('Closing | closedBy: ' + closedBy);
        },
        onClosed: function (instance, toast, closedBy) {
            console.info('Closed | closedBy: ' + closedBy);
        }
    });
    $('.iziToast-body').addClass('d-flex flex-column');
    $('.iziToast-buttons').addClass('text-center');
})