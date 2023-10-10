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
                <h3> <i class="fa fa-user" aria-hidden="true"></i> Akun Saya</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
            <div id="" style="margin: auto; width:100%; max-width: 200px">
                <img class="rounded" id="imgprev" src="<?php $foto = ($data['photo'] == "" || $data['photo'] == null) ? base_url()."assets/images/blank.png" : $this->CI->config->item('bisaUrl')."users/media/".$data['photo']; echo $foto;?>" alt="<?=$data['name']?>" style="width: 100%;"> 
            </div>


            <div class="form-group mt-3">
                <label for="file">Ubah Foto</label>
                <input type='file' class='ubahFoto form-control-file' accept=".png, .jpg, .jpeg, .PNG, .JPG, .JPEG" />
            </div>
            <br>
            <a class="btn btn-info btn-xs" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                <i class="fa fa-key" aria-hidden="true"></i>&nbsp; Ubah Password
            </a>
            <div style="padding: 5px; border-radius: 2px" class="collapse mt-3" id="collapseExample">   
                <div class="card card-body">
                    <strong>* Kosongkan bila tidak ingin mengganti password</strong>
                    <div class="form-group mt-3">
                        <label for="email">Paswword baru</label>
                        <input type="password" class="form-control" id="password" placeholder="**********" autocomplete="new-password" >
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Ulangi password baru</label>
                        <input type="password" class="form-control" id="c_password" placeholder="**********" autocomplete="new-password" >
                    </div>

                    <div class="form-group mt-3">
                        <label for="email">Password Lama</label>
                        <input type="password" class="form-control" id="old_password" placeholder="**********" autocomplete="new-password" >
                    </div>
                </div>    
            </div>
            


            <div class="form-group mt-3">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="name@example.com" disabled value="<?=$data['email']?>">
            </div>

            <div class="form-group">
                <label for="nama">Nama lengkap</label>
                <input type="text" class="form-control" id="nama" placeholder="Bisaai Octavia" value="<?=$data['name']?>">
            </div>

            <div class="form-group">
                <label for="jk">Jenis kelamin : </label>
                <br>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="jk_l" value="1" <?php if ($data['gender'] == 1) { echo "checked"; } ?>>
                    <label class="form-check-label" for="jk_l">Laki - Laki</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" name="jk" id="jk_p" value="2" <?php if ($data['gender'] == 2) { echo "checked"; } ?>>
                    <label class="form-check-label" for="jk_p">Perempuan</label>
                </div>
            </div>

            <div class="form-group">
                <label for="tlahir">Tanggal lahir</label>
                <input type="date" class="form-control" id="tlahir" placeholder="20/01/1999" value="<?=date("Y-m-d", strtotime($data['date_of_birth']));?>">
            </div>

            <div class="form-group">
                <label for="tlp">Nomor telepon</label>
                <input type="text" class="form-control" id="tlp" placeholder="08190000000" value="<?=$data['phone']?>">
            </div>

            <div class="form-group">
                <label for="nama">URL LinkedIn</label>
                <input type="text" class="form-control" id="sosmed_linkedin" placeholder="https://linkedin.com/bisaai" value="<?=$data['sosmed_linkedin']?>">
            </div>

            <div class="form-group">
                <label for="nama">URL Instagram</label>
                <input type="text" class="form-control" id="sosmed_instagram" placeholder="https://instagram.com/bisaai" value="<?=$data['sosmed_instagram']?>">
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea class="form-control" id="alamat" rows="3"><?=$data['address']?></textarea>
            </div>

            <div class="form-group">
                <label for="riwayat">Riwayat kerja</label>
                <textarea class="form-control" id="riwayat" rows="3"><?=$data['educational_background']?></textarea>
            </div>

            <button class="btn btn-block btn-primary" id="saveProfile">Update Profile</button>

            </div>
        </div>
    </div>
</section>

<?php
$this->load->view('Templates/Footer');
$this->load->view('Templates/Link-js'); ?>


<script>
$(document).ready(function(){
    var localImage = "";
    var id_trx = "";

    var tokenName = "";
    var tokenHash = "";
    File.prototype.convertToBase64 = function(callback){
            var reader = new FileReader();
            reader.onloadend = function (e) {
                callback(e.target.result, e.target.error);
            };   
            reader.readAsDataURL(this);
    };

    // getToken();

    $(".ubahFoto").on('change',function(){
        var selectedFile = this.files[0];
        selectedFile.convertToBase64(function(base64){
            var findLeng = base64.split(';base64,')[0].length + 8;
            var cleanbase = base64.substring(findLeng);
            localImage = cleanbase;
            $('#imgprev').attr('src', base64);
            // console.log(localImage);
        }) 
    });

    $( "#saveProfile" ).click(function() {
        saveProfile();
    });

    function saveProfile(){

        if($('#password').val() != $('#c_password').val()){
            $("#msg").text("Oppsss.. password dan confirm password tidak cocok!. ");
            $(".notice").addClass('alert-danger');
            $(".notice").fadeIn( 1000 );     
            setTimeout(() => {
                $( ".notice" ).fadeOut( 3000 );    
            }, 2000);

            $('#password').attr('style', 'border: 1px solid red');
            $('#c_password').attr('style', 'border: 1px solid red');
            return false
        }

        $.ajax({
            type: 'POST',
            url: '<?php echo base_url(); ?>login_customer/update_profile', 
            dataType : "JSON",
            data: {
                email:$('#email').val(),
                address:$('#alamat').val(),
                dateofbirth: $('#tlahir').val(),
                educational_background:$('#riwayat').val(),
                gender:$('input[name="jk"]:checked').val(),
                name:$('#nama').val(),
                sosmed_linkedin:$('#sosmed_linkedin').val(),
                sosmed_instagram:$('#sosmed_instagram').val(),
                phone:$('#tlp').val(),
                password:$('#password').val(),
                c_password:$('#c_password').val(),
                old_password:$('#old_password').val(),
                photo: localImage
            }, 
            beforeSend: function(){
                $("#saveProfile").attr("disabled", "disabled");
                $("#saveProfile").text("Tunggu sebentar..");
            },
            success: function(data){ 
                $("#msg").text(data.description);
                $(".notice").addClass('alert-success');
                $(".notice").fadeIn( 1000 );     
                setTimeout(() => {
                    $( ".notice" ).fadeOut( 3000 );    
                }, 2000);

                setTimeout(() => {
                    location.reload();    
                }, 1000);
            },
            complete:function(data){

            },
            error: function(data){
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

