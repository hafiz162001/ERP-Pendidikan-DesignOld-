<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class ModelInfo extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect;
        
    }
    
    public function get_data($id_solusi){
        $body = array(
            "id_solution" => $id_solusi
        );

        $header = array(
            'Content-Type: application/json'
        );

        $url = $this->config->item('bisaUrl').'solution/get_solution?'.http_build_query($body);
        $hasil = $this->conn->http_request_get($url, $header,$body );
        return $hasil;
    }

    public function get_data_cloud($id=null){
        $body = array(
            "is_aktif" => 1,
            "id_cloud_publik" => $id
        );

        $header = array(
            'Content-Type: application/json'
        );

        $url = $this->config->item('bisaUrl').'solution/get_cloud_publik?'.http_build_query($body);
        $hasil = $this->conn->http_request_get($url, $header,$body );
        return $hasil;
    }

    public function get_faq(){
        $body = array(
            "is_aktif" => 1
        );

        $header = array(
            'Content-Type: application/json'
        );

        $url = $this->config->item('bisaUrl').'solution/get_cloud_publik_faq?'.http_build_query($body);
        $hasil = $this->conn->http_request_get($url, $header,$body );
        return $hasil;
    }

    public function get_lokasi(){
        $body = array(
            "is_aktif" => 1
        );

        $header = array(
            'Content-Type: application/json'
        );

        $url = $this->config->item('bisaUrl').'solution/get_lokasi?'.http_build_query($body);
        $hasil = $this->conn->http_request_get($url, $header,$body );
        return $hasil;
    }

    public function get_data_cloud_pendidikan($id=null){
        $body = array(
            "is_aktif" => 1,
            "id_paket_pendidikan" => $id
        );

        $header = array(
            'Content-Type: application/json'
        );

        $url = $this->config->item('bisaUrl').'solution/get_paket_pend?'.http_build_query($body);
        $hasil = $this->conn->http_request_get($url, $header,$body );
        return $hasil;
    }

    public function post_bayar($id,$service_code=null,$kode_unik=null, $is_free, $coupon=null, $lokasi){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        if ($is_free=='false') {
            $body_data = array(
                "id_cloud_publik"=>$id,
                "id_lokasi"=>$lokasi,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik
            );  

            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'solution/insert_customer_cloud_publik'; 
        } else {
            if ($coupon == null) {
                $body_data = array(
                    "id_cloud_publik"=>$id,
                    "id_lokasi"=>$lokasi,

                ); 
            } else {
                $body_data = array(
                    "id_cloud_publik"=>$id,
                    "id_lokasi"=>$lokasi,
                    "coupon" => $coupon
                ); 
            }
             
            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'solution/insert_customer_cloud_publik'; 
        }
       
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }


    public function get_my_cloud($page=1,$q){
        $body = array(
            "is_aktif" => 1,
            "page" => $page,
            "search" => $q
        );

        $header = array(
            'Content-Type: application/json',
            'Authorization: JWT '. $this->session->userdata('token')
        );

        $url = $this->config->item('bisaUrl').'solution/get_customer_cloud_publik?'.http_build_query($body);
        $hasil = $this->conn->http_request_get($url, $header,$body );
        return $hasil;
    }

}

/* End of file ModelInfo.php */
