<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Cert extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ModelCertCustomers', "m_c");
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
    }
    
    public function index()
    {
        $data = [];
        $this->load->view('Customers/sertifikat_saya', $data, FALSE);
        
    }

    public function showhistory(){
    	$page = $this->input->post("page");
		$q = $this->input->post("q");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->m_c->get_cert($page,$q);
        echo json_encode($get_data);
    }

}

/* End of file Cert.php */
