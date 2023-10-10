<?php
$this->load->view('Admin/Templates/Header', FALSE);
?>
<div class="container-fluid">
    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Necessitatibus ducimus eius accusantium facere maxime, blanditiis aspernatur id, cupiditate vero dolore unde nihil molestiae quisquam temporibus adipisci, porro optio est natus.
</div>

<?php
$this->load->view('Admin/Templates/Footer', FALSE);
?>



<script>

$(document).ready(function(){

var jumlah = 1;
var pageIni = 1;
var no = 1;

showTransaksi();
function delay(callback, ms) {
    var timer = 0;
    return function() {
        var context = this, args = arguments;
        clearTimeout(timer);
        timer = setTimeout(function () {
        callback.apply(context, args);
        }, ms || 0);
    };
}
  
function showTransaksi(){
    
    $.ajax({
        type: 'POST',
        url: '<?php echo base_url('Dapur/'); ?>learncation/showdata', 
        dataType : "JSON",
        data:{
            page:1,
            q:$('#search').val()
        },
        beforeSend: function(){
             
        },
        success: function(data){ 
            html = "";
            if(sekarang==1){
                no = 1;
            }
            $.each(data.data, function(i, item) {
                 
            });
 
        },
        complete:function(data){
        
        },
        error: function(){
                            
        }
    });  
}
});  


</script>

