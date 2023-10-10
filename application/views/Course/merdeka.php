<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>

<section class="bg-light mt-5 py-5">
    <div class="container mt-2">
        <img src="<?= base_url('assets/img/2022/kampusmerdeka_small.png') ?>"  style="width: 100% ;max-width: 200px">  
        <div class="row d-flex">
            <div class="col-sm-12 col-md-6">
            <h3>Belajar di BISA Design Academy selama 1 Semester, konversi sebanyak 20 SKS di program Kampus Merdeka</h3> 
                <p class="mt-4">
                Kampus Merdeka merupakan bagian dari kebijakan Merdeka Belajar oleh Kementerian Pendidikan, Kebudayaan, Riset, dan Teknologi Republik Indonesia yang memberikan kesempatan bagi mahasiswa/i untuk mengasah kemampuan sesuai bakat dan minat dengan terjun langsung ke dunia kerja sebagai persiapan karier masa depan.
                </p>
                <p class="mt-4">
                BISA Design Academy berkomitmen untuk dapat melatih talent - talent digital pada bidang Desain dan UI/UX agar siap bekerja dan memiliki skill serta kompetensi digital. Ikuti program Kampus Merdeka sekarang dan dapatkan skills serta kompetensi digital!

                </p>
                 
                <a target="_blank" class="btn btn-secondary" href="https://kampusmerdeka.kemdikbud.go.id/program/studi-independen" role="button"> Daftar Studi Independen Bersertifikat (SIB) </a>
                <br>
                <br>
                <a target="_blank" class="btn btn-primary" href="https://kampusmerdeka.kemdikbud.go.id/program/magang" role="button"> Pendaftaran Magang Bersertifikat (MB) </a>
            </div>

            <div class="col-sm-12 col-md-6 d-none d-sm-none d-md-block align-content-end">
                <img src="<?= base_url('assets/img/2022/girl2_small.png') ?>"  style="width: 100%">  
            </div>
        </div>
       
    </div>
</section>

<?php $this->load->view('fitur-clients'); ?>

<section class="bg-light mt-2 py-5">
    <div class="container">
        <h5>BISA Design Academy menjalankan Program studi Independen Bersertifikat dengan skema sebagai  berikut:</h5>
        <div class="row">
            <div class="col-sm-12 pl-5">
                <strong><i class="fa fa-check" aria-hidden="true"></i> Pembelajaran Terjadwal</strong>
                <p>
                Peserta mengikuti kegiatan belajar melalui Course yang tersedia di MOOC BISA Design Academy dan bertatap muka langsung secara online dengan pengajar. Pembelajaran terjadwal akan diampu oleh praktisi dan akademisi. Pembelajaran terjadwal ada yang bersifat WAJIB dan ada yang bersifat PILIHAN.
                </p>
            </div>
            <div class="col-sm-12 pl-5">
                <strong><i class="fa fa-check" aria-hidden="true"></i> Pembelajaran Mandiri</strong>
                <p>
                Pembelajaran dilakukan di menu Free Course atau Master Class melalui platform BISA Design Academy. Pembelajaran dibantu oleh instruktur virtual dan Penilaian dilakukan secara otomatis dari sistem platform online BISA Design Academy. Pembelajaran mandiri juga dilakukan untuk mendukung peserta dalam mengambil Sertifikasi Kompetensi sesuai dengan acuan SKKNI di mitra LSP mitra BISA Design Academy. Pembelajaran Mandiri dapat dilaksanakan selama pelaksanaan Studi Independen Bersertifikat.
                </p>
            </div>
            <div class="col-sm-12 pl-5">
                <strong><i class="fa fa-check" aria-hidden="true"></i> Pembelajaran Tamu</strong>
                <p>
                Pembelajaran dilakukan dengan mengundang rekan asosiasi, industri mitra dari BISA Design Academy. Model pembelajaran adalah kuliah umum (general lecturer) setiap 1 minggu 1 kali selama 4 bulan

                </p>
            </div>
            <div class="col-sm-12 pl-5">
                <strong><i class="fa fa-check" aria-hidden="true"></i> Proyek Independen</strong>
                <p>
                Penyelesaian Project Independen yang dibantu oleh mentor BISA Design. Setiap peserta akan diberikan proyek independen oleh mentor yang akan diselesaikan dalam jangka waktu 1 bulan.

                </p>
            </div>
            <div class="col-sm-12 pl-5">
                <strong><i class="fa fa-check" aria-hidden="true"></i> Sertifikasi Kompetensi</strong>
                <p>
                Seluruh peserta didorong untuk mendapatkan Sertifikasi Kompetensi di LSP Mitra BISA Design Academy yang berkaitan dengan okupansi/kluster dari topik yang diambil pada Studi Independen Bersertifikat. Setiap peserta akan diberikan topik persiapan sertifikasi sebelum melakukan sertifikasi.

            </div>
            
        </div>
    </div>
