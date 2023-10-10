<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Learningpath extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLearningPath', 'learn');
        $this->load->model('ModelCourse', 'course');
        
        //Do your magic here
    }
    
    public function index()
    {
        $data['title'] = "Learning Path";
        $data['tagline'] = "Membantu menemukan pola dan path belajar terbaik bidang Desain, UI/UX dan Game";
        $this->load->view('Learning_path/landing_learning_path', $data, FALSE);
    }

    public function detail($id){
        $id = base64_decode($id);
        $data['data'] = $this->learn->get_data(1,$id,null);
        if ($data['data']['data'][0]['is_discount'] == "1") {
            $hargaTTl = $data['data']['data'][0]['price_discount'];

        } else {
            $hargaTTl = $data['data']['data'][0]['price'] + $data['data']['data'][0]['price_bisaai'];

        }
        if ($hargaTTl == 0) {
            $data['kode_unik'] = 0;  
        } else {
            $data['kode_unik'] = $this->course->GetKodeUnik($hargaTTl);
            $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
        }
        $data['metode_bayar'] = $this->course->GetMetodeBayar();
        
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        
        $hasil = $this->learn->get_detail_course(1,$id);
        $now = $hasil['page'] * 10 ;
        $paging = 1;
        $arr=$hasil['data'];
        // $x = array(
        //         "course_description"=> "homeee adsadsalk",
        //         "course_name"=> "Stuck gaess ",
        //         "course_photo"=> "2021-08-19_222434_course.png",
        //         "id_course"=> 371,
        //         "id_learning_path"=> 2,
        //         "id_learning_path_detail"=> 4,
        //         "is_aktif"=> 1,
        //         "is_free"=> 0,
        //         "number_of_course"=> 2,
        //         "urutan"=> 1
        // );

        do {
            // array_merge($arr, $hasil['data']);
            $paging++;
            $hasil = $this->learn->get_detail_course($paging,$id);
            $now = $hasil['page'] * 10 ;
            $arr = array_merge($arr, $hasil['data']);
        } while ($now < $hasil['row_count'] );

        $data['data_course'] = $arr;
        $this->load->view('Learning_path/detail', $data); 
    }

    public function get_data(){
        $page = $this->input->post("page");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));
		$order = $this->input->post("order");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->learn->get_data($page,null,$q, $order);
        echo json_encode($get_data);
    }

    public function bayar(){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
		$id = $this->input->post("id_learning_path");
        $is_free = $this->input->post("is_free");
        $pakeKupon = $this->input->post("pakeKupon");
        
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

		$pushData = $this->learn->post_bayar($id, $service_code, $kode_unik, $is_free, $coupon);
        $data_post = null;
        
        if($pushData['status_code']=="200"){
            $status = "Pendaftaran Learning Path Berhasil";
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
            $status = $pushData['error'];
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

/* End of file Learningpath.php */
 