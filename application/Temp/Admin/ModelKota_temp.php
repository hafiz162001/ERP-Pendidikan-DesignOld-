<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKota extends CI_Model
{
    public function GetCollections()
    {
        // query menampilkan semua kota
        $Kota = $this->db->query("SELECT * FROM kota");
        return $Kota;
    }

    /*
    |--------------------------------------------------------------
    | Fungsi EditKota
    |--------------------------------------------------------------
    |
    | Fungsi EditKota digunakan untuk menampilkan data
    | berdasarkan data yg dipilih sebelumnya, dan
    | fungsi ini mengembalikan nilai 'string' 
    |
    */
    public function EditKota($Request = null)
    {
        // set Kondisi jika request tidak kosong, data lebih dari 0, dan merupakan array 
        $Kondisi = $Request != null && count($Request) > 0 && is_array($Request); // [TRUE | FALSE]

        // kalau kondisi TRUE
        if ($Kondisi === TRUE) {

            // variabel html untuk menampung data string, 
            // yg nantinya di return
            $html = null;

            // variabel grid untuk mengetahui jika yg dipilih hanya 1 data,
            // maka grid nya lebar(col-md-6), tapi jika lebih dari 1 
            // maka agak kecil(col-md-4) 
            $grid = null;

            // counter
            $counter = 1;

            // total data yg dipilih
            $ItemSelected = count($Request);

            // men display Request
            foreach ($Request as $selected) // $selected adalah 'id_kota' yg di SHA1
            {
                // ambil 'ID' dan timpa kalau ada huruf 'YO_' dengan '' / kosong
                $ID = str_replace('YO_', '', $selected);

                // Query untuk menampilkan tabel 'kota' berdasarkan 'id_kota' 
                // yg sudah di SHA1, dan dibatasi tampil datanya 1
                $Kota = $this->db->query("SELECT * FROM kota WHERE SHA1(id_kota) = ? LIMIT 1", [$ID])
                    ->row();

                // set Grid Default
                $grid = "<div class='col-md-4'>";

                // masukan grid ke var html
                $html .= $grid;

                // set card 
                $html .= "<div class='card bg-white mb-3' style='font-family: 'Montserrat', sans-serif; border-radius:20px'>
                    <div class='card-body'>
                    <center><h4>Record " . ($counter++) . " </h4> <small class='text-secondary'>Edit data kota anda disini</small> </center> <br/>";

                // inputan 'id_kota' dengan type 'hidden'
                $html .= "<input type='hidden' name='id_kota[]' value='" . SHA1($Kota->id_kota) . "' required readonly> ";

                // Inputan Nama
                $html .= "<div class='form-group'>
                                <label>Nama Kota </label>
                                <input type='text'
                                        name='nama[]'
                                        class='form-control'
                                        aria-describedby='nim'
                                        placeholder='Nama'
                                        value='" . ($Kota->nama) . "'
                                        required
                                />
                                <small class='form-text text-muted font-italic'>edit nama dengan benar.</small>
                          </div>";

                // Inputan Foto
                $html .= "<div class='form-group'>
                              <label for='Foto'>Foto </label>
                              <div class='custom-file'>
                                  <input type='file' class='custom-file-input customFile' name='foto[]' required>
                                  <label class='custom-file-label dirFile' for='customFile' >" . substr($Kota->foto, 0, 80) . "</label>
                              </div>
                          </div>";


                // Inputan Aktif | Tidak Aktif
                $html .= "<div class='form-group'>
                            <div class='custom-control custom-switch'>
                                <input name='status[" . SHA1($Kota->id_kota) . "]' type='checkbox' class='custom-control-input' id='customSwitch" . $counter . "'>
                                <label class='custom-control-label' for='customSwitch" . $counter . "'>Status </label>
                            </div>
                          </div>";

                // preview foto 
                $html .= "<center><h5>Hasil</h5><img class='preview-foto' src='" . base_url('assets/images/Kota/' . $Kota->foto) . "' width=250 height=250/></center>";

                // closing tag
                $html .= "</div></div></div>";
            }

            // return html
            return $html;
        }
    }

    public function EditStore($request)
    {
        // tangkap 
        $itemSelected = $request->post('id_kota');

        // set message
        $message = [
            'title'   => "<h5>Error</h5>",
            'message' => "Error Edit Record, silahkan coba kembali",
            'status'  => "failed"
        ];

        // condition item > 0 
        if ($itemSelected > 0) {

            // count 
            $no = 0;

            // Proses Upload File
            $destinationPath = 'assets/images/artikel/';

            // cek error record
            $error_log = [];

            foreach ($itemSelected as $row) {
                // show buku by id
                $artikel = Artikel::findOrFail($row);

                // proccess update
                $artikel->penulis = ucwords($request->post('penulis'));
                $artikel->title = ucwords($request->post('judul')[$no]);
                $artikel->content = $request->post('content')[$no];

                // mendapatkan inputan upload foto 
                $upload = isset($request->file('image')[$no]) ? $request->file('image')[$no] : FALSE;

                // cek flag error upload gambar
                $flag = 1;

                if ($upload) {

                    // cek validasi gambar ...

                    // Mendapatkan Extension File
                    $extension = trim(strtolower($upload->getClientOriginalExtension()));

                    // Mendapatkan Ukuran File
                    $ukuranFile = $upload->getSize();

                    // ekstensi yg diperbolehkan
                    $allowed = array('jpg', 'png');

                    // cek ekstensi upload
                    if (in_array($extension, $allowed) === FALSE) {

                        $flag = 0;
                        $error_log[] = $no + 1;
                    }

                    // cek resolusi foto 
                    $path = getimagesize($upload->getRealPath());
                    if ($path[0] < 250 && $path[1] < 250) {

                        $flag = 0;
                        $error_log[] = $no + 1;
                    }

                    // cek ukuran file jika melebihi 2MB
                    if (($ukuranFile / 1024) > 2000) {

                        $flag = 0;
                        $error_log[] = $no + 1;
                    }

                    // end validasi

                    // cek perulangan kalau gambar tidak sesuai keterangan
                    if ($flag == 1) {

                        // Mendapatkan Nama File
                        $namaFile = time() . '_' . $upload->getClientOriginalName();

                        // resize image
                        $imageResize = Image::make($upload);
                        $imageResize->resize(500, 500);
                        $imageResize->save($destinationPath . '/' . $namaFile);

                        // delete image
                        $urlFoto = $artikel->image;

                        if (file_exists('assets/images/artikel/' . $urlFoto)) {
                            unlink('assets/images/artikel/' . $urlFoto);
                        }

                        // update nama foto
                        $artikel->image = $namaFile;
                    }
                }

                // kalau upload gambar tidak error
                if ($flag == 1) {
                    // save operation
                    $artikel->save();
                }

                // increment
                $no++;
            }

            // cek ketersediaan error line mana saja 
            if (count($error_log) > 0) {

                // set duplikasi record
                $unique = array_unique($error_log);

                // pecah mjd string dan ditambah "," setelahnya
                $implode = implode(', ', $unique);

                // set message failed
                $message = [
                    'title'   => "<h5>Error</h5>",
                    'message' => "Record {$implode} yang diedit tidak memenuhi keterangan upload gambar, silahkan periksa kembali",
                    'status'  => "failed"
                ];
            }
            // kalau tidak error maka set pesan sukses 
            else {

                // set message success
                $message = [
                    'title'   => "<h5>Sukses</h5>",
                    'message' => "Record yang dipilih telah diupdate",
                    'status'  => "success"
                ];
            }


            // set snackbar 
            $snackbar = "pesan_error('" . $message['title'] . "','" . $message['message'] . "')";

            // condition if message success
            if ($message['status'] == 'success')
                $snackbar =  "pesan_sukses('" . $message['title'] . "','" . $message['message'] . "')";
        }
    }
}