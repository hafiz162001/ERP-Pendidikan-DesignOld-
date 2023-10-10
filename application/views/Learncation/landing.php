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
            
            <div class="col-md-4 col-sm-12">
                <!-- <div class="form-group">
                    <select class="form-control" name="kategori" id="kategori">
                        <option value="" selected>==Semua Kategori==</option>
                        <?php foreach ($kategori['data'] as $key) {
                            echo '<option value="'.$key['id_certification_category'].'">'.$key['nama'].'</option>';
                        }
                        ?>
                    </select>
                </div> -->
            </div>

            <div class="col-md-4 col-sm-12">
                <!-- <div class="form-group">
                    <select class="form-control" name="partner" id="partner">
                        <option value="" selected>==Semua partner==</option>
                        <?php foreach ($partner['data'] as $key) {
                            echo '<option value="'.$key['id_certification_partner'].'">'.$key['nama'].'</option>';
                        }
                        ?>
                    </select>
                </div> -->
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" placeholder="Pencarian">
                </div>
            </div>
        </div>
        <div class="row" id="data">
            <!-- <div class="col" id="data">
                
            </div> -->
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
function goto(url){
    window.open(url, "_self");
}

$(document).ready(function(){

    var jumlah = 1;
    var pageIni = 1;
    var no = 1;
    
    showTransaksi();
    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
            callback.apply(context, args);
            }, ms || 0);
        };
    }

    // $( "#kategori" ).change(function() {
    //     showTransaksi();
    // });

    // $( "#partner" ).change(function() {
    //     showTransaksi();
    // });

    $( "#loadMore" ).click(function() {
        // $("#loadMore").css('display', 'none');
        // $( this ).fadeOut( "slow" );
        showTransaksi(pageIni);
    });

    $('#search').keyup(delay(function (e) {
       showTransaksi();
   }, 1000));

    function showTransaksi(sekarang=1){
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>learncation/get_data', 
            dataType : "JSON",
            data:{
                page:sekarang,
                q:$('#search').val()
            },
            beforeSend: function(){
                // html = '<div class="alert alert-info text-center" role="alert">  Mengambil data </div>';
                // $("#data").html(html);
            },
            success: function(data){ 
                html = "";
                if(sekarang==1){
                    no = 1;
                }
                $.each(data.data, function(i, item) {
                    if (item.harga_total_weekend == 0) {
                        harga = '<span class="badge badge-success p-2"> FREE </span>';
                        
                    } else {
                        harga = '                   Rp '+item.harga_total_weekend.toLocaleString()+'';
                    }
                    
                    text = $('<input/>').html(item.deskripsi_learncation).text();
                    
                    if (text.length > 100) {
                        text = text.substr(0, 100)+ ".."; 
                    } else {
                        text = text;
                    }

                    html += '<div class="col-md-4 col-sm-12">';     
                    html += '<div class="card shadow box-shadow pointer mb-2" >';
                    html += '    <div class="card-body">';
                    html += '        <div class="row">';
                    html += '            <div class="col-md-12 col-sm-12 hoverImage">';
                    html += '                <img src="<?php echo $this->CI->config->item('bisaUrl')."learncation/media/poster_learncation/";?>'+item.foto_learncation+'" class="img-thumbnail" alt="" width="100%">';
                    html += '            </div>   ';
                    html += '            <div class="col-md-12 col-sm-12 mt-2">';
                    html += '                <h5 class="card-title">'+item.nama_learncation+'</h5>';
                    html += '                <div class="subtitle font-weight-bold">';
                    html += '                    Lokasi: ';
                    html += '                </div>';
                    html += '                <p class="card-text mb-3">';
                    html += '                    '+item.nama_principal+' ';
                    html += '                </p>';
                    html += '               <div class="card-text mt-4" style="text-align: justify" >';
                    html += '                   '+text+' '                
                    html += '                </div>';
                    // html += '               <div class="mt-3">';
                    // html += '                   <i class="fas fa-user" title="peserta course"></i> Jumlah Peserta:  '+item.number_of_students+' <br> <i class="fas fa-certificate" title="modul"></i> Total Modul: '+item.number_of_syllabus+' Modul ';
                    // html += '              </div>';
                    html += '               <div class="subtitle font-weight-bold mt-3">';
                    html += '                    Price';
                    html += '              </div>';
                    html += '               <div class="card-text" style="font-weight:bold">';
                    html += harga;                   
                    html += '                </div>';
                    html += '               <div class="card-text mt-3" >';
                    html += '                   <a class="btn btn-block btn-primary" href="<?=base_url()?>learncation/detail/'+item.id_learncation+'" target="_blank"> Lihat Detail </a> '                
                    html += '                </div>';
                    html += '          </div>         ';
                    html += '       </div>';
                    html += '   </div>';
                    html += '</div>';
                    html += '</div>';
                    no++;
                });

                if (sekarang == 1) {
                    $("#data").html(html);
                } else {
                    // $("#data").append(html);
                    $('#data')
                    .append(html);
                }
                
                jumlah = Math.ceil( data.row_count / data.offset);
                console.log('jumlahRow: '+jumlah );
                console.log('row_sekarang: '+pageIni);

                // appPage(jumlah, $("#halaman").find(":selected").val() );
                setTimeout(() => {
                    if(jumlah == sekarang){
                    $("#loadMore").css('display', 'none');
                    console.log(" jumlah = sekarang");
                    pageIni = 1;
                    } else if(jumlah == 0) {
                        nodata += '<div class="col-md-4 col-sm-12">';  
                        nodata = '<h2 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3" style="line-height: 1.6;">Mohon maaf, tidak ada data ditampilkan<br>';
                        nodata += '<br>Sambil menunggu info selanjutnya silahkan cek<br>';
                        nodata += '<a class="badge badge-pill badge-success" href="<?=base_url()?>course">Free Course</a> atau <a class="badge badge-pill badge-warning" ';
                        nodata += 'href="<?=base_url()?>course/master">Master Class</a></h2>';
                        nodata += '</div>';

                        $("#data").html(nodata);
                        $("#loadMore").css('display', 'none');
                        pageIni = 1;
                        console.log(" gak ada data");

                    } else {    
                        $("#loadMore").css('display', 'block');
                        console.log(" jumlah data masih banyak");
                        pageIni++;
                    }
                }, 500);

                $("#now").text(no-1);
                $("#row_count").text(data.row_count);
            },
            complete:function(data){
            
            },
            error: function(){
                                
            }
        });  
    }
});

</script>