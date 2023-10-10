<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cert extends CI_Model {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }

    public function get_data_cert($page,$q, $tipe=1, $kategori=null, $partner=null){
        $body = array(
			"page" => $page,
			"search" => $q,
            "is_aktif" => 1,
            "tipe"=> $tipe,
            "id_certification_partner" => $partner,
            "id_certification_category" => $kategori 
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/get_certification?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }

    public function get_data_cert_by_id($id){
        $body = array(
			"id_certification" => $id
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/get_certification?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }

    public function get_cert_kategori(){
        $body = array(
			"is_aktif" => 1
            );
        $header = array(
            'Content-Type: application/json',
        );
            
        $url =  $this->config->item('bisaUrl').'certification/get_certification_category?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }

    public function get_cert_partner(){
        $body = array(
			"is_aktif" => 1
            );
        $header = array(
            'Content-Type: application/json',
        );
            
        $url =  $this->config->item('bisaUrl').'certification/get_certification_partner?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }

    public function get_course($page,$id){
        $body = array(
			"page" => $page,
			"id_certification" => $id,
            "is_aktif" => 1,
            "is_limit" => 2
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/get_cert_req_course?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }

    public function get_course_pass($page,$id){
        $body = array(
			"page" => $page,
			"id_certification" => $id,
            "is_aktif" => 1,
            "is_limit" => 2
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/check_my_req_course?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }

    public function get_faq($page,$id){
        $body = array(
			"page" => $page,
			"id_certification" => $id,
            "is_aktif" => 1
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/get_certification_faq?'.http_build_query($body); 
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
                "id_certification"=>$id,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik
            );  

            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'certification/insert_customer_certification'; 
        } else {
            if ($coupon == null) {
                $body_data = array(
                    "id_certification"=>$id
                ); 
            } else {
                $body_data = array(
                    "id_certification"=>$id,
                    "kupon" => $coupon
                ); 
            }
             
            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'certification/insert_customer_certification'; 
        }
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }

    // Customers Certification
    public function show_my_cert($page, $q, $id=null, $tipe=null){
        $body = array(
			"page" => $page,
            "search" => $q,
            "tipe"=> $tipe,
            "is_aktif" => 1
            );
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        if ($id != null) {
            $body = array(
                "id_customer_certification"=>$id
            ); 
        }  
            
        $url =  $this->config->item('bisaUrl').'certification/get_customer_certification?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;   
    }

    // Customers Certification
    public function show_my_section($page, $id, $idSec=null){
        $body = array(
			"page" => $page,
            "id_customer_certification" => $id
            );
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        if ($idSec != null) {
            $body = array(
                "id_customer_certification" => $id,
                "id_certification_exam"=>$idSec
            ); 
        }  

        $url =  $this->config->item('bisaUrl').'certification/get_customer_certification_exam?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;   
    }

    // Customers Certification
    public function get_soal($page, $id){
        $body = array(
			"page" => $page,
            "id_certification_exam" => $id,
            "is_aktif" => 1
            );
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $url =  $this->config->item('bisaUrl').'certification/get_cert_exam_quiz?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;   
    }

    public function post_ujian($id,$answer){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_customer_certification_exam"=>$id,
            "mode" => 2,
            "jawaban" => $answer
        );  
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'certification/update_customer_certification_exam'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

    public function start_ujian($id){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_customer_certification_exam"=>$id,
            "mode" => 1
        );  
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'certification/update_customer_certification_exam'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

    public function end_ujian($id){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_customer_certification"=>$id,
        );  
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'certification/update_customer_certification'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

    public function is_enroll_cert($id){
        $body = array(
			"id_certification" => $id
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/check_last_enroll?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;    
    }
    
    public function image($filename){
        $url =  $this->config->item('bisaUrl').'certification/media/foto_sertifikat_customer/'.$filename;
        header("Content-Description: File Transfer"); 
        header("Content-Type: application/octet-stream"); 
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.11 (KHTML, like Gecko) Chrome/23.0.1271.1 Safari/537.11');
        $res = curl_exec($ch);
        $rescode = curl_getinfo($ch, CURLINFO_HTTP_CODE); 
        curl_close($ch) ;
        echo $res;
        exit(); 
    }

}

/* End of file Model_cert.php */
