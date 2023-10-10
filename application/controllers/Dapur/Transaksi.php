<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

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
        $data['title'] = "Transaksi Course";
        $this->load->view('Admin/course-trx', $data, FALSE);
    }

    public function certificate()
    {
        $data['title'] = "Transaksi Certificate";
        $this->load->view('Admin/cert-trx', $data, FALSE);
    }

    public function degree()
    {
        $data['title'] = "Transaksi Pendidikan";
        $this->load->view('Admin/degree-trx', $data, FALSE);
    }

    public function solusi()
    {
        $data['title'] = "Transaksi Solusi";
        $this->load->view('Admin/solusi-trx', $data, FALSE);
    }

    public function showdata(){
    	$page = $this->input->post("page");
		$status = $this->input->post("status");
		$ojt = $this->input->post("ojt");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}

		$url = "transaction/get_transaction_course";
        
        if($id != "") {
            $body = array(
                "id_transaction" => $id,
            );
             
        } else {
            $body = array(
                "status" => $status,
                "is_ojt" => $ojt,
                "page" => $page,
                "q" => $q,
                "order_by" => "DESC"
            );
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }
    
    public function update()
    {
    	$data = $this->input->post();

        // jenis 
        // 1 Course Academy
        if($this->input->post('jenis_transaksi') == 1){
            $url = "transaction/update_transaction";
        } elseif ($this->input->post('jenis_transaksi') == 2) {
            $url = "solution/update_data_transaction_cloud_publik";
        } elseif ($this->input->post('jenis_transaksi') == 3) {
            $url = "certification/update_data_certification_transaction";
        } elseif ($this->input->post('jenis_transaksi') == 4) {
            $url = "degree/update_data_dgr_transaction";
        }
     
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function ubahdatasolusi()
    {
    	$data = $this->input->post();
        $url = "solution/update_customer_cloud_publik";
     
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function show_cus_cloud(){
		$id = $this->input->post("id");
        $url = "solution/get_customer_cloud_publik";

        $body = array(
            "id_customer_cloud_publik" => $id
        );
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }
    public function showdata_cert(){
    	$page = $this->input->post("page");
		$status = $this->input->post("status");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $url = "certification/get_certification_transaction";

        if($id != "") {
            $body = array(
                "id_certification_transaction" => $id
            );

        } else {
            $body = array(
                "status" => $status,
                "page" => $page,
                "q" => $q,
                "order_by" => "DESC"
            );
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

    public function showdata_degree(){
    	$page = $this->input->post("page");
		$status = $this->input->post("status");
		$jenis = $this->input->post("tipe_pendidikan");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $url = "degree/get_dgr_transaction";

        if($id != "") {
            $body = array(
                "id_dgr_transaction_degree" => $id
            );

        } else {
            $body = array(
                "page" => $page,
                "q" => $q,
                "status" => $status,
                "tipe_pendidikan" => $jenis,
                "order_by" => "DESC"
            );
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

    public function showdata_solusi(){
    	$page = $this->input->post("page");
		$status = $this->input->post("status");
		$q = $this->input->post("q");
		$id = $this->input->post("id");

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
        
        $url = "solution/get_transaction_cloud_publik";

        if($id != "") {
            $body = array(
                "id_transaction_cloud_publik" => $id
            );

        } else {
            $body = array(
                "page" => $page,
                "q" => $q,
                "order_by" => "DESC"
            );
        }
        
		$get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

}

/* End of file Course.php */
