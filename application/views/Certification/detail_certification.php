<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
$flag = 'true';
$kodeUnik = $kode_unik;
foreach ($course['data'] as $key => $value) : 
    if(isset($value['status'])) { 
        if ($value['status'] != "PASS") {
            $flag = 'false';
        } else {
            $flag = 'true';
        }
    } else {
        $flag = 'false';
    }
endforeach;

if(count($course['data']) == "0"){
    $flag = 'false';
}

if ($cert['data'][0]['is_diskon'] == "1") {
    $harga =  $cert['data'][0]['harga_diskon'];
} else {
    $harga =  $cert['data'][0]['harga'];
}

$hargaPlus = $harga + $kodeUnik;
// init gak bisa enroll
// 0 gak bisa enroll blm login
// 1 bebas enroll tanpa kecuali karen blm pernah beli
// 2 gak bisa enroll harus lulus dulu
// 3 bisa enroll dan ada link untuk lihat cert
$status_enrolled = 0;

if($is_enrolled == 0) {
  $status_enrolled = 0;
} elseif ( isset($is_enrolled['data']) ) {
  if( count($is_enrolled['data']) == 0 ) {
    $status_enrolled = 1;
  } elseif ( count($is_enrolled['data']) > 0 && $is_enrolled['data'][0]['can_enroll'] == "NO") {
    $status_enrolled = 2;
  } else {
    $status_enrolled = 3;
  }
} else {
  $status_enrolled =0;
}

?>
<section class="container-fluid my-5 py-5" style="background:#3457D5; color: white; height: auto"> 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h2 class="text-light"><?=$cert['data'][0]['nama'];?></h2>
                <div style="color: white;">
                    <?=$cert['data'][0]['info_singkat'];?>
                </div>
                <div class="mt-2">
                    <!-- <span class="badge badge-warning p-1" > Professional </span> <span class="badge badge-success">
                        <i class="fa fa-star yellow" aria-hidden="true"></i>
                        <i class="fa fa-star yellow " aria-hidden="true"></i>
                        <i class="fa fa-star yellow" aria-hidden="true"></i>
                        <i class="fa fa-star-half yellow" aria-hidden="true"></i>
                        <i class="fa fa-star" aria-hidden="true"></i>
                    </span> <span class="font-weight-bold"> ( 3.5 ) </span> -->
                </div>
                <div class="mt-5">
                    <span class="badge badge-success p-2" style="font-size: 1.5rem" > <?php echo ($harga != "0" ) ? 'Rp '.number_format($harga) : "FREE" ;?> </span>
                    <br>
                    <?php if($flag == 'false') { ?>
                        <span class="badge badge-danger p-3 mt-3" style="font-size: 1rem">
                            Complete all courses to enroll this certification
                        </span>
                    <?php } else {?>
                        <?php if($status_enrolled == 1) { ?>  
                            <button class="btn btn-xl btn-warning mt-3" data-toggle="modal" data-target="#modalBayar"> Enroll <br> Certification </button>
                        <?php } elseif($status_enrolled == 2)  { ?>
                              
                            <?php if($is_enrolled['data'][0]['status_certification'] == 1 ) { ?>
                                Menunggu pembayaran..
                              <?php } elseif($is_enrolled['data'][0]['status_certification'] == 2 ) { ?>
                                Anda sudah enroll sertifikasi ini, selesaikan ujian sekarang. 
                                <br>
                                <a href="<?=base_url();?>exam_certification/detail/<?=$is_enrolled['data'][0]['id_customer_certification']?>" class="btn btn-warning btn-sm"> Lihat Sertfikasi </a> 
                              <?php } ?>
                            
                        <?php } elseif($status_enrolled == 3) { ?>
                            <button class="btn btn-xl btn-warning mt-3" data-toggle="modal" data-target="#modalBayar"> Re-Enroll <br> Certification ? </button>
                            <br>
                            Sertifikasi ini sudah pernah anda ambil, 
                            <br><a href="<?=base_url();?>exam_certification/detail/<?=$is_enrolled['data'][0]['id_customer_certification']?>" class="btn btn-warning btn-sm"> Lihat Sertfikasi </a> 
                        <?php } ?>
                    <?php }?>
                    
                </div>
                <div class="mt-3">
                    <small style="font-style: italic;"> <?=$cert['data'][0]['jumah_peserta'];?> Already enrolled </small>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                Offered By  :  <?=$cert['data'][0]['nama_partner']?>
                <br>
                <img class="mt-2"  src="<?php echo $this->CI->config->item('bisaUrl')."certification/media/foto_partner/".$cert['data'][0]['foto_partner'];?>" alt="<?=$cert['data'][0]['nama_partner']?>" alt="" style="width: 200px;"> 
            </div>
        </div>
    </div>
