<?php
class ModelCourse extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
    }

    private function ImportModel()
    {
        $this->load->model('Api', 'api');
        $this->load->model('Credential', 'credential');
        $this->load->library('MyLibrary');
    }

    public function GetById($id)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            // request api 
            $Request = $this->api->JWT('course/get_course?id='.$id, $token);
            return $Request;
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function GetMetodeBayar()
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            // request api 
            $Request = $this->api->get_metode_bayar('transaksi/get_merchant_metode_pembayaran');
            return $Request;
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function GetKodeUnik($nominal)
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();
            // request api 
            $Request = $this->api->get_metode_bayar('transaksi/get_kode_unik?transaction_amount='.$nominal);
            return $Request;
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function Get($free = '&is_free=1', $q = '', $page = 'page=1&')
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();

            // request api 
            $Request = $this->api->JWT('course/get_course?is_aktif=1' . $free . $page . $q, $token);
            // cek status kalau bukan 200(sukses)
            if ($Request['status_code'] != 200) {
                throw new Exception('data kosong');
            }


            // set up pagination
            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            if ($free == '&is_free=1') {
                $SetupPagination['base_url'] = site_url('course');
            } elseif ($free = '&is_free=0') {
                $SetupPagination['base_url'] = site_url('course/master');
            } elseif ($free = '&is_ojt=3') {   
                $SetupPagination['base_url'] = site_url('course/liveacademy');
            } else {
                $SetupPagination['base_url'] = site_url('course/ojt');
            }
            $SetupPagination['total_rows'] = $Request['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();
            // seleksi data
            $no = 0;
            foreach ($Request['data'] as $id) {
                // $syllabus = $this->api->JWT("course/get_syllabus?id_c={$id['id_course']}", $token);
                // if ($syllabus['status_code'] != 200)
                //     throw new Exception($syllabus['status_code'] . ': Sedang terjadi masalah, silahkan coba beberapa saat lagi');

                $tampung[$no]['id_course'] = $id['id_course'];
                $tampung[$no]['name'] = $id['name'];
                $tampung[$no]['price'] = (int)$id['price'] + (int)$id['price_bisaai'];
                $tampung[$no]['description'] = $id['description'];
                $tampung[$no]['peserta'] = $id['number_of_students'];
                $tampung[$no]['photo'] = !empty($id['photo']) ? $id['photo'] : '';
                $tampung[$no]['syllabus'] = $id['number_of_syllabus'];
                $no++;
            }
            $data = [
                'collections' => $tampung,
                'pagination'  => $Pagination,
                'count'       => $Request['row_count'],
            ];
            // echo "<pre>" . print_r($data['collections'], true) . "</pre>";
            // die;

            // tampil ke view  
            return $data;
        } catch (Exception $Error) {
            $this->load->view('Dapur/Message/EmptyData');
        } catch (Throwable $Error) {
            $this->load->view('Dapur/Message/Maintenance');
        }
    }

    public function Home()
    {
        try {
            $Credential = $this->credential->CekCredential();
            if ($Credential['status'] != 200)
                new Exception($Credential['message']);

            $token = $this->credential->GetToken();

            // request api 
            $free = $this->api->JWT('course/get_course?is_aktif=1&is_free=1&order_by_number_of_student=desc&is_limit=2', $token);
            $pay = $this->api->JWT('course/get_course?is_aktif=1&is_free=0&is_limit=2', $token);
            // cek status kalau bukan 200(sukses)
            if ($free['status_code'] != 200) {
                throw new Exception($free['error']);
            }

            // seleksi data
            $no = 0;
            $angka = 0;
            foreach ($free['data'] as $id) {
                $syllabus = $this->api->JWT("course/get_syllabus?id_c={$id['id_course']}", $token);
                $tampung[$no]['id_course'] = $id['id_course'];
                $tampung[$no]['name'] = $id['name'];
                $tampung[$no]['price'] = (int)$id['price'] + (int)$id['price_bisaai'];
                $tampung[$no]['description'] = $id['description'];
                $tampung[$no]['peserta'] = $id['number_of_students'];
                $tampung[$no]['photo'] = !empty($id['photo']) ? $id['photo'] : '';
                $tampung[$no]['syllabus'] = $syllabus['row_count'];
                $no++;
            }
            foreach ($pay['data'] as $id) {
                $syllabus = $this->api->JWT("course/get_syllabus?id_c={$id['id_course']}", $token);
                $isi[$angka]['id_course'] = $id['id_course'];
                $isi[$angka]['name'] = $id['name'];
                $isi[$angka]['price'] = (int)$id['price'] + (int)$id['price_bisaai'];
                $isi[$angka]['description'] = $id['description'];
                $isi[$angka]['peserta'] = $id['number_of_students'];
                $isi[$angka]['photo'] = !empty($id['photo']) ? $id['photo'] : '';
                $isi[$angka]['syllabus'] = $syllabus['row_count'];
                $angka++;
            }
            $data = [
                'collections' => $tampung,
                'pay'         => $isi,
                // 'count'       => $free['row_count'],
            ];
            // echo "<pre>" . print_r($data['collections'], true) . "</pre>";
            // die;

            // tampil ke view  
            return $data;
        } catch (Exception $Error) {
            return $Error;
        } catch (Throwable $Error) {
            return $Error;
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
