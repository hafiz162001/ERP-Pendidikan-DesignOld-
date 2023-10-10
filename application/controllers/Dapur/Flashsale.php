<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Flashsale extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('token_admin') == ""){
			redirect(base_url("Dapur/login"));
		}
        $this->load->model('Admin/ModelQuery', 'query');
    }

    public function index()
    {
        $data['title'] = "Flash Sale";
        $this->load->view('Admin/flashsale', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        $url = "flashsale/insert_flashsale";
        $save = $this->query->post_data($url, $data);

        echo json_encode($save);
    }

    public function delete()
    {
    	$data = $this->input->post();

        $url = "course/update_syllabus";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$course = $this->input->post("course");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        $body = array(
            "status" => $aktif,
            "id_course" => $course,
            "page" => $page,
            "order_by" => "asc",
        );
        
        $url = "flashsale/get_flashsale";
		
        if($id != "") {
            $body = array(
                "id" => $id,
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }  

    public function showcourse(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "q" => $q,
            "id" => $id,
            "is_free" => 0,
        );

        $url = "course/get_course";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_course'], 
                "text" => $key['id_course']. ' - '. $key['name'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }

    

}

/* End of file Course.php */
