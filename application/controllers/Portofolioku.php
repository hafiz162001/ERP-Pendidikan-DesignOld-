<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Portofolioku extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ModelPorto', 'modelcus');
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
        
    }
    
    public function index()
    {
        $data = [];
        $this->load->view('Customers/portoku', $data, FALSE);
        
    }

    public function detail($id)
    {
        $data['id'] = $id;
        $show = $this->modelcus->get_history_detail($id);
        $data['data'] = $show['data'][0];
        // var_dump($data['data']);
        // die;
        if ($show['row_count'] == 0) {
            $data['url'] = "portofolioku";
            $data['caption'] = "Kembali ke halaman portofolio";
            $data['judul'] = "Data tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Customers/porto_detail', $data, FALSE);
        }
        
        
    }

    public function add()
    {
        $data['course'] = $this->modelcus->get_course();
        $data['kategori'] = $this->modelcus->get_category();
        $this->load->view('Customers/porto_add', $data, FALSE);
    }

    public function edit($id)
    {
        $data['id'] = $id;
        $data['course'] = $this->modelcus->get_course();
        $data['kategori'] = $this->modelcus->get_category();
        $show = $this->modelcus->get_history_detail($id);
        $data['data'] = $show['data'][0];
        if ($show['row_count'] == 0) {
            $data['url'] = "portofolioku";
            $data['caption'] = "Kembali ke halaman portofolio";
            $data['judul'] = "Data tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Customers/porto_edit', $data, FALSE);
        }  
    }
    
    public function showhistory(){
    	$page = $this->input->post("page");
		$q = $this->input->post("q");
		$jenis = $this->input->post("jenis");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_history($page,$q,$jenis);
        echo json_encode($get_data);
    }

    public function get_kategori(){
    	$page = $this->input->get("page");
		$id = $this->input->get("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_kategori();
        echo json_encode($get_data);
    }

    public function get_course(){
    	$page = $this->input->get("page");
		$id = $this->input->get("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->modelcus->get_kategori();
        echo json_encode($get_data);
    }


    public function save(){
    	$data = $this->input->post();

        if($data['carousel1'] == ""){
            unset($data['carousel1']);
        }

        if($data['carousel2'] == ""){
            unset($data['carousel2']);
        }

        if($data['carousel3'] == ""){
            unset($data['carousel3']);
        }
        
        $post_ = $this->modelcus->post_porto( $data);
        echo json_encode($post_);
    }

    public function update(){
    	$data = $this->input->post();

        if($data['carousel1'] == ""){
            unset($data['carousel1']);
        }

        if($data['carousel2'] == ""){
            unset($data['carousel2']);
        }

        if($data['carousel3'] == ""){
            unset($data['carousel3']);
        }

        if($data['foto_portofolio'] == ""){
            unset($data['foto_portofolio']);
        }

        $post_ = $this->modelcus->put_porto( $data);
        echo json_encode($post_);
    }
  

}

/* End of file My_course.php */


?>