</section>

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
        <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-center pb-3">Tata Cara Pendaftaran MSIB BISA Design Academy</h3>
        <div class="card shadow box-shadow">
          <div class="card-body">
            <p class="card-text">
                <ul>
                    <li>
                        Mahasiswa semester 5 keatas dari perguruan tinggi seluruh Indonesia dibawah naungan DIKTI dapat mendaftar program Kampus Merdeka
                    </li>
                    <li>
                        Mekanisme pendaftaran dapat melalui link sebagai berikut:  
                    </li>
                        <br>
                        <p>
                            <strong>Pendaftaran Studi Independen Bersertifikat (SIB)</strong> <br>
                            <a href="https://kampusmerdeka.kemdikbud.go.id/program/studi-independen"> https://kampusmerdeka.kemdikbud.go.id/program/studi-independen </a>
                        </p> 
                        <p>
                            <strong>Pendaftaran Magang Bersertifikat (MB)</strong> <br>
                            <a href="https://kampusmerdeka.kemdikbud.go.id/program/magang"> https://kampusmerdeka.kemdikbud.go.id/program/magang </a>
                        </p>    
                    <li>
                        Pilih mitra BISA Design Academy pada kolom pencarian.
                    </li>
                    <li>
                        Ikuti Proses Seleksi
                    </li>
                    <li>
                        Jika anda diterima, anda akan dihubungi oleh pihak BISA Design Academy
                    </li>
                </ul>
            </p>
          </div>
        </div>
    </div>
</section>


<section>
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center text-hitam-custom">
                <h2 class="poppins-600 text-shadow">Portfolio Mahasiswa Peserta Kampus Merdeka MSIB BISA Design Academy</h2>
                <p class="text-left">Mahasiswa Kampus Merdeka MSIB BISA Design Academy membuat berbagai proyek / produk yang menghasilkan portfolio. Berikut merupakan list portfolio yang dibuat mahasiswa</p>
            </div>
        </div>
        <div class="row" id="porto">
            
        </div>
        <div class="row">
            <div class="col-sm-12 mt-5 mb-5 text-center">
            <a href="<?=base_url()?>portofolio" target="_blank" class="btn btn-primary px-4 py-2" style="width: 100%; max-width: 300px" >Lihat Semua Portofolio</a> 
            </div>
        </div>
    </div>
</section>

