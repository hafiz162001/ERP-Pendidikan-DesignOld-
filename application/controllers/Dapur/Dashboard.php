<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token_admin') == ""){
			redirect(base_url("Dapur/login"));
		}
    }
    
    public function index()
    {
        $data['title'] = "Dashboard";
        $this->load->view('Admin/dashboard',$data, FALSE);
            
    }

    public function get_token()
    {
        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );

        echo json_encode($data);      
    }


}

 
    /* End of file Dashboard.php */
