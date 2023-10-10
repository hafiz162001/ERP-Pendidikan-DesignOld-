<footer id="footer" class="footer">
    <!-- Footer Top Section Start -->
    <div class="footer-sec">
        <div class="container">
            <div class="row">
                <?php foreach ($about as $key => $value) : ?>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-wedget-one">
                            <a href=""><img src="../assets/img/bisaai_logo_biru_png.png" alt="" style="width:128px;height:auto;"/></a>
                            <p>BISA AI Platform merupakan platform Artificial Intelligence yang menyediakan Software As A Service untuk berbagai layanan</p>
                        </div>
                    </div>
                <?php endforeach ?>
                <div class="col-md-2 col-sm-6">
                    <div class="footer-widget-menu">
                        <h2>Navigation</h2>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#about">About Us</a></li>
                            <li><a href="#feature">Service</a></li>
                            <li><a href="#agenda">Agenda </a></li>
                            <li><a href="#case">Studi Kasus</a></li>
                            <li><a href="#news">Berita</a></li>
                            <li><a href="#contact">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <?php foreach ($info as $key => $value) : ?>
                        <div class="footer-wedget-newsletter">
                            <h2>Get in Touch</h2>
                            <div class="inner-box">
                                <div class="media">
                                    <div class="inner-item">
                                        <div class="media-left">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <p><b>Head Office</b></p><span class="inner-text"><?php echo $value->alamat; ?></span>
                                        </div>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="inner-item">
                                        <div class="media-left">
                                            <span class="icon"><i class="fa fa-map-marker"></i></span>
                                        </div>
                                        <div class="media-body">
                                            <p><b>Branch Office </b></p><span class="inner-text"><?php echo $value->alamat_workshop; ?></span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div id="contact" class="col-md-3 col-sm-6">
                    <div class="footer-wedget-four">
                        <h2>contact us </h2>
                        <?php foreach ($info as $key => $value): ?>
                        <div class="inner-box">
                            <div class="media">
                                <div class="inner-item">
                                    <div class="media-left">
                                        <span class="icon"><i class="fa fa-phone"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <span class="inner-text"><?php echo $value->no_telepon;?></span>
                                    </div>
                                </div>
                            </div>
                            <div class="media">
                                <div class="inner-item">
                                    <div class="media-left">
                                        <span class="icon"><i class="fa fa-envelope-o"></i></span>
                                    </div>
                                    <div class="media-body">
                                        <span class="inner-text"><?php echo $value->email;?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php endforeach?>
                        <ul>
                            <li><a href="https://medium.com/bisa-ai"><i class="fa fa-medium"></i></a></li>
                             <li><a href="https://www.youtube.com/bisaai"><i class="fa fa-youtube"></i></a></li>
                             <li><a href="https://www.instagram.com/bisa.ai/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Top Section End -->
    <!-- Footer Bottom Section Start -->
    <div class="footer-bottom-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="copy-right">
                       <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <span><a href="<?php echo base_url('dashboard');?>">BISA.AI</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom Section End -->
</footer>