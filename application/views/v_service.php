<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>

<script src="js/jquery.js" type="text/javascript"></script>
<script src="js/bootstrap.js" type="text/javascript"></script>

<?php $this->load->view('v_head'); ?>

<?php $this->load->view('v_header_service'); ?>
<div class="container">
  <h1 class="display-4">
    <center>Lab Service</center>
  </h1>
  <div class="jumbotron jumbotron-fluid">
    <div class="container">
      <p class="lead">
        <b>Apa itu Lab Service ?</b>
      </p>
      <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
      <p class="lead">
        <b>Silahkan Pilih Resource Yang Akan Di Sewa</b>
      </p>
      <!-- <div id="disini"></div> -->
      <div class="col-md-4 text-white bg-primary mb-3">
        <div class="card" style="max-width: 18rem;">
          <div class="card-header text-center"><br>
            <h1> CPU <br>
              <p>Central Processing Unit</p>
            </h1>
          </div>
          <img class="card-img-top" src="<?php echo base_url() ?>assets/img/CPU.png" alt="Card image cap">
          <div class="card-body text-center">
            <!-- <h5 class="card-title">Card title</h5> -->
            <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p>

              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <div class="dropdown-menu">
                  <?php foreach ($server as $key => $value) {
                    if ($value->jenis_server == 1) {
                      echo "<a class='dropdown-item' href='#' target='_blank'>" . $value->nama . "</a><br>";
                    }
                  } ?>

                </div>
              </div>
          </div>
        </div>
      </div>

      <div class="col-md-4 text-white bg-info mb-3">
        daa
      </div>

      <div class="col-md-4 text-white bg-primary mb-3 ">
        <div class="card" style="max-width: 18rem;">
          <div class="card-header text-center"> <br>
            <h1> GPU <br>
              <p>Graphics Processing Unit</p>
            </h1>
          </div>
          <img class="card-img-top" src="<?php echo base_url() ?>assets/img/GPU.png" alt="Card image cap">
          <div class="card-body text-center">
            <!-- <h5 class="card-title">Card title</h5> -->
            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            <p>

              <div class="btn-group">
                <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Action
                </button>
                <button href="button">
                  Detail
                </button>
                <div class="dropdown-menu">
                  <?php foreach ($server as $key => $value) {
                    if ($value->jenis_server == 2) {
                      echo "<a class='dropdown-item' href='#'>" . $value->nama . "</a><br>";
                    }
                  } ?>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title" id="exampleModalLongTitle">Pesanan</h2>
          </div>
          <div class="modal-body">
            <!-- Body Data Table -->


            <!-- End Data Table -->
          </div>
          <div class="modal-footer text-center">
            <center>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Pesan</button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal -->

    <!-- Modal History -->
    <div class="modal fade" id="ModalHistory" tabindex="-1" role="dialog" aria-labelledby="ModalHistory" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <h2 class="modal-title" id="ModalHistoryTitle">History Service</h2>
          </div>
          <div class="modal-body">
            <!-- Data Table -->
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body p-0">
                    <div class="table-responsive">
                      <table class="table">

                        <tr>
                          <th>Task Name</th>
                          <th>Due Date</th>
                          <th>Status</th>
                          <th>Action</th>
                        </tr>
                        <!-- Start Foreach-->
                        <tr>
                          <td>Create a mobile app</td>
                          <td>2018-01-20</td>
                          <td>
                            <div class="badge badge-success">Completed</div>
                          </td>
                          <td><a href="#" class="btn btn-secondary">Detail</a></td>
                        </tr>

                        <!-- End Foreach -->

                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- end Data Table -->
          </div>
          <div class="modal-footer text-center">
            <center>
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
              <button type="button" class="btn btn-primary">Pesan</button>
            </center>
          </div>
        </div>
      </div>
    </div>
    <!-- end modal history-->

  </div>
</div>



<?php $this->load->view('script'); ?>
<?php $this->load->view('v_footer'); ?>

<!--<script>
    get_servers();
    function get_servers(){
        $.ajax({
            type  : 'POST',
            url   : 'server/get_labservice',
            async : false,
            dataType : 'json',
            success : function(data){
            console.log(data);
            var html = '';
                $.each(data.data, function(i, artikel) {        
                  html+='<div class="col-md-4">';
                  html+='<div class="card" style="width: 18rem;">';
                  html+='<center><img style="height: 200px;" src="https://pngimage.net/wp-content/uploads/2018/05/cpu-vector-png-2.png" class="card-img-top"></center>';
                  html+='<div class="card-body"><br>';
                  html+='<h5 class="card-title">CPU001</h5>';
                  html+='<p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content</p>';
                  html+='<center><button style="width: 300px;" class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Pilih Service</button></center></p>';
                  html+='      <div class="collapse" id="collapseExample">';
                  html+='        <div class="card card-body">';
                  html+='          <div class="form-group">';
                  html+='            <label for="exampleFormControlSelect1">Jadwal Training</label>';
                  html+='            <select class="form-control" id="exampleFormControlSelect1">';
                  html+='              <option>1 Jam</option>';
                  html+='              <option>2 Jam</option>';
                  html+='              <option>3 Jam</option>';
                  html+='              <option>4 Jam</option>';
                  html+='              <option>5 Jam</option>';
                  html+='            </select>';
                  html+='          </div>';
                  html+='          <div class="form-group">';
                  html+='            <label for="exampleFormControlSelect2">Metode Pembayaran</label>';
                  html+='            <select class="form-control" id="exampleFormControlSelect2">';
                  html+='              <option>OVO</option>';
                  html+='              <option>Go-Pay</option>';
                  html+='              <option>BRI</option>';
                  html+='              <option>BCA</option>';
                  html+='            </select>';
                  html+='          </div>';
                  html+='          <div class="form-group form-check">';
                  html+='            <input type="checkbox" class="form-check-input" id="exampleCheck1">';
                  html+='              <label class="form-check-label" for="exampleCheck1">Saya Menyetujui S&K</label>';
                  html+='            </div>';
                  html+='            <center><a target="_blank" href="<?php
                                                                      echo base_url('Invoice');
                                                                      ?>"><button style="width: 300px;" class="btn btn-primary" type="button">Confirm Penyewaan</button></a></center>';
                  html+='          </div>';
                  html+='        </div>';
                  html+='      </div>';
                  html+='    </div>';
                  html+='  </div>';
                });
                
        // console.log(html);
                $('#disini').html(html);      
            }
        });
    }
</script> -->