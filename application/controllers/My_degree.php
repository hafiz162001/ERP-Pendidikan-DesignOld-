<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class My_degree extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ModelDegree', 'deg');
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
    }
    
    public function index()
    {
        $data['nama'] = "";
        $this->load->view('Degree/list_degree_user', $data, FALSE);
    }

    public function kartu_ujian(){
        $data["test"] = "";
        $this->load->view('Degree/template_kartu_ujian', $data, FALSE);
    }

    public function detail_data($id){
        $data["test"] = "";
        $res = $this->deg->get_my_degree_byid_full($id);
        $data["data"] = $res['data'][0];
        $this->load->view('Degree/show_data_ujian', $data, FALSE);
    }

    public function show_data(){
    	$page = $this->input->post("page");
    	$jenis = $this->input->post("jenis");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->deg->get_my_degree($page,$q, null, $jenis);
        echo json_encode($get_data);
    }

    function download_kartu_ujian($filename){
        return $this->deg->image($filename);
    }

}


/* End of file My_degree.php */
