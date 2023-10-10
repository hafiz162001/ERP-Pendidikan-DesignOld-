<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_customer extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelClient', 'model_c');
        //Do your magic here
    }
    
    public function index()
    {

        if($this->session->userdata('token') != ""){
			redirect(base_url("transaction_history"));
		}

        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );
    
        $this->load->view('login_client', $data);
        
    }

    public function daftar()
    {

        if($this->session->userdata('token') != ""){
			redirect(base_url("transaction_history"));
		}

        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );
    
        $this->load->view('register', $data);
        
    }

    public function forget_view()
    {

        if($this->session->userdata('token') != ""){
			redirect(base_url("transaction_history"));
		}

        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );
    
        $this->load->view('forget_password_customer', $data);
        
    }

    public function profile()
    {
        if($this->session->userdata('token') == ""){
			redirect(base_url("/"));
		}
        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );
        $show = $this->model_c->get_profile();
        $data['data'] = $show['data'][0];
        $this->load->view('Customers/my_profile', $data, FALSE);
    }

    public function update_profile(){
		$address = $this->input->post("address");
		$dateofbirth = $this->input->post("dateofbirth");
		$password = $this->input->post("password");
		$c_password = $this->input->post("c_password");
		$old_password = $this->input->post("old_password");
		$educational_background = $this->input->post("educational_background");
		$gender = $this->input->post("gender");
		$name = $this->input->post("name");
		$phone = $this->input->post("phone");
		$sosmed_instagram = $this->input->post("sosmed_instagram");
		$sosmed_linkedin = $this->input->post("sosmed_linkedin");
		$photo = $this->input->post("photo");
		
		$regis = $this->model_c->put_profile($address,$dateofbirth,$password,$old_password,$educational_background,$gender,$name,$phone,$photo, $sosmed_linkedin, $sosmed_instagram);
        $this->model_c->refresh();
        echo json_encode($regis);
	}


    public function auth(){
        $form_data = $this->input->post();
		$email = strip_tags(htmlspecialchars($this->input->post("email")));
		$password = strip_tags(htmlspecialchars($this->input->post("password")));

        $getData = $this->model_c->ceklogin($email, $password);
        echo json_encode($getData);
    }

    public function register(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$name = $this->input->post("name");
		$agree = $this->input->post("agree");
		
		$regis = $this->model_c->post_regis($email,$password, $name, $agree);
	}

    public function forget(){
		$email = $this->input->post("email");
		$forgot = $this->model_c->post_forget($email);
	}

    public function logout(){
		$array_items = array(
            'id_customer' => '',
            'photo' => '',
            'nama' => '',
            'email' => '',
            'role' => '',
            'token' => ''
        );
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('login_customer');
	}

}

/* End of file Controllername.php */

?>