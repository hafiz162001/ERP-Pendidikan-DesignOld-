<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLearningPath extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
        //Do your magic here
    }

    public function get_data($page, $id=null, $q, $order = "desc"){
        $body = array(
			"id_learning_path" => $id,
            "is_aktif"=> 1,
            "page" =>$page,
            "search" => $q,
            "order_by_id" =>$order 
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'learning_path/get_learning_path?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);

        return $hasil;
    }

    public function get_detail_course($page, $id=null){
        $body = array(
			"id_learning_path" => $id,
            "page" =>$page,
            "is_aktif" => 1,
            "search" => $q
            );
        $header = array(
            'Content-Type: application/json'
            );
            
        $url =  $this->config->item('bisaUrl').'learning_path/get_learning_path_detail?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);

        return $hasil;
    }

    public function get_data_customer($page, $id=null, $q){
        $body = array(
			"id_customer_learncation" => $id,
            "page" =>$page,
            "search" => $q
            );
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json'
            );
            
        $url =  $this->config->item('bisaUrl').'learncation/get_customer_learncation?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);

        return $hasil;
    }

    public function post_bayar($id,$service_code=null,$kode_unik=null, $is_free, $coupon=null){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        if ($is_free=='false') {
            $body_data = array(
                "id_learning_path"=>$id,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik
            );  

            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'customer_learning_path/insert_customer_learning_path_v2'; 
        } else {
            if ($coupon == null) {
                $body_data = array(
                    "id_learning_path"=>$id,
                    "service_code" => $service_code,
                    "kode_unik_sprint"=>$kode_unik
                ); 
            } else {
                $body_data = array(
                    "id_learning_path"=>$id,
                    "coupon" => $coupon
                ); 
            }
             
            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'customer_learning_path/insert_customer_learning_path_v2'; 
        }
       
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
        // var_dump($hasil);
    }
    

}

/* End of file Learncation.php */
