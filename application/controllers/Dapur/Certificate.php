<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate extends CI_Controller {

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
        $data['title'] = "Certificate";
        $this->load->view('Admin/sertifikat', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_certification') == "") {
            $url = "certification/insert_certification";
            $save = $this->query->post_data($url, $data);

        } else {
            if ($this->input->post('foto') == "") {
                unset($data["foto"]);
            }

            if ($this->input->post('foto_sertifikat') == "") {
                unset($data["foto_sertifikat"]);
            }

            // var_dump($data);
            // die();

            $url = "certification/update_certification";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function course_flag()
    {
    	$data = $this->input->post();

        $url = "certification/update_certification";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$q = $this->input->post("q");
		$id = $this->input->post("id");
		$jenis = $this->input->post("jenis");


		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $body = array(
            "is_aktif" => $aktif,
            "page" => $page,
            "id_certification" => $id,
            "tipe" => $jenis,
            "search" => $q
        );
        
        $url = "certification/get_certification_admin";
		
        if($id != "") {
            $body = array(
                "id_certification" => $id
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    } 

    public function showkategori(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");
        $body = array(
            "is_aktif" => 1,
            "id_certification_category" => $id,
            "search" => $q
        );
        $url = "certification/get_certification_category";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_certification_category'], 
                "text" => $key['id_certification_category'].' - '. $key['nama'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        
        echo json_encode($isi);
    } 

    public function showpartner(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "is_aktif" => 1,
            "search" => $q,
            "id_certification_partner " => $id,
        );
        $url = "certification/get_certification_partner_admin";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_certification_partner'], 
                "text" => $key['id_certification_partner'].' - '.$key['nama'] )
            );    
        }
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }
    
    



}

/* End of file Course.php */
