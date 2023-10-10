<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelDegree extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }

    public function get_degree($page,$q=null,$id=null, $univ=null, $prodi=null, $jenjang=null, $tipe = 1){
        $body = array(
			"page" => $page,
			"search" => $q,
            "is_aktif" => 1,
            "id_dgr_degree" => $id,
            "id_dgr_university" => $univ,
            "id_dgr_jenjang_pendidikan" => $jenjang,
            "id_dgr_program_studi" => $prodi,
            "order_by" => "DESC",
            "tipe_pendidikan" => $tipe
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_degree?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_jenjang(){
        $body = array(
			"mode" => 2,
            "is_aktif" => 1,
            "order_by" => "DESC"
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_dgr_jenjang_pendidikan?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_universitas(){
        $body = array(
			"mode" => 2,
            "is_aktif" => 1,
            "order_by" => "DESC"
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_dgr_university?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_prodi(){
        $body = array(
			"mode" => 2,
            "is_aktif" => 1,
            "order_by" => "ASC"
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_dgr_prodi?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function post_bayar($batch, $id,$nama_ijazah, $jenis_identitas, $nomor_identitas, $kewarganegaraan, $service_code=null, $kode_unik=null, $is_free, $coupon=null){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        // $id,$nama_ijazah, $jenis_identitas, $nomor_identitas, $kewarganegaraan, $service_code, $kode_unik, $is_free, $coupon
        if ($coupon == null) {
            $body_data = array(
                "id_dgr_degree"=>$id,
                "id_dgr_degree_batch"=>$batch,
                "nama_ijazah"=> $nama_ijazah,
                "jenis_identitas"=> $jenis_identitas,
                "nomor_identitas"=> $nomor_identitas,
                "kewarganegaraan"=> $kewarganegaraan,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik
            );
        } else {
            $body_data = array(
                "id_dgr_degree"=>$id,
                "id_dgr_degree_batch"=>$batch,
                "nama_ijazah"=> $nama_ijazah,
                "jenis_identitas"=> $jenis_identitas,
                "nomor_identitas"=> $nomor_identitas,
                "kewarganegaraan"=> $kewarganegaraan,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik,
                "coupon"=> $coupon
            );  
        }
        
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'degree/insert_customer_degree';
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }

    public function get_my_degree($page,$q=null,$id=null, $jenis=1){
        $body = array(
			"page" => $page,
			"search" => $q,
            "is_aktif" => 1,
            "id_dgr_customer_degree" => $id,
            "mode" => 2,
            "order_by" => "DESC",
            "tipe_pendidikan" => $jenis
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_customer_degree?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_batch($id){
        $body = array(
			"id_dgr_degree" => $id,
            "is_aktif" =>1
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_degree_batch?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_identitas(){
        $body = array(
            "is_aktif" =>1
            );
        $header = array(
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_jenis_identitas?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function get_my_degree_byid_full($id){
        $body = array(
			"page" => 1,
            "is_aktif" => 1,
            "id_dgr_customer_degree" => $id,
            "mode" => 1
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_customer_degree?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        return $hasil;
    }

    public function image($filename){
        $url =  $this->config->item('bisaUrl').'degree/media/kartu_ujian_peserta/'.$filename;
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

/* End of file ModelName.php */
 
