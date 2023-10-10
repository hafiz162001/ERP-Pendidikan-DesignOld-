<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('../controllers/Rest_Connect');
		$this->conn = new Rest_Connect; #Panggil Class Rest_Connect
		$this->load->library('session');
	}

	public function index()
	{
		redirect(base_url('login_customer'));
	}

	public function ceklogintest(){
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "https://gate.bisaai.id/server_lab/auth",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 0,
		  CURLOPT_FOLLOWLOCATION => true,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS =>"{\n\t\"username\":\"".$email."\",\n\t\"password\":\"".$password."\"\n}",
		  CURLOPT_HTTPHEADER => array(
		    "Content-Type: application/json"
		  ),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		$hasil =  json_decode($response, true);
		$token = $hasil['access_token'];
		$newdata = array(
        	'username'  => $email,
        	'token'     => $token,
        	'status' => TRUE
        );
		$this->session->set_userdata($newdata);
		redirect('dashboard');
		// echo isset($_SESSION);
		// die();
	}

	public function ceklogin()
	{
		$email = $this->input->post("email");
		$password = $this->input->post("password");
		$body_data = array(
			"username" => $email,
			"password" => $password,
		); #JSON BODY
		$header = array(
			'Content-Type: application/json',
		);
		$body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
		$url = $this->config->item('server') . 'auth';
		$hasil_auth = $this->conn->http_request_post($url, $header, $body);
		// echo "<pre>";
		// print_r($body_data);
		// print_r($header);
		// print_r($url);
		// print_r($hasil_auth);
		// echo "</pre>";
		// die();
		if ($hasil_auth['access_token'] != null) {
			$body = array(); #JSON BODY
			$header = array(
				'Authorization: JWT ' . $hasil_auth['access_token'],
			);
			$url = $this->config->item('server') . 'cek_credential';
			$hasil = $this->conn->http_request_get($url, $header, $body);
			// echo "<pre>";
			// print_r($body_data);
			// print_r($header);
			// print_r($url);
			// print_r($hasil);
			// echo "</pre>";
			// die();
			if (!isset($hasil[0]['id_admin'])) {
				$data = array(
					'status' => "not_found"
				);
			} else {

				$newdata = array_merge(
					array(
						'id_admin' => ($hasil[0]['id_admin']),
						'token' => ($hasil_auth['access_token']),
					)
				);
				// print_r($newdata);
				$token = $this->session->set_userdata($newdata);
				var_dump($token);
				die();
				$data = array(
					'status' => "success",
					'nama' => htmlentities($hasil[0]['nama']),
				);
				redirect('dashboard');
			}
		} else if ($hasil_auth['description'] == "Invalid credentials") {
			$data = array(
				'status' => "wrong",
				redirect('v_login')
			);
		} else {
			$data = array(
				'status' => "error",
				redirect('v_login')
			);
		}

		echo json_encode($data);
	}

	public function logout()
	{
		$array_items = array(
			'status' => '',
			'token' => '',
			'username' => ''
		);
		$this->session->unset_userdata($array_items);
		$this->session->sess_destroy();
		redirect('login');
	}
}
