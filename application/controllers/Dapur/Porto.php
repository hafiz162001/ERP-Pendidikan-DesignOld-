<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Porto extends CI_Controller {

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
        $data['title'] = "Portofolio";
        $this->load->view('Admin/porto', $data, FALSE);
    }

    public function detail($id)
    {
        $data['title'] = "Portofolio";
        $url = "portofolio/get_customer_portofolio";
        $body = array(
            "id_portofolio" => $id
        );
		$get_data = $this->query->get_data($url, $body);
        $data['data'] = $get_data['data'][0];
        $this->load->view('Admin/porto_detail', $data, FALSE);
    }

    public function course_flag()
    {
    	$data = $this->input->post();

        $url = "portofolio/update_portofolio";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("status");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

        $ojt = "";
        $free = "";

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        $body = array(
            "page" => $page,
            "mode" => 2,
            "status_portofolio" => $aktif,
            "q" => $q
        );
        
        $url = "portofolio/get_customer_portofolio";
		
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
