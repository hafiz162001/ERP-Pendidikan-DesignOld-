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
                        <option value="waktu_desc" selected>Terbaru</option>
                        <option value="waktu_asc">Terlama</option>
                    </select>
                </div>
            </div>

            <div class="col-md-3 col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="bintang" id="bintang">
                        <option value="" selected>Semua</option>
                        <option value="1" >Bintang 1 </option>
                        <option value="2" >Bintang 2 </option>
                        <option value="3" >Bintang 3 </option>
                        <option value="4" >Bintang 4 </option>
                        <option value="5" >Bintang 5 </option>
                    </select>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-12">

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

    $( "#bintang" ).change(function() {
        showTransaksi();
    });

    $("#order").change(function() {
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

    function showTransaksi(sekarang = 1) {

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>testimonial/show_data',
            dataType: "JSON",
            data: {
                page: sekarang,
                q: $('#search').val(),
                order: $('#order').find(':selected').val(),
                rating: $('#bintang').find(':selected').val()
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
                    item.rating = ( item.rating == null ) ? 0 : item.rating;
                    rt = ""; 
                    for (let index = 0; index < 5; index++) {
                         
                        if (index < item.rating) {
                            rt += '<i class="fa fa-star" aria-hidden="true" style="color:gold"></i>';
                        } else {
                            rt+= '<i class="fa fa-star" aria-hidden="true" ></i>';
                        }
                        
                    }
                    html += `
                    <div class="col-sm-12">
                        <div class="card shadow box-shadow pointer mb-2">
                            <div class="card-body">
                                <h5 class="card-title"> 
                                    ${item.nama_course} - ${rt}
                                </h5>
                                                
                                <h6 class="card-subtitle mb-2 text-muted ">${item.nama_user} </h6>
                                <p class="card-text"> ${item.testimonial}</p>
                                <small class="card-text text-muted text-italic" id="jam"> ${formatDate_indo(item.waktu_input)}</small>

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
                            `   <div class="card" style="width:100%;">
                                   <div class="card-body text-center">
                                     <h6 class="card-subtitle mb-2 text-muted">Belum ada review</h6>
                                   </div>
                                </div>`;
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