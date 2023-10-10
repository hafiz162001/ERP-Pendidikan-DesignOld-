<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Discuss extends CI_Controller {

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
        $data['title'] = "Discussion";
        $this->load->view('Admin/discuss', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_discussion') == "") {
            $url = "course/add_discuss";
            $save = $this->query->post_data($url, $data);

        } else {
            
            $url = "course/update_discussion";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function delete()
    {
    	$data = $this->input->post();

        $url = "course/update_discussion";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$q = $this->input->post("q");
		$id = $this->input->post("id");


		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        $body = array(
            "is_aktif" => $aktif,
            "page" => $page,
            "q" => $q,
            "order_by" => "id"
        );
        
        $url = "course/get_discuss";
		
        if($id != "") {
            $body = array(
                "id" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }  

    public function showteacher(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "is_aktif" => 1,
            "q" => $q,
            "id_teacher_course" => $id,
        );
        $url = "course/get_teacher_course?";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_teacher_course'], 
                "text" => $key['id_teacher_course']. ' - '. $key['name'] .'- '. $key['name_course'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );

        
        
        echo json_encode($isi);
    }

}

/* End of file Course.php */
