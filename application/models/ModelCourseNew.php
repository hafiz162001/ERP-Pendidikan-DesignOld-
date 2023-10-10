<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCourseNew extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }

    public function get_data($page,$tipe,$q=null,$order="baru"){
        // 1 ; Gratis
        // 3 ; bayar
        // 4 ; Live academy
        // 5 ; OJT
        // 2 ; Learning path

        if($tipe == 1){
            $body = array(
                "page" => $page,
                "is_free" => 1,
                "is_aktif" => 1,
                "order_by" => "DESC",
                "is_ojt" => 2,
                "q" => $q
            ); 
             
        } elseif ($tipe==3) {
            $body = array(
                "page" => $page,
                "is_free" => 0,
                "order_by" => "DESC",
                "is_aktif" => 1,
                "is_ojt" => 2,
                "q" => $q
            ); 
            

        } elseif ($tipe==4) {
            $body = array(
                "page" => $page,
                "order_by" => "DESC",
                "is_aktif" => 1,
                "is_ojt" => 3,
                "q" => $q
            ); 
           
        } else {
            $body = array(
                "page" => $page,
                "is_free" => 0,
                "is_ojt" => 1,
                "is_aktif" => 1,
                "order_by" => "DESC",
                "q" => $q
            ); 
            
        }

        if($order == "populer") {
            $body2 = array("order_by_number_of_student" => "desc");
            $body = array_merge($body, $body2);
        }

        $url =  $this->config->item('bisaUrl').'course/get_course?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

    public function get_data_porto($page,$id_course=null,$q=null,$order="id_desc", $id_porto=null, $kategori=null, $mode=1){
        
        $body = array(
            "page" => $page,
            "mode" => $mode,
            "id_course" => $id_course,
            "is_aktif" => 1,
            "order_by" => $order,
            "search" => $q,
            "id_portofolio" => $id_porto,
            "id_kategori_portofolio" => $kategori
        );          

        $url =  $this->config->item('bisaUrl').'portofolio/get_portofolio_landing?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

    public function get_event(){
        
        $body = array(
            "is_aktif" => 1
        );          

        $url =  $this->config->item('bisaUrl').'event/get_event_tampil_partner_kampus_merdeka?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

    public function get_data_porto_related($id_course){
        
        $body = array(
            "page" => 1,
            "mode" => 2,
            "id_course" => $id_course,
            "is_aktif" => 1,
            "limit" => 3,
            "order_by" => "like_desc",
        );          

        $url =  $this->config->item('bisaUrl').'portofolio/get_portofolio_landing?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

    public function like($body_data){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'portofolio/like_unlike_portofolio'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

    public function get_course_porto(){
        
        $body = array(
            "is_aktif" => 1,
        );          

        $url =  $this->config->item('bisaUrl').'portofolio/get_list_course_for_filtering_landing_portofolio?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

    public function get_like($id){
        
        $body = array(
            "id_portofolio" => $id,
        );          

        $url =  $this->config->item('bisaUrl').'portofolio/cek_is_like_portofolio?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
            'Authorization: JWT '. $this->session->userdata('token'),
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

    public function get_kategori(){
        
        $body = array(
            "is_no_limit" => 1,
        );          

        $url =  $this->config->item('bisaUrl').'portofolio/get_kategori_portofolio?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json'
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }

        // portofolio/cek_is_like_portofolio?id_portofolio=1 


    public function get_data_porto_detail($id_porto){
        
        $body = array(
            "id_portofolio" => $id_porto
        );          

        $url =  $this->config->item('bisaUrl').'portofolio/get_portofolio_landing?'.http_build_query($body); 
        $header = array(
            'Content-Type: application/json',
        );
            
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
    }
    

}

/* End of file ModelCourseNew.php */

