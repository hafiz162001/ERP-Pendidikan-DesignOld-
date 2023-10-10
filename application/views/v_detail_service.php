<html>

<!-- Load Assets -->
<?php $this->load->view('v_head'); ?>
<!-- End Load Assets -->

<!-- Load Header -->
<?php $this->load->view('v_header_service'); ?>
<!-- end Load Header -->

<!-- body -->

<Body>
    <div class=container>
        <hr class="solid">
        <h1>Service Detail</h1>
        <div class="col-md-6">
            <div class="slideshow-container">
                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="../assets/uploads/carousel/kemcer_1.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="../assets/uploads/carousel/kemcer_2.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="../assets/uploads/carousel/kemcer_3.jpg" style="width:100%">
                    <div class="text">Caption Text</div>
                </div>
            </div>
            <br>
            <div style="text-align:center">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        <div class="col-md-3">
            <?php foreach ($server as $key => $value) {
                if ($value->jenis_server == 1) {
                    echo "<p align='right'> <text size='24px'>" . $value->nama . "</text></a><br>";
                }
            } ?>
        </div>

    </div>
    <div class=container>
        <p>test</p>
    </div>
</Body>
<!-- End Body -->


<!-- Load Footer -->
<?php $this->load->view('v_footer'); ?>
<!-- End Footer -->

<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 2000); // Change image every 5 seconds
    }
</script>

<!-- Script -->
<?php $this->load->view('script'); ?>
<!-- Script End -->

</html>