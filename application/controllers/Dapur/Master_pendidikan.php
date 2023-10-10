<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Master_pendidikan extends CI_Controller {

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
        $data['title'] = "Master Pendidikan";
        $this->load->view('Admin/master_pendidikan_univ', $data, FALSE);
    }

    public function jenjang()
    {
        $data['title'] = "Master Jenjang Pendidikan";
        $this->load->view('Admin/master_pendidikan_jenjang', $data, FALSE);
    }

    public function prodi()
    {
        $data['title'] = "Master Program Studi";
        $this->load->view('Admin/master_pendidikan_prodi', $data, FALSE);
    }

    public function batch()
    {
        $data['title'] = "Master Batch Pendidikan";
        $this->load->view('Admin/master_pendidikan_batch', $data, FALSE);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$aktif = $this->input->post("aktif");
		$jenis = $this->input->post("jenisData");
		$q = $this->input->post("q");
		$id = $this->input->post("id");
		$idD = $this->input->post("id_degree");

        /*  1: universitas
            2: jejang
            3: prodi
            4: batch
        */

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

        if ($jenis == 1) {
            $url = "degree/get_dgr_university";
        
            if($id != "") {
                $body = array(
                    "id_dgr_university" => $id,
                );
                
            } else {
                $body = array(
                    "is_aktif" => $aktif,
                    "page" => $page,
                    "q" => $q,
                    "order_by" => "DESC"
                );
            }
        } elseif ($jenis == 2) {
            $url = "degree/get_dgr_jenjang_pendidikan";
        
            if($id != "") {
                $body = array(
                    "id_dgr_jenjang_pendidikan" => $id,
                );
                
            } else {
                $body = array(
                    "is_aktif" => $aktif,
                    "page" => $page,
                    "q" => $q,
                    "order_by" => "DESC"
                );
            }
        } elseif ($jenis == 3) {
            $url = "degree/get_dgr_prodi";
        
            if($id != "") {
                $body = array(
                    "id_dgr_program_studi" => $id,
                );
                
            } else {
                $body = array(
                    "is_aktif" => $aktif,
                    "page" => $page,
                    "q" => $q,
                    "order_by" => "DESC"
                );
            }
        } else {
            $url = "degree/get_degree_batch";
        
            if($id != "") {
                $body = array(
                    "id_dgr_degree_batch" => $id,
                    "id_dgr_degree" => $idD,
                );
                
            } else {
                $body = array(
                    "id_dgr_degree" => $idD,
                    "is_aktif" => $aktif,
                    "page" => $page,
                    "q" => $q,
                    "order_by" => "DESC"
                );
            }
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

    public function save()
    {
    	$data = $this->input->post();
        $jenis = $this->input->post('jenisData');
        /*  1: universitas
            2: jejang
            3: prodi
            4: batch
        */
        if ($jenis == 1) {
            if ($this->input->post('id_dgr_university') == "") {
                $url = "degree/insert_dgr_university";
                $save = $this->query->post_data($url, $data);
            } else {
                if ($this->input->post('foto_universitas') == "") {
                    unset($data["foto_universitas"]);
                }
                $url = "degree/update_dgr_university";
                $save = $this->query->put_data($url, $data);
            }
        } elseif ($jenis == 2) {
            if ($this->input->post('id_dgr_jenjang_pendidikan') == "") {
                $url = "degree/insert_dgr_jenjang_pendidikan";
                $save = $this->query->post_data($url, $data);
            } else {
                $url = "degree/update_dgr_jenjang_pendidikan";
                $save = $this->query->put_data($url, $data);
            }
        } elseif ($jenis == 3) {
            if ($this->input->post('id_dgr_program_studi') == "") {
                $url = "degree/insert_dgr_prodi";
                $save = $this->query->post_data($url, $data);
            } else {
                $url = "degree/update_dgr_prodi";
                $save = $this->query->put_data($url, $data);
            }
        } elseif ($jenis == 4) {
            if ($this->input->post('id_dgr_degree_batch') == "") {
                $url = "degree/insert_degree_batch";
                $save = $this->query->post_data($url, $data);
            } else {
                $url = "degree/update_degree_batch";
                $save = $this->query->put_data($url, $data);
            }
        }
        
        echo json_encode($save);
    }

    public function showdegree(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "q" => $q,
            "id" => $id,
        );

        $url = "degree/get_degree";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();
        array_push( $isi, array( 
            "id" => "", 
            "text" => "Semua Data" )
        );
        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_dgr_degree'], 
                "text" => $key['id_dgr_degree']. ' - '. $key['nama_degree'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }

    public function showdegreeonly(){
		$q = $this->input->get("q");
		$id = $this->input->get("id");

        $body = array(
            "q" => $q,
            "id" => $id,
        );

        $url = "degree/get_degree";
		$get_data = $this->query->get_data($url, $body);
        $isi = array();

        foreach ($get_data['data'] as $key) {
            array_push( $isi, array( 
                "id" => $key['id_dgr_degree'], 
                "text" => $key['id_dgr_degree']. ' - '. $key['nama_degree'] )
            );    
        }
        
        $data = array(
            "results" => $isi
        );
        echo json_encode($isi);
    }
    

    

}

/* End of file Course.php */
