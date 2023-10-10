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
                <h3> <i class="fa fa-university" aria-hidden="true"></i> My Cloud</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <div class="form-group">
                    <label for="">Pencarian : </label>
                    <input type="text" id="search" class="form-control" placeholder="Search...">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
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
                <div class="row" id="transaksi">

                </div>
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
            url: '<?php echo base_url(); ?>my_solusi/get_data', 
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

                    html += '                   <div class="col-12 col-md-9 mt-2"> ';   

                    html += '                        <h4> '+item.nama_cloud_publik+' </h4>  ';              
                    html += '                        <p> Status Aprroval <strong>: </strong> ';
                    if (item.status_cloud == 1) {
                        html +=  '<span class="badge badge-warning" style="font-style: italic">Menunggu Approval</span>';  
                    } else {
                        html +=  '<span class="badge badge-success" style="font-style: italic">Aktif</span>';  
                    }
                    html += '                        </p> ';
                    html += '                        <p> Lokasi Server <strong>: '+item.nama_lokasi+' </strong></p> ';
                    if (item.usage_ram == null) { item.usage_ram = 0;  x = item.ram.replace(" GB", ""); };                     
                    html += '                        <p> RAM / Usage <strong>: '+item.ram+' GB</strong></p> ';  
                    html += '                        <div class="progress">  <div class="progress-bar" role="progressbar" style="width: '+item.usage_ram+'" aria-valuemin="0" aria-valuemax="100">'+item.usage_ram+'</div></div>';
                    if (item.usage_cpu == null) { item.usage_cpu = 0;  x = item.cpu.replace(" vCPU", ""); };
                    html += '                        <p> CPU / Usage <strong>: '+item.cpu+' vCore </strong></p> ';
                    html += '                        <div class="progress">  <div class="progress-bar" role="progressbar" style="width: '+item.usage_cpu+'" aria-valuemin="0" aria-valuemax="100">'+item.usage_cpu+'</div></div>'; 
                    if (item.usage_disk == null) { item.usage_disk = 0;  x = item.disk.replace(" GB", ""); };
                    html += '                        <p> Disk / Usage <strong>: '+item.disk+' GB</strong></p> '; 
                    html += '                        <div class="progress">  <div class="progress-bar" role="progressbar" style="width: '+item.usage_disk+'" aria-valuemin="0" aria-valuemax="100">'+item.usage_disk+'</div></div>';
                    html += '                        <div class="row">  ';  
                    html += '                           <div class="col-md-6 col-sm12">';

                    html += '                             <p> Username <strong>: '; 
                    if (item.cloud_username == null) { html +=  '-' } else { html +=item.cloud_username };
                    html += ' </strong></p>';
                    html += '                             <p> Password <strong>: ';
                    if (item.cloud_password == null) { html +=  '-' } else { html +=item.cloud_password };
                    html += ' </strong></p>';
                    html += '                           </div>';
                    html += '                           <div class="col-md-6 col-sm12">';
                    html += '                             <p> Hostname <strong>: ';
                    if (item.cloud_hostname == null) { html +=  '-' } else { html +=item.cloud_hostname };
                    html += ' </strong></p>';
                    html += '                             <p> Ip <strong>: ';
                    if (item.cloud_ip_address == null) { html +=  '-' } else { html +=item.cloud_ip_address };
                    html += ' </strong></p>';
                    html += '                           </div>';
                    html += '                        </div> ';  
                    var date = new Date(item.waktu_expired);
                    html += '                        <p> Expired Date <strong>: '+date.toLocaleDateString()+'</strong></p> ';  
                    html += '                        <p> Download Petunjuk <strong>: <a target="_blank" class="btn btn-success" href="https://bisa.ai/s/downloadtutorialcloud"> <i class="fa fa-download" aria-hidden="true"></i> Download</a></strong></p> ';  
                    html += '                    </div>    ';    
                    html += '                    </div>    ';    
                    html += '                </div>';
                    html += '            </div>';
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
