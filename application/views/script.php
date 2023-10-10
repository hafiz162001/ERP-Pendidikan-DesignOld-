
<!-- Scripts Js Start -->
<script src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url()?>assets/js/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.magnific-popup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/owl.animate.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.scrollUp.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.counterup.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/modernizr.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/waypoints.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/jquery.meanmenu.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/custom.js"></script>
	<script data-ad-client="ca-pub-5655307185555130" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
    function goBack() {
      window.history.back();
    }
    </script> 
    
    <script>jQuery(document).ready(function(){

      // Start
      // sessionStorage.getItem('key');
      if (sessionStorage.getItem("story") !== 'true') {
        // sessionStorage.setItem('key', 'value'); pair
        sessionStorage.setItem("story", "true");
        // Calling the bootstrap modal
        $("#myModal").modal();
        }
      // End
      
      // Do not include the code below, it is just for the 'Reset Session' button in the viewport.
      // This is same as closing the browser tab.
      $('#reset-session').on('click',function(){
      sessionStorage.setItem('story','');
      });
    });
    </script>
	<!-- Scripts Js End -->	
	<script>
	$('.dropdown-toggle').dropdown()
	</script>