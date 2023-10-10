<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTesti extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }

     

    public function get_data($page,$id_course=null,$q=null,$order="waktu_desc", $rating=null){
        
        $body = array(
            "page" => $page,
            "rating" => $rating,
            "id_course" => $id_course,
            "is_aktif" => 1,
            "order_by" => $order,
            "search" => $q
        );          

        $url =  $this->config->item('bisaUrl').'academy/get_customer_testimoni_and_rating_landing?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

}

/* End of file ModelCourseNew.php */

