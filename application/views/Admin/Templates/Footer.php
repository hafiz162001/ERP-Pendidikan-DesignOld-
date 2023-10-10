
        </main>

</div>
</div>

<div class="justify-content-center" id="loading" style="display: none;">
  <!-- <div class="spinner-border" role="status">
    <span class="sr-only">Loading...</span>
  </div> -->
    <div class="spinner-grow text-primary mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-secondary mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-success mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-danger mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-warning mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-info mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
    <div class="spinner-grow text-dark mr-1" role="status">
    <span class="sr-only">Loading...</span>
    </div>
</div>
<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 0.7 ">
  <span id="msg"> Loading .. </span>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?=base_url('assets/ckeditor/build/')?>ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> -->
<script src="<?=base_url('assets/Admin/select2/dist/js/select2.min.js')?>"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.39.0/js/tempusdominus-bootstrap-4.min.js" crossorigin="anonymous"></script>
<script>

  function removePtag(konten){
    var nama = konten;
    var cek = nama.substring(0,3);
    if(cek == "<p>") {
      nama = nama.replace("<p>", "");
      nama = nama.substring(0,nama.length - 4);
      console.log(nama);
    }
    return nama;
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
  

</script>

</body>
</html>