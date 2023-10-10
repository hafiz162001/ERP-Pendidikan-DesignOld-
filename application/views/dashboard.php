<!DOCTYPE html>
<html dir="ltr" lang="en">

<?php $this->load->view('v_head'); ?>

<body>
    <!-- Preloader Start -->
    <!--<div id="preloader">-->
    <!--    <div id="preloader-status"></div>-->
    <!--</div>-->
    <!-- Preloader End -->


<!--MODAL ANNOUNCEMENT-->
    <!--<div class="modal fade" id="myModal" role="dialog">-->
    <!--    <div class="modal-dialog">-->
    <!--         Modal content -->
    <!--        <div class="modal-content">-->
    <!--             Modal header -->
    <!--            <div class="modal-header">-->
    <!--                <button type="button" class="close" data-dismiss="modal">&times;</button>-->
    <!--                <h4 class="modal-title text-primary"><b>Kompetisi Terbuka Penyelesaian Covid19 dengan Artificial Intelligence</b></h4>-->
    <!--            </div>-->
    <!--             Modal body -->
    <!--            <div class="modal-body">-->
    <!--                <p>-->
    <!--                    <img src="../assets/img/Covid-19.jpeg" </p> </div> -->
    <!--                    <div class="modal-footer">-->
    <!--                       <button type="button" class="btn btn-info btn-sm" ><a href="https://bisa.ai/Covid-19" target="_blank"><font style="color:white;">More Info</font></a></button>-->
    <!--                        <button type="button" class="btn btn-default btn-sm" data-dismiss="modal"> Close </button>-->
    <!--                    </div>-->
    <!--            </div> -->
    <!--        </div> -->
    <!--    </div>-->
<!--END ANNOUNCEMENT-->

        <!-- Header Start -->
        <?php $this->load->view('v_header'); ?>
        <!-- Header End -->


        <!-- Slider Section Start -->
        <?php $this->load->view('v_carousel'); ?>
        <!-- Slider Section End -->

        <?php $this->load->view('v_layanan'); ?>

        <!-- Page Web Info -->
        <?php $this->load->view('v_about'); ?>
        <!-- Web Info End -->

        <!-- Agenda Start-->
        <?php $this->load->view('v_agenda'); ?>
        <!-- Agenda End -->

        <!-- Why Us Section Start -->
        <?php $this->load->view('v_feature'); ?>
        <!-- Why Us Section End -->

        <!--Studi Kasus Start	-->
        <?php $this->load->view('v_faq'); ?>
        <!--Study Kasus End-->

        <!--Client Start-->
        <?php $this->load->view('v_client'); ?>
        <!--Client End-->

        <!--Testimoni Start-->
        <?php $this->load->view('v_testimoni'); ?>
        <!--Testimoni End-->

        <!--News Start-->
        <?php $this->load->view('v_news'); ?>
        <!--News End-->

        <!-- Footer Start -->
        <?php $this->load->view('v_footer'); ?>
        <!-- Footer Section End -->

        <!--Script Start-->
        <?php $this->load->view('script'); ?>
        <!--Script End-->

</body>

</html>