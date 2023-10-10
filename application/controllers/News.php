<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
        $this->modul = "berita";
		$this->menu = "berita"; #Panggil Class Menu

	}

	public function get_berita(){
		// $page = $this->input->post("page");
		// if($page === NULL){
		// 	$page = '1';
		// }else{
		// 	$page = $page;
		// }
		$body = array(
			// "is_aktif" =>1,
 			// "page" => strip_tags(htmlspecialchars($page)),
			); #JSON BODY
		$header = array(
			//'Content-Type: application/json',
	    );
		
		$url = $this->config->item('server').$this->modul.'/get_'.$this->menu.'?'.http_build_query($body); 
		$hasil = $this->conn->http_request_get($url, $header, $body);
	
		$data = $hasil;
		echo json_encode($data);
	}
}
?>