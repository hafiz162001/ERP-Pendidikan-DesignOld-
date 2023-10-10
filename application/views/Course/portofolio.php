<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>

<section class="container mt-5 py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12 p-2">
                <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3"><?=$title?></h3>
            </div>
            <div class="col-md-12 p-2">
                <?=$tagline?>
            </div>
        </div>
        <div class="row">

            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="order" id="order">
                        <option value="id_desc" selected>Terbaru</option>
                        <option value="like_desc">Terpopuler</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="kategori" id="kategori">
                        <option value="" selected>==Semua Ketegori==</option>
                        <?php
                        foreach ($kategori['data'] as $key => $val) {
                            echo "<option value='".$val['id_kategori_portofolio']."' > ".$val['nama_kategori_portofolio']." </option>"; 
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="course" id="course">
                        <option value="" selected>==Semua Course==</option>
                        <?php
                        foreach ($course['data'] as $key => $val) {
                            echo "<option value='".$val['id_course']."' > ".$val['nama_course']." ( ".$val['jumlah_portofolio']." ) </option>"; 
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" placeholder="Pencarian">
                </div>
            </div>
        </div>
        <div class="row" id="data">
            <!-- lkosong -->
            <div class="col text-center">
                <div class="lds-facebook"><div></div><div></div><div></div></div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                <div class="alert alert-secondary pointer text-center shadow" id="loadMore" style="display: none;">
                    Load more
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3">
                Showing : <span id="now">0</span> from <span id="row_count">0</span> data(s).
            </div>
        </div>
    </div>
</section>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
function goto(url) {
    window.open(url, "_self");
}

$(document).ready(function() {

    var jumlah = 1;
    var allLoad = 0;
    var pageIni = 1;
    var no = 1;

    showTransaksi();

    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this,
                args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function() {
                callback.apply(context, args);
            }, ms || 0);
        };
    }

    $( "#course" ).change(function() {
        showTransaksi();
    });

    $("#order").change(function() {
        showTransaksi();
    });

    $("#kategori").change(function() {
        showTransaksi();
    });

    $("#loadMore").click(function() {
        // $("#loadMore").css('display', 'none');
        // $( this ).fadeOut( "slow" );
        $("#loadMore").css('display', 'none');
        showTransaksi(pageIni);
    });

    $('#search').keyup(delay(function(e) {
        showTransaksi();
    }, 1000));

    // $(window).scroll(function () {
    //     if ($(window).scrollTop() == $(document).height() - $(window).height() && allLoad == 0 ) {
    //         // showTransaksi(pageIni);
    //         setTimeout(() => { 
    //             $( "#loadMore" ).trigger('click');
    //         }, 1000);
    //     }
    // });

    function showTransaksi(sekarang = 1) {

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>course/show_data_porto',
            dataType: "JSON",
            data: {
                page: sekarang,
                q: $('#search').val(),
                order: $('#order').find(':selected').val(),
                kategori: $('#kategori').find(':selected').val(),
                id_course: $('#course').find(':selected').val()
            },
            beforeSend: function() {
                // html = '<div class="alert alert-info text-center" role="alert">  Mengambil data </div>';
                // $("#data").html(html);
                // html = `<div class="col text-center">
                //             <div class="lds-facebook"><div></div><div></div><div></div></div>
                //         </div>`;
                // $("#data").html(html);

            },
            success: function(data) {
                html = "";
                if (sekarang == 1) {
                    no = 1;
                }
                
                $.each(data.data, function(i, item) {
                    
                    html += `
                    <div class="col-md-4 col-sm-12 d-flex">
                        <div class="card shadow box-shadow pointer mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12"> <img src="<?php echo $this->CI->config->item('bisaUrl')."portofolio/media/foto_portofolio/";?>${item.foto_portofolio}"
                                            class="img-thumbnail" alt="" width="100%"> </div>
                                    <div class="col-md-12 col-sm-12 mt-2">
                                        <h5 class="card-title">${item.nama_portofolio}</h5>

                                        <p class="card-text mt-3">
                                            ${item.nama_portofolio} - <strong> ${item.nama_user} </strong>
                                        </p>

                                        <p class="card-text mt-3 truncate">
                                            ${ limiter( removeTags(item.deskripsi_singkat), 100) }
                                        </p>

                                        <i class="fa fa-heart" aria-hidden="true" style="color:red"></i> <span> ${item.jumlah_like} </span> orang menyukai ini <br>
                                        
                                        <div class="card-text mt-3"> <a class="btn btn-block btn-primary"
                                                href="<?=base_url()?>portofolio/detail/${btoa(item.id_portofolio).replaceAll('=', '')}" target="_blank">
                                                Detail </a> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    `;
                        
                    no++;
                });

                if (sekarang == 1) {
                    $("#data").html(html);
                } else {
                    // $("#data").append(html);
                    $('#data')
                        .append(html);
                }

                jumlah = Math.ceil(data.row_count / data.offset);
                console.log('jumlahRow: ' + jumlah);
                console.log('row_sekarang: ' + pageIni);

                // appPage(jumlah, $("#halaman").find(":selected").val() );
                setTimeout(() => {
                    nodata="";
                    if (jumlah == sekarang) {
                        $("#loadMore").css('display', 'none');
                        console.log(" jumlah = sekarang");
                        pageIni = 1;
                        allLoad = 1;
                    } else if (jumlah == 0) {
                        nodata += '<div class="col-md-12 col-sm-12 text-center">';
                        nodata +=
                            '<h2 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3" style="line-height: 1.6;">Mohon maaf, tidak ada data ditampilkan</h2>';
                        nodata += '</div>';

                        $("#data").html(nodata);
                        $("#loadMore").css('display', 'none');
                        pageIni = 1;
                        console.log(" gak ada data");
                        allLoad = 1;
                    } else {
                        $("#loadMore").css('display', 'block');
                        console.log(" jumlah data masih banyak");
                        if (pageIni<jumlah) {
                            pageIni++;
                        }
                    }
                }, 500);

                $("#now").text(no - 1);
                $("#row_count").text(data.row_count);
            },
            complete: function(data) {

            },
            error: function() {

            }
        });
    }
});
</script>