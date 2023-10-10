<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class ModelCusCourse extends CI_Model {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
    }
    
    public function get_history($page,$tipe,$id=null,$tipe_id_filter=1,$q=null){
        // 1 ; Gratis
        // 3 ; bayar
        // 4 ; Live academy
        // 5 ; OJT
        // 2 ; Learning path
        // angka lainnya berarti yang dipake filternya hanya id 

        // id_filter buat switch id apa yang dipake untuk filtering.. 
        // 1 = id_customer_course
        // 2 = by id_course

        $idSelector = ($tipe_id_filter==1) ? "id_customer_course" : "id_course" ;
        if($tipe == 1){
            $body = array(
                "page" => $page,
                "is_free" => 0,
                "order_by" => "DESC",
                "is_ojt" => 2,
                "q" => $q,
                $idSelector => $id
            ); 
            $url =  $this->config->item('bisaUrl').'academy/get_customer_course?'.http_build_query($body); 
        } elseif ($tipe==2) {
            $body = array(
                "page" => $page,
                "is_free" => 1,
                "order_by" => "DESC",
                "q" => $q,
                $idSelector => $id
            ); 
            $url =  $this->config->item('bisaUrl').'customer_learning_path/get_customer_learning_path?'.http_build_query($body); 

        } elseif ($tipe==3) {
            $body = array(
                "page" => $page,
                "is_free" => 1,
                "order_by" => "DESC",
                "is_ojt" => 2,
                "q" => $q,
                $idSelector => $id
            ); 
            $url =  $this->config->item('bisaUrl').'academy/get_customer_course?'.http_build_query($body); 

        } elseif ($tipe==4) {
            $body = array(
                "page" => $page,
                "order_by" => "DESC",
                "is_ojt" => 3,
                "q" => $q,
                $idSelector => $id
            ); 
            $url =  $this->config->item('bisaUrl').'academy/get_customer_course?'.http_build_query($body); 

        } elseif ($tipe==5) {
            $body = array(
                "page" => $page,
                "is_free" => 1,
                "is_ojt" => 1,
                "order_by" => "DESC",
                "q" => $q,
                $idSelector => $id
            ); 
            $url =  $this->config->item('bisaUrl').'academy/get_customer_course?'.http_build_query($body); 
        } else {
            $body = array(
                "page" => $page,
                $idSelector => $id
            ); 
            $url =  $this->config->item('bisaUrl').'academy/get_customer_course?'.http_build_query($body); 
        }
 
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
    
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function get_history_path($page,$tipe,$id=null,$tipe_id_filter=1,$q=null){

        $body = array(
            "page" => $page,
            "q" => $q,
            "id_customer_learning_path" => $id
        ); 
        $url =  $this->config->item('bisaUrl').'customer_learning_path/get_customer_learning_path?'.http_build_query($body); 
        
 
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
    
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }


    public function get_history_path_course($page,$id=null,$q=null){

        $body = array(
            "page" => $page,
            "q" => $q,
            "id_customer_learning_path" => $id
        ); 
        $url =  $this->config->item('bisaUrl').'academy/get_customer_course?'.http_build_query($body); 
        
 
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
            
    
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function get_silabus($id_course, $id_sylabus_cus=null){
        $body = array(
			"id_customer_course" => $id_course,
            "id_customer_syllabus" =>$id_sylabus_cus
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'academy/get_customer_syllabus_all?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);

        return $hasil;
    }

    public function get_cus_quiz($page, $id){
        $body = array(
			"is_start" => 1,
            "id_customer_syllabus" => $id,
            "page" => $page,
            "is_aktif" => 1
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'course/get_syllabus_quiz?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        return $data;
        // echo json_encode($data);
    }

    public function get_silabus_cus($id){
        $body = array(
			"id" => $id
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'course/get_syllabus?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function get_diskusi($page, $id){
        $body = array(
			"id_course" => $id,
            "page" => $page,
            "is_aktif" => 1
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'course/get_discuss?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function get_testi($id){
        $body = array(
			"id_customer_course" => $id,
            "is_aktif" => 1
            );
        $header = array(
                'Authorization: JWT '. $this->session->userdata('token'),
                'Content-Type: application/json',
            );
            
        $url =  $this->config->item('bisaUrl').'academy/get_customer_testimoni_and_rating?'.http_build_query($body); 
        $hasil = $this->conn->http_request_get($url, $header, $body);
        $data = $hasil;
        // echo json_encode($data);
        return $data;
    }

    public function post_data_quiz($id_course,$answer){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );

        $body_data = array(
            "id_customer_syllabus"=>$id_course,
            "answers" => $answer
        );  
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'academy/insert_customer_syllabus_quiz'; 
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }

    public function post_data_testi($body){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );
  
        $body = json_encode($body);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'academy/insert_testimoni_and_rating'; 
        $hasil = $this->conn->http_request_post($url, $header, $body);
        return $hasil;
    }

    public function put_data_ta($id_=null, $task_description=null, $file_name=null, $task_final=null,$start=null){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );


        if($start ==null ){
            $body_data = array(
                "id_customer_course"=>$id_,
                "task_description" => $task_description,
                "file_name" => $file_name,
                "task_final" => $task_final
            );
        } else {
            $body_data = array(
                "start_task"=> 1, 
                "id_customer_course"=>$id_ 
            ); 
        }


        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'academy/update_customer_course'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

    public function put_data_silabus($id_=null, $task_description=null, $file_name=null, $task_final=null,$start=null){
        $header = array(
            'Authorization: JWT '. $this->session->userdata('token'),
            'Content-Type: application/json',
        );


        if($start ==null ){
            $body_data = array(
                "id_customer_syllabus"=>$id_,
                "task_description" => $task_description,
                "file_name" => $file_name,
                "task_file" => $task_final
            );
        } else {
            $body_data = array(
                "start_time_task"=> 1, 
                "id_customer_syllabus"=>$id_ 
            ); 
        }

        // var_dump($body_data);
        // die;
        $body = json_encode($body_data);  #ENCODE ARRAY DIATAS KE BENTUK JSON 
        $url =  $this->config->item('bisaUrl').'academy/update_customer_syllabus'; 
        $hasil = $this->conn->http_request_put($url, $header, $body);
        return $hasil;
    }

    

}

/* End of file ModelCusCourse.php */

?>
