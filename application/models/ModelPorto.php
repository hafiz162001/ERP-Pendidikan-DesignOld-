<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ModelPorto extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }
    
    public function get_history($page,$q=null, $jenis = ''){
      
        $body = array(
            "page" => $page,
            "status_portofolio" => $jenis,
            "search" => $q,
            "mode"=> 2
        ); 
        $url =  $this->config->item('bisaUrl').'portofolio/get_customer_portofolio?'.http_build_query($body); 
        
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
    
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function get_history_detail($id){
      
        $body = array(
            "id_portofolio" => $id
        ); 
        $url =  $this->config->item('bisaUrl').'portofolio/get_customer_portofolio?'.http_build_query($body); 
        
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
    
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function get_category($page=1){
        $body = array(
			"is_aktif" => 1,
            "page" => $page,
            "is_no_limit"=> 1
        );
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
        $url =  $this->config->item('bisaUrl').'portofolio/get_kategori_portofolio?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_course($page=1){
        $body = array(
            "page" => $page,
            "order_by" => "DESC",
            "status" => 2
        ); 
        $url =  $this->config->item('bisaUrl').'portofolio/get_list_course_for_insert_portofolio?'.http_build_query($body); 
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
        
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }
    
    public function post_porto($body_data){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'portofolio/insert_portofolio'; 
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }

    public function put_porto($body_data){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'portofolio/update_portofolio'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }   

}

/* End of file ModelCusCourse.php */

?>
