<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Exam_certification extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model_cert', 'cert');
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
    }
    
    public function index()
    {
        $data[] = "";
        $this->load->view('Certification/list_certification_user', $data, FALSE);
        
    }
    
    public function detail($id)
    {
        $data['cert'] = $this->cert->show_my_cert(1,"", $id);
        $data['id'] = $id;
        $this->load->view('Certification/detail_list_certification_user', $data, FALSE);
        
    }

    function download_cert($filename){
        return $this->cert->image($filename);
    }

    public function section($id, $id_sec)
    {
        $data[] = "";
        $data['section'] = $this->cert->show_my_section(1,$id, $id_sec);
        $this->load->view('Certification/take_ujian', $data, FALSE);
        
    }

    public function show_data(){
    	$page = $this->input->post("page");
		$q = $this->input->post("q");
		$tipe = $this->input->post("tipe");

        if ($tipe == "") {
            $tipe = null;
        }

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->cert->show_my_cert($page,$q, null, $tipe);
        echo json_encode($get_data);
    }

    public function show_section(){
    	$page = $this->input->post("page");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->cert->show_my_section($page,$id);
        echo json_encode($get_data);
    }

    public function get_soal(){
    	$page = $this->input->post("page");
		$id = $this->input->post("id_exam");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->cert->get_soal($page,$id);
        echo json_encode($get_data);
    }

    public function submitQuiz(){
    	$id_cus = $this->input->post("id");
    	$id_cert = $this->input->post("id_cert");
        $answer = $this->input->post("answer");
        $answer = str_replace("id_quiz_", "", $answer);
        $explode = explode("&", $answer);
        $arrAnswer = array();
        for ($i=0; $i < count($explode) ; $i++) { 
            $pecah = explode("=", $explode[$i]);
            $body = array(
                "id_certification_exam_quiz" => $pecah[0],
                "jawaban_quiz" => $pecah[1],
            );
            array_push($arrAnswer, $body );
        }
        $post_quiz = $this->cert->post_ujian($id_cus, $arrAnswer);
        if ($post_quiz['status_code'] == 200) {
            $data = array(
                "status_code"=> 200,
                "description"=> "Berhasil submit ujian", 
            );
            $post_quiz = $this->cert->end_ujian($id_cert, $arrAnswer);
        } else {
            $data = array(
                "status_code"=> 400,
                "description"=> "gagal submit ujian"
            );
        }

        echo json_encode($data);
    }

    public function start_ujian(){
        $id_cus = $this->input->post("id");
        $data = $this->cert->start_ujian($id_cus);
        echo json_encode($data);
    }

}

/* End of file Exam_certification.php */
