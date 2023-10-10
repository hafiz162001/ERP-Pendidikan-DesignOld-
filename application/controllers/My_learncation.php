<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class My_Learncation extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelLearncation','learn');
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
    }
    
    public function index()
    {
        $data[] = "";
        $this->load->view('Learncation/my_learncation', $data, FALSE);
    }

    public function get_data(){
    	$page = $this->input->post("page");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));
		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
        $get_data = $this->learn->get_data_customer($page,null, $q);
        echo json_encode($get_data);
    }

}

/* End of file My_Learncation.php */