</section>
<section class="container mt-2 " id="showData">
    <div class="container">
        <div class="row mb-4">
            
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                        <a class="nav-x nav-link active" href="#showData" id="btnDesc">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnCourse">Courses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnFaq">FAQ</a>
                    </li>
                    </ul>
                </div>
                <div class="card-body" >
                    <div id="desc">
                        <?=$cert['data'][0]['deskripsi'];?>
                    </div>
                    <div id="course" style="display: none;">
                        
                    <?php $no = 1; foreach ($course['data'] as $key => $value) : ?>
                        <div class="row shadow mx-1 my-4" style="border-radius: 5px; <?php if(isset($value['status'])) { 
                            if ($value['status'] == "PASS") {
                                echo  "border: 1px solid lime;";
                                $text= '<span class="badge badge-success"><i class="fa fa-check" aria-hidden="true"></i> PASS </span>';
                            } else {
                                $text= '<span class="badge badge-danger"> <i class="fa fa-times" aria-hidden="true"></i> Need to pass this course. </span>' ;
                            }
                            
                            } ?>">
                            <div class="col-md-3 col-sm-12 text-center px-3 py-1" style="color: grey;">
                                <img src="<?php echo $this->CI->config->item('bisaUrl')."course/media/".$value['foto_course'];?>" alt="" srcset="" class="rounded" style="width: 100%;">
                            </div>
                            <div class="col-md-9 col-sm-12 px-3 py-1" style="border-bottom: 1px solid #e0e0ee ;">
                                <h5> <a href="<?=base_url()?>course/detail/<?=str_replace("=","", base64_encode($value['id_course']))?>/1" target="_blank" > <?=$value['nama_course']?> </a></h5>
                                <h4>  <?=$text;?> </h4>
                                <p> 
                                  <?=$value['deskripsi_course']?>
                                </p>
                            </div>
                        </div>
                    <?php $no++; endforeach; ?>                          
                    </div>
                    <div id="faq" style="display: none;">
                        
                        <div id="accordion">
                        <?php $no = 1; foreach ($faq['data'] as $key => $value) : ?>
                            
                            <div class="card">
                                <div class="card-header" id="heading_<?=$no;?>">
                                <h5 class="mb-0">
                                    <button class="btn btn-link" data-toggle="collapse" data-target="#collapse_<?=$no;?>" aria-expanded="true" aria-controls="collapse_<?=$no;?>" style="text-decoration: none;">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i> &nbsp; <?=$value['pertanyaan'];?>
                                    </button>
                                </h5>
                                </div>

                                <div id="collapse_<?=$no;?>" class="collapse" aria-labelledby="heading_<?=$no;?>" data-parent="#accordion">
                                <div class="card-body">
                                    <?=$value['jawaban'];?>
                                </div>
                                </div>
                            </div>
                        <?php $no++; endforeach; ?>     
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Modal Pembayaran-->
<div class="modal fade" id="modalBayar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pembayaran Cerification : <?=$cert['data'][0]['nama'];?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

      <div class="card mb-5 mb-lg-0">
          <form action="" method="post" accept-charset="utf-8">
            <input type="hidden" class="csrf" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" >
            <div class="card mb-5 mb-lg-0">
              <div class="card-body text-center">
                <div class="dropdown-pembayaran">
                  <h3 class="card-title poppins-600 text-size-6">Pilih Pembayaran</h3>
                  <?php if ($hargaPlus > 0) {?>  
                    <div class="dropdown pb-2">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        E-Wallet
                        <span class="caret"></span>
                        </button>
                        <div class="dropdown-menu tipe_bayar" aria-labelledby="dropdownMenuButton">
                        <!-- <li class="dropdown-item" value="1083" data="Bayarind">Bayarind</li>
                        <li class="dropdown-item" value="1084" data="DANA">DANA</li>
                        <li class="dropdown-item" value="bni" data="bni">Transfer Bank BNI</li> -->

                        <?php 
                            foreach ($metode_bayar['data'] as $v) {
                                echo ' <li class="dropdown-item" value="'.$v['service_code'].'" >'.$v['metode'].'</li>';
                            }
                                // echo ' <li class="dropdown-item" value="9999" >Transfer Bank BNI</li>';
                                // echo ' <li class="dropdown-item" value="9998" >Transfer Bank BCA</li>';
                        ?>
                        </div>
                    </div>
                  <?php } ?>          
                  <button type="button" class="btn btn-primary btn-submit mb-2" id="btnBayar"> <?=($hargaPlus==0) ? "Enroll Gratis" : "Bayar Sekarang"; ?></button>
                  <hr>
                   <?php if($harga > 0) { ?>     
                    <div class="form-check text-left mb-2">
                      <input type="checkbox" class="form-check-input" id="is_kupon">
                      <label class="form-check-label" for="is_kupon"> <strong> Pakai Kupon </strong> </label>
                    </div>

                    <div class="form-group text-left">
                      <input type="text"
                        class="form-control" id="kupon" placeholder="Masukkan kupon.." disabled>
                    </div>
                  <?php } ?>

                  <div class="text-left mt-3 mb-3">
                    <!-- Keterangan transfer -->
                    <div class="card mt-3 no-bni text-left" id="bni" style="display: none;">
                      <div class="card-body">
                        <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                        <span class="opensans-400 text-size-2 ">
                        Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['name'];?></b>, silahkan lakukan pembayaran 
                        dengan nominal <b>Rp <?=number_format($hargaPlus)?></b> ke rekening <b>Bank BNI</b> a/n <b>PT BISA ARTIFISIAL INDONESIA</b>
                        </span> <br> <br>
                        <span class="opensans-600 font-italic bg-blue-vcon text-light">
                        transaksi ini akan hangus 3 jam setelah transaksi ini dibuat 
                        </span>
                      </div>
                    </div>
                    <div class="card mt-3 no-bca text-left" id="bni" style="display: none;">
                      <div class="card-body">
                        <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                        <span class="opensans-400 text-size-2 ">
                        Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['name'];?></b>, silahkan lakukan pembayaran 
                        dengan nominal <b>Rp <?=number_format($hargaPlus)?></b> ke rekening <b>Bank BCA</b> a/n <b>PT BISA ARTIFISIAL INDONESIA</b>
                        </span> <br> <br>
                        <span class="opensans-600 font-italic bg-blue-vcon text-light">
                        transaksi ini akan hangus 3 jam setelah transaksi ini dibuat 
                        </span>
                      </div>
                    </div>
                    <div class="no-dana" style="display: none;">
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                          <span class="opensans-400 text-size-2 ">
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['name'];?></b>, silahkan lakukan pembayaran 
                          dengan nominal <b>Rp <?=number_format($hargaPlus)?></b> melalui <b>DANA</b>
                          </span> 
                        </div>
                      </div>
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Cara Pembayaran</h3>
                          <span class="opensans-400 text-size-2 ">
                            <ul>
                              <li>Pilih pembayaran menggunakan Dana</li>
                              <li>Klik tombil Pilih Pembayaran</li>
                              <li>Masukkan nomor telepon yang berhubungan dengan akun dana anda</li>
                              <li>Cek kembali total biaya dan lakukan pembayaran</li>
                            </ul>
                          </span>
                        </div>
                      </div>
                    </div>
                    <div class="no-bayarind"  style="display: none;">
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                          <span class="opensans-400 text-size-2">
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['name'];?></b>, silahkan lakukan pembayaran 
                          dengan nominal <b>Rp <?=number_format($hargaPlus)?></b> melalui <b>Bayarind</b>
                          </span>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Cara Pembayaran</h3>
                          <span class="opensans-400 text-size-2 ">
                            <ul>
                              <li>Pilih pembayaran menggunakan Bayarind</li>
                              <li>Klik tombil Pilih Pembayaran</li>
                              <li>Masukkan nomor telepon yang berhubungan dengan akun bayarind anda</li>
                              <li>Cek kembali total biaya dan lakukan pembayaran</li>
                            </ul>
                          </span>
                        </div>
                      </div>
                      
                    </div>
                    <div class="no-linkaja"  style="display: none;">
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                          <span class="opensans-400 text-size-2">
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['name'];?></b>, silahkan lakukan pembayaran 
                          dengan nominal <b>Rp <?=number_format($hargaPlus)?></b> melalui <b>Link Aja</b>
                          </span>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Cara Pembayaran</h3>
                          <span class="opensans-400 text-size-2 ">
                            <ul>
                              <li>Pilih pembayaran menggunakan Link Aja</li>
                              <li>Klik tombil Pilih Pembayaran</li>
                              <li>Masukkan nomor telepon yang berhubungan dengan akun Link Aja anda</li>
                              <li>Cek kembali total biaya dan lakukan pembayaran</li>
                            </ul>
                          </span>
                        </div>
                      </div>
                      
                    </div>

                    <div class="no-shopee"  style="display: none;">
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                          <span class="opensans-400 text-size-2">
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['name'];?></b>, silahkan lakukan pembayaran 
                          dengan nominal <b>Rp <?=number_format($hargaPlus)?></b> melalui <b>Shopee Pay</b>
                          </span>
                        </div>
                      </div>
                      <div class="card mt-3">
                        <div class="card-body">
                          <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Cara Pembayaran</h3>
                          <span class="opensans-400 text-size-2 ">
                            <ul>
                              <li>Pilih pembayaran menggunakan Shopee</li>
                              <li>Klik tombil Pilih Pembayaran</li>
                              <li>Masukkan nomor telepon yang berhubungan dengan akun Shopee anda</li>
                              <li>Cek kembali total biaya dan lakukan pembayaran</li>
                            </ul>
                          </span>
                        </div>
                      </div>
                      
                    </div>
                    <!-- Keterangan transfer -->
                  </div>
                  
                </div>
                <input type="hidden" id="id_course" value="<?=$data['data'][0]['id_course'];?>" >
                <input type="hidden" id="kode_unik" value="<?=$kodeUnik?>">
                <input type="hidden" id="service_code">
                <input type="hidden" id="metode_pembayaran">
                            
                <div class="no-bni" id="bni" style="display: none;">
                  <h6 class="poppins-700 mb-4">An PT BISA ARTIFISIAL INDONESIA</h6>
                  <img class="mb-4" src="<?=base_url('/assets/images/bni.png')?>" width="200"> <br>
                  <h5 class="poppins-600 text-size-2">No.rekening 1315441125</h5>
                </div>
                <div class="no-bca" id="bca" style="display: none;">
                  <h6 class="poppins-700 mb-4">An PT BISA ARTIFISIAL INDONESIA</h6>
                  <img class="mb-4" src="<?=base_url('/assets/images/bca-bank-central-asia.svg')?>" width="200"> <br>
                  <h5 class="poppins-600 text-size-2">No.rekening 0866131541</h5>
                </div>
                <div class="no-dana" id="dana" style="display: none;">
                  <img class="mb-4" src="<?=base_url('/assets/images/dana.png')?>" width="200"> <br>
                  <div class="text-center poppins-600 text-size-6">Dana</div>
                </div>
                <div class="no-bayarind"  style="display: none;">
                  <img class="mb-4" src="<?=base_url('/assets/images/bayarind.png')?>" width="200"> <br>
                  <div class="text-center poppins-600 text-size-6">Bayarind</div>
                </div>
                <div class="no-shopee"  style="display: none;">
                  <img class="mb-4" src="<?=base_url('/assets/images/shopee.png')?>" width="200"> <br>
                  <div class="text-center poppins-600 text-size-6">Shopee</div>
                </div>
                <div class="no-linkaja" style="display: none;">
                  <img class="mb-4" src="<?=base_url('/assets/images/link.png')?>" width="200"> <br>
                  <div class="text-center poppins-600 text-size-6">Link Aja</div>
                </div>
              </div>
            </div>
          </form>
        </div>  
        <!-- BIAYA -->
        <div class="card mt-3 pb-3 px-2">
          <div class="card-body">
            <!-- <div class="line-amplop"></div> -->
            <h4 class="card-title poppins-600"> <i class="fas fa-dollar-sign"></i> Rincian </h4>
            <div class="form-row opensans-400">
              <!-- Harga Paket -->
              <div class="col-5 text-left">Harga</div>
              <div class="col-7 text-right">Rp <?php echo number_format($harga)?></div>
              <!-- Harga Paket -->
              <!-- UNIQ -->
              <div class="col-5 text-left">Kode unik</div>
              <div class="col-7 text-right"><?=number_format($kodeUnik);?></div>
              <!-- UNIQ -->
            </div>
            <div class="form-row opensans-400">
              <div class="col-12">
                <hr>
              </div>
              <div class="col-4"><b>Total biaya</b></div>
              <div class="col-8 text-right">
                <b>Rp <?=number_format($hargaPlus);?> </b>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </div>
