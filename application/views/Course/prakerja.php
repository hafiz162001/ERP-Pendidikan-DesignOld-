<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>

<section class="bg-light mt-5 py-5">
    <div class="container mt-2">
        <img src="<?= base_url('assets/img/2022/Logo-kartu-prakerja.png') ?>"  style="width: 100% ;max-width: 200px">  
        <div class="row d-flex">
            <div class="col-sm-12 col-md-6">
            <h3>Belajar Desain dan UI/UX di BISA Design Academy melalui Kartu Prakerja</h3> 
                <p class="mt-4">
                Program Kartu Prakerja adalah program pengembangan kompetensi kerja dan kewirausahaan yang ditujukan untuk pencari kerja, pekerja/buruh yang terkena pemutusan hubungan kerja, dan/atau pekerja/buruh yang membutuhkan peningkatan kompetensi, termasuk pelaku usaha mikro dan kecil. Program ini didesain sebagai sebuah produk dan dikemas sedemikian rupa agar memberikan nilai bagi pengguna sekaligus memberikan nilai bagi sektor swasta.
                </p>
                <p class="mt-4">
                Jalan digital melalui marketplace dipilih untuk memudahkan pengguna mencari, membandingkan, memilih dan memberi evaluasi. Hanya dengan cara ini, produk bisa terus diperbaiki, tumbuh dan relevan. Menggandeng pelaku usaha swasta, program ini adalah wujud kerjasama pemerintah dan swasta dalam melayani masyarakat dengan semangat gotong royong demi SDM unggul, Indonesia maju.
                </p>
                <p class="mt-4">
                BISA Design Academy berkomitmen untuk dapat melatih talent - talent digital pada bidang Desain dan UI/UX agar siap bekerja dan memiliki skill serta kompetensi digital. Ikuti program Kartu Prakerja sekarang dan dapatkan skills serta kompetensi digital!
                </p>

                <a target="_blank" class="btn btn-secondary" href="https://app.karier.mu/mitra/bisa-al-academy" role="button"> Daftar Sekarang</a>
            </div>

            <div class="col-sm-12 col-md-6 d-none d-sm-none d-md-block align-content-end">
                <img src="<?= base_url('assets/img/2022/girl.png') ?>"  style="width: 100%">  
            </div>
        </div>
       
    </div>
</section>

<?php $this->load->view('fitur-clients'); ?>

<section class="container mt-2 py-5">
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
                <div class="form-group">
                    <select class="form-control" name="order" id="order">
                        <option value="baru" selected>Terbaru</option>
                        <option value="populer">Terpopuler</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                 
            </div>

             
        </div>
        <div class="row" id="data">
       
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


<section class="mt-3 mb-5">
    <div class="container">
        <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3">Tata Cara Pendaftaran</h3>
        <div class="card shadow box-shadow">
          <div class="card-body">
            <p class="card-text">
                <ul>
                    <li>
                        Warga Negara Indonesia Berusia 18 Tahun keatas yang tidak sedang menempuh pendidikan formal dapat mendaftar di Kartu Prakerja pada alamat <a href="https://www.prakerja.go.id/" target="_blank"> https://www.prakerja.go.id/  </a>
                    </li>
                    <li>
                    Daftar pelatihan BISA Design Academy melalui Platform Prakerja <img src="<?= base_url('assets/img/2022/karir_kecil.png') ?>"  style="width: 100px">  
                    </li>
                    <li>
                        Beli pelatihan BISA Design Academy di <img src="<?= base_url('assets/img/2022/karir_kecil.png') ?>"  style="width: 100px">  melalui alamat <a href="https://app.karier.mu/mitra/bisa-al-academy" target="_blank"> https://app.karier.mu/mitra/bisa-al-academy </a>. Gunakan saldo prakerja anda dan pilih program Pelatihan BISA Design Academy. Dapatkan token / kode dari <img src="<?= base_url('assets/img/2022/karir_kecil.png') ?>"  style="width: 100px">  untuk menukarkan di pelatihan BISA Design Academy.
                    </li>
                    <li>
                        Pilih program pelatihan Prakerja yang tersedia di <a href="https://bisa.ai/prakerja" target="_blank"> https://bisa.ai/prakerja</a>. Ketika Checkout, tukarkan kode/token anda.
                    </li>
                    <li>
                        Mulai Belajar sekarang
                    </li>
                </ul>
            </p>
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
    var allLoad = 0;
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

    $( "#order" ).change(function() {
        showTransaksi();
    });

    $( "#loadMore" ).click(function() {
        // $("#loadMore").css('display', 'none');
        // $( this ).fadeOut( "slow" );
        showTransaksi(pageIni);
    });

    $('#search').keyup(delay(function (e) {
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

    function showTransaksi(sekarang=1){
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>course/show_data', 
            dataType : "JSON",
            data:{
                page:sekarang,
                q:'bauran',
                order:$('#order').find(':selected').val(),
                tipe: 5
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
                    if (item.price == 0) {
                        harga = '<span class="badge badge-success p-2"> FREE </span>';
                        
                    } else {
                        harga = '                   Rp '+item.price.toLocaleString()+'';
                    }
                    

                    html += '<div class="col-md-4 col-sm-12">';     
                    html += '<div class="card shadow box-shadow pointer mb-2" >';
                    html += '    <div class="card-body">';
                    html += '        <div class="row">';
                    html += '            <div class="col-md-12 col-sm-12">';
                    html += '                <img src="<?php echo $this->CI->config->item('bisaUrl')."course/media/";?>'+item.photo+'" class="img-thumbnail" alt="" width="100%">';
                    html += '            </div>   ';
                    html += '            <div class="col-md-12 col-sm-12 mt-2">';
                    html += '                <h5 class="card-title">'+item.name+'</h5>';
                    html += '                <div class="subtitle font-weight-bold">';
                    html += '                    Offered By: ';
                    html += '                </div>';
                    html += '                <p class="card-text mb-3">';
                    html += '                    '+item.client_name+' <img src="<?php echo $this->CI->config->item('bisaUrl')."client/media/";?>'+item.photo_client+'" alt="'+item.nama_partner+'" style="';
                    html += '                    height: 50px;';
                    html += '                    float: right;';
                    html += '                    position: relative;">';
                    html += '                </p>';
                    html += '               <div class="card-text mt-4" style="text-align: justify" >';
                    // html += '                   '+text+' ';                
                    html += '                </div>';
                    html += '               <div class="mt-3">';
                    html += '                   <i class="fas fa-user" title="peserta course"></i> Jumlah Peserta:  '+item.number_of_students+' <br> <i class="fas fa-certificate" title="modul"></i> Total Modul: '+item.number_of_syllabus+' Modul ';
                    html += '              </div>';
                    html += '               <div class="subtitle font-weight-bold mt-3">';
                    html += '                    Price';
                    html += '              </div>';
                    html += '               <div class="card-text" style="font-weight:bold">';
                    html += harga;                   
                    html += '                </div>';
                    html += '               <div class="card-text mt-3" >';
                    html += '                   <a class="btn btn-block btn-primary" href="<?=base_url()?>course/detail/'+btoa(item.id_course).replaceAll('=', '')+'/5" target="_blank"> Daftar </a> '                
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
                    allLoad = 1;
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
                        allLoad = 1;
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