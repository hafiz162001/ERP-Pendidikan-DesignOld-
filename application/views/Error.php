<html>

<!-- Load Assets -->
<?php $this->load->view('v_css_error'); ?>
<!-- End Load Assets -->


<body style='background:#ecf0f1'>
    <div class="container">
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <img class="img-fluid"
                    src="<?= base_url('assets/img/undraw_page_not_found_su7k.svg') ?>" width="350"
                    alt="">
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-lg-12 text-center">
                <h2 class="poppins-600 text-blue-vcon">Oopss..</h2>
                <h2 class="poppins-400 text-center">Halaman tidak diketahui</h2>
                <a class="mt-3 btn btn-bg-vcon px-4 py-3 poppins-600" href="<?= base_url() ?>">Kembali ke halaman awal</a>
            </div>
        </div>

        <div class="row mt-5 mb-5">
            <div class="col-lg-12 text-center">
                <span class="opensans-400 text-dark">Follow kami </span><br />
                <a target="_blank" class="text-size-6 mr-2 text-dark" href="https://www.instagram.com/bisa.ai/"><i
                        class="fab fa-instagram"></i></a>
                <a target="_blank" class="text-size-6 mr-2 text-dark"
                    href="https://www.linkedin.com/company/bisa-ai/"><i class="fab fa-linkedin"></i></a>
                <a target="_blank" class="text-size-6 mr-2 text-dark"
                    href="https://www.youtube.com/channel/UCGOi_aO_pEkDYs8uSJduP6w"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
</body>

</html>