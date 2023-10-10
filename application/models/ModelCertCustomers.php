<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCertCustomers extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }

    public function get_cert($page,$q){
        $body = array(
			"page" => $page,
			"q" => $q,
            "status" => 2,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'academy/get_my_sertifikat?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
        
    }
    

}

/* End of file ModelCertCustomers.php */
