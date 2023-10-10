<?php
class ModelEvent extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
        $this->baseUrl = 'https://gate.bisaai.id/bisa_ai_vcon';
    }

    private function ImportModel()
    {
        $this->load->model('General', 'api');
        $this->load->model('Credential', 'credential');
        $this->load->library('MyLibrary');
    }

    public function Get($status = 'status=1&', $order = 'order_by=ASC&', $page = 'page=1&', $q = '', $url = 'index')
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();

            // request api 
            $Request = $this->api->JWT('event/get_event?' . $status  . $page . $q, $token);

            // echo '<pre>' . print_r($Request, true) . '</pre>';
            // exit(1);
            // cek status kalau bukan 200(sukses)
            if ($Request['status_code'] != 200)
                throw new Exception('data kosong');

            // set up pagination
            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            $SetupPagination['base_url'] = site_url('dapur/event/' . $url);
            $SetupPagination['total_rows'] = $Request['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();
            // kalau berhasil
            $data = [
                'collections' => $Request['data'],
                'pagination'  => $Pagination,
                'count'       => $Request['row_count']
            ];

            // tampil ke view paket 
            return $this->load->view('Dapur/Event/' . $url, $data);
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function cetak_sertifikat($id)
    {
        try {
            $data = [
                'id_event'          => $id,
            ];

            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                throw new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            // request api insert 
            $RequestClient = $this->api->insert('master_sertifikat/cetak_sertifikat', json_encode($data), $token);
            if ($RequestClient->status_code != 200)
                throw new Exception($RequestClient->description);
            $message = [
                'status' => 200,
                'message' => 'berhasil'
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable Error: " . $Error->getMessage()
            ];
        }

        return $message;
    }

    public function semua_peserta($id)
    {
        $Credential = $this->credential->CekCredential();
        if ($Credential['status'] != 200)
            new Exception($Credential['message']);

        $token = $this->credential->GetToken();

        // request api 
        $Request = $this->api->JWT('event/get_attendee_event_all?id_event=' . $id, $token);
        $hadir = $this->api->JWT('event/get_attendee_event_all?id_event=' . $id . '&is_hadir=1', $token);
        $bayar = $this->api->JWT('event/get_attendee_event_all?id_event=' . $id . '&is_bayar=1', $token);
        $data = [
            'data'       => $Request['data'],
            'count'      => $Request['row_count'],
            'jumlah'     => $hadir['row_count'],
            'bayar'      => $bayar['row_count'],
        ];
        return $data;
    }
    public function semua_peserta_hadir($id)
    {
        $Credential = $this->credential->CekCredential();
        if ($Credential['status'] != 200)
            new Exception($Credential['message']);

        $token = $this->credential->GetToken();

        // request api 
        $Request = $this->api->JWT('event/get_attendee_event_all?id_event=' . $id, $token);
        $hadir = $this->api->JWT('event/get_attendee_event_all?id_event=' . $id . '&is_hadir=1', $token);
        $data = [
            'data'       => $Request['data'],
            'count'      => $Request['row_count'],
            'jumlah'     => $hadir['row_count'],
        ];
        return $data;
    }

    public function transaksi($page = 'page=1&', $q = '', $url = 'index')
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();

            // request api 
            $Request = $this->api->JWT('event/get_detail_bayarevent?' . 'order_by=desc&' .  $page . $q, $token);

            // echo '<pre>' . print_r($Request, true) . '</pre>';
            // exit(1);
            // cek status kalau bukan 200(sukses)
            if ($Request['status_code'] != 200)
                throw new Exception('data kosong');

            // set up pagination
            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            $SetupPagination['base_url'] = site_url('dapur/event/transaksi/' . $url);
            $SetupPagination['total_rows'] = $Request['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();
            // kalau berhasil
            $data = [
                'collections' => $Request['data'],
                'pagination'  => $Pagination,
                'count'       => $Request['row_count'],
            ];

            // tampil ke view paket 
            return $this->load->view('Dapur/Event/Transaksi/' . $url, $data);
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function edit_transaksi($id_user = null, $id_event = null)
    {
        try {

            if ($id_user != null && $id_event != null) {
                $Credential = $this->credential->CekCredential();
                if ($Credential['status'] != 200)
                    throw new Exception($Credential['message']);

                $token = $this->credential->GetToken();
                $GetDataById = $this->api->JWT('event/get_detail_bayarevent?id_event=' . $id_event . '&id_user=' . $id_user, $token);
                // echo '<pre>' . print_r($GetDataById, true) . '</pre>';
                // exit(1);
                // kalau request api error
                if ($GetDataById['status_code'] != 200)
                    throw new Exception("Sedang terjadi masalah, silahkan coba beberapa saat lagi");

                // kalau data kosong
                if ($GetDataById['row_count'] <= 0)
                    throw  new Exception("Data edit kosong, silahkan coba kembali");

                // kalau berhasil
                $message = [
                    'message'   => null,
                    'status'    => 200,
                    'type'      => null,
                    'data'      => $GetDataById['data'],
                ];
            }
        } catch (Exception $Error) {
            $message = [
                'message'   => "Error:" . $Error->getMessage(),
                'status'    => 400,
                'type'      => 'Exception',
                'data'      => array()
            ];
        } catch (Throwable $Error) {
            $message = [
                'message'   => "Error:" . $Error->getMessage(),
                'status'    => 400,
                'type'      => 'Throwable',
                'data'      => array()
            ];
        }

        // return message nya
        return $message;
    }

    public function store_transaksi($data)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            $RequestEdit = $this->api->update('event/update_pembayaran_event', json_encode($data), $token);
            // echo '<pre>' . print_r($RequestEdit, true) . '</pre>';
            // exit(1);
            if ($RequestEdit->status_code != 200)
                throw new Exception($RequestEdit->description);


            // kalau lulus, maka tampil pesan
            $message = [
                'status' => 200,
                'message' => 'berhasil'
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable Error: " . $Error->getMessage()
            ];
        }

        return $message;
    }

    public function store($data)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                throw new Exception($Credential['message']);
            $token = $this->credential->GetToken();
            // request api insert paket
            $RequestPaket = $this->api->insert('event/insert_event', json_encode($data), $token);
            if ($RequestPaket->status_code != 200)
                throw new Exception($RequestPaket->description);
            $message = [

                'status' => 200,
                'message' => 'sukses'
            ];
            // kalau berhasil
            $this->session->set_flashdata('pesan', "<script>pesan_sukses('Sukses','data telah ditambahkan')</script>");
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => 'Throwable error' . $Error->getMessage()
            ];
        }
        return $message;
    }


    public function edit($id = null)
    {
        try {

            if ($id != null) {
                $Credential = $this->credential->CekCredential();
                if ($Credential['status'] != 200)
                    throw new Exception($Credential['message']);

                $token = $this->credential->GetToken();
                $status = 'is_aktif=1';
                $GetDataById = $this->api->JWT('event/get_event?id_event=' . $id, $token);
                $partner = $this->api->JWT('partner/get_partner?' . $status, $token);
                // echo '<pre>' . print_r($GetDataById, true) . '</pre>';
                // exit(1);
                // kalau request api error
                if ($GetDataById['status_code'] != 200)
                    throw new Exception("Sedang terjadi masalah, silahkan coba beberapa saat lagi");

                // kalau data kosong
                if ($GetDataById['row_count'] <= 0)
                    throw  new Exception("Data edit kosong, silahkan coba kembali");

                // kalau berhasil
                $message = [
                    'message'   => null,
                    'status'    => 200,
                    'type'      => null,
                    'data'      => $GetDataById['data'],
                    'partner'   => $partner['data'],
                ];
            }
        } catch (Exception $Error) {
            $message = [
                'message'   => "Error:" . $Error->getMessage(),
                'status'    => 400,
                'type'      => 'Exception',
                'data'      => array()
            ];
        } catch (Throwable $Error) {
            $message = [
                'message'   => "Error:" . $Error->getMessage(),
                'status'    => 400,
                'type'      => 'Throwable',
                'data'      => array()
            ];
        }

        // return message nya
        return $message;
    }

    public function EditStore($data)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            $RequestEdit = $this->api->update('event/update_event', json_encode($data), $token);
            // echo '<pre>' . print_r($data, true) . '</pre>';
            // exit(1);
            if ($RequestEdit->status_code != 200)
                throw new Exception($RequestEdit->description);


            // kalau lulus, maka tampil pesan
            $message = [
                'status' => 200,
                'message' => 'berhasil'
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable Error: " . $Error->getMessage()
            ];
        }

        return $message;
    }

    public function Edithadir($data)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            $RequestEdit = $this->api->update('event/update_attendee_event_multiple', json_encode($data), $token);
            // echo '<pre>' . print_r($RequestEdit, true) . '</pre>';
            // exit(1);
            if ($RequestEdit->status_code != 200)
                throw new Exception($RequestEdit->description);


            // kalau lulus, maka tampil pesan
            $message = [
                'status' => 200,
                'message' => 'berhasil'
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 200,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 200,
                'message' => "Throwable Error: " . $Error->getMessage()
            ];
        }

        return $message;
    }

    public function delete($data)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();

            $RequestEdit = $this->api->update('event/update_event', json_encode($data), $token);
            // echo '<pre>' . print_r($RequestEdit, true) . '</pre>';
            if ($RequestEdit->status_code != 200)
                throw new Exception($RequestEdit->description);


            // kalau lulus, maka tampil pesan
            $message = [
                'status' => 200,
                'message' => 'berhasil'
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 200,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 200,
                'message' => "Throwable Error: " . $Error->getMessage()
            ];
        }

        return $message;
    }

    public function restore($data)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            $RequestEdit = $this->api->update('event/update_event', json_encode($data), $token);
            // echo '<pre>' . print_r($RequestEdit, true) . '</pre>';
            // exit(1);
            if ($RequestEdit->status_code != 200)
                throw new Exception($RequestEdit->description);


            // kalau lulus, maka tampil pesan
            $message = [
                'status' => 200,
                'message' => 'berhasil'
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable Error: " . $Error->getMessage()
            ];
        }

        return $message;
    }


    private function SettingPagination()
    {

        $config['per_page'] = 10; //show record per halaman
        $config["num_links"] = 5; // uri parameter
        $config["uri_segment"] = 3; // uri parameter
        // Membuat Style pagination untuk BootStrap v4
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['reuse_query_string'] = TRUE;
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center">
        <nav>
        <ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>
        </nav>
        </div>';
        $config['num_tag_open'] = '<li class="page-item datatable-pagination"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item datatable-pagination active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item datatable-pagination"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item datatable-pagination"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';

        return $config;
    }
}
