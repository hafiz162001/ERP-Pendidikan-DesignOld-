<?php
class ModelWebinar extends CI_Model
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

    public function Get($q = '', $page = 'page=1&')
    {
        try {
            // $Credential = $this->credential->CekCredential();
            // if ($Credential['status'] != 200)
            //     new Exception($Credential['message']);

            $token = $this->credential->GetToken();

            // request api 
            $Request = $this->api->JWT('event/get_event?is_aktif=1&order_by=asc&id_partner=1&status=1' . $page . $q, $token);
            // echo '<pre>' . print_r($Request, true) . '</pre>';
            // exit(1);
            // cek status kalau bukan 200(sukses)
            if ($Request['status_code'] != 200)
                throw new Exception('data kosong');

            // set up pagination
            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            $SetupPagination['base_url'] = site_url('webinar');
            $SetupPagination['total_rows'] = $Request['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();
            $data = [
                'collections' => $Request['data'],
                'pagination'  => $Pagination,
                'count'       => $Request['row_count'],
            ];

            // tampil ke view  
            return $data;
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
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
