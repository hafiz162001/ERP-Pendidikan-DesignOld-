<?php
$this->CI = &get_instance();
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); ?>

<?php
$kodeUnik = $kode_unik;
$harga = $data['data'][0]["harga_total_weekend"];
$hargaPlus = $harga + $kodeUnik;

// var_dump($kodeUnik);
// die;
?>
<section id="innerTab">
  <div class="mb-5 mt-5">&nbsp;</div>
  <div class="container">
    <div class="row">
      <!-- KIRI -->
      <div class="col-lg-4 mt-2">
        <div class="card mb-5 mb-lg-0">
          <form action="" method="post" accept-charset="utf-8">
            <input type="hidden" class="csrf" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" >
            <div class="card mb-5 mb-lg-0">
              <div class="card-body text-center">
                <div class="dropdown-pembayaran">
                <?php
                if($this->session->userdata('token') == ""){ 
                    echo "<span style='color:red'>Silahkan login untuk daftar</span>";
                } else {
                ?>
                  <h3 class="card-title poppins-600 text-size-6">Pilih Pembayaran</h3>
                  <?php if($hargaPlus > 0) { ?>
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
                                echo ' <li class="dropdown-item" value="9999" >Transfer Bank BNI</li>';
                                echo ' <li class="dropdown-item" value="9998" >Transfer Bank BCA</li>';
                          ?>
                        </div>
                            
                    </div>
                  <?php } ?>
                  <button type="button" class="btn btn-primary btn-submit mb-2" id="btnBayar"> <?=($hargaPlus==0) ? "Daftar Gratis" : "Bayar Sekarang"; ?> </button>
                  <hr>
                   <?php if($harga > 0) { ?>     
                    <!-- <div class="form-check text-left mb-2">
                      <input type="checkbox" class="form-check-input" id="is_kupon">
                      <label class="form-check-label" for="is_kupon"> <strong> Pakai Kupon </strong> </label>
                    </div>

                    <div class="form-group text-left">
                      <input type="text"
                        class="form-control" id="kupon" placeholder="Masukkan kupon.." disabled>
                    </div> -->
                  <?php } ?>
                  <div class="form-group text-left">
                      <input type="number"
                        class="form-control" id="hp" placeholder="Nomor Telepon" maxlength="13">
                  </div> 
                  
                  <div class="form-group text-left">
                      <input type="date"
                        class="form-control" id="waktu_kunjungan" placeholder="Pilih waktu kunjungan" min="<?=date("Y-m-d");?>" >
                  </div>                      
                  <?php } ?>
                  <div class="card mt-3 no-bni text-left" id="petunjuk" style="background-color: #eaeaea;" >
                      <div class="card-body">
                        <h3 class="card-title poppins-600 text-size-3"><i class="fa fa-info" aria-hidden="true"></i> Petunjuk </h3>
                        <small> 1. Pilih tanggal tiket sesuai keinginan anda sesuai pelaksanaan pelatihan. <br>
                        2. Isi nomor telepon dengan benar, Bisa AI akan mengirimkan Paket Data pada nomor tersebut. <br>
                        3. Jika sudah selesai melakukan pembayaran, <strong> transaksi tidak dapat dibatalkan atau dikembalikan</strong>
                        </small>
                      </div>
                  </div>

                  <div class="text-left mt-3 mb-3">
                    <!-- Keterangan transfer -->
                    <div class="card mt-3 no-bni text-left" id="bni" style="display: none;">
                      <div class="card-body">
                        <h3 class="card-title poppins-600 text-size-3"><i class="fas fa-receipt"></i> Keterangan transfer</h3>
                        <span class="opensans-400 text-size-2 ">
                        Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['nama_learncation'];?></b>, silahkan lakukan pembayaran 
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
                        Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['nama_learncation'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['nama_learncation'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['nama_learncation'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['nama_learncation'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada course <b class="poppins-500"><?=$data['data'][0]['nama_learncation'];?></b>, silahkan lakukan pembayaran 
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
                <input type="hidden" id="id_learncation" value="<?=$data['data'][0]['id_learncation'];?>" >
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
        <!-- /BIAYA -->
        <!-- PARTNET -->
        <div class="card mt-3 pb-3 px-2">
          <div class="card-body">
            <h4 class="card-title poppins-600"> <i class="far fa-handshake"></i> Lokasi </h4>
            <div class="text-center poppins-600 text-size-6"><?=$data['data'][0]['nama_principal'];?></div>
            <div class="text-center mt-3"><img id="Principal" src="<?=$data['data'][0]['foto_principal'];?>" style="width:50%"></div>
            <div class="mt-3"><?=$data['data'][0]['deksripsi_principal'];?></div>
            <hr>
            <div class="mt-3">Alamat: <?=$data['data'][0]['alamat_principal'];?></div>
          </div>
        </div>
        <!-- PARTNET -->
      </div>
      <!-- KIRI -->
      <!-- KANAN -->
      <div class="col-lg-8 mt-2">
        <!-- Keterangan Event -->
        <div class="card">
          <div class="card-body">
            <h3 class="card-title poppins-600 text-size-6"><i class="fas fa-calendar-alt"></i> Learncation Detail</h3>
            <!-- Banner -->
            <div class="text-center">
              <img id="Foto" src="<?php echo $this->CI->config->item('bisaUrl')."learncation/media/poster_learncation/".$data['data'][0]['foto_learncation'];?>" style="width:50%">
            </div>
            <!-- Banner -->
            <!-- Judul -->
            <div class="row mt-4">
              <div class="col-lg-4  poppins-600 ">Deskripsi Learncation</div>
              <div class="col-lg-8 text-left poppins-400 poppins-600"><?=$data['data'][0]['deskripsi_learncation'];?></div>
            </div>
            <div class="row mt-4">
              <div class="col-lg-4  poppins-600 ">Nama Course</div>
              <div class="col-lg-8 text-left poppins-400 poppins-600"><?=$data['data'][0]['nama_course'];?></div>
            </div>
            <!-- /Judul -->
            <!-- Status -->
            <div class="row mt-3">
              <div class="col-lg-4  poppins-600 ">Deskripsi Course</div>
              <div class="col-lg-8 text-left poppins-400"><?=$data['data'][0]['deskripsi_course'];?></div>
            </div>
            <!-- /Status -->
            <!-- Keterangan Sertifikat -->
            <div class="row mt-3">
              <div class="col-lg-4  poppins-600 ">Summary Produk</div>
              <div class="col-lg-8 text-left opensans-400">
                <?=$data['data'][0]['summary_produk'];?>
              </div>
            </div>
            <!-- /Keterangan Sertifikat -->
            <!-- ROW 2 -->
            <hr>
            <?php
                if($this->session->userdata('token') != ""){ 
                    
                
                ?>
            <div class="row mt-3 p-2" style="background: rgba(0, 0, 0, 0.07); border-radius: 5px">
              <div class="col-lg-12 text-center">
                <!-- INFO PENTING -->
                <h5 class="text-warning poppins-600 text-size-6">Penting!</h5>
                konfirmasi pembayaran dilakukan secara otomatis oleh sistem kami, <br>
                jika transaksi tidak sesuai, silahkan konfirmasi pembayaran anda secara manual <br><a href="<?php echo base_url(); ?>transaction_history/" class="text-blue-vcon">disini</a>
                <br><br>
                <a href="<?=base_url('');?>" class="btn btn-success">kembali ke beranda</a>
                <!-- /INFO PENTING -->
              </div>
            </div>
            <?php } ?>        
            <!-- /ROW 2 -->            
          </div>
        </div>
        <!-- /Keterangan Event -->
        
        <!-- KANAN -->
      </div>
      <!-- /ROW 1 -->
      
    </div>
  </div>
</section>

<form method="post" id="gotoBayar" action="" style="display: none;">
      <div id="inputan">
      </div>                      
      <button type="submit" id="gotoSubmit" >
      </button>                      
</form>
 
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; position : fixed; top: 50%; left:50%;transform: translate(-50%, -50%); z-index: 9999; opacity: 1 ">
  <span id="msg" style="font-weight: bold;">  </span>
</div>
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

    if($('#waktu_kunjungan').val()=="")
    {
        $('#waktu_kunjungan').css('border', '1px solid red');
        errMsg("Pilih waktu kunjungan");
        return false;
    
    } else if($('#hp').val()=="") {
        $('#hp').css('border', '1px solid red');
        errMsg("Masukkan nomor hp dengan benar. ");
        return false;
    }

    $.ajax({
        type: 'POST',
        url: '<?php echo base_url(); ?>learncation/bayar', 
        dataType : "JSON",
        data:{
            id_learncation:$('#id_learncation').val(),
            kode_unik:$('#kode_unik').val(),
            service_code: $('#service_code').val(),
            is_free: free,
            pakeKupon: usingCoupon,
            coupon: $('#kupon').val(),
            hp: $('#hp').val(),
            waktu_kunjungan: $('#waktu_kunjungan').val(),
            [csrfName]: '<?=$csrf['hash'];?>'
        },
        beforeSend: function(){
            $("#btnBayar").attr("disabled", "disabled");
            $("#btnBayar").text("Memproses permintaan..");
        },
        success: function(data){ 
            if(data.status_code == 200){
              errMsg("Learncation berhasil ditambahkan.");
              // setTimeout(() => {
              //   window.location = data.redirect; 
              // }, 2000);

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
                      $("#gotoSubmit").trigger('click');
                  }, 1000); 
              } else {
                  redirect_url = '<?php echo base_url(); ?>transaction_history'
                      
                  setTimeout(() => {
                      window.location =  redirect_url; 
                  }, 1000);
              }
                
            } else {
                errMsg("Anda sudah terdaftar dalam learncation ini.", "alert-danger");
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
