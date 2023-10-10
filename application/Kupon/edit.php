<?php
$this->load->view('Templates/Admin/link-css');
$this->load->view('Templates/Admin/sidebar');
$this->load->view('Templates/Admin/header'); ?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="<?= base_url('assets/Datepicker/css/bootstrap-material-datetimepicker.css') ?>">
<link rel="stylesheet" href="<?= base_url('assets/Admin/css/toastr.min.css') ?>" />
<link href="<?= base_url('assets/Croppie/croppie.css') ?>" rel="stylesheet">

<link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<style>
    .select2-selection__rendered {
        line-height: 32px !important;
    }

    .select2-container .select2-selection--single {
        height: 39px !important;
    }

    .select2-selection__arrow {
        height: 34px !important;
    }
</style>

<script type="text/javascript">
//     $(window).load(function(){
// $("#semua").change(function() {
//             console.log($("#semua option:selected").val());
//             if ($("#semua option:selected").val() == '2') {
//                 $('#pilih').prop('hidden', false);
//             } else {
//                 $('#pilih').prop('hidden', true);
//             }
//         });
// });
    $(window).load(function(){
$("#id_pilih").change(function() {
            console.log($("#id_pilih option:selected").val());
            if ($("#id_pilih option:selected").val() == '2') {
                $('#course').prop('hidden', true);
                $('#learning').prop('hidden', false);
            } else {
                $('#learning').prop('hidden', true);
                $('#course').prop('hidden', false);
            }
        });
});
</script>

