<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ModelTrx extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }
    
    public function get_history($page,$q){
        $body = array(
			"page" => $page,
			"q" => $q,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'transaction/get_transaction_course?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

    public function get_history_degree($page,$q){
        $body = array(
			"page" => $page,
			"search" => $q,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'degree/get_dgr_transaction?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

    public function get_history_ujian($page,$q){
        $body = array(
			"page" => $page,
			"search" => $q,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'certification/get_certification_transaction?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

    public function get_history_educloud($page,$q){
        $body = array(
			"page" => $page,
			"search" => $q,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'solution/get_transaction_cloud_publik?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

    public function get_history_learning_path($page,$q){
        $body = array(
			"page" => $page,
			"q" => $q,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'transaction/get_transaction_learning_path?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

    public function get_history_learncation($page,$q){
        $body = array(
			"page" => $page,
			"search" => $q,
            "order_by" => "DESC"
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'learncation/get_lrnc_transaction?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        echo json_encode($data);
    }

    public function post_bayar($id_course,$service_code=null,$kode_unik=null, $is_free, $coupon=null){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        if ($is_free=='false') {
            $body_data = array(
                "id_course"=>$id_course,
                "service_code" => $service_code,
                "kode_unik_sprint"=>$kode_unik
            );  

            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'academy/insert_customer_course_paid'; 
        } else {
            if ($coupon == null) {
                $body_data = array(
                    "id_course"=>$id_course
                ); 
            } else {
                $body_data = array(
                    "id_course"=>$id_course,
                    "coupon" => $coupon
                ); 
            }
             
            $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
            $url =  $this->config->item('bisaUrl').'academy/insert_customer_course'; 
        }
       
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }

    public function put_bayar($id_transaction,$photo){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_transaction"=>$id_transaction,
            "photo" => $photo
        );  
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'transaction/update_transaction'; 
    
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }
    

    public function put_bayar_ulang($id_transaction,$service_code){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_transaction"=>$id_transaction,
            "service_code" => $service_code
        );  
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'transaction/update_transaction_sprint'; 
    
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;

        // print_r($hasil);
        // print_r($body);
        // die;
    }

    public function put_bayar_ulang_v2($id_transaction,$service_code, $jenis, $invoice=null){
        // jenis 1 = course
        // jenis 2 = certification
        // jenis 3 = pjj
        // jenis 4 = learncation
        // jenis 5 = educloud
        // jenis 6 = learning path
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_transaction"=>$id_transaction,
            "service_code" => $service_code,
            "invoice_number" => $invoice
        ); 

        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        if ($jenis == 1) {
            
            $body_data = array(
                "id_transaction"=>$id_transaction,
                "service_code" => $service_code
            );

            $url =  $this->config->item('bisaUrl').'transaction/update_transaction_sprint'; 
        } elseif ($jenis == 2) {
            $url =  $this->config->item('bisaUrl').'certification/update_certification_transaction'; 
        } elseif ($jenis == 3){
            $url =  $this->config->item('bisaUrl').'degree/update_dgr_transaction'; 
        } elseif ($jenis == 4){
            $url =  $this->config->item('bisaUrl').'learncation/update_lrnc_transaction'; 
        } else {
            $url =  $this->config->item('bisaUrl').'solution/update_transaction_cloud_publik'; 
        }
    
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

}

/* End of file ModelTrx.php */

?>
