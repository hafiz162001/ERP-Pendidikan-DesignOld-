<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Transaction_history extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelTrx', 'trx');
        $this->load->model('ModelCourse', 'course');
        
        if($this->session->userdata('token') == ""){
			redirect(base_url("login_customer"));
		}
        //Do your magic here
    }
    
    public function index()
    {
        $data['metode_bayar'] = $this->course->GetMetodeBayar();
        $data['nama'] =  $this->session->userdata('nama');
        $this->load->view('trx_history', $data, FALSE);
    }

    public function get_token()
    {
        if($this->session->userdata('token') == ""){
			redirect(base_url("transaction_history"));
		}

        $data['csrf']  = array(
                'name' => $this->security->get_csrf_token_name(),
                'hash' => $this->security->get_csrf_hash()
        );

        echo json_encode($data);      
    }

    public function buktitf(){
    	$img = $this->input->post("gambar");
    	$id = $this->input->post("id_trx");
		$pushData = $this->trx->put_bayar($id, $img);
        if ($pushData['status_code'] == 400) {
			http_response_code(400);
            echo json_encode(array('status' => 'gagal', 'status_code' => 400));
        } else {
			http_response_code(200);
            echo json_encode(array('status' => 'berhasil', 'status_code' => 200));
        }
    }

    public function bayarulang(){
    	$id_trx = $this->input->post("id_trx");
    	$service_code = $this->input->post("service_code");
		$pushData = $this->trx->put_bayar_ulang($id_trx, $service_code);
        if ($pushData['status_code'] == 200) {
			http_response_code(200);
            if(isset($pushData['data']['redirect_url'])) {
                $url = $pushData['data']['redirect_url'];
            } else {
                $url = base_url('').'transaction_history';
            }

            if(isset($pushData['data']['redirect_data'])){
                $data_post = $pushData['data']['redirect_data'];
            } else {
                $data_post = null;

            }
            $data = array(
                "redirect_url" => $url,
                "redirect_data" => $data_post
            );

            echo json_encode(array('status' => 'berhasil', 'status_code' => 200, 'data' => $data));      
        } else {
			http_response_code(400);
            echo json_encode(array('status' => 'gagal', 'status_code' => 400, 'msg_err' => $pushData));
        }
    }

    public function bayarulangv2(){
    	$id_trx = $this->input->post("id_trx");
    	$jenis = $this->input->post("jenis");
    	$invoice_number = $this->input->post("invoice_number");
    	$service_code = $this->input->post("service_code");
		$pushData = $this->trx->put_bayar_ulang_v2($id_trx, $service_code, $jenis, $invoice_number);
        if ($pushData['status_code'] == 200) {
			http_response_code(200);
            if(isset($pushData['data']['redirect_url'])) {
                $url = $pushData['data']['redirect_url'];
            } else {
                $url = base_url('').'transaction_history';
            }

            if(isset($pushData['data']['redirect_data'])){
                $data_post = $pushData['data']['redirect_data'];
            } else {
                $data_post = null;

            }
            $data = array(
                "redirect_url" => $url,
                "redirect_data" => $data_post
            );

            echo json_encode(array('status' => 'berhasil', 'status_code' => 200, 'data' => $data));      
        } else {
			http_response_code(400);
            echo json_encode(array('status' => 'gagal', 'status_code' => 400, 'msg_err' => $pushData));
        }
    }
    

    public function showhistory(){
    	$page = $this->input->post("page");
    	$jenis = $this->input->post("jenis");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));
		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		if ($jenis == 1) {
            $get_data = $this->trx->get_history($page,$q);
        } elseif($jenis == 2) {
            $get_data = $this->trx->get_history_ujian($page,$q);
        } elseif($jenis == 3){
            $get_data = $this->trx->get_history_degree($page,$q);
        } elseif($jenis ==4 ){
            $get_data = $this->trx->get_history_learncation($page,$q);
        } elseif($jenis ==5 ){
            $get_data = $this->trx->get_history_educloud($page,$q);
        } else {
            $get_data = $this->trx->get_history_learning_path($page, $q);
        }
		
    }

}

/* End of file Transaction_history.php */
