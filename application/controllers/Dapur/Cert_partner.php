<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cert_partner extends CI_Controller {

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
        $data['title'] = "Partner Certificate";
        $this->load->view('Admin/sertifikat-partner', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_certification_partner') == "") {
            $url = "certification/insert_certification_partner";
            $save = $this->query->post_data($url, $data);

        } else {
            if ($this->input->post('foto') == "") {
                unset($data["foto"]);
            }
           
            $url = "certification/update_certification_partner";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function course_flag()
    {
    	$data = $this->input->post();

        $url = "certification/update_certification_partner";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $body = array(
            "is_aktif" => $aktif,
            "page" => $page,
            "id_certification_partner" => $id,
            "search" => $q
        );
        
        $url = "certification/get_certification_partner_admin";
		
        if($id != "") {
            $body = array(
                "id_certification_partner" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    } 

}

/* End of file Course.php */
