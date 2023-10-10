<!-- NAVBAR --->
<?php 
$this->CI = &get_instance();
?>
<nav class="navbar fixed-top navbar-expand-lg navbar-light">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">
            <img src="<?= base_url() ?>assets/images/logo_putih2.png" style="height: 50px !important;" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="Course" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Course Academy &nbsp;</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow w-100" aria-labelledby="Course">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Course Academy</h3>
                                <p>Pembelajaran Online atau Offline melalui platform BISA DESIGN Academy dengan Materi Pilihan, Instruktur Profesional dan Learning Path Belajar yang menarik</p>
                            </div>    
                            <div class="col-md-6 col-lg-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/2.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/1') ?>" target="_blank"> <h5 class="title-nav"> Belajar Online </h5> </a> 
                                        <p class="subtitle-nav">+30 Course GRATIS untuk membantu kamu memulai belajar seputar Desain, UI/UX dan Game <br class="non-mobile"><br class="non-mobile" ><br class="non-mobile" ></p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/5.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/3') ?>" target="_blank"> <h5 class="title-nav"> Premium Class </h5> </a> 
                                        <p class="subtitle-nav">+10 Premium Class untuk membantu meningkatkan skills kamu seputar Desain, UI/UX dan Game <br class="non-mobile"> <br class="non-mobile"> </p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/4.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('course/all_course/5') ?>" target="_blank"> <h5 class="title-nav"> Premium Class + On Job Training </h5> </a> 
                                        <p class="subtitle-nav">Program Premium Class + on Job Training untuk membantu kamu membangun portofolio industri bidang Desain, UI/UX dan Game</p>    
                                    </div>
                                </div>
                            </div>    
                            <div class="col-md-6 col-lg-4 col-sm-12">
                        
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/9.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="https://tampil.id/event" target="_blank"> <h5 class="title-nav"> Webinar</h5> </a> 
                                        <p class="subtitle-nav">Webinar terkait Desain, UI/UX dan Game melalui platform TAMPIL.ID <br class="non-mobile"><br class="non-mobile"><br class="non-mobile"> <br class="non-mobile"></p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/3.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('learningpath') ?>" target="_blank"> <h5 class="title-nav"> Learning Path</h5> </a> 
                                        <p class="subtitle-nav">Membantu menemukan pola dan path belajar terbaik bidang Desain, UI/UX dan Game</p>    
                                    </div>
                                </div>                                
                            </div>    
                        </div>

                        <div class="row p-4">
                            <div class="col-md-4 col-lg-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Program Special </h3>
                                 
                            </div>    
                            <div class="col-md-6 col-lg-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/Logo-kartu-prakerja.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('prakerja') ?>" target="_blank"> <h5 class="title-nav"> Prakerja </h5> </a> 
                                        <p class="subtitle-nav"> Ikuti pelatihan Bisa Design Academy melalui program Kartu Prakerja  <br class="non-mobile"><br class="non-mobile"></p>    
                                    </div>                                    
                                </div>
                                <hr class="non-mobile">

                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/kampusmerdeka_small.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('kampusmerdeka') ?>" target="_blank"> <h5 class="title-nav"> Kampus Merdeka </h5> </a> 
                                        <p class="subtitle-nav">Ikuti Program Magang dan Studi Independen Bersertifikat Bisa Design Academy </p>    
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6 col-lg-4 col-sm-12"> 
      
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/ai.png') ?>" class="img-navbar" srcset="" style="width:180%"> </div>
                                    <div class="col-md-8 col-sm-12"> 
                                        <a class="" href="https://ai-creation.id" target="_blank"> <h5 class="title-nav"> AI Creation </h5> </a> 
                                        <p class="subtitle-nav">Bangun Startup Digital Berbasis Kecerdasan Artifisia <br class="non-mobile"> <br class="non-mobile"> </p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/portofolio.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('portofolio') ?>" target="_blank"> <h5 class="title-nav"> Portofolio </h5> </a> 
                                        <p class="subtitle-nav"> Lihat Portofolio yang dihasilkan peserta pelatihan BISA Design Academy </p>    
                                    </div>
                                </div>
                                 
                            </div>     
                             
                        </div>

                    </div>
                </li>
                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="Course" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Certificate &nbsp;</i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="Course">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Certificate</h3>
                                <p>Raih sertifikat untuk meningkatkan skill dan kompetensi kamu</p>
                            </div>    
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/6.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('certification') ?>" target="_blank"> <h5 class="title-nav"> Sertifikasi International</h5> </a> 
                                        <p class="subtitle-nav">Raih Sertifikasi International dan standard kompetensi international dari vendor teknologi dunia bidang Desain, UI/UX dan Produk. Ikuti Pelatihan Singkat dan Sertifikasi-nya melalui BISA Design Academy<br class="non-mobile"></p>    
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/7.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="<?= base_url('certification/industry') ?>" target="_blank"> <h5 class="title-nav"> Sertifikasi Nasional </h5> </a> 
                                        <p class="subtitle-nav">Raih Sertifikasi Nasional berstandard SKKNI dari BNSP bidang Desain, UI/UX dan Produk. Ikuti Pelatihan Singkat dan Sertifikasi-nya melalui BISA Design Academy</p>    
                                    </div>
                                </div>                            
                            </div>    
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown dropdown-x ml-4">
                    <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Platform Lain  </i>
                    </a>

                    <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="">
                        <div class="row p-4">
                            <div class="col-md-4 col-sm-12 nav-judul">
                                <h3 class="nsans-700 text-hitam-custom text-shadow-2">Platform Lain</h3>
                                <p> </p>
                            </div>    
                            <div class="col-md-4 col-sm-12"> 
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/academy.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="https://bisa.ai" target="_blank"> <h5 class="title-nav"> BISA AI Academy </h5> </a> 
                                        <p class="subtitle-nav">Pembelajaran dan bangun portofolio terkait Data Science melalui BISA AI Academy<br class="non-mobile"><br class="non-mobile"></p>    
                                    </div>
                                </div>  
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/mascot-mini.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="https://academy.bisa.network" target="_blank"> <h5 class="title-nav"> BISA Network </h5> </a> 
                                        <p class="subtitle-nav">Pembelajaran dan bangun portofolio terkait Networking, Cloud dan Programming melalui BISA Network Academy</p>    
                                    </div>
                                </div> 
                                
                            </div>

                            <div class="col-md-4 col-sm-12">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/logo_business.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="https://bisa.business" target="_blank"> <h5 class="title-nav">BISA Business </h5> </a> 
                                        <p class="subtitle-nav">Pembelajaran dan bangun portofolio terkait Bisnis, Startup dan Digital Marketing melalui BISA Business Academy.</p>    
                                    </div>
                                </div>
                                <hr class="non-mobile">
                                <div class="row">
                                    <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/img/2022/coworking.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                    <div class="col-md-9 col-sm-12"> 
                                        <a class="" href="https://coworking.bisa.ai" target="_blank"> <h5 class="title-nav"> Coworking Space</h5> </a> 
                                        <p class="subtitle-nav">Belajar asik di BISA AI Coworking Space.</p>    
                                    </div>
                                </div>                             
                            </div>    
                        </div>
                    </div>
                </li>

                <li class="nav-item ml-4">
                    <a class="nav-link poppins-500 text-size-1 text-dark text-hitam-custom" href="<?= base_url('testimonial') ?>">Testimonial</a>
                </li>
                
                <?php 
                    if($this->session->userdata('token') == ""){
                ?>
                <li class="nav-item ml-4">
                    <a class="nav-link poppins-500 text-size-1 text-dark text-hitam-custom" href="<?= base_url('login_customer') ?>">Login</a>
                </li>

                <?php } else { ?>
                    
                        <li class="nav-item dropdown dropdown-x ml-4">
                        <a class="nav-link dropdown-toggle poppins-500 text-size-1 text-dark text-hitam-custom" href="#" id="" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Hai ,<?php echo $this->session->userdata('nama'); ?> &nbsp;</i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-x full-menu box-shadow" aria-labelledby="">
                            <div class="row p-4">
                                <div class="col-md-4 col-sm-12">
                                    
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 text-center"> <img src="<?php $foto = ($this->session->userdata('photo') == "" || $this->session->userdata('photo') == null) ? base_url()."assets/images/blank.png" : $this->CI->config->item('bisaUrl')."users/media/".$this->session->userdata('photo'); echo $foto;?>" class="" srcset="" style="width:50%; border-radius: 10px"> </div>
                                        <div class="col-md-12 col-sm-12 text-center mt-2">
                                            <h3 class="nsans-700 text-hitam-custom text-shadow-2 text-center"> <?php echo $this->session->userdata('nama'); ?> </h3>
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 text-center "> 
                                            <a class="" href="<?= base_url('myprofile') ?>"> <h5 class="title-nav"> <i class="fa fa-user" aria-hidden="true"></i> Akun Saya </h5> </a>     
                                        </div>
                                        
                                        <div class="col-md-12 col-sm-12 text-center"> 
                                            <a class="" href="<?= base_url('login_customer/logout') ?>"> <h5 class="title-nav"> <i class="fa fa-sign-out-alt" aria-hidden="true"></i> Logout </h5> </a>   
                                        </div>
                                        
                                    </div>
                                    <hr>
                                </div>    
                                <div class="col-md-4 col-sm-12"> 
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/19.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-9 col-sm-12"> 
                                            <a class="" href="<?= base_url('transaction_history') ?>"> <h5 class="title-nav"> Riwayat Pembelian </h5> </a> 
                                            <p class="subtitle-nav">Riwayat pembelian Course dan Certifite<br class="non-mobile"><br class="non-mobile"></p>    
                                        </div>
                                    </div>  
                                    <hr class="non-mobile">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/20.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-9 col-sm-12"> 
                                            <a class="" href="<?= base_url('my_course') ?>" > <h5 class="title-nav"> Course Academy Saya </h5> </a> 
                                            <p class="subtitle-nav">Course Academy seperti FREE Class, MASTER Class, MASTER Class on Job Training yang kamu ikuti</p>    
                                        </div>
                                    </div>
                                    
                                </div>

                                <div class="col-md-4 col-sm-12">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/24.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-9 col-sm-12"> 
                                            <a class="" href="<?= base_url('exam_certification') ?>" > <h5 class="title-nav"> Certificate Saya </h5> </a> 
                                            <p class="subtitle-nav">Program Profesional dan Industry Certificate yang kamu ikuti</p>    
                                        </div>
                                    </div> 
                                    <hr class="non-mobile">
                                    <div class="row">
                                        <div class="col-md-3 col-sm-12"> <img src="<?= base_url('assets/images/icons/20.png') ?>" class="img-navbar" srcset="" style="width:200%"> </div>
                                        <div class="col-md-9 col-sm-12"> 
                                            <a class="" href="<?= base_url('portofolioku') ?>"> <h5 class="title-nav"> Portofolio Saya </h5> </a> 
                                            <p class="subtitle-nav"> Ajukan Portofolio berdasarkan dengan course yang telah anda selesaikan. </p>    
                                        </div>
                                    </div> 
                                     
                                </div>    
                            </div>
                        </div>
                    </li>

                <?php } ?>

            </ul>
        </div>
    </div>
</nav>


<!-- /NAVBAR --->
