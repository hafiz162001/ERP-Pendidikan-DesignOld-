<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends CI_Controller {

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
        $data['title'] = "Course";
        $this->load->view('Admin/course', $data, FALSE);
    }

    public function testi($id)
    {
        $data['title'] = "Menampilkan testimoni untuk id course: ".$id;
        $data['id'] = $id;
        $this->load->view('Admin/testi', $data, FALSE);
    }

    public function savecourse()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_course') == "") {
            $url = "course/add_course";
            $save = $this->query->post_data($url, $data);

        } else {
            if ($this->input->post('photo') == "") {
                unset($data["photo"]);
            }
            $url = "course/update_course";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function course_flag()
    {
    	$data = $this->input->post();

        $url = "course/update_course";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$jenis = $this->input->post("jenis");
		$aktif = $this->input->post("aktif");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

        $ojt = "";
        $free = "";

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        if ($jenis == 1) {
            $ojt = "2";
            $free = "1";
        } elseif ($jenis == 2){
            $ojt = "2";
            $free = "0";
        } elseif( $jenis == 3){
            $ojt = "1";
            $free = "0";
        } elseif($jenis ==4) {
            $ojt = "3";
            $free = "0";
        } else {
            $ojt = "";
            $free = "";
        }
        
        $body = array(
            "is_aktif" => $aktif,
            "is_ojt" => $ojt,
            "page" => $page,
            "is_free" => $free,
            "q" => $q
        );
        
        $url = "course/get_course";
		
        if($id != "") {
            $body = array(
                "id" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    } 

    public function showdata_testi(){
    	$page = $this->input->post("page");
		$rating = $this->input->post("rating");
		$id_course = $this->input->post("id_course");
		$q = $this->input->post("search");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        $body = array(
            "is_aktif" => 1,
            "rating" => $rating,
            "page" => $page,
            "search" => $q,
            "id_course" => $id_course,
            "order_by" => "waktu_desc"
        );
        
        $url = "academy/get_customer_testimoni_and_rating";

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }  

    public function showclient(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");
        $body = array(
            "is_aktif" => 1,
            "id_client" => $id,
            "q" => $q
        );
        $url = "client/get_client";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_client'], 
                "text" => $key['name'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        
        echo json_encode($isi);
    } 

    public function showmastercert(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "is_aktif" => 1,
            "q" => $q,
            "id_master_sertifikat" => $id,
        );
        $url = "master_sertifikat/get_sertifikat";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_master_sertifikat'], 
                "text" => $key['nama_sertifikat'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );

        
        
        echo json_encode($isi);
    } 

}

/* End of file Course.php */
