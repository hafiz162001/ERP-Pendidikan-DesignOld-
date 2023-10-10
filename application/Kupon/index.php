<?php
$this->load->view('Templates/Admin/link-css');
$this->load->view('Templates/Admin/sidebar');
$this->load->view('Templates/Admin/header'); ?>

<link rel="stylesheet" href="<?= base_url('assets/Admin/css/toastr.min.css') ?>">
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.4/css/responsive.bootstrap.min.css">


<!-- DATA  -->
<div class="row">

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card mb-4 rounded-lg">
                    <div class="card-header py-3" style="margin-bottom:-21px">
                        <a class="btn btn-secondary float-right" href="<?= base_url('dapur/transaksi/trash_kupon') ?>" title="data yang sudah terhapus/di nonaktifkan, akan di simpan disini"><i class="fas fa-history"></i><br>History</a>

                        <h4 class="font-weight-bold text-primary"><i class="fas fa-th-list"></i> Data Kupon</h4>
                        <h6 style="font-size:14px" class="font-italic">data kupon keseluruhan </h6>
                    </div>
                    <div class="table-responsive">
                        <div class="card-body">

                            <!-- SEARCH -->
                            <?= form_open('dapur/transaksi/coupon', array('method'=>'get')); ?>
                            <div class='row'>
                                <div class='col-md-11' style='padding-right:0'>
                                    <div class='form-group'>
                                        <input type="text" class="form-control" aria-describedby="search" placeholder="Apa yang anda cari" name='search' autocomplete="off">
                                    </div>
                                </div>
                                <div class='col-md-1' style='padding-right:0'>
                                    <button type='submit' class='btn btn-primary btn-md  float-left' style='margin-left:0; padding-top:8px; padding-bottom:8px'><i class="fas fa-search fa-fw"></i></button>
                                </div>
                            </div>
                            <?= form_close(); ?>
                            <!-- /SEARCH -->
                            <table class="table table-striped table-bordered table-sm" style="width:100%; font-size: 13px">
                                <thead class="thead-dark text-center">
                                    <tr>
                                        <th scope="col">Photo</th>
                                        <th scope="col">Nama Kupon</th>
                                        <th scope="col">Deskripsi</th>
                                        <th scope="col">Semua</th>
                                        <th scope="col">Nama Course</th>
                                        <th scope="col">Nama Learning Path</th>
                                        <th scope="col">Tidak Terbatas</th>
                                        <th scope="col">Expire date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($collections as $list) :
                                        $template = "<b class='text-danger'>Kosong</b>";
                                        if (!empty($list['photo'])) $template = "<img src='https://gate.bisaai.id/elearning/transaction/media/" . ($list['photo']) . "' width='50' height='50'/>";
                                        $course = "<b class='text-danger'>Kosong</b>";
                                        if (!empty($list['name_course'])) $course = "<b>".$list['name_course']."</b>";
                                        $learning = "<b class='text-danger'>Kosong</b>";
                                        if (!empty($list['name_learning_path'])) $learning = "<b>".$list['name_learning_path']."</b>";
                                        $unlimited = $list['is_unlimited'] == 1 ? "<b class='text-info'>Yes </b>" : "<b style='color:#800000;'>No</b>";
                                        $all = $list['is_all'] == 1 ? "<b class='text-info'>Yes </b>" : "<b style='color:#800000;'>No</b>";
                                    ?>
                                        <tr>
                                            <td class="text-center"><?= $template ?></td>
                                            <td class="text-center"><b><?= $list['name'] ?></b></td>
                                            <td class="text-center"><?= substr(html_entity_decode($list['description']),0,75) ?>...</td>
                                            <td class="text-center"><?= $all ?></td>
                                            <td class="text-center"><?= $course ?></td>
                                            <td class="text-center"><?= $learning ?></td>
                                            <td class="text-center"><?= $unlimited ?></td>
                                            <td class="text-center"><b><?= date('d-M-Y',strtotime($list['expired_at'])) ?></b></td>
                                            <td class="text-center">
                                                <!-- EDIT | HAPUS -->
                                                <form action="<?= base_url('dapur/transaksi/action_kupon/') ?>" method="POST">
                                                    <!-- TOKEN -->
                                                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                                                    <!-- /TOKEN -->
                                                    <!-- ID -->
                                                    <input type="hidden" name="id_coupon" value="<?= base64_encode($list['id_coupon']) ?>">
                                                    <!-- /ID -->

                                                    <!-- EDIT, HAPUS-->
                                                    <button class="btn btn-light btn-sm" name="action" value="edit"><i class="fas fa-pencil-alt"></i></button>&nbsp;
                                                    <button class="btn btn-dark btn-sm" name="action" value="hapus" onclick="return confirm('Apakah anda yakin, ingin menghapusnya?')"><i class="fas fa-trash-alt"></i></button>
                                                    <!-- /EDIT, HAPUS -->

                                                </form>
                                                <!-- /EDIT | HAPUS  -->

                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                            <br />

                            <i> data yang aktif berjumlah <?= number_format($count, 0, 2, '.') ?>
                                data</i>

                            <?= $pagination ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /DATA  -->

<?php
$this->load->view('Templates/Admin/link-js'); ?>
<script src="<?= base_url('assets/Admin/js/toastr.min.js') ?>"></script>

<?= $this->session->flashdata('pesan') ?>
</body>
<script>
    $(document).ready(function() {
        $('#example').DataTable({
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function(row) {
                            var data = row.data();
                            return 'Details for ' + data[0] + ' ' + data[1];
                        }
                    }),
                    renderer: $.fn.dataTable.Responsive.renderer.tableAll({
                        tableClass: 'table'
                    })
                }
            }
        });
    });
</script>


</html>