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
                <h3> <i class="fa fa-history" aria-hidden="true"></i> Riwayat Pembayaran</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Pilih Transaksi: </label>
                    <select class="form-control" name="jenis" id="jenis">
                        <option value="1" selected>Course Academy</option>
                        <option value="2">Certificate</option>
                        <!-- <option value="3">Pendidikan</option>
                        <option value="4">Learncation</option>
                        <option value="5">Solusi</option> -->
                        <option value="6">Learning Path</option>
                    </select>
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Pencarian:  </label>
                    <input type="text" class="form-control" id="search" placeholder="Search..">
                </div>
            </div>

            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Pilih Halaman: </label>
                    <select class="form-control" name="halaman" id="halaman">
                        <option value="1" selected>1</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div id="transaksi"></div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="modalTF" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Upload Bukti Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-12"><h3 id="labelnama">Nama </h3></div>
              <div class="col-md-12"><input type='file' class='buktiTF form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />  </div>
              <div class="col-md-12 mt-2 mb-2"><img src="" alt="" srcset="" id="preview" style="width: 100%;"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="btnUpload">Upload gambar</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modalBT" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Bukti Transfer</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col-md-12"><h3>Bukit Transfer:  </h3></div>
              <div class="col-md-12"><h4 id="labelBT">Nama </h4></div>
              <div class="col-md-12 mt-2 mb-2"><img src="" alt="" srcset="" id="preview_bt" style="width: 100%;"></div>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal bayar ulang-->
<div class="modal fade" id="modalPilihBayar" tabindex="-1" role="dialog" aria-labelledby="modallabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modallabel">Ulangi pembayaran</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
              <div class="col">
                    <input type="hidden" id="id_trx_tmp" >
                    <div class="form-group">
                        <label for="m_bayar">Pilih pembayaran</label>
                        <select class="form-control" id="m_bayar">
                            <?php 
                            foreach ($metode_bayar['data'] as $v) {
                                echo '<option value="'.$v['service_code'].'">'.$v['metode'].'</option>';
                            }
                            ?>
                            <!-- <option value="9999">Transfer Bank BNI</option>
                            <option value="9998">Transfer Bank BCA</option> -->
                            
                        </select>

                        <button class="btn btn-block btn-primary mt-5" id="postBayar"> Bayar </button>
                    </div>
              </div>
             
          </div>
      </div>
    </div>
  </div>
</div>
<form method="post" id="gotoBayar" action="" style="display: none;">
      <div id="inputan">

      </div>                      
      <button type="submit" id="gotoSubmit" >
      </button>                      
</form>
<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>

