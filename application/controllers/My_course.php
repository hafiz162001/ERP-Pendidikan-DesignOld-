<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_course extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ModelCusCourse', 'modelcus');
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
        
    }
    
    public function index()
    {
        $data = [];
        $this->load->view('Customers/course_saya', $data, FALSE);
        
    }

    public function detail($tipe, $id)
    {
        
        $data['tipe'] = $tipe;
        $data['id'] = $id;
        $show = $this->modelcus->get_history(1,$tipe, $id);
        $testi = $this->modelcus->get_testi($id);
        $data['testi'] = $testi['data'][0];
        $data['data'] = $show['data'][0];
        // var_dump($data['data']);
        // die;
        if ($show['row_count'] == 0) {
            $data['url'] = "my_course";
            $data['caption'] = "Kembali ke halaman course";
            $data['judul'] = "Course tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Customers/detail_course', $data, FALSE);
        }
    }

    public function learning_path($tipe, $id)
    {
        
        $data['tipe'] = $tipe;
        $data['id'] = $id;
        $show = $this->modelcus->get_history_path(1,$tipe, $id);
        // $testi = $this->modelcus->get_testi($id);
        // $data['testi'] = $testi['data'][0];
        $data['data'] = $show['data'][0];
        // var_dump($data['data']);
        // die;
        if ($show['row_count'] == 0) {
            $data['url'] = "my_course";
            $data['caption'] = "Kembali ke halaman course";
            $data['judul'] = "Course tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Learning_path/course_saya_learning_path', $data, FALSE);
        }
    }

    public function download($id, $filename){
        $url =  $this->config->item('bisaUrl').'master_sertifikat/media/course/'.$id.'/'.$filename;
        header("Content-Description: File Transfer"); 
        header("Content-Type: application/octet-stream"); 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11');
        $res = curl_exec($ch);
        $rescode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
        curl_close($ch) ;
        echo $res;
        exit(); 
    }

    public function detail_silabus($tipe, $id_course, $id_silabus, $id_sil_cus)
    {
        $data['id_course'] = $id_course;
        $data['tipe'] = $tipe;
        $data['id'] = $id_silabus;
        $data['id_syllabus_c'] = $id_sil_cus;
        $show = $this->modelcus->get_silabus_cus($id_silabus);
        $cekLulus = $this->modelcus->get_silabus($id_course, $id_sil_cus);
        $data['data'] = $show['data'][0];
        $data['lulus'] = $cekLulus['data'][0]['status'];
        $data['score'] = $cekLulus['data'][0]['score'];
        if ($show['row_count'] == 0) {
            $data['url'] = "my_course";
            $data['caption'] = "Kembali ke halaman course";
            $data['judul'] = "Course tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Customers/detail_course_silabus', $data, FALSE);
        }
        // echo "<pre>";
        // print_r($show);
        
    }

    public function detail_task($tipe, $id_course, $id_silabus, $id_sil_cus)
    {
        $data['id_course'] = $id_course;
        $data['tipe'] = $tipe;
        $data['id'] = $id_silabus;
        $data['id_syllabus_c'] = $id_sil_cus;
        
        $flag = $this->modelcus->put_data_silabus($id_sil_cus, null,null, null,1);

        // echo json_encode($flag);
        // die;
        // if($flag['status_code'] != 200){
        //     $data['url'] = "my_course";
        //     $data['caption'] = "Kembali ke halaman course";
        //     $data['judul'] = "Opps terjadi kesalahan saat akan membuka soal tugas. Timeout..";
        //     $this->load->view('Templates/error404', $data, false);
        //     // die;
        // } 

        $show = $this->modelcus->get_silabus_cus($id_silabus);
        $cekLulus = $this->modelcus->get_silabus($id_course, $id_sil_cus);
        $data['data'] = $show['data'][0];
        $data['data_cus'] = $cekLulus['data'][0];
        $data['lulus'] = $cekLulus['data'][0]['status'];
        $data['score'] = $cekLulus['data'][0]['score_task'];
        if ($show['row_count'] == 0) {
            $data['url'] = "my_course";
            $data['caption'] = "Kembali ke halaman course";
            $data['judul'] = "Course tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Customers/silabus_task', $data, FALSE);
        }
        
    }

    public function showhistory(){
    	$page = $this->input->post("page");
		$tipe = $this->input->post("tipe");
		$q = $this->input->post("q");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_history($page,$tipe,null,1,$q);
        echo json_encode($get_data);
    }

    public function get_learning_path(){
    	$page = $this->input->post("page");
		$tipe = $this->input->post("tipe");
		$q = $this->input->post("q");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_history_path($page,$tipe,null,1,$q);
        echo json_encode($get_data);
    }

    public function get_course_path(){
    	$page = $this->input->post("page");
		$q = $this->input->post("q");
		$id = $this->input->post("id_learning_path");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_history_path_course($page,$id,$q);
        echo json_encode($get_data);
    }

    public function get_diskusi(){
    	$page = $this->input->post("page");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_diskusi($page, $id);
        echo json_encode($get_data);
    }

    public function get_quiz_customer(){
    	$id_customer_syllabus = $this->input->post("id_c_s");
		$page = $this->input->post("page");
		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_cus_quiz($page,$id_customer_syllabus);
        echo json_encode($get_data);
    }

    public function submitQuiz(){
    	$id_cus = $this->input->post("id");
        $answer = $this->input->post("answer");
        $answer = str_replace("id_quiz_", "", $answer);
        $explode = explode("&", $answer);
        $arrAnswer = array();
        for ($i=0; $i < count($explode) ; $i++) { 
            $pecah = explode("=", $explode[$i]);
            $pecah_soal = explode("_", $pecah[0]);
            $body = array(
                "id_quiz" => $pecah_soal[0],
                "answer_key" => $pecah[1],
            );
            array_push($arrAnswer, $body );
        }
        
        // print_r($arrAnswer);
        $post_quiz = $this->modelcus->post_data_quiz($id_cus, $arrAnswer);
        echo json_encode($post_quiz);
    }

    public function submitTa(){
    	$id_ = $this->input->post("id_customer_course");
        $task_description = $this->input->post("task_description");
        $file_name = $this->input->post("file_name");
        $task_final = $this->input->post("task_final");
        
        $gantiFlag = $this->modelcus->put_data_ta($id_,null,null,null,1);
        if($gantiFlag['status_code'] == 200){
            $post_ta = $this->modelcus->put_data_ta($id_, $task_description, $file_name, $task_final);
        } else {
            $post_ta = $gantiFlag;
        }

        if(isset($post_ta['status_code'])){
            http_response_code($post_ta['status_code']);
        } else {
            http_response_code(400);
        }
        
        echo json_encode($post_ta);
    }


    public function submit_tugas_silabus(){
    	$id_ = $this->input->post("id_customer_syllabus");
        $task_description = $this->input->post("task_description");
        $file_name = $this->input->post("file_name");
        $task_final = $this->input->post("task_final");
        
        $flag = $this->modelcus->put_data_silabus($id_, $task_description, $file_name, $task_final);
        // if($gantiFlag['status_code'] == 200){
        //     $post_ta = $this->modelcus->put_data_silabus($id_, $task_description, $file_name, $task_final);
        // } else {
        //     $post_ta = $gantiFlag;
        // }

        if($flag['status_code'] == 200){
            http_response_code(200);
        } else {
            http_response_code(400);
        }
        
        echo json_encode($flag);
    }

    public function submit_testi(){
    	$data = $this->input->post();
        $data['id_customer_course'] = intval($data['id_customer_course']);
        $data['rating'] = intval($data['rating']);
       
        $res = $this->modelcus->post_data_testi($data);
            
        echo json_encode($res);
    }

    public function get_silabus($id_course){		
		$get_data = $this->modelcus->get_silabus($id_course);
        echo json_encode($get_data);
    }

}

/* End of file My_course.php */


?>