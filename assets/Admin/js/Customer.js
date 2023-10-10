sessionStorage.clear();

$("tbody").click(function (evt) {
    if (evt.target.className == 'subSelect') {
        // alert( parseInt(sessionStorage.getItem('count')) );
        if (sessionStorage.getItem('count') == 'NaN' || sessionStorage.getItem('count') == null) {
            sessionStorage.setItem('count', 0);
        }
        if (evt.target.checked == true) {
            let input_ = document.createElement('input');
            input_.setAttribute('type', 'hidden');
            input_.setAttribute('value', 'YO_' + evt.target.defaultValue);
            input_.setAttribute('name', 'YO_selectCustomer[]');
            $('#input-selected').append(input_);
            sessionStorage.setItem('count', parseInt(sessionStorage.getItem('count')) + 1);
            $('.MYbounce').show();
            $('#content-wrapper').css('background', 'rgba(46, 49, 49, 1)');
            $('body').css('background', 'rgba(46, 49, 49, 1)');


            $('#fixedbutton').show();
            $('#fixedbutton2').show();
            $('#fixedbutton3').show();
            $('#fixedbutton4').show();
        } else {
            $("input[value='YO_" + evt.target.defaultValue + "']").remove();
            if (sessionStorage.getItem('count') == 1) {

                $('.MYbounce').hide();
                $('#content-wrapper').css('background', '#fff');
                $('#fixedbutton').hide();
                $('#fixedbutton2').hide();
                $('#fixedbutton3').hide();
                $('#fixedbutton4').hide();
            }
            sessionStorage.setItem('count', parseInt(sessionStorage.getItem('count')) - 1);

        }

        $('#counter-selected').html(sessionStorage.getItem('count'));
        $(".MYbounce").effect("bounce", {
            times: 2
        }, 100);



    }
});




// nama tiket
$('#DTTiket tbody').on('dblclick', 'td:nth-child(2)', function (evt) {
    let index = $('#DTTiket tbody td:nth-child(2)').index(this);
    let idtiket = $('.subSelect').eq(index).val().replace(/=/g, '')
    $('#DTTiket tbody td:nth-child(2)').eq(index).editable(SiteAccess + "AjaxNamaTiket", {
        id: idtiket,
        type: 'text',
        style: 'inherit',
        indicator: 'Tunggu Sebentar...',
        // submit: "<button class='btn btn-primary btn-sm' type='submit' >Ok</button>",
        callback: function (result, settings, submitdata) {
            let Convert = JSON.parse(result)
            if (Convert.status == 200)
                $(this).text(Convert.data)
            else {
                $(this).text("")
                pesan_error(Convert.title, Convert.message)
            }
        },
    });

})


// harga
$('#DTTiket tbody').on('dblclick', 'td:nth-child(3)', function (evt) {
    let index = $('#DTTiket tbody td:nth-child(3)').index(this);
    let idwahana = $('.subSelect').eq(index).val().replace(/=/g, '')
    let rp = Base64.encode($(this).text()).replace(/=/g, '')
    $('#DTTiket tbody td:nth-child(3)').eq(index).editable(SiteAccess + "AjaxHargaTiket", {
        id: idwahana,
        cssclass: 'harga',
        loadurl: SiteAccess + 'AjaxHarga/' + rp,
        type: 'number',
        style: 'inherit',
        indicator: 'Tunggu Sebentar...',
        // submit: "<button class='btn btn-primary btn-sm' type='submit' >Ok</button>",
        callback: function (result, settings, submitdata) {
            let Convert = JSON.parse(result)
            if (Convert.status == 200)
                $(this).html("Rp." + rupiah(Convert.data))
            else {
                $(this).text("")
                pesan_error(Convert.title, Convert.message)
            }
        },
    });
})

// // Datatable Tiket
// $("#DTTiket").DataTable({
//     processing: true,
//     serverside: true,
//     ajax: SiteAccess + "get",
//     language: {
//         "emptyTable": "Data Tiket tidak tersedia",
//         "processing": "Sedang Request Api... <br/> <i class='text-danger'>Refresh kembali jika gagal</i>",
//         "lengthMenu": "Tampilkan _MENU_ data",
//         "info": "Halaman <b> _PAGE_ </b> dari <b> _PAGES_ </b> halaman <i style='font-size:13px'>(_MAX_ Records)</i>",
//     },
//     lengthMenu: [5, 10, 20, 50, 100],

//     columns: [

//         {
//             data: "id_tiket", "render": function (data, type, row) {
//                 let html = "<label class='pure-material-checkbox'>"
//                 html += "<input type='checkbox' class='subSelect' name='selectSouvenir[]' "
//                 html += "value='" + Base64.encode(data.toString()) + "'><span></span></label>"
//                 return html
//             }
//         },
//         {
//             "data": "nama",
//             'createdCell': function (td, cellData, rowData, row, col) {
//                 $(td).attr({
//                     'title': 'double tap untuk mengubah'
//                 })

//             },

//         },

//         {
//             "data": "harga",
//             "render": function (data, type, row) {
//                 return "Rp." + rupiah(data)
//             },
//             'createdCell': function (td, cellData, rowData, row, col) {
//                 $(td).attr({
//                     'title': 'double tap untuk mengubah'
//                 })

//             },

//         },
//     ]
// })
