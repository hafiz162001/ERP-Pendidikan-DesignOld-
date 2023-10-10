<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
    }

    public function ImportModel()
    {
        $this->mylibrary->PreviousPage('filter');

        $this->load->model('General', 'api');
        $this->load->model('Credential', 'credential');
        $this->load->model('Auth');
        $this->load->library("MyLibrary");
        $this->load->model('User/ModelEvent', 'event');
    }


    public function index($kategori = '', $status = '')
    {
        try {
            $this->load->helper('hashids');
            $this->load->library('MyLibrary');

            // Request Event Kategori
            $RequestKategori = $this->api->get("event/get_event_kategori");
            // echo '<pre>'.print_r($RequestKategori,true).'</pre>';
            // exit(1);
            if ($RequestKategori['status_code'] != 200) {
                throw new Exception($RequestKategori['error']);
            }
            // echo '<pre>'.print_r($RequestKategori,true).'</pre>';
            // exit(1);
            if ($RequestKategori['status_code'] != 200) {
                throw new Exception($RequestKategori['error']);
            }


            $data['collections_kategori'] = [];
            $data['count_kategori'] = 0;

            if ($RequestKategori['row_count'] > 0) {
                $data['collections_kategori'] = $RequestKategori['data'];
                $data['count_kategori'] = $RequestKategori['row_count'];
            }

            // tampil ke view
            $this->load->view("Event", $data);
        } catch (Exception $Error) {
            echo $Error->getMessage();
            $this->load->view("Maintenance");
        } catch (Throwable $Error) {
            echo "Throwable Error : " . $Error->getMessage();
            $this->load->view("Maintenance");
        }
    }

    public function saya()
    {
        try {
            $CekCredential = $this->credential->CekCredentialUser();
            if ($CekCredential['status'] != 200)
                throw new Exception($CekCredential['message']);

            return $this->load->view('EventSaya');
        } catch (Exception $Error) {
            $this->session->set_flashdata('pesan', "<script>toastr.warning('" . ($Error->getMessage()) . "','Info')</script>");
            redirect();
        } catch (Throwable $Error) {
            $this->session->set_flashdata('pesan', "<script>pesan_error('Error','Throwable " . (str_replace("'", "\'", $Error->getMessage())) . "')</script>");
            redirect();
        }
    }

    public function sertifikat($IdEvent = '')
    {
        try {
            $this->load->helper('hashids');
            if ($IdEvent == null)
                throw new Exception('param kosong');

            // get credential
            $GetCredential = $this->credential->GetCredentialUser();
            if ($GetCredential['status'] != 200)
                throw new Exception($GetCredential['message']);

            // Cek kondisi kelengkapan profil
            $Kondisi = !empty($GetCredential[0]['email'])  && ($GetCredential[0]['is_aktif'] == 1)   &&
                !empty($GetCredential[0]['nama'])  && !empty($GetCredential[0]['no_telepon']);

            if ($Kondisi == false)
                throw new Exception('Profil anda belum lengkap, silahkan lengkapi profil anda');

            // get iduser dan token
            $IdUser = $GetCredential[0]['id_user'];
            $Token = $this->credential->GetTokenUser();
            $DecodeString = hashids_decrypt($IdEvent, 'b1s4t4mp1l-sertifikat-1926', 20);

            // cek dia udh daftar atau belum
            $RequestEvent = $this->api->JWT('event/get_attendee_event?id_user=' . $IdUser . '&id_event=' . $DecodeString, $Token);
            if ($RequestEvent['status_code'] != 200)
                throw new Exception($RequestEvent['message']);

            if ($RequestEvent['row_count'] <= 0)
                throw new Exception('Data kosong');

            $CekSertifikat = $RequestEvent['data'][0];

            // cek kehadiran user
            if ($CekSertifikat['is_hadir'] != 1 && empty($CekSertifikat['foto_sertifikat']))
                throw new Exception('Anda belum menghadiri event, silahkan bergabung pada event');

            // download sertifikat
            $Url = "https://gate.bisaai.id/bisa_ai_vcon/master_sertifikat/media/" . $DecodeString . "/" . $CekSertifikat['foto_sertifikat'];
            $this->download($Url);
            // redirect($Url);

        } catch (Exception $Error) {
            $this->session->set_flashdata('pesan', "<script>toastr.warning('" . ($Error->getMessage()) . "','Kesalahan')</script>");
            redirect();
        } catch (Throwable $Error) {
            $this->session->set_flashdata('pesan', "<script>pesan_error('Kesalahan','Throwable " . ($Error->getMessage()) . "')</script>");
            redirect();
        }
    }

    public function suksessertifikat()
    {
        $this->load->view('SuksesDownloadSertifikat');
    }
    private function download($url)
    {
        set_time_limit(0);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        $r = curl_exec($ch);
        curl_close($ch);
        header('Expires: 0'); // no cache
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Last-Modified: ' . gmdate('D, d M Y H:i:s', time()) . ' GMT');
        header('Cache-Control: private', false);
        header('Content-Type: application/force-download');
        header('Content-Disposition: attachment; filename="' . basename($url) . '"');
        header('Content-Transfer-Encoding: binary');
        header('Content-Length: ' . strlen($r)); // provide file size
        header('Connection: close');
        echo $r;
    }

    public function EventSaya()
    {
        try {
            $page = empty($_GET['page']) ? '&page=1' : '&page=' . $_GET['page'];
            $PaginationData = $this->event->PaginationSaya($page);

            $message = [
                'status' => 200,
                'message' => '',
                'pagination' => $PaginationData['pagination'],
                'data' => $PaginationData['data'],
                'count' => $PaginationData['count'],
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage(),
                'count' => 0,
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable " . $Error->getMessage(),
                'count' => 0,
            ];
        } finally {
            echo json_encode($message);
        }
    }

    public function detail($id = null)
    {
        try {
            $this->load->helper('hashids');

            if ($id == null) {
                throw new Exception('param kosong');
            }

            // Decode
            $DecodeString = $this->mylibrary->Decode($id, 3);

            // cari event
            $RequestEvent = $this->api->get('event/get_event', 'id_event=' . $DecodeString);
            if ($RequestEvent['status_code'] != 200) {
                throw new Exception("Sedang tidak bisa di akses");
            }

            // Request Kuota Attende 
            $RequestKuotaEvent = $this->api->get('event/get_kuota_event', 'id_event=' . $DecodeString);
            // echo '<pre>'.print_r($RequestKuotaEvent,true).'</pre>';
            // exit(1);
            if ($RequestKuotaEvent['status_code'] == 404)
                throw new Exception("Halaman tidak diketahui");

            if ($RequestKuotaEvent['status_code'] != 200)
                throw new Exception("Sedang terjadi masalah, silahkan coba beberapa saat lagi");

            // Cek kelengkapan profil
            $GetCredential = $this->credential->GetCredentialUser();

            $IdUser = false;
            $Token = false;
            $data['kelengkapan_profil'] = true;
            $data['is_login'] = false;

            if ($GetCredential['status'] == 200) {
                // Set kondisi kelengkapan profil
                $Kondisi = !empty($GetCredential[0]['email'])  && ($GetCredential[0]['is_aktif'] == 1)   &&
                    !empty($GetCredential[0]['nama'])  && !empty($GetCredential[0]['no_telepon']);
                // set kelengkapan profil menjadi true
                $data['nama_user'] = 'user';
                if (!empty($GetCredential[0]['nama']))
                    $data['nama_user'] = $GetCredential[0]['nama'];

                if ($Kondisi == true)
                    $data['kelengkapan_profil'] = true;

                // cek login
                $data['is_login'] = true;
                $IdUser = $GetCredential[0]['id_user'];
                $Token = $this->credential->GetTokenUser();
            }

            $data['terdaftar_event'] = false;
            if ($IdUser == true) {
                $RequestEventAttendee = $this->api->JWT('event/get_attendee_event?sudahDanBelumBayar=1&id_event=' . $DecodeString . '&id_user=' . $IdUser, $Token);
                if ($RequestEventAttendee['row_count'] != 0)
                    $data['terdaftar_event'] = true;
            }

            $data['kuota'] = 0;
            if ($RequestKuotaEvent['row_count'] > 0)
                $data['kuota'] = $RequestKuotaEvent['data'][0]['kuota'];

            $data['collections'] = [];
            $data['count'] = 0;
            // cek kalo kosong
            if ($RequestEvent['row_count'] > 0) {
                $data['collections'] = $RequestEvent['data'][0];
                $data['count'] = $RequestEvent['row_count'];
            }
            // echo '<pre>' . print_r($data, true) . '</pre>';
            // exit(1);
            $this->load->view("DetailEvent", $data);
        } catch (Exception $Error) {
            $this->session->set_flashdata('pesan', "<script>toastr.warning('" . ($Error->getMessage()) . "','Info')</script>");
            redirect();
        } catch (Throwable $Error) {
            $this->session->set_flashdata('pesan', "<script>pesan_error('Kesalahan','Throwable " . (str_replace("'", "\'", $Error->getMessage)) . "')</script>");
            redirect();
        }
    }

    public function DetailSaya($id = null)
    {
        try {
            $GetCredential = $this->credential->GetCredentialUser();
            if ($GetCredential['status'] != 200)
                throw new Exception($GetCredential['message']);

            $IdUser = $GetCredential[0]['id_user'];
            $Token = $this->credential->GetTokenUser();

            // Decode
            $DecodeString = $this->mylibrary->Decode($id, 3);

            // cek dia udh daftar atau belum
            $RequestEvent = $this->api->JWT('event/get_attendee_event?id_user=' . $IdUser . '&id_event=' . $DecodeString, $Token);
            if ($RequestEvent['status_code'] != 200)
                throw new Exception($RequestEvent['message']);

            if ($RequestEvent['row_count'] <= 0)
                throw new Exception('Anda tidak terdaftar pada event ini, silahkan untuk daftar terlebih dahulu');

            //     echo '<pre>'.print_r($RequestEvent,true).'</pre>';
            // exit(1);
            $this->load->helper('hashids');

            if ($id == null) {
                throw new Exception('param kosong');
            }

            // Request Kuota Attende 
            $RequestKuotaEvent = $this->api->get('event/get_kuota_event', 'id_event=' . $DecodeString);
            // echo '<pre>'.print_r($RequestKuotaEvent,true).'</pre>';
            // exit(1);
            if ($RequestKuotaEvent['status_code'] == 404)
                throw new Exception("Halaman tidak diketahui");

            if ($RequestKuotaEvent['status_code'] != 200)
                throw new Exception("Sedang terjadi masalah, silahkan coba beberapa saat lagi");

            $data['kelengkapan_profil'] = true;

            if ($GetCredential['status'] == 200) {
                // Set kondisi kelengkapan profil
                $Kondisi = !empty($GetCredential[0]['email'])  && ($GetCredential[0]['is_aktif'] == 1)   &&
                    !empty($GetCredential[0]['nama'])  && !empty($GetCredential[0]['no_telepon']);

                // set kelengkapan profil menjadi true
                if ($Kondisi == true)
                    $data['kelengkapan_profil'] = true;
            }

            // set terdaftar event atau belum
            $data['terdaftar_event'] = false;
            if ($RequestEvent['row_count'] > 0)
                $data['terdaftar_event'] = true;

            // get kuota keseluruhan
            $data['kuota_keseluruhan'] = 0;
            $RequestKeseluruhanEvent = $this->api->get('event/get_event', 'id_event=' . $DecodeString);
            if ($RequestKeseluruhanEvent['status_code'] != 200)
                throw new Exception($RequestKeseluruhanEvent['message']);
            if ($RequestKeseluruhanEvent['row_count'] > 0)
                $data['kuota_keseluruhan'] = $RequestKeseluruhanEvent['data'][0]['kuota'];

            // get kuota yg daftar
            $data['kuota'] = 0;
            if ($RequestKuotaEvent['row_count'] > 0)
                $data['kuota'] = $RequestKuotaEvent['data'][0]['kuota'];

            $data['collections'] = [];
            $data['count'] = 0;
            // cek kalo kosong
            if ($RequestEvent['row_count'] > 0) {
                $data['collections'] = $RequestEvent['data'][0];
                $data['count'] = $RequestEvent['row_count'];
            }

            $this->load->view("DetailEventSaya", $data);
        } catch (Exception $Error) {
            $this->session->set_flashdata('pesan', "<script>toastr.warning('" . ($Error->getMessage()) . "','Info')</script>");
            redirect();
        } catch (Throwable $Error) {
            $this->session->set_flashdata('pesan', "<script>pesan_error('Kesalahan','Throwable " . ($Error->getMessage) . "')</script>");
            redirect();
        }
    }


    public function filter()
    {
        try {
            $this->load->helper('hashids');

            $KategoriEvent = empty($_GET['id_event_kategori']) ? '' : '&id_event_kategori=' . $_GET['id_event_kategori'];

            $StatusEvent = empty($_GET['status']) ? '' : '&status=' . $_GET['status'];
            $TipeEvent = empty($_GET['tipe_event']) ? '' : '&tipe_event=' . hashids_decrypt($_GET['tipe_event'], '19tipe-event26', 19);
            $IdPartner = empty($_GET['id_partner']) ? '' : '&id_partner=' . $_GET['id_partner'];
            $page = empty($_GET['page']) ? 'page=1' : 'page=' . $_GET['page'];
            $PaginationData = $this->event->Pagination($page, $KategoriEvent, $StatusEvent, $TipeEvent, $IdPartner);
            $message = [
                'status' => 200,
                'message' => '',
                'pagination' => $PaginationData['pagination'],
                'data' => $PaginationData['data'],
                'count' => $PaginationData['count'],
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage(),
                'count' => 0,
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable " . $Error->getMessage(),
                'count' => 0,
            ];
        } finally {
            echo json_encode($message);
        }
    }
    private function CekPerlengkapan()
    {

        try {

            $GetCredential = $this->credential->GetCredentialUser();

            if ($GetCredential['status'] != 200)
                throw new Exception($CekCredential['message']);

            $KelengkapanProfil = false;
            if ($GetCredential['status'] == 200) {
                // Set kondisi kelengkapan profil
                $Kondisi = !empty($GetCredential[0]['email'])  && ($GetCredential[0]['is_aktif'] == 1)   &&
                    !empty($GetCredential[0]['nama'])  && !empty($GetCredential[0]['no_telepon']);

                if ($Kondisi == true)
                    $KelengkapanProfil = true;
            }
            if ($KelengkapanProfil == false)
                throw new Exception("Profil belum lengkap, silahkan lengkapi profil anda <a class='poppins-600' href='" . base_url('profil') . "'>disini</a>");

            $IdUser = $GetCredential[0]['id_user'];

            $Message = [
                'status'   => 200,
                'message'  => 'OK',
                'id_user'  => $IdUser
            ];
        } catch (Exception $Error) {
            $Message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $Message = [
                'status' => 400,
                'message' => 'Throwable ' . $Error->getMessage()
            ];
        } finally {
            return $Message;
        }
    }

    public function DaftarEvent($id = null)
    {
        try {
            $this->load->helper('hashids');
            if ($id == null)
                throw new Exception('Event tidak diketahui');

            $DecryptId = hashids_decrypt($id, '19daftar-event26', 20);

            // 1.cek kelengkapan profil
            $CekPerlengkapan = $this->CekPerlengkapan();
            // echo '<pre>'.print_r($CekPerlangkapan,true).'</pre>';
            // exit(1);
            if ($CekPerlengkapan['status'] != 200)
                throw new Exception($CekPerlengkapan['message']);

            $IdUser = $CekPerlengkapan['id_user'];

            // 2 request event 
            $RequestEvent = $this->api->get('event/get_event', 'id_event=' . $DecryptId);
            $KuotaEvent = 0;
            if ($RequestEvent['status_code'] == 200 && $RequestEvent['row_count'] > 0)
                $KuotaEvent = $RequestEvent['data'][0]['kuota'];

            // 3.2 request yg sudah ikut
            $RequestIkutEvent = $this->api->get('event/get_kuota_event', 'id_event=' . $DecryptId);
            $KuotaIkutEvent = 0;
            if ($RequestIkutEvent['status_code'] == 200 && $RequestIkutEvent['row_count'] > 0)
                $KuotaIkutEvent = $RequestIkutEvent['data'][0]['kuota'];

            // 3.3 kuota event + kuota yg ikut
            $SelisihKuota = $KuotaEvent - $KuotaIkutEvent;

            // 3.4 cek hasilnya minus atau ga
            if ($SelisihKuota < 0)
                $SelisihKuota = 0;

            // 3.5 kalau kuotanya lebih dari 0 maka insert user untuk menghadiri event
            if ($SelisihKuota > 0) {
                $Token = $this->credential->GetTokenUser();

                // 3.5.1 tapi cek dulu, dia sebelumnya udah daftar atau belum
                $RequestEventAttendee = $this->api->JWT('event/get_attendee_event?id_event=' . $DecryptId . '&id_user=' . $IdUser, $Token);
                if ($RequestEventAttendee['status_code'] != 200)
                    throw new Exception('Gagal merequest Attendee, silahkan coba beberapa saat lagi');

                if ($RequestEventAttendee['row_count'] > 0)
                    throw new Exception('Anda telah terdaftar pada event ini');

                // Daftar event                    
                $RequestDaftarEvent = $this->api->insert('event/insert_attendee_event', json_encode(['id_event' => $DecryptId]), $Token);
                // echo '<pre>'.print_r($RequestDaftarEvent,true).'</pre>';
                // exit(1);

                if ($RequestDaftarEvent->status_code != 200)
                    throw new Exception('tidak bisa mendaftar event, silahkan coba beberapa saat lagi');

                // set message sukses
                $this->session->set_flashdata('pesan', "<script>pesan_sukses('Berhasil','Pendaftaran event berhasil')</script>");
            }
        } catch (Exception $Error) {
            echo $Error->getMessage();
            $this->session->set_flashdata("pesan", "<script>toastr.warning('" . (str_replace("'", "\'", $Error->getMessage()))  . "','Info')</script>");
        } catch (Throwable $Error) {
            echo 'Throwable error ' . $Error->getMessage();
            $this->session->set_flashdata('pesan', "<script>pesan_error('Error','Throwable " . (str_replace("'", "\'", $Error->getMessage())) . "')</script>");
        } finally {
            redirect($_SERVER['HTTP_REFERER']);
        }
    }

    public function Pembayaran($IdEvent = null)
    {
        try {
            if ($IdEvent == null)
                throw new Exception("param kosong");
            $KodeUnik = $this->session->userdata(sha1('kode_unik_event'));

            if ($KodeUnik == null || !is_numeric($KodeUnik))
                throw new Exception("Kode unik tidak diketahui");

            $this->load->helper('hashids');

            $DecodeString =  hashids_decrypt($IdEvent, '19daftar-event26', 20);

            $CekBerbayar = $this->CekBerbayar($DecodeString);
            if ($CekBerbayar['status'] != 200)
                throw new Exception($CekBerbayar['message']);
            // echo '<pre>'.print_r($CekBerbayar,true).'</pre>';
            // exit(1);

            $Harga = $CekBerbayar['data']['harga_bisaai'];
            $HargaSertifikat = $CekBerbayar['data']['harga_sertifikat'];

            if ($Harga <= 0 || $HargaSertifikat <= 0)
                throw new Exception("Harga belum ditentukan");
            $data['harga'] = $Harga + $HargaSertifikat;
            $data['KodeUnik'] = $KodeUnik;
            $data['count'] = $CekBerbayar['count'];
            $data['collections'] = $CekBerbayar['data'];

            $this->load->view("DetailEventBerbayar", $data);
        } catch (Exception $Error) {
            $this->session->set_flashdata("pesan", "<script>toastr.warning('" . ($Error->getMessage()) . "','Info')</script>");
            $REFERER = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];
            redirect($REFERER);
        } catch (Throwable $Error) {
            $this->session->set_flashdata("pesan", "<script>pesan_error('Kesalahan','" . (str_replace("'", "\'", $Error->getMessage())) . "')</script>");
            $REFERER = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];
            redirect($REFERER);
        }
    }

    private function CekBerbayar($IdEvent = null)
    {
        try {
            if ($IdEvent == null)
                throw new Exception("param kosong");

            // cek credential
            $CekCredential = $this->credential->CekCredentialUser();
            if ($CekCredential['status'] != 200)
                throw new Exception($CekCredential['message']);

            $Token = $this->credential->GetTokenUser();

            // Cek IdEvent
            $RequestEvent = $this->api->JWT("event/get_event?tipe_event=3&id_event={$IdEvent}", $Token);
            if ($RequestEvent['status_code'] != 200)
                throw new Exception("Sedang terjadi masalah, silahkan coba kembali");

            if ($RequestEvent['row_count'] <= 0) {
                $RequestEvent = $this->api->JWT("event/get_event?tipe_event=4&id_event={$IdEvent}", $Token);
                if ($RequestEvent['status_code'] != 200)
                    throw new Exception("Sedang terjadi masalah, silahkan coba kembali");

                if ($RequestEvent['row_count'] <= 0)
                    throw new Exception("Event tidak dikenal");
            }

            $Message = [
                'status'  => 200,
                'message' => 'ok',
                'count'   => $RequestEvent['row_count'],
                'data'    => $RequestEvent['data'][0],
            ];
        } catch (Exception $Error) {
            $Message = [
                'status'  => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $Message = [
                'status'  => 400,
                'message' => 'Throwable ' . $Error->getMessage()
            ];
        } finally {
            return $Message;
        }
    }
    public function Berbayar($IdEvent = null)
    {
        try {
            if ($IdEvent == null)
                throw new Exception("param kosong");

            // cek kelengkapan profil
            $CekPerlengkapan = $this->CekPerlengkapan();
            if ($CekPerlengkapan['status'] != 200)
                throw new Exception($CekPerlengkapan['message']);

            $IdUser = $CekPerlengkapan['id_user'];

            $this->load->helper('hashids');

            $DecryptString =  hashids_decrypt($IdEvent, '19daftar-event26', 20);

            // cek berbayar
            $CekBerbayar = $this->CekBerbayar($DecryptString);
            // echo '<pre>'.print_r($CekBerbayar,true).'</pre>';

            if ($CekBerbayar['status'] != 200)
                throw new Exception($CekBerbayar['message']);

            // request event 
            $RequestEvent = $this->api->get('event/get_event', 'id_event=' . $DecryptString);

            $KuotaEvent = 0;
            if ($RequestEvent['status_code'] == 200 && $RequestEvent['row_count'] > 0)
                $KuotaEvent = $RequestEvent['data'][0]['kuota'];

            if ($RequestEvent['data'][0]['id_partner'] == null)
                throw new Exception("Partner not found");

            $status = $RequestEvent['data'][0]['status'];
            // if($status != 1)
            //     throw new Exception("Event telah berakhir");

            // request yg sudah ikut
            $RequestIkutEvent = $this->api->get('event/get_kuota_event', 'id_event=' . $DecryptString);
            $KuotaIkutEvent = 0;
            if ($RequestIkutEvent['status_code'] == 200 && $RequestIkutEvent['row_count'] > 0)
                $KuotaIkutEvent = $RequestIkutEvent['data'][0]['kuota'];

            // kuota event + kuota yg ikut
            $SelisihKuota = $KuotaEvent - $KuotaIkutEvent;

            // cek hasilnya minus atau ga
            if ($SelisihKuota < 0)
                $SelisihKuota = 0;

            // kalau kuotanya lebih dari 0 maka insert user untuk menghadiri event
            if ($SelisihKuota <= 0)
                throw new Exception("mohon maaf kuota daftar sudah habis");

            $Token = $this->credential->GetTokenUser();

            // tapi cek dulu, dia sebelumnya udah daftar atau belum
            $RequestEventAttendee = $this->api->JWT('event/get_attendee_event?sudahDanBelumBayar=1&id_event=' . $DecryptString . '&id_user=' . $IdUser, $Token);

            if ($RequestEventAttendee['status_code'] != 200)
                throw new Exception('Gagal merequest Attendee, silahkan coba beberapa saat lagi');

            if ($RequestEventAttendee['row_count'] > 0)
                throw new Exception('Anda telah terdaftar pada event ini');

            // Daftar event                    
            $RequestDaftarEvent = $this->api->insert('event/insert_attendee_event', json_encode(['id_event' => $DecryptString]), $Token);
            if ($RequestDaftarEvent->status_code != 200)
                throw new Exception('tidak bisa mendaftar event, silahkan coba beberapa saat lagi');
            if (empty($RequestDaftarEvent->kode_unik))
                throw new Exception("Kode unik kosong");
            // session kode unik
            $this->session->set_userdata(sha1('kode_unik_event'), $RequestDaftarEvent->kode_unik);
            // kalau lulus validasi
            redirect('event/pembayaran/' . $IdEvent);
        } catch (Exception $Error) {
            $this->session->set_flashdata("pesan", "<script>toastr.warning('" . (str_replace("'", "\'", $Error->getMessage()))  . "','Info')</script>");
            $REFERER = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];
            echo $Error->getMessage();
            redirect($REFERER);
        } catch (Throwable $Error) {
            $this->session->set_flashdata("pesan", "<script>pesan_error('Kesalahan','" . (str_replace("'", "\'", $Error->getMessage())) . "')</script>");
            $REFERER = empty($_SERVER['HTTP_REFERER']) ? '/' : $_SERVER['HTTP_REFERER'];
            echo $Error->getMessage();
            redirect($REFERER);
        }
    }
}
