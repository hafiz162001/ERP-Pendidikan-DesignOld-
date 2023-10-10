<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mail extends CI_Controller {
    
	public function vcon(){

		$base = $this->input->get('v');
		redirect('https://gate.bisaai.id/bisa_ai_vcon/aktivasi?q='.$base);
	}
	
	public function conference(){
		$meetingid = $this->input->get('meeting_id');
		$status = $this->input->get('status');
		
		if($meetingid == False){
		    $this->load->view('404');
		}
		else{
		    
		$curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://gate.bisaai.id/bisa_ai_vcon/general/enter_coba?meeting_id='.$meetingid,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
        ));

        $response = curl_exec($curl);
        curl_close($curl);
    
        $hasil = json_decode($response);
        $kembalian =  $hasil -> result;
        if($kembalian == 'berhasil')
        {
            $data['meeting_id'] = $meetingid;
            $data['error'] = null;
            if($status == '1'){
                $data['error'] = "Password Salah";
            }
            if($status == '2'){
                $data['error'] = "Meeting belum dimulai";
            }
            $this->load->view('join_room', $data);
        }
        else
        {
            $this->load->view('404');
        }
		}
	}
	

	public function vcon_error(){
	    
        $this->load->view('404');
	}
	
	public function test_post(){
	    $username = $this->input->post('username');
	    $password = $this->input->post('password');
	    $meeting_id = $this->input->post('meeting_id');
	    
	    $datapost = json_encode(array( 'username'=>$username, 'password'=>$password, 'meeting_id'=>$meeting_id));
        
	    $curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://gate.bisaai.id/bisa_ai_vcon/general/enter_coba",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS => $datapost,
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json"
			),
		));

		$response = curl_exec($curl);
		curl_close($curl);
// 		echo $response;
        redirect($response);
	}


}
?>