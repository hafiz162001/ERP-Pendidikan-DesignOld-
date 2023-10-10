<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelClient extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
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
		$url = $this->config->item('bisaUrl').'auth';
		$hasil_auth = $this->conn->http_request_post($url, $header, $body);
		
		if($hasil_auth['access_token'] != null) {
			$body = array(
				); #JSON BODY
	         $header = array(
		        'Authorization: JWT '. $hasil_auth['access_token'],
		    );
			$url = $this->config->item('bisaUrl').'cek_credential';
			$hasil = $this->conn->http_request_get($url, $header, $body);

			if(!isset($hasil['data'][0]['id_customer'])){
				http_response_code(400);
				$data = array(
					'status' => "not_found"
				);	
			}else{
				http_response_code(200);
				$newdata =	array(
			    				'id_customer' => htmlentities($hasil['data'][0]['id_customer']),
			    				'photo' => htmlentities($hasil['data'][0]['photo']),
								'nama' => htmlentities($hasil['data'][0]['name']),
								'email' => htmlentities($hasil['data'][0]['email']),
								'role' => htmlentities($hasil['data'][0]['role']),
			    				'token' => htmlentities($hasil_auth['access_token'])
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

	public function refresh()
	{

		$body = array(
			"is_aktif" => 1
		); #JSON BODY
		$header = array(
			'Authorization: JWT '. $this->session->userdata('token'),
			'Content-Type: application/json',
		);
		$url = $this->config->item('bisaUrl').'cek_credential';
		$hasil = $this->conn->http_request_get($url, $header, $body);

		$newdata =	array(
			'id_customer' => htmlentities($hasil['data'][0]['id_customer']),
			'photo' => htmlentities($hasil['data'][0]['photo']),
			'nama' => htmlentities($hasil['data'][0]['name']),
			'email' => htmlentities($hasil['data'][0]['email']),
			'role' => htmlentities($hasil['data'][0]['role']),
			'token' => htmlentities($this->session->userdata('token'))
		);

		$this->session->set_userdata($newdata);
					
        return true;
	}


	public function post_regis($email,$password, $name, $agree){
        $body_data = array(
            "email"=> $email,
			"password"=> $password,
			"name"=> $name,
			"agree"=> $agree
            ); #JSON BODY
        $header = array(
                'Content-Type: application/json',
            );

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'users/register'; 
        $hasil = $this->conn->http_request_post($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

	// 

	public function put_profile($address,$dateofbirth,$password=null,$old_password=null,$educational_background,$gender,$name,$phone,$photo=null, $sosmed_linkedin, $sosmed_instagram){

        $body_data = array(
            "address"=> $address,
			"dateofbirth"=> $dateofbirth,
			"educational_background"=> $educational_background,
			"gender"=> $gender,
			"name"=> $name,
			"phone"=> $phone,
			"sosmed_instagram"=> $sosmed_instagram,
			"sosmed_linkedin"=> $sosmed_linkedin,
            ); #JSON BODY
        $header = array(
				'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );

		if($photo!=null) {
			$body_data["photo"] = $photo;
		}
		
		if ($password != null && $old_password != null) {
			$body_data['password'] = $password;
			$body_data['old_password'] = $old_password;
		}

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'users/update_customer'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        $data = $hasil;
        return $data;
    }

	public function post_forget($email){
        $body_data = array(
            "email"=> $email
            ); #JSON BODY
        $header = array(
                'Content-Type: application/json',
            );

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'users/forgotpassword'; 
        $hasil = $this->conn->http_request_post($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

	// public function get_profile(){
    //     $body = array(
			
	// 	);
    //     $header = array(
	// 		'Authorization: JWT '. $this->session->userdata('token'),
	// 		'Content-Type: application/json',
	// 	);
            
    //     $url =  $this->config->item('bisaUrl').'users/get_profile?'.http_build_query($body); 
    //     $hasil = $this->conn->http_request_get($url, $header, $body);
    //     $data = $hasil;
    //     // echo json_encode($data);
    //     return $data;
    // }

	public function get_profile(){
        $body = array(
			
		);
        $header = array(
			'Authorization: JWT '. $this->session->userdata('token'),
			'Content-Type: application/json',
		);
            
        $url =  $this->config->item('bisaUrl').'cek_credential?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }
    

}

/* End of file ModelClinet.php */

?>