</div>

<form method="post" id="gotoBayar" action="" style="display: none;">
      <div id="inputan">
      </div>                      
      <button type="submit" id="gotoSubmit" >
      </button>                      
</form>


<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; position : fixed; top: 50%; left:50%;transform: translate(-50%, -50%); z-index: 9999; opacity: 1 ">
  <span id="msg" style="font-weight: bold;">  </span>
</div>

<?php
// echo count($is_enrolled['data']);
// print_r($is_enrolled);
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>
<script>

$(document).ready(function(){

    function errMsg(text, tipe='alert-info'){
      $("#msg").text(text);
      $(".notice").addClass(tipe);
      $(".notice").fadeIn( 100 );     
      setTimeout(() => {
          $( ".notice" ).fadeOut( 3000 );    
      }, 2000);
    }

    var kupon = null;

    $("#is_kupon").change(function(){
        if( $(this).is(':checked') ){
            $('#kupon').attr('disabled', false);
        } else {
            $('#kupon').attr('disabled', true);
        }
    });

    $(".tipe_bayar li").click(function(){
        // console.log($(this).val());
        $('#service_code').val($(this).val()).trigger('change');
        
        if ($(this).val()==1084) {
            $('.no-bayarind').css('display','none');
            $('.no-dana').css('display','block');
            $('.no-bni').css('display','none');
            $('.no-shopee').css('display','none');
            $('.no-bca').css('display','none');
            $('.no-linkaja').css('display','none');
        } else if ($(this).val()==1083) {
            $('.no-bayarind').css('display','block');
            $('.no-dana').css('display','none');
            $('.no-bni').css('display','none');
            $('.no-shopee').css('display','none');
            $('.no-bca').css('display','none');
            $('.no-linkaja').css('display','none');
        } else if ($(this).val()==1077) {
            $('.no-bayarind').css('display','none');
            $('.no-dana').css('display','none');
            $('.no-bni').css('display','none');
            $('.no-shopee').css('display','none');
            $('.no-bca').css('display','none');
            $('.no-linkaja').css('display','block');
        } else if ($(this).val()==1085) {
          // shopeee
            $('.no-bayarind').css('display','none');
            $('.no-dana').css('display','none');
            $('.no-bni').css('display','none');
            $('.no-shopee').css('display','block');
            $('.no-bca').css('display','none');
            $('.no-linkaja').css('display','none');
        } else if ($(this).val()==9998) {
            $('.no-bayarind').css('display','none');
            $('.no-dana').css('display','none');
            $('.no-bni').css('display','none');
            $('.no-shopee').css('display','none');
            $('.no-bca').css('display','block');
            $('.no-linkaja').css('display','none');
        }else {
            $('.no-bayarind').css('display','none');
            $('.no-dana').css('display','none');
            $('.no-bni').css('display','block');
            $('.no-shopee').css('display','none');
            $('.no-bca').css('display','none');
            $('.no-linkaja').css('display','none');

        }
    });

    $( "#btnDesc" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#desc').fadeIn('slow');
        $('#course').css('display','none');
        $('#faq').css('display','none');   
    });

    $( "#btnCourse" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#desc').css('display','none');
        $('#course').fadeIn('slow');
        $('#faq').css('display','none');   
    });

    $( "#btnFaq" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('#desc').css('display','none');
        $('#course').css('display','none');
        $('#faq').fadeIn('slow'); 
    });


    $("#btnBayar").click(function(){
    var csrfName = $('.csrf').attr('name');  
    free = '<?php echo ($hargaPlus <= 0) ? 'true' : 'false';  ?>';
    var usingCoupon = "false";
    if( $('#is_kupon').is(':checked') ){
      free = 'true';
      usingCoupon = 'true';
    } 

    if ( $('#kupon').val() == "" && usingCoupon == 'true') {
        errMsg("Masukkan kode kupon!.", "alert-danger");
        return false;
    } 

    if(free=="false")
    {
        if($('#service_code').val() == ""){
            errMsg("Pilih metode pembayaran dahulu.");
            return false;
        } 
    }

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>certification/bayar', 
        dataType : "JSON",
        data:{
            id:<?=$cert['data'][0]['id_certification']?>,
            kode_unik:<?=$kode_unik?>,
            service_code: $('#service_code').val(),
            is_free: free,
            pakeKupon: usingCoupon,
            coupon: $('#kupon').val(),
            [csrfName]: '<?=$csrf['hash'];?>'
        },
        beforeSend: function(){
            $("#btnBayar").attr("disabled", "disabled");
            $("#btnBayar").text("Memproses permintaan..");
        },
        success: function(data){ 
            if(data.status_code == 200){
              errMsg("Certification berhasil ditambahkan.");
              if (data.data.redirect_url != null) {
                  if( data.data.redirect_data!=null || data.data.redirect_data!=undefined ){
                      $.each(data.data.redirect_data, function(i, item) {
                          inputan += "<input name='"+i+"' value='"+item+"' >";
                      });
                      $("#inputan").html(inputan);
                  } else {
                      redirect_url = data.data.redirect_url;
                      setTimeout(() => {
                          window.location =  redirect_url; 
                      }, 1000);
                      console.log("pembelian get berhasil");
                      console.log("redeirecting: "+redirect_url);
                      return false;
                  }
                  $("#gotoBayar").attr('action', data.data.redirect_url);
                  setTimeout(() => {
                    //   $("#gotoSubmit").trigger('click');
                  }, 1000); 
              } else {
                  redirect_url = '<?php echo base_url(); ?>transaction_history'
                      
                  setTimeout(() => {
                      window.location =  redirect_url; 
                  }, 1000);
              }
                
            } else {
                errMsg("Anda sudah terdaftar pada sertifikasi ini.", "alert-danger");
                $("#btnBayar").prop( "disabled", false );
                $("#btnBayar").text("Bayar Sekarang");
                setTimeout(() => {
                    window.location = '<?php echo base_url(); ?>transaction_history'; 
                }, 1000);
            }
        },
        complete:function(data){
        
        },
        error: function(data){
            errMsg(data.responseJSON.description, "alert-danger");
            $("#btnBayar").prop( "disabled", false );
            $("#btnBayar").text("Bayar Sekarang");

            setTimeout(() => {
                    location.reload();    
                }, 1000);
            }
    });  
  });

});

</script>