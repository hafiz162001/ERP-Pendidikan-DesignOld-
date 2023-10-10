<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Degree extends CI_Controller {

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
        $data['title'] = "Pendidikan Jarak Jauh";
        $this->load->view('Admin/degree', $data, FALSE);
    }

    public function save()
    {
    	$data = $this->input->post();
        if ($this->input->post('id_dgr_degree') == "") {
            $url = "degree/insert_degree";
            $save = $this->query->post_data($url, $data);

        } else {
            
            $url = "degree/update_degree";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function delete()
    {
    	$data = $this->input->post();

        $url = "degree/update_degree";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$tipe = $this->input->post("jenis");
		$q = $this->input->post("q");
		$id = $this->input->post("id");


		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        $body = array(
            "is_aktif" => $aktif,
            "tipe_pendidikan" => $tipe,
            "page" => $page,
            "search" => $q,
            "mode" => 3,
            "order_by" => "id"
        );
        
        $url = "degree/get_degree";
		
        if($id != "") {
            $body = array(
                "id_dgr_degree" => $id,
                "mode" => 1,
            );
        }

		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }  

    public function jenjang(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "is_aktif" => 1,
            "mode" => 2,
            "q" => $q,
            "id_dgr_jenjang_pendidikan" => $id,
        );
        $url = "degree/get_dgr_jenjang_pendidikan";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_dgr_jenjang_pendidikan'], 
                "text" => $key['id_dgr_jenjang_pendidikan']. ' - '. $key['singkatan'] .'- '. $key['nama_jenjang_pendidikan'] )
            );    
        }
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }

    public function univ(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "is_aktif" => 1,
            "mode" => 2,
            "q" => $q,
            "id_dgr_university" => $id,
        );
        $url = "degree/get_dgr_university";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_dgr_university'], 
                "text" => $key['id_dgr_university']. ' - '. $key['nama_universitas'] )
            );    
        }
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }

    public function prodi(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "mode" => 2,
            "is_aktif" => 1,
            "q" => $q,
            "id_dgr_program_studi" => $id,
        );
        $url = "degree/get_dgr_prodi";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_dgr_program_studi'], 
                "text" => $key['id_dgr_program_studi']. ' - '. $key['nama_program_studi'] )
            );    
        }
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }

}

/* End of file Course.php */
