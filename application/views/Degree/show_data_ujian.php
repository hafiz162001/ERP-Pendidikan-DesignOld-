<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<section class="container-fluid my-5 py-5"> 
    <div class="container p-4">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    
                    <div class="card-body">

                    <div class="row">
                        <div class="col-md-12" style="display: flex;">
                            <div style="width: 100px;display:flex;">
                                <img class="" src="<?php echo $this->CI->config->item('bisaUrl')."degree/media/foto_universitas/";?><?=$data['foto_universitas']?>" alt="" style="width: 100px;">
                            </div>
                            <div style="width: calc( 100% - 100px ); display:flex; padding: 0.5rem; font-size: 1.5rem">
                                <?=$data['nama_universitas']?>
                                <br>
                                <?=$data['nama_program_studi']?>
                            </div>

                        </div>
                        <div class="col-md-12" >
                            <hr>
                        </div>

                        <div class="col-md-12">
                            <div class="row">
                                <div class="col-md-6">
                                    <h5>Data Universitas</h5>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            Nama universitas    
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=$data['nama_universitas']?>
                                        </div>

                                        <div class="col-md-5 col-sm-12">
                                            Program studi    
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=$data['nama_program_studi']?>
                                        </div>

                                        <div class="col-md-5 col-sm-12">
                                            Waktu pendaftaran    
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=date("D, d M Y, H:i", strtotime($data['waktu_pendaftaran']))?>
                                        </div>

                                        <div class="col-md-12 col-sm-12 mt-3">
                                            <img class="" src="<?php $foto = ($data['foto_user'] == "" || $data['foto_user'] == null) ? base_url()."assets/images/blank.png" : $this->CI->config->item('bisaUrl')."users/media/".$data['foto_user']; echo $foto;?>" alt="" style="width: 100px;">    
                                        </div>
                                         


                                        
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <h5>Data Identitas Diri</h5>
                                    <div class="row">
                                        <div class="col-md-5 col-sm-12">
                                            Nama identitas    
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=$data['nama_identitas']?>
                                        </div>

                                        <div class="col-md-5 col-sm-12">
                                            Nama sesuai ijazah    
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=$data['nama_ijazah']?>
                                        </div>

                                        <div class="col-md-5 col-sm-12">
                                            Telepon    
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=$data['no_telfon']?>
                                        </div>

                                        <div class="col-md-5 col-sm-12">
                                            Nomor identitas   
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                            <?=$data['jenis_identitas']?> / 
                                            <?=$data['nomor_identitas']?>
                                        </div>

                                        <div class="col-md-5 col-sm-12">
                                            Tanggal lahir   
                                        </div>
                                        <div class="col-md-7 col-sm-12">
                                             <?=date("d M Y", strtotime($data['tanggal_lahir']))?>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); 
?>
