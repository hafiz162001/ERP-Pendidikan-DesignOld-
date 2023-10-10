<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_solusi extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelInfo', 'info');
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
    }
    
    public function index()
    {
        $data['tilte'] = "";
        $this->load->view('Cloud/my_cloud', $data, FALSE);
        
    }

    public function get_data(){
    	$page = $this->input->post("page");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->info->get_my_cloud($page,$q);
        echo json_encode($get_data);
    }

}

/* End of file My_solusi.php */
