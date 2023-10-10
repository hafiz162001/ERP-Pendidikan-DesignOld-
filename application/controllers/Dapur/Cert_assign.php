<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cert_assign extends CI_Controller {

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
        $data['title'] = "Assign Course ke Certificate Requiremnet";
        $this->load->view('Admin/sertifikat-assign', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_certification_req_course') == "") {
            $url = "certification/assign_cert_req_course";
            $save = $this->query->post_data($url, $data);

        } else {
           
            $url = "certification/deactive_cert_req_course";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function course_flag()
    {
    	$data = $this->input->post();

        $url = "certification/deactive_cert_req_course";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$q = $this->input->post("q");
		$id = $this->input->post("id");
		$id_cert = $this->input->post("id_cert");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $body = array(
            "is_aktif" => 1,
            "page" => $page,
            "id_certification" => $id_cert,
            "id_certification_req_course" => $id,
            "search" => $q
        );
        
        $url = "certification/get_cert_req_course";
		
        if($id != "") {
            $body = array(
                "id_certification_req_course" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    } 

    public function showcourse(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");
        $body = array(
            "is_aktif" => 1,
            "id" => $id,
            "q" => $q
        );
        $url = "course/get_course";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_course'], 
                "text" => $key['id_course'].' - '. $key['name'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        
        echo json_encode($isi);
    } 

}

/* End of file Course.php */
