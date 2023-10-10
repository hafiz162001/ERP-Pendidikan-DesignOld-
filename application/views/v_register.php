<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>BISA Platform | AI for Everyone</title>			
	<!-- Favicon Icon -->
	<link rel="icon" type="image/png" href="https://bisa.ai/assets/img/favicon.png">	
	<!-- Apple Touch Icons -->

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url() ?>node_modules/selectric/public/selectric.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/styleAdmin.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/componentsAdmin.css">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <a href="https://ehosdev.javafirst.id/bisaai_frontend/bisa_ai_coba/"><img src="<?php echo base_url() ?>assets/img/bisaai_logo.png" alt="logo" width="100" text-align="center"></a>
            </div>

            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('Register/regis'); ?>" enctype="multipart/form-data">
                  <div class="row">
                    <!-- <div class="form-group col-6">
                      <label for="frist_name">First Name</label>
                      <input id="frist_name" type="text" class="form-control" name="frist_name" autofocus>
                    </div>
                    <div class="form-group col-6">
                      <label for="last_name">Last Name</label>
                      <input id="last_name" type="text" class="form-control" name="last_name">
                    </div> -->
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required="" autofocus="">
                    <div class="invalid-feedback">
                      Tolong isi Email Anda
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="name">Nama</label>
                    <input id="name" type="text" class="form-control" name="name" required="" autofocus="">
                    <div class="invalid-feedback">
                      Tolong isi Nama Anda
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="password" class="d-block">Password</label>
                    <input id="password" type="password" class="form-control pwstrength" data-indicator="pwindicator" name="password" required="">
                    <div id="pwindicator" class="pwindicator">
                      <div class="bar"></div>
                      <div class="label"></div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="no_telepon">No.Tlp</label>
                    <input id="no_telepon" type="no_telepon" class="form-control" name="no_telepon" required="">
                    <div class="invalid-feedback">
                    </div>
                    <div class="form-group">
                      <label for="alamat">Alamat</label>
                      <input id="alamat" type="alamat" class="form-control" name="alamat" required="">
                      <div class="invalid-feedback">
                      </div>
                      <!-- <div class="form-group">
                        <label for="foto">Foto</label>
                        <p align="center">
                          <img style="width: 250px;" id="img" src="https://cdn.shopify.com/s/files/1/1247/8601/products/lastolite-grey-vinyl-background-275x6m-018_a36fc2d2-5860-48f1-8ec7-4b0ed98e2cf4_1024x1024.jpeg?v=1571439828" class="responsive">
                          <input type="text" name="foto" class="form-control" id="foto" style="display: none;">
                          <input style="width: 250px;" type="file" name="foto" class="form-control" id="foto">
                        </p>
                      </div> -->

                      <div class="row">
                        <div class="form-group col-6" id="jk" type="jk" class="form-control">
                          <label>Jenis Kelamin</label>
                          <select class="form-control selectric" name="jk" required="">
                            <option value="1">Laki - Laki</option>
                            <option value="2">Wanita</option>
                          </select>
                        </div>
                        <div class="form-group col-6" id="tgl" name="tgl">
                          <label>Tanggal Lahir</label>
                          <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text">
                                <i class="fas fa-calendar"></i>
                              </div>
                            </div>
                            <input type="date" class="form-control datepicker">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="form-group col-6" id="ki" class="form-control">
                          <label>Kategori Instansi</label>
                          <select class="form-control selectric" name="ki" required="">
                            <option value="1">Pemerintah</option>
                            <option value="2">Pelajar</option>
                            <option value="3">akademisi</option>
                          </select>
                        </div>
                        <div class="form-group col-6" id="ni" name="ni">
                          <label>Nama Instansi</label>
                          <input type="text" class="form-control" name="ni" id="ni" required="" autofocus="">
                          <div class="invalid-feedback">
                            Tolong isi Nama Instansi Anda
                          </div>
                        </div>
                      </div>
                      <!-- <div class="form-group">
                      <label for="jk">Jenis Kelamin</label>
                      <input id="jk" type="jk" class="form-control" name="jk" required="" >
                      <div class="invalid-feedback">
                      </div> -->
                      <!-- <div class="form-group">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                      <input id="tanggal_lahir" type="tanggal_lahir" class="form-control" name="tanggal_lahir" required="" >
                      <div class="invalid-feedback">
                      </div> -->
                    </div>
                  </div>

                  <!-- 
                  <div class="form-divider">
                    Your Home
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>Country</label>
                      <select class="form-control selectric">
                        <option>Indonesia</option>
                        <option>Palestine</option>
                        <option>Syria</option>
                        <option>Malaysia</option>
                        <option>Thailand</option>
                      </select>
                    </div>
                    <div class="form-group col-6">
                      <label>Province</label>
                      <select class="form-control selectric">
                        <option>West Java</option>
                        <option>East Java</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>City</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-6">
                      <label>Postal Code</label>
                      <input type="text" class="form-control">
                    </div>
                  </div> -->

                  <div class="form-group">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="agree" class="custom-control-input" id="agree" require="">
                      <label class="custom-control-label" for="agree">I agree with the terms and conditions<font color="red">*</font></label>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Register
                    </button>
                  </div>

                  <center>Have an Account?<a href="<?php echo base_url('Login') ?>" type="submit">
                     Get Back to Login..</center>
                  </a>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/stislaAdmin.js"></script>

  <!-- JS Libraies -->
  <script src="<?php echo base_url() ?>node_modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
  <script src="<?php echo base_url() ?>node_modules/selectric/public/jquery.selectric.min.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/js/scriptsAdmin.js"></script>
  <script src="<?php echo base_url() ?>assets/js/customAdmin.js"></script>

  <!-- Page Specific JS File -->
  <script src="<?php echo base_url() ?>assets/js/page/auth-register.js"></script>
</body>

</html>
<!-- <script type='text/javascript'>
  function readFile() {

    if (this.files && this.files[0]) {

      var FR= new FileReader();

      FR.addEventListener("load", function(e) {
        document.getElementById("img").src       = e.target.result;
        document.getElementById("foto").innerHTML = e.target.result;
      }); 

      FR.readAsDataURL( this.files[0] );
    }

  }

  document.getElementById("foto").addEventListener("change", readFile);

</script> -->