<!-- CONTENT -->
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-8">
            <!-- Form -->
            <div class="card mb-2">
                <div class="card-header py-3" style="margin-bottom:-21px">
                    <h4 class="font-weight-bold text-primary"><i class="fas fa-pencil-alt"></i> Ubah Kupon</h4>
                    <!-- <h6 style="font-size:14px">Ubah Kolom Kota dibawah</h6> -->
                </div>
                <div class="card-body">
                    <?= form_open_multipart('dapur/transaksi/editstore', ['autocomplete' => 'off']); ?>

                    <input type="hidden" name="<?= $this->security->get_csrf_token_name(); ?>" value="<?= $this->security->get_csrf_hash(); ?>">
                    <i class="text-danger"><?= validation_errors(); ?></i>

                    <input type='hidden' name='id_coupon' value="<?= base64_encode($ubah['id_coupon']) ?>" />
                    <!-- NAMA EVENT -->
                    <div class="form-group">
                        <label for="nama_kupon">Nama Kupon</label>
                        <input type="text" class="form-control" aria-describedby="nama_kupon" placeholder="Nama Kupon" name='nama' value="<?= $ubah['name'] ?>">
                    </div>

                    <div class="form-group">
                        <label for="deskripsi">Deskripsi<span>
                                <font color="red">*</font></label>
                        <textarea type="text" class="form-control" aria-describedby="deskripsi" placeholder="Deskripsi" name='deskripsi' id="deskripsi"><?= $ubah['description'] ?></textarea>
                        <small id="deskripsi" class="form-text text-muted font-italic">jangan menggunakan simbol kutip ( " atau ' )</small>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="unlimited">Tidak terbatas?<span>
                                        <font color="red">*</font></label>
                                <select name="unlimited" class="form-control">
                                    <option value="1" <?= ($ubah['is_unlimited'] == 1) ? "selected" : "" ?>>Yes</option>
                                    <option value="2" <?= ($ubah['is_unlimited'] == 2) ? "selected" : "" ?>>No</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="semua">Semua?<span>
                                        <font color="red">*</font></label>
                                <select name="semua" class="form-control" id="semua">
                                    <option value="1" <?= ($ubah['is_all'] == 1) ? "selected" : "" ?>>Yes</option>
                                    <option value="2" <?= ($ubah['is_all'] == 2) ? "selected" : "" ?>>No</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="pilih">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="pilih">Untuk?</label>
                                <select class="form-control" id="id_pilih" name="id_pilih">
                                    <option value="1" <?= ($ubah['id_course'] != 0) ? "selected" : "" ?>>Course</option>
                                    <option value="2" <?= ($ubah['id_learning_path'] != 0) ? "selected" : "" ?>>Learning Path</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group" id="course">
                                <label for="course">Course<span>
                                        <font color="red">*kosongkan bila tidak di rubah</font></span></label><br>
                                <select class="form-control" name="course" id="id_course" style="width: 100%;">
                                    <option value="" disabled selected>-- Pilih Course --</option>
                                </select>
                            </div>
                            <div class="form-group" id="learning" hidden="true">
                                <label for="learning">Learning<span>
                                        <font color="red">*kosongkan bila tidak di rubah</font></span></label>
                                <select class="form-control" name="learning" id="id_learning" style="width: 100%;">
                                    <option value="" disabled selected>-- Pilih Learning --</option>
                                </select>
                            </div>
                        </div>
                    </div>
                        <!-- TEMPLATE -->
                    <div class='row'>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="date">Expired Date<span>
                                        <font color="red">*</font></label>
                                <input type="text" class="form-control" aria-describedby="date" style='background:#fafafa' placeholder="Klik disini..." name='date' id="date_start" required value="<?= date('Y-m-d',strtotime($ubah['expired_at'])) ?>">
                                <small id="date" class="form-text text-muted font-italic">isi tanggal dengan benar</small>
                            </div>
                        </div>
                        <div class='col-md-6'>
                            <div class="form-group">
                                <label for="template">photo</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="customFile" name="photo">
                                    <label class="custom-file-label" for="customFile" id='dirFile'>Pilih file</label>
                                </div>
                                <small id="template" class="form-text text-muted font-italic">masukan gambar .png .jpeg (kosongkan jika tidak update gambar)</small>
                                <i class='text-danger' id="__template"></i>
                            </div>
                        </div>
                    </div>
                    <!-- HASIL template -->
                    <div class="col-lg-12 text-center mb-3 mt-3" id="preview-template">
                        <h6><b>Hasil Template</b></h6>
                        <div id="hasil"></div>
                    </div>
                    <!-- HASIL template -->

                    <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-dark" name="save">
                            Simpan <i class="fas fa-check"></i>
                        </button>
                    </div>
                    <?= form_close() ?>
                </div>
            </div>
            <!-- /Form -->
            <br /><br />
        </div>
        <div class="col-lg-2"></div>
    </div>
</div>
<!-- /CONTENT -->


<?php
$this->load->view('Templates/Admin/link-js'); ?>

<script src="https://momentjs.com/downloads/moment.min.js"></script>
<script src="<?= base_url('assets/Datepicker/js/bootstrap-material-datetimepicker.js') ?>"></script>
<script src="<?= base_url('assets/Admin/js/toastr.min.js') ?>"></script>
<script src="<?= base_url('assets/Admin/js/jquery.mask.js') ?>"></script>
<script src="<?= base_url('assets/Croppie/croppie.min.js') ?>"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>


<?= $this->session->flashdata('pesan') ?>


<script>
    $('#id_course').select2({
        // minimumInputLength: 2,
        ajax: {
            url: base_url + 'dapur/course/loadcourse',
            dataType: 'json',
            delay: 250,
            data: function(term) {
                return {
                    term: term,
                    page: term.page || 1
                }
            },
            processResults: function(data) {
                // alert(data)
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: $.map(data, function(item) {

                        return {
                            text: item.text,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: data.page
                    }
                };
            },
            cache: true
        }
    });
    $('#id_learning').select2({
        // minimumInputLength: 2,
        ajax: {
            url: base_url + 'dapur/learning/loadlearning',
            dataType: 'json',
            delay: 250,
            data: function(term) {
                return {
                    term: term,
                    page: term.page || 1
                }
            },
            processResults: function(data) {
                // alert(data)
                // Transforms the top-level key of the response object from 'items' to 'results'
                return {
                    results: $.map(data, function(item) {

                        return {
                            text: item.text,
                            id: item.id
                        }
                    }),
                    pagination: {
                        more: data.page
                    }
                };
            },
            cache: true
        }
    });
    // Datepicker
    $('#date_start').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });

    $('#date_end').bootstrapMaterialDatePicker({
        weekStart: 0,
        time: false
    });
</script>
<script>
    $(function() {
        $('#time_start').bootstrapMaterialDatePicker({
            format: 'LT',
            date: false,
            use24hours: true
        });
    });
    $(function() {
        $('#time_end').bootstrapMaterialDatePicker({
            format: 'LT',
            date: false,
            use24hours: true
        });
    });
</script>


<script>
    $('#customFile').on('change', function(evt) {
        let tampung = $(this).val().split('\\');
        let fileName = tampung[tampung.length - 1];

        if ($(this).val() != '') {
            $('#dirFile').html(fileName);
            $('#preview-foto').css('display', 'block')
            var tmppath = URL.createObjectURL(evt.target.files[0])
            // $('#hasil').prop('src', tmppath);
            if ($('#hasil').data('croppie')) $('#hasil').croppie('destroy')

            $('#hasil').croppie({
                enableExif: true,
                viewport: {
                    width: 100,
                    height: 100,
                },
                boundary: {
                    width: 400,
                    height: 400
                },
                showZoomer: true,
                enableResize: true,
                enableOrientation: true,
                mouseWheelZoom: 'ctrl'
            });

            $('#hasil').croppie('bind', {
                url: tmppath
            });
        }
    });

    "use strict";
</script>