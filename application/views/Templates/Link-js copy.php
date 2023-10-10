</body>
<?php $this->CI = &get_instance(); ?>
<script src="<?= base_url('assets/aos/aos.js') ?>"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
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
    setInterval(function() {
        $(".bounce").effect("bounce", {
            times: 1
        }, 1100);
    }, 1100)

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
        center: true,
        items: 3,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true
    })

    $('.fitur').owlCarousel({
        center: true,
        items: 3,
        loop: true,
        autoplay: true,
        autoplayTimeout: 1500,
        autoplayHoverPause: true
    })
    $('.fitur-hp').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true
    })
    $('.bidang-hp').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true
    })
    $('.testi-hp').owlCarousel({
        center: true,
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoplayHoverPause: true
    })

    $(document).ready(function() {
        $('#client').owlCarousel({
            loop: true,
            margin: 15,
            autoplay: true,
            nav: true,
            responsive: {
                0: {
                    items: 2
                },
                600: {
                    items: 4
                },
                1000: {
                    items: 4
                }
            },
            navText: ["<img src='https://cdn4.iconfinder.com/data/icons/feather/24/arrow-left-512.png'/>",
                "<img src='https://cdn0.iconfinder.com/data/icons/feather/96/591276-arrow-right-512.png'/>"
            ]
        });


    });

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