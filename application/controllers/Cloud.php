<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cloud extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelInfo', 'info');
        $this->load->model('ModelCourse', 'course');
        
    }

    public function index()
    {
        $data['data'] = $this->info->get_data_cloud();
        $data['dataPendidikan'] = $this->info->get_data_cloud_pendidikan();
        $data['dataFAQ'] = $this->info->get_faq();
        $this->load->view('Cloud/landing', $data, FALSE);
    }

    public function detail($id)
    {
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['data'] = $this->info->get_data_cloud($id);
        $data['metode_bayar'] = $this->course->GetMetodeBayar();
        $data['lokasi'] = $this->info->get_lokasi();
        if($data['data']['data'][0]['harga'] <= 0){
            $data['kode_unik'] = 0;
        } else {
            $data['kode_unik'] = $this->course->GetKodeUnik($data['data']['data'][0]['harga']);
            $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
        } 
        $this->load->view('Cloud/detail', $data, FALSE);
    }

    public function bayar(){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
		$id = $this->input->post("id");
        $is_free = $this->input->post("is_free");
        $pakeKupon = $this->input->post("pakeKupon");
        $lokasi = $this->input->post("lokasi");
        
        if ($pakeKupon == 'true') {
            $coupon = $this->input->post("coupon");
        } else {
            $coupon = null;
        }
        
        if($is_free == "true"){
            $service_code = null;
            $kode_unik = null;
        } else {
            $service_code = $this->input->post("service_code");
            $kode_unik = $this->input->post("kode_unik");
        }
		$pushData = $this->info->post_bayar($id, $service_code, $kode_unik, $is_free, $coupon, $lokasi);

        if($pushData['status_code']=="200"){
            $status = "Sukses";
            $data_post = null;
            $url = base_url('').'transaction_history';
            if($is_free !="true"){

                if(isset($pushData['data'][0]['redirect_url'])) {
                    $url = $pushData['data'][0]['redirect_url'];
                } else {
                    $url = base_url('').'transaction_history';
                }
    
                if(isset($pushData['data'][0]['redirect_data'])){
                    $data_post = $pushData['data'][0]['redirect_data'];
                } else {
                    $data_post = null;
    
                }

                $url = $pushData['data'][0]['redirect_url'];
            } else {
                $url = base_url('').'transaction_history';
            }
            http_response_code(200);
        } else {
            $status = $pushData['description'];
            $url = base_url('').'transaction_history';
            http_response_code(400);
        }

        $data2 = array(
            "redirect_url" => $url,
            "redirect_data" => $data_post
        );
        
        $data = array(
            'status_code' => $pushData['status_code'],
            'description' => $status,
            'data' => $data2,
            'res' => $pushData
        );
        echo json_encode($data);
	}


}

/* End of file Cloud.php */
