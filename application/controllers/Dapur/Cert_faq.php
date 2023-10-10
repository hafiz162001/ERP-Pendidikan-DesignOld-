<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cert_faq extends CI_Controller {

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
        $data['title'] = "FAQ Certificate";
        $this->load->view('Admin/sertifikat-faq', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_certification_faq') == "") {
            $url = "certification/insert_certification_faq";
            $save = $this->query->post_data($url, $data);

        } else {
           
            $url = "certification/update_certification_faq";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function course_flag()
    {
    	$data = $this->input->post();

        $url = "certification/update_certification";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$q = $this->input->post("q");
		$id = $this->input->post("id");
		$jenis = $this->input->post("jenis");


		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $body = array(
            "is_aktif" => $aktif,
            "page" => $page,
            "id_certification_faq" => $id,
            "id_certification" => $jenis,
            "search" => $q
        );
        
        $url = "certification/get_certification_faq";
		
        if($id != "") {
            $body = array(
                "id_certification_faq" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    } 

    public function showcert(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");
        $body = array(
            "is_aktif" => 1,
            "id_certification" => $id,
            "search" => $q
        );
        $url = "certification/get_certification";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_certification'], 
                "text" => $key['id_certification'].' - '. $key['nama'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        
        echo json_encode($isi);
    } 

}

/* End of file Course.php */
