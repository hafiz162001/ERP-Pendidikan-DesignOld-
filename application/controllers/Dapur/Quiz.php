<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Quiz extends CI_Controller {

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
        $data['title'] = "Quiz";
        $this->load->view('Admin/quiz', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_quiz') == "") {
            $url = "course/add_quiz";
            $save = $this->query->post_data($url, $data);

        } else {
            
            $url = "course/update_quiz";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function delete()
    {
    	$data = $this->input->post();

        $url = "course/update_quiz";
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
            "q" => $q
        );
        
        $url = "course/get_quiz";
		
        if($id != "") {
            $body = array(
                "id" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }  

}

/* End of file Course.php */
