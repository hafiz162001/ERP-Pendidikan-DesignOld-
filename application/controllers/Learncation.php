<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Learncation extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLearncation', 'learn');
        $this->load->model('ModelCourse', 'course');
        
        //Do your magic here
    }
    
    public function index()
    {
        $data['title'] = "Learncation";
        $data['tagline'] = "Learncation (Learn while on Vacation) Belajar dari manapun kamu berada seperti dari tempat wisata, hotel dan tempat lainnya, BISA AI Academy akan membantu kamu dalam belajar.";
        $this->load->view('Learncation/landing', $data, FALSE);
    }

    public function detail($id){
        $data['data'] = $this->learn->get_data(1,$id,null);
        $data['metode_bayar'] = $this->course->GetMetodeBayar();
        $hargaTTl = $data['data']['data'][0]['harga_total_weekend'];
        $data['kode_unik'] = $this->course->GetKodeUnik($hargaTTl);
        $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $this->load->view('Learncation/detail', $data); 
    }

    public function get_data(){
        $page = $this->input->post("page");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->learn->get_data($page,null,$q);
        echo json_encode($get_data);
    }

    public function bayar(){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
		$id_learncation = $this->input->post("id_learncation");
        $is_free = $this->input->post("is_free");
        $pakeKupon = $this->input->post("pakeKupon");
        $waktu_kunjungan = str_replace("-","/", $this->input->post("waktu_kunjungan"));
        $hp = $this->input->post("hp");
        
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

		$pushData = $this->learn->post_bayar($id_learncation, $service_code, $kode_unik, $waktu_kunjungan, $hp, $is_free, $coupon);
        $data_post = null;

        if($pushData['status_code']=="200"){
            $status = "Pendaftaran Learnacation Berhasil";
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
            // 'res' => $pushData
        );
        echo json_encode($data);
	}


}

/* End of file Controllername.php */
 