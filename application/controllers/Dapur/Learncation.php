<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Learncation extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token_admin') == ""){
			redirect(base_url("Dapur/login"));
		}
        $this->load->model('Admin/ModelQuery', 'query');
        
        //Do your magic here
    }
    
    public function index()
    {
        $data['title'] = "Learncation";
        $this->load->view('Admin/learncation', $data, FALSE); 
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$tipe = $this->input->post("tipe");
		$q = $this->input->post("q");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        $body = array(
            "is_aktif" => 2
        );
        
        $url = "learncation/get_learncation";
		
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

    

}

/* End of file Learncation.php */
