<?php
class ModelBerita extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
    }

    private function ImportModel()
    {
        $this->load->model('General', 'api');
        $this->load->model('Credential', 'credential');
        $this->load->library('MyLibrary');
    }

    public function Get($aktif = 'is_aktif=1', $q = '', $url = 'index', $page = 'page=1&')
    {
        try {
            // $Credential = $this->credential->CekCredential();
            // if ($Credential['status'] != 200)
            //     new Exception($Credential['message']);

            // $token = $this->credential->GetToken();

            // request api 
            $Request = $this->api->get('berita/get_berita?order_by=1&'. $page . $aktif . $q);
            // echo '<pre>' . print_r($Request, true) . '</pre>';
            // exit(1);
            // cek status kalau bukan 200(sukses)
            if (empty($Request))
                throw new Exception('data kosong');

            // set up pagination
            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            $SetupPagination['base_url'] = site_url('berita/index');
            $SetupPagination['total_rows'] = $Request['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();
            // kalau berhasil
            $data = [
                'collections' => $Request['data'],
                'pagination'  => $Pagination,
                'count'       => $Request['row_count']
            ];

            // tampil ke view  
            // return $data;
            $this->load->view('berita',$data);
        } catch (Exception $Error) {
             // return $this->session->set_flashdata('pesan', "<script>pesan_error('error', 'Tidak ada data')</script>");
            $this->load->view('kosong');
            // $this->load->view('Dapur/Message/EmptyData');

        } catch (Throwable $Error) {
            // return $this->session->set_flashdata('pesan', "<script>pesan_error('error', 'Tidak ada data')</script>");
            $this->load->view('kosong');
            // $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function detail($id = null)
    {
        try {

            if ($id == null)
                new Exception('param kosong');
            // $Credential = $this->credential->CekCredential();
            // if ($Credential['status'] != 200)
            //     throw new Exception($Credential['message']);

            // $token = $this->credential->GetToken();


            $GetDataById = $this->api->get('berita/get_berita?id_berita=' . $id);
            // echo '<pre>' . $id . print_r($GetDataById, true) . '</pre>';
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
                'data'      => $GetDataById['data'][0]
            ];
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
            $RequestEdit = $this->api->update('info/update_info', json_encode($data), $token);
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