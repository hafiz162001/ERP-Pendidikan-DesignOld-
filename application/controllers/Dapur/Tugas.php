<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Tugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token_admin') == ""){
			redirect(base_url("Dapur/login"));
		}
        $this->load->model('Admin/ModelQuery', 'query');
    }

    public function index()
    {
        $data['title'] = "Tugas Silabus";
        $this->load->view('Admin/tugas_silabus', $data, FALSE);
    }

    public function ta()
    {
        $data['title'] = "Tugas Akhir";
        $this->load->view('Admin/ta', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_customer_syllabus') == "") {
            header('Content-Type: application/json'); 
            http_response_code(400);
            echo json_encode( array("status_code"=> 400, "description" => "gagal simpan data") );
            die;
        } else { 
            $url = "academy/update_customer_syllabus";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }


    public function save_ta()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_customer_course') == "") {
            header('Content-Type: application/json'); 
            http_response_code(400);
            echo json_encode( array("status_code"=> 400, "description" => "gagal simpan data") );
            die;
        } else { 
            $url = "academy/update_customer_course";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$status = $this->input->post("status");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
        if($id != "") {
            $body = array(
                "id_customer_syllabus" => $id,
                "is_list" => 1
            );

            $url = "academy/get_customer_syllabus_all";
        } else {
            $body = array(
                "status" => $status,
                "page" => $page,
                "q" => $q,
                "is_list" => 1,
                "order_by" => "name"
            );
            
            $url = "academy/get_customer_syllabus";
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }
    
    
    public function showdata_ta(){
    	$page = $this->input->post("page");
		$status = $this->input->post("status");
		$q = $this->input->post("q");
		$id = $this->input->post("id");
		$ojt = $this->input->post("ojt");
		$course = $this->input->post("course");
		$final = $this->input->post("final");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $url = "academy/get_customer_course";

        if($id != "") {
            $body = array(
                "id_customer_course" => $id
            );

        } else {
            $body = array(
                "status" => $status,
                "page" => $page,
                "q" => $q,
                "task_final" => $final,
                "is_ojt" => $ojt,
                "id_course" => $course,
                "order_by" => "task_time_submit"
            );
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

    public function showsillabus(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "is_aktif" => 1,
            "q" => $q,
            "id" => $id,
        );
        $url = "course/get_syllabus?";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_teacher_course'], 
                "text" => $key['id_teacher_course']. ' - '. $key['name'] .'- '. $key['name_course'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );

        
        
        echo json_encode($isi);
    }

}

/* End of file Course.php */
