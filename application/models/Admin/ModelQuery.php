<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ModelQuery extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
		$this->conn = new Rest_Connect;         
    }

    function get_data($urlData, $body_data ){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token_admin'),
            'Content-Type: application/json',
        );
           
        $url = $this->config->item('bisaUrl').$urlData.'?'.http_build_query($body_data);
        // echo $url;
        // die;
		$hasil = $this->conn->http_request_get($url, $header, $body_data);
        return $hasil;    
    }

    function post_data($urlData, $body_data ){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token_admin'),
            'Content-Type: application/json',
        );
        $body = json_encode($body_data);
        // echo $body;
        // die; 
        $url = $this->config->item('bisaUrl').$urlData;
		$hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;    
    }

    function put_data($urlData, $body_data ){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token_admin'),
            'Content-Type: application/json',
        );
        $body = json_encode($body_data); 
        // echo $body;
        // die;    
        $url = $this->config->item('bisaUrl').$urlData;
		$hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;    
    }

    function delete_data($urlData, $body_data ){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token_admin'),
            'Content-Type: application/json',
        );

        $body = json_encode($body_data);   

        $url = $this->config->item('bisaUrl').$urlData;
		$hasil = $this->conn->http_request_delete($url, $header, $body);
        return $hasil;    
    }
    
}

/* End of file ModelName.*p */
