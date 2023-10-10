<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelLearncation extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
        //Do your magic here
    }

    public function get_data($page, $id=null, $q){
        $body = array(
			"id_learncation" => $id,
            "is_aktif"=> 1,
            "page" =>$page,
            "search" => $q
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'learncation/get_learncation?'.http_build_query($body); 
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

    public function post_bayar($id,$service_code=null,$kode_unik=null, $waktu_kunjungan, $hp, $is_free, $coupon=null){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        if ($is_free=='false') {
            $body_data = array(
                "id_learncation"=>$id,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik,
                "waktu_kunjung_principal"=> $waktu_kunjungan,
                "no_telfon" => $hp
            );  

            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'learncation/insert_customer_learncation'; 
        } else {
            if ($coupon == null) {
                $body_data = array(
                    "id_learncation"=>$id,
                    "service_code" => $service_code,
                    "kode_unik_sprint"=>$kode_unik,
                    "waktu_kunjung_principal"=> $waktu_kunjungan,
                    "no_telfon" => $hp
                ); 
            } else {
                $body_data = array(
                    "id_learncation"=>$id,
                    "coupon" => $coupon,
                    "waktu_kunjung_principal"=> $waktu_kunjungan,
                    "no_telfon" => $hp
                ); 
            }
             
            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'learncation/insert_customer_learncation'; 
        }
       
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }
    

}

/* End of file Learncation.php */
