
</div>

<div class="alert ntc" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 0.7 ">
    <span id="msg"> Opps.. something wrong.</span>
</div>    
    
<!-- Jquery Js -->
    <!-- <script src="<?= base_url('assets/aos/aos.js') ?>"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> -->
<!-- <script src="<?= base_url() ?>assets/OwlCarousel/owl.carousel.min.js"></script> -->


<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/bootstrap.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/isotope.pkgd.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/waypoints.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/counterup.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/slick.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/sal.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.magnific-popup.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/js.cookie.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.style.switcher.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/tilt.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/green-audio-player.min.js"></script>
<script src="<?= base_url('assets/newtemplates') ?>/js/vendor/jquery.nav.js"></script>


<!-- Site Scripts -->
<script src="<?= base_url('assets/newtemplates') ?>/js/app.js"></script>
<script src="<?= base_url() ?>assets/OwlCarousel/owl.carousel.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


<script>
    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > 50) {
            document.getElementsByClassName("navbar")[0].style.top = "0";
            document.getElementsByClassName("navbar")[0].style.boxShadow = "0.3px 0.4px 5px #7f8fa6";

        } else {
            // alert(currentScrollPos + ' > ' + prevScrollpos)
            document.getElementsByClassName("navbar")[0].style.top = "0";
            document.getElementsByClassName("navbar")[0].style.boxShadow = "0px 0px 0px transparent";

        }
        prevScrollpos = currentScrollPos;

    }

    function formatDate_indo(date) {
        var d = new Date(date+"+7"),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();
            hari = d.getDay();
            jam = d.getHours();
            menit = d.getMinutes();
            
            switch (hari) {
                case 0:
                    hari = "Minggu";
                    break;
                case 1:
                    hari = "Senin";
                    break;
                case 2:
                    hari = "Selasa";
                    break;
                case 3:
                    hari = "Rabu";
                    break;
                case 4:
                    hari = "Kamis";
                    break;
                case 5:
                    hari = "Jumat";
                    break;
                case 6:
                    hari = "Sabtu";
            }    

        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;
        if (jam < 10) 
            jam = '0' + jam;
        if (menit < 10) 
            // menit = '0' + menit;    
            menit = '0' + menit;    


        return hari + ", "+ day +"/"+month+"/"+year+" "+jam+":"+menit;
    }

    function validate_files(idIputan) {
        $("."+idIputan+"").css("border-color","#F0F0F0");
        var file_size = $('.'+idIputan+'')[0].files[0].size;
        if(file_size>2097152) {
            Msg("Ukuran Foto lebih dari 2 Mb", "alert-success");
            $("."+idIputan+"").css("border-color","#FF0000");
            $("."+idIputan+"").val(null);
            return false;
        } 
        return true;
    }

    function limiter(string, limit = 20){
        titik = "...";
        if(string.length > limit)
        {
            string = string.substring(0,limit) + titik;
        }
        return string;
    }

    function removeTags(str)
    {
        if ((str===null) || (str===''))
        return false;
        else
        str = str.toString();
        return str.replace( /(<([^>]+)>)/ig, '');
    }

    setInterval(function() {
        $(".bounce").effect("bounce", {
            times: 1
        }, 1100);
    }, 1100)

    function changeTitle(judul) {
        document.title = judul;
    }

    function Msg(text, tipe='alert-info'){
      $("#msg").text(text);
      $(".ntc").removeClass('alert-info').removeClass('alert-danger').removeClass('alert-success').addClass(tipe);
      $(".ntc").fadeIn( 100 );     
      setTimeout(() => {
          $( ".ntc" ).fadeOut( 3000 );    
      }, 2000);
    }

    var prevScrollpos = window.pageYOffset;
    window.onscroll = function() {
        var currentScrollPos = window.pageYOffset;
        if (prevScrollpos > 50) {
            document.getElementsByClassName("navbar")[0].style.top = "0";
            document.getElementsByClassName("navbar")[0].style.boxShadow = "0.3px 0.4px 5px #7f8fa6";

        } else {
            // alert(currentScrollPos + ' > ' + prevScrollpos)
            document.getElementsByClassName("navbar")[0].style.top = "0";
            document.getElementsByClassName("navbar")[0].style.boxShadow = "0px 0px 0px transparent";

        }
        prevScrollpos = currentScrollPos;

    }

    $('.testimoni').owlCarousel({
        center: false,
        loop: false,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true,
        responsiveClass:true,
        navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:4,
                nav:true
            }
        }
    })
    
    // disable copy paste, dan right click
    <?php if ( $this->CI->config->item('dev_mode') == "false") { ?>
    $('body').bind('cut copy', function (e) {
        return false;
    });
    $(document).bind('contextmenu', function (e) {
        return false;
    });
    $(document).keydown(function (event) {
        if (event.keyCode == 123) { 
            return false;
        } else if (event.ctrlKey && event.shiftKey && event.keyCode == 73) {        
            return false;
        }
    });
    
    
    <?php } else { echo "console.log('DEV MODE'); "; } ?>
    
</script>
<script>
    function myFunction() {
        var x = document.getElementById("myframe");
        var y = (x.contentWindow || x.contentDocument);
        if (y.document) y = y.document;
        y.body.style.backgroundColor = "red";
    }
</script>
</body>
</html>