<script>
$(document).ready(function(){
    var localImage = "";
    var id_trx = "";
    var jenis = "";
    var invoice = "";

    var tokenName = "";
    var tokenHash = "";
    File.prototype.convertToBase64 = function(callback){
            var reader = new FileReader();
            reader.onloadend = function (e) {
                callback(e.target.result, e.target.error);
            };   
            reader.readAsDataURL(this);
    };

    getToken();

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

    $('#search').keyup(delay(function (e) {
       showTransaksi();
    }, 1000));

    $(".buktiTF").on('change',function(){
        var selectedFile = this.files[0];
        selectedFile.convertToBase64(function(base64){
            var findLeng = base64.split(';base64,')[0].length + 8;
            var cleanbase = base64.substring(findLeng);
            localImage = cleanbase;
            $('#preview').attr('src', base64);
        }) 
    });

    $("#transaksi").on('click', '.trxform', function(){
        id = $(this).data('id');
        nama = $(this).data('name');
        id_trx = id;
        $("#modalTF").modal('show');
        $("#labelnama").text(nama);
        $(".buktiTF").val(null);
        $('#preview').attr('src', '');
        // console.log($(this));
    });

    $("#transaksi").on('click', '.show_bukti', function(){
        foto = $(this).data('foto');
        nama = $(this).data('name');
        $("#modalBT").modal('show');
        $("#labelBT").text(nama);
        $('#preview_bt').attr('src', '<?php echo $this->CI->config->item('bisaUrl')."transaction/media/";?>'+foto);
        // console.log($(this));
    });

    $("#transaksi").on('click', '.byrUlang', function(){
        id_trx = $(this).data('id');
        jenis = $(this).data('jenis');
        invoice = $(this).data('invoice');
        $("#modalPilihBayar").modal('show');
    });

    $( "#postBayar" ).click(function() {
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>transaction_history/bayarulangv2', 
            dataType : "JSON",
            data:{
                id_trx:id_trx,
                jenis:jenis,
                invoice_number:invoice,
                service_code:$("#m_bayar").find(':selected').val(),
                [tokenName]: tokenHash
            },
            beforeSend: function(){
                $("#postBayar").attr("disabled", "disabled");
                $("#postBayar").text('Memproses data..');
            },
            success: function(data){ 

                var inputan = "";
                getToken();
                $("#msg").text("Permintaan bayar ulang berhasil...");
                $(".notice").removeClass('alert-danger').addClass('alert-success');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
                
                if (data.data.redirect_url != null){
                    
                    if( data.data.redirect_data!=null || data.data.redirect_data!=undefined ){
                        $.each(data.data.redirect_data, function(i, item) {
                            inputan += "<input name='"+i+"' value='"+item+"' >";
                        });
                        $("#inputan").html(inputan);
                    } else {
                        setTimeout(() => {
                            window.location = data.data.redirect_url; 
                        }, 1000);
                        return false;
                    }
                    $("#gotoBayar").attr('action', data.data.redirect_url);
                    setTimeout(() => {
                        $("#gotoSubmit").trigger('click');
                    }, 1000); 
                }
                getToken();

                // setTimeout(() => {
                //     // window.location = data.data.redirect; 
                // }, 1000);
            },
            complete:function(data){
                $("#postBayar").attr("disabled", false);
                $("#postBayar").text('Bayar');
            },
            error: function(){
                getToken()
                $("#msg").text("Opps.. Gagal meminta pembayaran baru.");
                $(".notice").removeClass('alert-success').addClass('alert-danger');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
                getToken();

                
            }
        });
    });
    

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

    $( "#btnUpload" ).click(function() {
        if($(".buktiTF").val() == "" || $(".buktiTF").val() == null ){
            $("#msg").text("Pilih file gambar (jpg / png) dahulu. ");
            $(".notice").addClass('alert-danger');
            $(".notice").fadeIn( 1000 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);

            return false;    
        }
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>transaction_history/buktitf', 
            dataType : "JSON",
            data:{
                id_trx:id_trx,
                gambar:localImage,
                [tokenName]: tokenHash
            },
            beforeSend: function(){
                $("#btnUpload").attr("disabled", "disabled");
                $("#btnUpload").text('Uploading..');
            },
            success: function(data){ 
                getToken();
                $("#msg").text("Berhasil upload bukti transfer.");
                $(".notice").removeClass('alert-danger').addClass('alert-success');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);
                $("#modalTF").modal('hide');
                $("#btnUpload").attr("disabled", false);
                $("#btnUpload").text('Upload gambar');
            },
            complete:function(data){
            
            },
            error: function(){
                getToken()
                $("#msg").text("Opps.. Gagal upload data.");
                $(".notice").removeClass('alert-success').addClass('alert-danger');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);

                $("#btnUpload").attr("disabled", false);
                $("#btnUpload").text('Upload gambar');
                
            }
        });
    });
    
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

    $( "#halaman" ).change(function() {
        showTransaksi();
    });


    $( "#jenis" ).change(function() {
        showTransaksi();
    });


    showTransaksi();
    function showTransaksi(){
        jenis = $("#jenis").find(":selected").val();
        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>transaction_history/showhistory', 
            dataType : "JSON",
            data:{
                page:$("#halaman").find(":selected").val(),
                jenis: jenis,
                q:$('#search').val(),
                id_course: ''
            },
            beforeSend: function(){
                html = '<div class="alert alert-info text-center" role="alert">  Mengambil data </div>';
                $("#transaksi").html(html);
            },
            success: function(data){ 
                html = "";
                
                $.each(data.data, function(i, item) {
                    blmBayar = "";
                    formBukti = "";
                    bayarulang = "";
                    tipe = 1;
                    if (item.is_ojt == 1) {
                        tipe = 5;
                    } else if(item.ojt == 3) {
                        tipe = 4    
                    } else if(item.total_price != 0){
                        tipe = 3
                    } else {
                        tipe = 1;
                    }

                    var date = new Date(item.expired_at);
                    if(item.photo == null || item.photo == "null" || item.photo == "Null"){
                        if(item.status != "2"){  
                            if (jenis == 1) { 
                                formBukti = '<button type="button" class="btn btn-primary trxform" data-id="'+item.id_transaction+'" data-name="'+item.course_name+'" > Unggah Bukti Trasfer </button>';
                            }
                        }
                    } else {
                        formBukti = '<button type="button" class="btn btn-danger show_bukti" data-foto="'+item.photo+'" data-name="'+item.course_name+'" > Lihat Bukti Transfer </button>';
                    }

                    if(item.status == "1"){
                        status = "Belum dibayar";
                        color = "orange";
                        blmBayar += '            <p>Invoice berlaku sampai : <strong>'+date.toLocaleDateString()+'</strong> </p>';
                    
                    } else if(item.status == "2") {
                        status = "Sudah dibayar";
                        color = "green";
                        blmBayar = "";
                    } else {
                        status = "Gagal";
                        color = "red";
                        blmBayar = "";
                    }


                    if(item.total_price == "0"){
                        gratis = '            <h5> Gratis </h5>';
                    } else {
                        gratis = '            <h5>Rp. '+item.total_price.toLocaleString()+'</h5>';
                        image = an ="";
                        if(item.service_code==9999){  
                            image = "<?=base_url('/assets/images/bni.png')?>";
                            an = "<br> No.rekening 1315441125";
                        } else if(item.service_code==9998){  
                            image = "<?=base_url('/assets/images/bca-bank-central-asia.svg')?>";
                            an = "<br> No.rekening 0866131541";
                        } else if(item.service_code=="1077"){
                            image = "<?=base_url('/assets/images/link.png')?>";
                            an = "";
                        } else if(item.service_code=="1084"){
                            image = "<?=base_url('/assets/images/dana.png')?>";
                            an = "";
                        } else if(item.service_code=="1083") {
                            image = "<?=base_url('/assets/images/bayarind.png')?>";
                            an = "";
                        } else if(item.service_code=="1085") {
                            image = "<?=base_url('/assets/images/shopee.png')?>";
                            an = "";
                        }

                        gratis += '<img class="mb-4" src="'+image+'" width="200">'+an;
                        
                        if(item.status != 2){
                            if (jenis == 1 ) {
                                // course academy
                                gratis += '<br> <button class="btn btn-sm btn-success byrUlang" data-id="'+item.id_transaction+'" data-jenis="'+jenis+'" data-invoice="'+item.invoice_number+'" > Bayar Ulang </button>'
                            } else if (jenis == 2) {
                                // certificate
                                gratis += '<br> <button class="btn btn-sm btn-success byrUlang" data-id="'+item.id_certification_transaction+'" data-jenis="'+jenis+'" data-invoice="'+item.invoice_number+'" > Bayar Ulang </button>'

                            } else if (jenis == 3){
                                // degree
                                gratis += '<br> <button class="btn btn-sm btn-success byrUlang" data-id="'+item.id_dgr_transaction_degree+'" data-jenis="'+jenis+'" data-invoice="'+item.invoice_number+'" > Bayar Ulang </button>'
 
                            } else if (jenis == 4){
                                // degree
                                gratis += '<br> <button class="btn btn-sm btn-success byrUlang" data-id="'+item.id_transaction_learncation+'" data-jenis="'+jenis+'" data-invoice="'+item.invoice_number+'" > Bayar Ulang </button>'

                            } else if (jenis == 5){
                                // cloud
                                gratis += '<br> <button class="btn btn-sm btn-success byrUlang" data-id="'+item.id_transaction_cloud_publik+'" data-jenis="'+jenis+'" data-invoice="'+item.invoice_number+'" > Bayar Ulang </button>'

                            } else {
                                gratis += ''
                            }
                        }
                    }

                    html += '<div class="card shadow p-1 mb-2 card-trx" style="width: 100%; border-left: 4px solid '+color+'">';
                    html += '<div class="card-body">';
                    html += '    <div class="row">';
                    html += '        <div class="col-lg-3 col-md-12 text-center">';
                    html += '            <strong>Transaksi <br>'+status+'</strong> ';                   
                    html += '        </div>';
                    html += '        <div class="col-lg-6 col-md-12 text-left">';
                    var x = (item.invoice_number == "Null") ?  '-': item.invoice_number;
                    html += '            <p> Invoice No:  '+ x +' </p>';
                    
                    if (jenis == 1) {
                        if(item.status == "2"){
                            html += '            <h4> <a href="<?php echo base_url(); ?>my_course/detail/6/'+item.id_customer_course+'" target="_blank" > '+item.course_name+' </a></h4>';
                        } else {
                            html += '            <h4> '+item.course_name+' </h4>';
                        }
                    } else if (jenis == 2) {
                        html += '            <h4> '+item.nama_sertifikasi+' </h4>';  
                    } else if (jenis == 3) {
                        html += '            <h4> '+item.nama_degree+' </h4>';  
                    } else if (jenis  == 4) {
                        html += '            <h4> '+item.nama_learncation+' </h4>';  
                    } else if(jenis == 5) {
                        html += '            <h4> '+item.nama_cloud_publik+' </h4>';  
                    } else {
                        html += '            <h4> '+item.learning_path_name+' </h4>';  
                    }
                    
                    
                    html += blmBayar;
                    html += formBukti;
                    html += '        </div>';
                    html += '        <div class="col-lg-3 col-md-12 text-center">';
                    html += gratis;
                    html += '        </div>';
                    html += '    </div>';
                    html += '</div>';
                    html += '</div>';
                });


                $("#transaksi").html(html);
                jumlah = Math.ceil( data.row_count / data.offset);
                appPage(jumlah, $("#halaman").find(":selected").val() );
            },
            complete:function(data){
            
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
