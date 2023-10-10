<?php
$this->load->view('Templates/Link-css');
$this->load->view('Templates/Navbar'); 
$this->CI = &get_instance();
?>
<div class="alert notice" role="alert" style="display: none; max-width: 300px; width: 100%; float: right; position : fixed; top: 2rem; right: 1rem; z-index: 9999; opacity: 1 ">
  <span id="msg"> </span>
</div>

<section id="innerTab">
    <br><br>
    <div class="container" >
        <div class="row">
            <div class="col mt-5 mb-1">
                <h3> <i class="fa fa-book" aria-hidden="true"></i> Learning Path > <?=$data['name_learning_path']?></h3>
            </div>
             
        </div>
        <div class="row">
             
            <div class="col-md-6 col-sm-12">
                <div class="form-group">
                    <label for="">Pencarian : </label>
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                </div>
            </div>

            <div class="col-md-6 col-sm-12">            
                <div class="form-group">
                    <label for="">Pilih Halaman: </label>
                    <select class="form-control" name="halaman" id="halaman">
                        <option value="1" selected>1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div id="loading"> </div>
                <div class="row" id="transaksi"></div>
            </div>
        </div>
    </div>
</section>

<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>

function goto(url){
        window.location = url;
    }

$(document).ready(function(){
    var localImage = "";
    var id_trx = "";

    var tokenName = "";
    var tokenHash = "";

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

    
    function appPage(jumlah, selected){
        $('#halaman')
            .find('option')
            .remove()
            .end();

        for (var i=1; i<=jumlah; i++) {
            $('#halaman').append($('<option>',
            {
                value: i,
                text: i
            }));
        }
        
        $('#halaman option[value='+selected+']').attr('selected','selected');
    }

    
    function getToken(){
        $.ajax({
            type: 'GET',
            url: '<?php echo base_url(); ?>transaction_history/get_token', 
            dataType : "JSON",
            success: function(data){ 
                
                tokenName = data.csrf.name;
                tokenHash = data.csrf.hash;
            },
            error: function(data){
                tokenName = "";
                tokenHash = "";
            }
        });
    }

    
    $('#search').keyup(delay(function (e) {
        showTransaksi();
    }, 1000));

    $( "#halaman" ).change(function() {
        showTransaksi();
    });

    
    showTransaksi();
    function showTransaksi(){
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>my_course/get_course_path', 
                dataType : "JSON",
                data:{
                    page:$("#halaman").find(":selected").val(),
                    id_learning_path: '<?=$id?>',
                    q:$("#search").val() 
                },
                beforeSend: function(){
                    html = '<div class="alert alert-info text-center" role="alert">  Mengambil data </div>';
                    $("#loading").html(html);
                    $("#transaksi").html("");
                },
                success: function(data){ 
                    html = "";

                    if(data.data.length == 0){
                        html = '<div class="alert alert-secondary text-center" role="alert" style="width: 100%"> Tidak ada data. </div>';
                    }
                    
                    $.each(data.data, function(i, item) {

                        html += '<div  class="col-md-4 col-sm-12 col-12 mb-2">';
                        html += '<div style="cursor: pointer; " class="card box-shadow shadow" style="width: 100%; height: 100%">';
                        html += '<div class="card-body d-flex flex-column" onclick=goto("<?php echo base_url(); ?>my_course/detail/6/'+item.id_customer_course+'")>';
                        html += '    <div class="row">';
                        html += '        <div class="col-sm-3 col-3 col-md-12">';
                        html += '            <img src="<?php echo $this->CI->config->item('bisaUrl')."course/media/";?>'+item.photo_course+'" alt="" width="100%" class="img-thumbnail">';
                        html += '        </div>';
                        html += '        <div class="col-sm-9 col-9 col-md-12 mt-2">';
                        html += '            <h5 style="font-size: 1rem"> '+item.course_name+'</h5>';
                        html += '            <p> <i class="fa fa-book" aria-hidden="true"></i> '+item.total_syllabus+' Silabus </p>';
                        html += '        </div>';
                        html += '    </div>';
                        html += '</div>';
                        html += '<div class="card-footer" style="border: none; background: white;">';
                        if (item.nft_file != null) {
                            html += '<button class="btn btn-primary  btn-sm" style="display: block; position: absolute" onclick=goto("<?php echo base_url(); ?>my_course/download_nft/'+item.nft_file+'") >Download NFT</button>';
                        }
                        html += '<p class="align-self-end float-right" style="color: orange; font-weight: bold;margin-top: auto;"> <i class="fa fa-copyright" aria-hidden="true"></i> '+item.points+' Pts</p>';
                        html += '</div>';
                        html += '</div>';
                        html += '</div>';
                    });


                    $("#transaksi").html(html);
                    jumlah = Math.ceil( data.row_count / data.offset);
                    appPage(jumlah, $("#halaman").find(":selected").val() );
                },
                complete:function(data){
                    $("#loading").html("");
                },
                error: function(){
                    $("#msg").text("Opps.. gagal mengambil data.");
                    $(".notice").addClass('alert-danger');
                    $(".notice").fadeIn( 1000 );     
                    setTimeout(() => {
                        $( ".notice" ).fadeOut( 3000 );    
                    }, 2000);
                    
                }
            });  
            
        }
});
</script>
