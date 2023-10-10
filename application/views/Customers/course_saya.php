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
                <h3> <i class="fa fa-book" aria-hidden="true"></i> Course Saya</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="">Pilih Jenis: </label>
                    <select class="form-control" name="jenis" id="jenis">
                        <option value="1" selected>Free Course</option>
                        <option value="2">Learning Path</option>
                        <option value="5">On Job Training + Master Class</option>
                        <option value="3">Master Class</option>
                        <option value="4">Live Academy</option>
                        <option value="6">Learncation</option>
                    </select>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="">Pencarian : </label>
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                </div>
            </div>

            <div class="col-md-4 col-sm-12">            
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

    $( "#jenis" ).change(function() {
        showTransaksi();
    });
    showTransaksi();
    function showTransaksi(){
        var tipe = $("#jenis").find(":selected").val();
        if (tipe == 6) {
        
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>my_learncation/get_data', 
                dataType : "JSON",
                data:{
                    page:$("#halaman").find(":selected").val(),
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
                        html += '<div style="cursor: pointer; " class="col-md-12 col-sm-12 col-12 mb-2">  '; 
                        html += '        <div class="card box-shadow shadow" style="width: 100%; height: 100%">   ';   
                        // html += '           <div class="card-body d-flex flex-column" onclick=goto("<?=base_url()?>my_degree/detail_data/'+item.id_dgr_customer_degree+'") >    ';           
                        html += '           <div class="card-body d-flex flex-column">    ';           
                        html += '               <div class="row"> ';
                        html += '                   <div class="col-sm-9 col-9 col-md-3 mt-2">  ';                
                        html += '                       <img src="<?php echo $this->CI->config->item('bisaUrl')."learncation/media/poster_learncation/";?>'+item.foto_learncation+'" alt="" style="width: 100%"> ';
                        html += '                   </div>   ';             
                        html += '                   <div class="col-sm-9 col-9 col-md-9 mt-2"> ';                  
                        html += '                        <h5 style="font-size: 1rem"> '+item.nama_learncation+' </h5>  ';              
                        html += '                        <p> <i class="fa fa-university" aria-hidden="true"></i> Lokasi <strong>: '+item.nama_principal+' </strong></p> ';  
                        book = (item.kode_booking == null) ? '-': item.kode_booking;

                        html += '                        <p> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number (INTERNET/DATA) <strong> : '+item.no_telfon+' </strong> </p> ';      
                        html += '                        <p> <i class="fa fa-book" aria-hidden="true"></i> Kode Booking <strong> : '+book+' </strong> </p> ';
                        date = new Date(item.waktu_kunjung_principal);      
                        html += '                        <p> <i class="fa fa-calendar" aria-hidden="true"></i> Waktu Kunjungan <strong> : '+date.toLocaleString()+' </strong> </p> ';      
                        html += '                    </div>    ';    
                        html += '                </div>';
                        html += '            </div>';
                        // if (item.foto_kartu_ujian != null) {
                        html += '       <div class="card-footer" style="border: none; background: white;">';
                        html += '           <p class="align-self-end float-right" style="color: orange; font-weight: bold;margin-top: auto;"> ';
                        html += '           <a id="downloadCert" href="#" onclick=goto("<?php echo base_url(); ?>my_course/detail/6/'+item.id_customer_course+'") class="btn btn-primary mt-2"> ';
                        html += '             Lihat Course </a> </p></div>';
                        // }
                        html += '       </div>';
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

        } else if (tipe == 2) {
            // kalau learning path
            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>my_course/get_learning_path', 
                dataType : "JSON",
                data:{
                    page:$("#halaman").find(":selected").val(),
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
                        html += '<div style="cursor: pointer; " class="col-md-12 col-sm-12 col-12 mb-2">  '; 
                        html += '        <div class="card box-shadow shadow" style="width: 100%; height: 100%">   ';            
                        html += '           <div class="card-body d-flex flex-column">    ';           
                        html += '               <div class="row"> ';
                        html += '                   <div class="col-sm-9 col-9 col-md-3 mt-2">  ';                
                        html += '                       <img src="<?php echo $this->CI->config->item('bisaUrl')."learning_path/media/";?>'+item.photo_learning_path+'" alt="" style="width: 100%"> ';
                        html += '                   </div>   ';             
                        html += '                   <div class="col-sm-9 col-9 col-md-9 mt-2"> ';                  
                        html += '                        <h5 style="font-size: 1rem"> '+item.name_learning_path+' </h5>  ';              
                        html += '                        <p> <i class="fa fa-university" aria-hidden="true"></i> Total Course <strong>: '+item.number_of_course+' </strong></p> ';    
                        date = new Date(item.created_at);      
                        html += '                        <p> <i class="fa fa-calendar" aria-hidden="true"></i>  Created Date <strong> : '+date.toLocaleString()+' </strong> </p> ';      
                        html += '                    </div>    ';    
                        html += '                </div>';
                        html += '            </div>';
                        // if (item.foto_kartu_ujian != null) {
                        html += '       <div class="card-footer" style="border: none; background: white;">';
                        html += '           <p class="align-self-end float-right" style="color: orange; font-weight: bold;margin-top: auto;"> ';
                        html += '           <a id="downloadCert" href="#" onclick=goto("<?php echo base_url(); ?>my_course/learning_path/6/'+item.id_customer_learning_path+'") class="btn btn-primary mt-2"> ';
                        html += '             Lihat Course </a> </p></div>';
                        // }
                        html += '       </div>';
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

            } else {

            $.ajax({
                type: 'POST',
                url: '<?php echo base_url(); ?>my_course/showhistory', 
                dataType : "JSON",
                data:{
                    page:$("#halaman").find(":selected").val(),
                    tipe: tipe,
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

                        html += '<div style="cursor: pointer; " class="col-md-4 col-sm-12 col-12 mb-2" onclick=goto("<?php echo base_url(); ?>my_course/detail/'+tipe+'/'+item.id_customer_course+'")>';
                        html += '<div class="card box-shadow shadow" style="width: 100%; height: 100%">';
                        html += '<div class="card-body d-flex flex-column">';
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
    
        }
});
</script>
