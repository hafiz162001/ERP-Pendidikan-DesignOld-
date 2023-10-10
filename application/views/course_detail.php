<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();

?>
<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 0.7 ">
  <span id="msg"></span>
</div>
<section id="innerTab">
    <div class="clearfix mt-5 mb-5">&nbsp;</div>
    <div class="container">
            <div class="row">
                <!-- BANNER -->
                <div class="col-lg-9 mb-2">
                    <div class="card" style="border-radius:3px;">
                        <img class="card-img-top mx-auto" src="<?php 
                        // echo $this->CI->config->item('bisaUrl')."course/media/".$data['data'][0]['photo'];
                        echo $this->mylibrary->UrlMedia('course',$data['data'][0]['photo']);
                        ?>" style="width:50%;">

                        <div class="card-body py-4 px-4">
                            <div class="montserrat-600 mb-1 text-size-4"> <strong> <?=$data['data'][0]['name'];?> </strong> </div>                          
                                <p class="card-text mt-3 roboto-300 text-justify text-size-5" id="deskripsi">
                                    <?=$data['data'][0]['description'];?>
                                </p>
                                <hr>
                                <p>
                                    <?=$data['data'][0]['info'];?>
                                </p>
                        </div>
                    </div>
                </div>
                <!-- BANNER -->
                <div class="col-lg-3" >
                        <div class="card " style="border-radius:3px">
                            <div class="card-body text-center">
                                <h5 class="montserrat-500">Pendaftaran</h5>
                                <?php
                                if($this->session->userdata('token') == ""){ 
                                    echo "<span style='color:red'>Silahkan login untuk daftar</span>";
                                } else {
                                ?>
                                <a id="daftareventberbayar2" href="#" class="btn btn-hover btn-primary px-4 py-2 text-size-1"><i class="fas fa-calendar-alt"></i> Daftar Course</a>  

                                <?php } ?>                           
                            </div>
                        </div>
                                        
                    <div class="card mt-2" style="border-radius:3px">
                        <div class="card-body">
                            <h5 class="montserrat-500 text-center">Detail Course</h5>
                            <ul class="list-unstyled mt-4">
                                <li class="mb-4">
                                    <h6 class="montserrat-600"><i class="fas fa-user"></i> Pembuat <span class="float-right"> <img src="<?=$this->mylibrary->UrlMedia('client',$data['data'][0]['photo_client']);?>" alt="" style="width: 30px;"></span></h6>
                                    <span class="montserrat-400"><?=$data['data'][0]['client_name'];?> </span>
                                    <br>
                                    
                                </li>
                                    <li class="mt-4">
                                        <h6 class="montserrat-600"><i class="fas fa-certificate"></i> Harga Course</h6>
                                        <span class="montserrat-400"> 

                                        <?php 
                                        if($data['data'][0]['price'] + $data['data'][0]['price_bisaai'] - $data['data'][0]['price_discount'] == 0) { echo "<strong>FREE</strong>"; } else {?>
                                            Rp.<?=number_format( $data['data'][0]['price'] + $data['data'][0]['price_bisaai'] - $data['data'][0]['price_discount'] );?> 
                                        <?php } ?>    
                                        </span>
                                    </li>
                                    
                                        <li class="mt-4">
                                            <h6 class="montserrat-600"><i class="fas fa-history"></i> Transaksi</h6>
                                            <a href="<?=base_url('transaction_history')?>">lihat transaksi</a>
                                        </li>
                                    
                                <li class="mt-4">
                                    <h6 class="montserrat-600"><i class="fas fa-book"></i> Jumlah Silabus</h6>
                                    <?=$data['data'][0]['number_of_syllabus'];?>
                                </li>
                                <li class="mt-4">
                                    <h6 class="montserrat-600"><i class="fas fa-users"></i> Mengikuti</h6>
                                    <?=$data['data'][0]['number_of_students'];?>

                                </li>
                                <!-- <li class="mt-4">
                                    <h6 class="montserrat-600"><i class="fas fa-book"></i> Total Course</h6>
                                    <?=$data['data'][0]['total_course'];?>                            
                                </li> -->

                            </ul>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    

</section>

<section>
    <div class="container">
        <div class="row" id="data">

        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row" id="data-testi">

        </div>
    </div>