<section class="mt-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col text-center text-hitam-custom">
                <h2 class="poppins-600 text-shadow">Portfolio Peserta Mengisi Webinar Sebagai Narasumber</h2>
                <p class="text-left">Mahasiswa Kampus Merdeka MSIB BISA Design Academy mengisi webinar sebagai narasumber melalui platform TAMPIL.ID untuk berbagai topik bidang AI-Hacker, AI-Hipster dan AI-Hustler. Berikut merupakan list webinar dimana peserta MSIB Bisa AI Academy sebagai narasumber</p>
            </div>
        </div>
        <div class="row" id="event">
            
        </div>
        <div class="row">
            <div class="col-sm-12 mt-5 mb-5 text-center">
            <a href="https://tampil.id/event" target="_blank" class="btn btn-primary px-4 py-2" style="width: 100%; max-width: 300px" >Lihat Semua Event</a> 
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

    setTimeout(() => {
        showPorto();
        showEvent();
    }, 1000);

    function showPorto(sekarang = 1) {

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>course/show_data_porto',
            dataType: "JSON",
            data: {
                page: sekarang,
                order: 'like_desc'
            },
            beforeSend: function() {

            },
            success: function(data) {
                html = "";
                if (sekarang == 1) {
                    no = 1;
                }
                $.each(data.data, function(i, item) {
                    if (no < 4) {
                        
                     
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

                                        <p class="card-text mt-3">
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
                        
                    }
                    no++;
                });
                $("#porto").html(html);
            },
            complete: function(data) {

            },
            error: function() {

            }
        });
    }

    function showEvent() {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url(); ?>course/show_event',
            beforeSend: function() {

            },
            success: function(data) {
                dataku = "";

                data = JSON.parse(data);

                $.each(data.data, function(i, item) {  
                    // 1=gratis, 2=gratis&sertifikat, 3=gratis&bayar sertifikat, 4=event bayar & dapat sertifikat, 5=bayar, dapat sertif, dan merchandise, 6:1,2,3
                    harga_m = harga_bisa = harga_sertifikat = 0;

                    if(!(item.tipe_event == 1 || item.tipe_event == 2)){
                        harga_m = (item.harga_merchandise == null) ? 0 : item.harga_merchandise;
                        harga_bisa = (item.harga_bisaai == null) ? 0 : item.harga_bisaai;
                        harga_sertifikat = (item.harga_sertifikat == null) ? 0 : item.harga_sertifikat;
                    }
                    jenis = "";
                    switch (item.tipe_event) {
                        case 1:
                            jenis = "Gratis"
                            break;
                        case 2:
                            jenis = "Gratis & Sertifikat"
                            break;
                        case 3:
                            jenis = "Gratis & Sertfikat Berbayar"
                            break;
                        case 4:
                            jenis = "Event Berbayar & Sertifikat"
                            break;
                        case 5:
                            jenis = "Berbayar + Sertfikat dan Merchendise"
                            break;
                        default:
                            jenis = "Gratis"
                            break;
                    }

                    jumlah = harga_m + harga_bisa + harga_sertifikat;

                    harga = (jumlah == 0) ? "Gratis": "Rp "+ jumlah.toLocaleString();
                    
                    dataku += `
                        
                        <div style="cursor:pointer" class="col-sm-12 col-md-4 mt-2" onclick="goto('<?=base_url()?>course/redirect/${item.id_event}')">
                            <div class="card shadow-sm" style="width:100%">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-12 ">
                                            <img src="<?=$this->config->item('eventImage')?>${item.banner}" class="card-img-top" alt="...">
                                        </div>
                                        <div class="col-sm-12 ">
                                            <h5 class="card-title">${item.judul}</h5>
                                            <h5 class="card-subtitle mb-2 text-orange ">Offer By </h5>
                                            <p> ${item.nama_partner} </p>
                                            <h5 class="card-subtitle mb-2 text-orange ">Jenis </h5>
                                            <p> <span style="background: #1e266d; color: white; padding: 3px 7px; border-radius: 3px"> ${jenis} </span> </p>
                                            <h5 class="card-subtitle mb-2 text-orange ">Harga </h5>
                                            <p class="card-text"> ${harga}</p>
                                                
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                    `;
                });

                console.log(dataku);
                $("#event").html(dataku);
            },
            complete: function(data) {

            },
            error: function() {

            }
        });
    }



    function showTransaksi(sekarang=1){
        
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>course/show_data', 
            dataType : "JSON",
            data:{
                page:sekarang,
                q:'Kecerdasan Artifisial',
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