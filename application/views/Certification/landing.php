<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<section class="container mt-5 py-5">
    <div class="container">
        <div class="row mb-4">
            <div class="col-sm-12 p-2">
                <h3><?=$title?></h3>
            </div>
            <div class="col-md-12 p-2">
                <?=$tagline?>
            </div>
        </div>
        <div class="row">
            
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="kategori" id="kategori">
                        <option value="" selected>==Semua Kategori==</option>
                        <?php foreach ($kategori['data'] as $key) {
                            echo '<option value="'.$key['id_certification_category'].'">'.$key['nama'].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <select class="form-control" name="partner" id="partner">
                        <option value="" selected>==Semua partner==</option>
                        <?php foreach ($partner['data'] as $key) {
                            echo '<option value="'.$key['id_certification_partner'].'">'.$key['nama'].'</option>';
                        }
                        ?>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <input type="text" id="search" class="form-control" placeholder="Pencarian">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col" id="data">
                
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

    $( "#kategori" ).change(function() {
        showTransaksi();
    });

    $( "#partner" ).change(function() {
        showTransaksi();
    });

    $( "#loadMore" ).click(function() {
        // $("#loadMore").css('display', 'none');
        $( this ).fadeOut( "slow" );
        showTransaksi(pageIni);
    });

    $('#search').keyup(delay(function (e) {
       showTransaksi();
   }, 1000));

    function showTransaksi(sekarang=1){
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>certification/show_data', 
            dataType : "JSON",
            data:{
                page:sekarang,
                q:$('#search').val(),
                tipe:<?=$tipe;?>,
                kategori: $('#kategori').find(':selected').val(),
                partner: $('#partner').find(':selected').val()
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
                    if (item.harga == 0) {
                        harga = '<span class="badge badge-success p-2"> FREE </span>';
                        bgStyle = ' style="border: 3px solid #008514" ';
                        
                    } else {
                        harga = '                   Rp '+item.harga.toLocaleString()+'';
                        bgStyle = "";
                    }

                    html += '<div class="card shadow box-shadow pointer mb-2" '+bgStyle+' onclick=goto("<?php echo base_url(); ?>certification/detail/'+item.id_certification+'")>';
                    html += '    <div class="card-body">';
                    html += '        <div class="row">';
                    html += '            <div class="col-md-3 col-sm-12">';
                    html += '                <img src="<?php echo $this->CI->config->item('bisaUrl')."certification/media/foto_certification/";?>'+item.foto+'" class="img-thumbnail" alt="" width="100%">';
                    html += '            </div>   ';
                    html += '            <div class="col-md-9 col-sm-12">';
                    html += '                <h5 class="card-title">'+item.nama+'</h5>';
                    html += '                <div class="subtitle font-weight-bold">';
                    html += '                    Offered By: ';
                    html += '                </div>';
                    html += '                <p class="card-text">';
                    html += '                    '+item.nama_partner+' <img src="<?php echo $this->CI->config->item('bisaUrl')."certification/media/foto_partner/";?>'+item.foto_partner+'" alt="'+item.nama_partner+'" style="';
                    html += '                    height: 50px;';
                    html += '                    float: right;';
                    html += '                    position: relative;">';
                    html += '                </p>';
                    // html += '                <div class="subtitle font-weight-bold">';
                    // html += '                    Type / Rating '; 
                    // html += '                </div>';
                    // html += '                <p class="card-text">';
                    // html += '                    <span class="badge badge-warning p-1" > Professional </span> <span class="badge badge-primary">';
                    // html += '                        <i class="fa fa-star yellow" aria-hidden="true"></i>';
                    // html += '                        <i class="fa fa-star yellow " aria-hidden="true"></i>';
                    // html += '                         <i class="fa fa-star yellow" aria-hidden="true"></i>';
                    // html += '                        <i class="fa fa-star-half yellow" aria-hidden="true"></i>';
                    // html += '                        <i class="fa fa-star" aria-hidden="true"></i>';
                    // html += '                    </span> <span class="font-weight-bold"> ( 3.5 ) </span>';
                    // html += '               </p>';
                    html += '               <div class="subtitle font-weight-bold">';
                    html += '                    Price';
                    html += '              </div>';
                    html += '               <div class="card-text" style="font-weight:bold">';
                    html += harga;                   
                    html += '                </div>';
                    html += '          </div>         ';
                    html += '       </div>';
                    html += '   </div>';
                    html += '</div>';
                    no++;
                });

                if (sekarang == 1) {
                    $("#data").html($(html)
                        .hide()
                        .fadeIn(1000)
                    );
                } else {
                    // $("#data").append(html);

                    $('#data')
                    .append($(html)
                        .hide()
                        .fadeIn(2000)
                    );
                }
                
                jumlah = Math.ceil( data.row_count / data.offset);
                console.log('jumlahRow: '+jumlah );
                console.log('row_sekarang: '+pageIni);

                // appPage(jumlah, $("#halaman").find(":selected").val() );
                if(jumlah == sekarang){
                    $("#loadMore").css('display', 'none');
                    pageIni = 1;
                } else if(jumlah == 0) {
                    nodata = '<h2 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3" style="line-height: 1.6;">Mohon maaf, tidak ada data ditampilkan<br>';
                    nodata += '<br>Sambil menunggu info selanjutnya silahkan cek<br>';
                    nodata += '<a class="badge badge-pill badge-success" href="<?=base_url()?>course">Free Course</a> atau <a class="badge badge-pill badge-warning" ';
                    nodata += 'href="<?=base_url()?>course/master">Master Class</a></h2>';
                    $("#data").html(nodata);
                    $("#loadMore").css('display', 'none');
                    pageIni = 1;
                } else {    
                    $("#loadMore").css('display', 'block');
                    pageIni++;
                }   


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