</section>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); 

?>
<script>
$(document).ready(function(){
    $(document).attr("title", "Bisa Design - Course: <?=$data['data'][0]['name'];?>");
    <?php if ($id_cus_course != null) { ?>
        $("#daftareventberbayar2").click(function(){
            window.location = "<?=base_url('')?>my_course/detail/<?=$tipe?>/<?=$id_cus_course;?>" 
        });

        $("#daftareventberbayar2").removeClass("btn-primary").addClass("btn-success");
        $("#daftareventberbayar2").text("Masuk Course");
        
    <?php } else { ?>
        $("#daftareventberbayar2").click(function(){
            window.location = "<?=base_url('')?>course/pembelian/<?=str_replace("=","",base64_encode($data['data'][0]['id_course']));?>" 
        });

    <?php } ?>
    showTesti();
    $("#loadMore").click(function() {
        // $("#loadMore").css('display', 'none');
        // $( this ).fadeOut( "slow" );
        $("#loadMore").css('display', 'none');
        showTesti(pageIni);
    });

    function showTesti(sekarang = 1) {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>testimonial/show_data',
            dataType: "JSON",
            data: {
                page: sekarang,
                id_course: '<?=$data['data'][0]['id_course']?>'
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
                        <div class="card pointer mb-2">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12 col-md-3">
                                        <h6 class="card-subtitle mb-2 text-muted ">${item.nama_user} </h6>
                                    </div>
                                    <div class="col-sm-12 col-md-9">
                                        <h5 class="card-title float-right"> 
                                            ${rt}
                                        </h5>
                                    </div>
                                </div>
                                <p class="card-text"> ${item.testimonial}</p>
                                <small class="card-text text-muted text-italic" id="jam"> ${formatDate_indo(item.waktu_input)}</small>

                              </div>
                        </div>
                    </div>
                    `;
                        
                    no++;
                });

                if (sekarang == 1) {
                    $("#data-testi").html(html);
                } else {
                    // $("#data").append(html);
                    $('#data-testi')
                        .append(html);
                }

                jumlah = Math.ceil(data.row_count / data.offset);

                // appPage(jumlah, $("#halaman").find(":selected").val() );
                setTimeout(() => {
                    nodata="";
                    if (jumlah == sekarang) {
                        $("#loadMore").css('display', 'none');
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

                        $("#data-test").html(nodata);
                        $("#loadMore").css('display', 'none');
                        pageIni = 1;
  
                        allLoad = 1;
                    } else {
                        $("#loadMore").css('display', 'block');
     
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
    showTransaksi();
    function showTransaksi() {
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url(); ?>course/show_related_portofolio/<?=$data['data'][0]['id_course']?>',
            dataType: "JSON",
            beforeSend: function() {

            },
            success: function(data) {
                html = "";
                no = 0;
                $.each(data.data, function(i, item) {
                    if (no < 3) {
                        if(no==0){
                            html += `
                            <div class="col-sm-12 mt-2">
                                <h4>Portfolio yang dihasilkan peserta terkait course ini</h4>
                            </div>
                            `;
                        }
                        html += `
                        <div class="col-md-12 col-lg-4 col-sm-12 d-flex">
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

                


                jumlah = Math.ceil(data.row_count / data.offset);
 
                if (jumlah == 0) {
                    html += `
                            <div class="col-sm-12 mt-2 text-center">
                                <h4>Belum ada portfolio yang dihasilkan peserta terkait course ini</h4>
                            </div>
                            `;

                    html += `
                        <div class="col-sm-12 mt-2 mb-5 text-center">
                        <a href="<?=base_url()?>portofolio" target="_blank" class="btn btn-primary px-4 py-2" style="width: 100%; max-width: 300px" >Temukan portofolio lainnya</a> 
                        </div>
                    `;

                        $("#data").html(html);
                } else {
                    html += `
                        <div class="col-sm-12 mt-2 mb-5 text-center">
                        <a href="<?=base_url()?>portofolio" target="_blank" class="btn btn-primary px-4 py-2" style="width: 100%; max-width: 300px" >Lihat Portfolio lainnya</a> 
                        </div>
                    `;
                    $("#data").html(html);
                }
            },
            complete: function(data) {

            },
            error: function() {

            }
        });
        }
    
});
</script>

