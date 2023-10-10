<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{
		$this->load->view('v_register');
	}

	public function regis()
	{
		$this->load->helper('form');
		$this->load->library('upload');
		$email = $this->input->post('email'); 
		$nama = $this->input->post('name');
        $pass =md5($this->input->post('password'));
        $no = $this->input->post('no_telepon');
        $alamat = $this->input->post('alamat');
        $jk = $this->input->post('jk');
        $tgl = $this->input->post('tgl');
        $kategori_instansi = $this->input->post('ki');
        $nama_instansi = $this->input->post('ni');

        $info = pathinfo($_FILES['foto']['name']);
        $newname = mt_rand()."_profile.jpg";

		$target = '/var/www/bisaai_frontend/admin_bisa/upload/profile/'.$newname;
		move_uploaded_file( $_FILES['foto']['tmp_name'], $target);
		$data = base64_encode(file_get_contents('https://ehosdev.javafirst.id/bisaai_frontend/admin_bisa/upload/profile/'.$newname));

        // var_dump($email,$nama,$pass,$no,$alamat,$jk,$tgl,$kategori_instansi,$nama_instansi,$data);
        // die();

		$curl = curl_init();

		curl_setopt_array($curl, array(
			CURLOPT_URL => "https://gate.bisaai.id/server_lab/customer/insert_customer",
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 0,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "POST",
			CURLOPT_POSTFIELDS =>"{\n\t\"email\":\"".$email."\",\n\t\"password\":\"".$pass."\",\n\t\"nama\":\"".$nama."\",\n\t\"no_telepon\":\"".$no."\",\n\t\"alamat\":\"".$alamat."\",\n\t\"foto\":\"".$data."\",\n\t\"jk\":\"".$jk."\",\n\t\"tanggal_lahir\":\"".$tgl."\",\n\t\"kategori_instansi\":\"".$kategori_instansi."\",\n\t\"nama_instansi\":\"".$nama_instansi."\"\n}",
			CURLOPT_HTTPHEADER => array(
				"Content-Type: application/json"
			),
		));

		$response = curl_exec($curl);

		curl_close($curl);
		// echo $response;
		redirect('verify_register');
	}
	
}