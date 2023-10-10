<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLogin extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('../controllers/Rest_Connect');
		$this->conn = new Rest_Connect; #Panggil Class Rest_Connect
		$this->load->library('session');
        
    }

    public function ceklogin($email, $password)
	{
		$body_data = array(
			"username" => $email, 
			"password" => $password
			); #JSON BODY
         $header = array(
	        'Content-Type: application/json',
	    );
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
		$url = $this->config->item('bisaUrl').'auth_admin';
		$hasil_auth = $this->conn->http_request_post($url, $header, $body);
		
		if($hasil_auth['access_token'] != null) {
			$body = array(
				); #JSON BODY
	         $header = array(
		        'Authorization: JWT '. $hasil_auth['access_token'],
		    );
			$url = $this->config->item('bisaUrl').'cek_credential';
			$hasil = $this->conn->http_request_get($url, $header, $body);

			if(!isset($hasil['data'][0]['id_user'])){
				http_response_code(400);
				$data = array(
					'status' => "not_found"
				);	
			}else{
				http_response_code(200);
				$newdata =	array(
			    				'id_customer' => htmlentities($hasil['data'][0]['id_user']),
			    				'photo' => htmlentities($hasil['data'][0]['photo']),
								'nama' => htmlentities($hasil['data'][0]['name']),
								'email' => htmlentities($hasil['data'][0]['email']),
								'role' => htmlentities($hasil['data'][0]['role']),
			    				'token_admin' => htmlentities($hasil_auth['access_token'])
                            );
				// print_r($newdata);
				$this->session->set_userdata($newdata);
				$data = array(
					'status' => "success",
					'nama' => htmlentities($hasil['data'][0]['name']),
				);	
			}
		}else if($hasil_auth['description'] == "Invalid credentials"){
			http_response_code(400);
			$data = array(
				'status' => "wrong"
			);	
		}else{
			http_response_code(400);
			$data = array(
				'status' => "error"
			);	
		}
		
        return $data;
	}
    

}

/* End of file ModelLogin.php */
 
