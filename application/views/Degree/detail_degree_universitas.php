<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();


$harga = $data['data'][0]['harga_pendaftaran'];
$kodeUnik = $kode_unik; 
$hargaPlus = $harga + $kodeUnik;

?>
<section class="container-fluid my-5 py-5" style="background: rgb(101,20,94);
background: linear-gradient(148deg, rgba(101,20,94,1) 0%, rgba(165,53,91,1) 100%); color: white; height: auto"> 
    <div class="container p-4">
        <div class="row">
            <div class="col-md-7 col-sm-12">
                <h2><?=$data['data'][0]['nama_degree'];?></h2>
                <div style="color: white;">
                  Jenjang pendidikan: <?=$data['data'][0]['nama_jenjang_pendidikan'];?>, <?=$data['data'][0]['nama_program_studi'];?> <?=$data['data'][0]['nama_universitas'];?> 
                </div>
                <div class="mt-2">
                </div>
                <div class="mt-5">
                    <!-- <br>
                        <span class="badge badge-danger p-3 mt-3" style="font-size: 1rem">
                            Login terlebih dahulu untuk dapat mendaftar pada program ini.
                        </span> -->
                        <!-- <button class="btn btn-xl btn-warning mt-3" data-toggle="modal" data-target="#modalBayar"> Daftar <br> Sekarang </button>                     -->
                        <button class="btn btn-xl btn-warning mt-3" id="btnDaftarYuk"> Daftar <br> Sekarang </button>                    
                </div>
                <div class="mt-3">
                    <small style="font-style: italic;"> <?=$data['data'][0]['jumlah_pendaftar']?> Orang telah mendaftar </small>
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                Offered By  :  <?=$data['data'][0]['nama_universitas'];?> 
                <br>
                <img class="mt-2"  src="<?php echo $this->CI->config->item('bisaUrl')."degree/media/foto_universitas/".$data['data'][0]['foto_universitas'];?>" alt="" style="width: 200px;"> 
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
                        <a class="nav-x nav-link active" href="#showData" id="btnOverview">Overview</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnAdmission">Admission</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnAcademic">Academic</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnFinance">Tuition & Financing</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnExp">Student Experience</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnKarir">Careers</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnAbout">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-x nav-link" href="#showData" id="btnRegis">Registration</a>
                    </li>
                    </ul>
                </div>
                <div class="card-body" >
                    <div id="cOverview" class="containerData" style="text-align: justify;">
                      <?=$data['data'][0]['deskripsi_degree']?>
                    </div>
                    <div id="cAdmission" class="containerData" style="display: none;">
                      <?=$data['data'][0]['cara_pendaftaran']?>
                    </div>
                    <div id="cAcademic" class="containerData" style="display: none;">
                      <?=$data['data'][0]['academics']?>
                    </div>
                    <div id="cFinance" class="containerData" style="display: none;">
                      <?=$data['data'][0]['biaya']?>
                      <br>
                      
                    </div>
                    <div id="cExp" class="containerData" style="display: none;">
                    <?=$data['data'][0]['deskripsi_jenjang_pendidikan']?>
                     
                    </div>
                    <div id="cKarir" class="containerData" style="display: none;">
                    <?=$data['data'][0]['careers']?>
                     
                    </div>
                    <div id="cAbout" class="containerData" style="display: none;">
                      <?=$data['data'][0]['deskripsi_universitas']?>
                         
                    </div>
                    <div id="cRegis" class="containerData" style="display: none;">
                      <h5> BIAYA REGISTRASI : </h5>
                        <span class="badge badge-primary mt-2 mb-2" style="font-size: 1.5rem;"> <?=($data['data'][0]['harga_pendaftaran']==0) ? "GRATIS" : "Rp ".number_format($data['data'][0]['harga_pendaftaran']); ?> </span>
                        
                      <br>
                      <br>
                      
                        <h5>
                          <i class="fa fa-user" aria-hidden="true"></i> Identitas
                        </h5>
                        <hr>
                        <div class="form-group row">
                          <label for="" class="col-sm-4 col-form-label">Nama sesuai ijazah</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nama_ijazah" name="nama_ijazah" placeholder="Nama sesuai ijazah terakhir" required>
                          </div>
                        </div>
                        
                        <div class="form-group row">
                          <label for="" class="col-sm-4 col-form-label">Jenis Identitas</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="jenis_identitas">
                              <option value="">-- pilih --</option>
                              <?php
                              foreach ($identitas['data'] as $val) {
                                echo "<option value='".$val['nama_jenis_identitas']."'> ".$val['deskripsi_jenis_identitas']." </option>";
                              }
                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="" class="col-sm-4 col-form-label">Nomor identitas</label>
                          <div class="col-sm-8">
                            <input type="text" class="form-control" id="nomor_identitas" name="nomor_identitas" placeholder="Nomor identitas" required>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="" class="col-sm-4 col-form-label">Kewarganegaraan</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="kewarganegaraan">
                              <option value="Indonesia">Indonesia</option>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="" class="col-sm-4 col-form-label">Batch / Periode</label>
                          <div class="col-sm-8">
                            <select class="form-control" id="batch">
                      
                              <option value="">-- pilih --</option>
                              <?php
                              foreach ($batch['data'] as $val) {
                                echo "<option value='".$val['id_dgr_degree_batch']."'> ".$val['nama_batch']." ( ".date('d M Y', strtotime($val['tanggal_mulai_daftar']))." - ".date('d M Y', strtotime($val['tanggal_akhir_daftar']))." ) </option>";
                              }
                              ?>
                            </select>
                          </div>
                        </div>

                        <div class="form-group row">
                          <label for="" class="col-sm-4 col-form-label"> </label>
                          <div class="col-sm-8">
                            <button type="button" class="btn btn-primary" id="bayarYuk"> Submit </button>
                          </div>
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
        <h5 class="modal-title" id="exampleModalLabel"><?=$data['data'][0]['nama_degree'];?></h5>
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
                  <?php 
                  if ($hargaPlus > 0) {?>  
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
                  <button type="button" class="btn btn-primary btn-submit mb-2" id="btnBayar"> <?=($hargaPlus==0) ? "Daftar Gratis" : "Bayar Sekarang"; ?></button>
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
                        Anda akan terdaftar pada pjj <b class="poppins-500"><?=$data['data'][0]['nama_degree'];?></b>, silahkan lakukan pembayaran 
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
                        Anda akan terdaftar pada pjj <b class="poppins-500"><?=$data['data'][0]['nama_degree'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada pjj <b class="poppins-500"><?=$data['data'][0]['nama_degree'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada pjj <b class="poppins-500"><?=$data['data'][0]['nama_degree'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada pjj <b class="poppins-500"><?=$data['data'][0]['nama_degree'];?></b>, silahkan lakukan pembayaran 
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
                          Anda akan terdaftar pada pjj <b class="poppins-500"><?=$data['data'][0]['nama_degree'];?></b>, silahkan lakukan pembayaran 
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
    var tokenName = "";
    var tokenHash = "";
      

    $( "#bayarYuk" ).click(function() {
      <?php 
        if($this->session->userdata('token') == ""){
      ?>
        errMsg("Mohon Login terlebih dahulu");

     <?php } else { ?>
        if ( $("#nama_ijazah").val() == "" || $("#nomor_identitas").val() == "" || $("#jenis_identitas").find(":selected").val() == "" || $("#batch").find(":selected").val() == "") {
            errMsg("Mohon isi semua data.");
            return false;
        }

        $('#modalBayar').modal('show');
      <?php } ?>
    });



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

    $( "#btnOverview" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cOverview').fadeIn('slow'); 
    });

    $( "#btnAdmission" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cAdmission').fadeIn('slow'); 
    });

    $( "#btnAcademic" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cAcademic').fadeIn('slow'); 
    });

    $( "#btnFinance" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cFinance').fadeIn('slow'); 
    });

    $( "#btnExp" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cExp').fadeIn('slow'); 
    });

    $( "#btnKarir" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cKarir').fadeIn('slow'); 
    });

    $( "#btnAbout" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cAbout').fadeIn('slow'); 
    });

    $( "#btnRegis" ).click(function() {
        $('.nav-x').removeClass('active');
        $(this).addClass('active');
        $('.containerData').css('display','none');
        $('#cRegis').fadeIn('slow'); 
    });

    $( "#btnDaftarYuk" ).click(function() {
        $('.nav-x').removeClass('active');
        $("#btnRegis").addClass('active');
        $('.containerData').css('display','none');
        $('#cRegis').fadeIn('slow'); 
    });

    getToken();
    function getToken(){
          $.ajax({
              type: 'GET',
              url: '<?php echo base_url(); ?>transaction_history/get_token', 
              dataType : "JSON",
              success: function(data){  
                  tokenName = data.csrf.name;
                  tokenHash = data.csrf.hash;
              },
              error: function(data){
                  tokenName = "";
                  tokenHash = "";
              }
          });
    }


    $("#btnBayar").click(function(){
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
        url: '<?php echo base_url(); ?>degree/bayar', 
        dataType : "JSON",
        data:{
            id:<?=$data['data'][0]['id_dgr_degree'];?>,
            kode_unik:<?=$kodeUnik?>,
            service_code: $('#service_code').val(),
            is_free: free,
            pakeKupon: usingCoupon,
            coupon: $('#kupon').val(),
            nama_ijazah: $('#nama_ijazah').val(),
            jenis_identitas: $("#jenis_identitas").find(':selected').val(),
            batch: $("#batch").find(':selected').val(),
            nomor_identitas: $('#nomor_identitas').val(),
            kewarganegaraan: $("#kewarganegaraan").find(':selected').val(),
            [tokenName]: tokenHash
        },
        beforeSend: function(){
            $("#btnBayar").attr("disabled", "disabled");
            $("#btnBayar").text("Memproses permintaan..");
        },
        success: function(data){ 
            if(data.status_code == 200){
              errMsg("Program PJJ berhasil ditambahkan.");
              if (data.data.redirect_url != null) {
                  if( data.data.redirect_data!=null || data.data.redirect_data!=undefined ){
                      $.each(data.data.redirect_data, function(i, item) {
                          inputan += "<input name='"+i+"' value='"+item+"' >";
                      });
                      $("#inputan").html(inputan);
                      $("#gotoBayar").attr('action', data.data.redirect_url);
                      setTimeout(() => {
                          $("#gotoSubmit").trigger('click');
                      }, 1000);
                  } else {
                      redirect_url = data.data.redirect_url;
                      setTimeout(() => {
                          window.location =  redirect_url; 
                      }, 1000);
                      console.log("pembelian get berhasil");
                      console.log("redeirecting: "+redirect_url);
                      return false;
                  }
                   
              } else {
                  redirect_url = '<?php echo base_url(); ?>transaction_history'
                      
                  setTimeout(() => {
                      window.location =  redirect_url; 
                  }, 1000);
              }
                
            } else {
                errMsg("Anda sudah terdaftar pada program ini.", "alert-danger");
                $("#btnBayar").prop( "disabled", false );
                $("#btnBayar").text("Bayar Sekarang");
                setTimeout(() => {
                    window.location = '<?php echo base_url(); ?>transaction_history'; 
                }, 1000);
            }

            getToken();
        },
        complete:function(data){
        
        },
        error: function(data){
            errMsg(data.responseJSON.description, "alert-danger");
            $("#btnBayar").prop( "disabled", false );
            $("#btnBayar").text("Bayar Sekarang");
            getToken();
            // setTimeout(() => {
            //         location.reload();    
            //     }, 1000);
            }
    });  
  });

});

</script>