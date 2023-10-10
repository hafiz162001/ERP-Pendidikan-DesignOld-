<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Admin/ModelLogin', 'login');
        
    }
    
    public function index()
    {
        if($this->session->userdata('token_admin') != ""){
			redirect(base_url("Dapur/dashboard"));
		}

        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );

        $data['title'] = "Login";
        $this->load->view('Admin/login', $data, FALSE);
        
    }
    
    public function auth(){
        $form_data = $this->input->post();
		$email = strip_tags(htmlspecialchars($this->input->post("email")));
		$password = strip_tags(htmlspecialchars($this->input->post("password")));

        $getData = $this->login->ceklogin($email, $password);
        echo json_encode($getData);
    }

    public function logout(){
		$array_items = array(
            'id_user' => '',
            'photo' => '',
            'nama' => '',
            'email' => '',
            'role' => '',
            'token_admin' => ''
        );
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('Dapur/login');
	}

}

/* End of file Login.php */