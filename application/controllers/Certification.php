<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Certification extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('model_cert', 'cert');
        $this->load->model('ModelCourse', 'course');
        
    }
    
    public function index()
    {
        $data['tipe'] = 1;
        $data["title"] = "Sertifikasi International";
        $data["tagline"] = "Raih Sertifikasi International dan standard kompetensi international dari vendor teknologi dunia bidang Desain, UI/UX dan Produk. Ikuti Pelatihan Singkat dan Sertifikasi-nya melalui BISA Design Academy.";
        $data['kategori'] = $this->cert->get_cert_kategori();
        $data['partner'] = $this->cert->get_cert_partner();
        $this->load->view('Certification/landing', $data, FALSE);
        
    }

    public function industry()
    {
        $data['tipe'] = 2;
        $data["title"] = "Sertifikasi Nasional";
        $data["tagline"] = "Raih Sertifikasi Nasional berstandard SKKNI dari BNSP bidang Desain, UI/UX dan Produk. Ikuti Pelatihan Singkat dan Sertifikasi-nya melalui BISA Design Academy.";
        $data['kategori'] = $this->cert->get_cert_kategori();
        $data['partner'] = $this->cert->get_cert_partner();
        $this->load->view('Certification/landing', $data, FALSE);
        
    }

    public function campuss()
    {
        $data['tipe'] = 3;
        $data["title"] = "University Certificate";
        $data['partner'] = $this->cert->get_cert_partner();
        $data['kategori'] = $this->cert->get_cert_kategori();
        $data["tagline"] = "Ikuti Professional Certificate untuk membantu kamu meningkatkan karir kamu sebagai Professional pada bidang Data Science, IT, dan Kecerdasan Artifisial. Enroll sekarang dan jadilah professional pada bidangnya";
        $this->load->view('Certification/landing', $data, FALSE);
        
    }

    public function detail($id){
        $data['id'] = $id;
        $data['faq'] = $this->cert->get_faq(1,$id);
        $data['cert'] = $this->cert->get_data_cert_by_id($id);
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        if($this->session->userdata('token') == ""){
            $data['course'] = $this->cert->get_course(1,$id);
            $data['metode_bayar'] = "";
            $data['kode_unik'] = 0;
            $data['is_enrolled'] = 0;
        } else {
            $data['course'] = $this->cert->get_course_pass(1,$id);
            $data['metode_bayar'] = $data['metode_bayar'] = $this->course->GetMetodeBayar();
            $data['is_enrolled'] = $this->cert->is_enroll_cert($id);
            
            
            if ($data['cert']['data'][0]['is_diskon'] == "1") {
                $hargaTTl = $data['cert']['data'][0]['harga_diskon'];
            } else {
                $hargaTTl = $data['cert']['data'][0]['harga'];
            }
                    
            if($hargaTTl <= 0){
                $data['kode_unik'] = 0;
            } else {
                $data['kode_unik'] = $this->course->GetKodeUnik($hargaTTl);
                $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
            } 

        }
        $data['title'] = "Detail Certification: ";
        if ($data['cert']['row_count'] == 0) {
            $data['url'] = "certification";
            $data['caption'] = "Kembali ke halaman sebelumnya";
            $data['judul'] = "Halaman tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('Certification/detail_certification', $data, FALSE);
        }
        
    }

    public function show_data(){
    	$page = $this->input->post("page");
		$tipe = $this->input->post("tipe");
		$partner = $this->input->post("partner");
		$kategori = $this->input->post("kategori");
		$q = $this->input->post("q");

        $partner = ($partner == "") ? null : $partner;
        $kategori = ($kategori == "") ? null : $kategori;

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->cert->get_data_cert($page,$q,$tipe, $kategori, $partner);
        echo json_encode($get_data);
    }


    public function bayar(){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
		$id = $this->input->post("id");
        $is_free = $this->input->post("is_free");
        $pakeKupon = $this->input->post("pakeKupon");
        
        if ($pakeKupon == 'true') {
            $coupon = $this->input->post("coupon");
        } else {
            $coupon = null;
        }
        

        if($is_free == "true"){
            $service_code = null;
            $kode_unik = null;
        } else {
            $service_code = $this->input->post("service_code");
            $kode_unik = $this->input->post("kode_unik");
        }

		$pushData = $this->cert->post_bayar($id, $service_code, $kode_unik, $is_free, $coupon);

        if($pushData['status_code']=="200"){
            $status = "Sukses";
            $data_post = null;
            $url = base_url('').'transaction_history';
            if($is_free !="true"){

                if(isset($pushData['data'][0]['redirect_url'])) {
                    $url = $pushData['data'][0]['redirect_url'];
                } else {
                    $url = base_url('').'transaction_history';
                }
    
                if(isset($pushData['data'][0]['redirect_data'])){
                    $data_post = $pushData['data'][0]['redirect_data'];
                } else {
                    $data_post = null;
    
                }

                $url = $pushData['data'][0]['redirect_url'];
            } else {
                $url = base_url('').'transaction_history';
            }
            http_response_code(200);
        } else {
            $status = $pushData['description'];
            $url = base_url('').'transaction_history';
            http_response_code(400);
        }

        $data2 = array(
            "redirect_url" => $url,
            "redirect_data" => $data_post
        );
        
        $data = array(
            'status_code' => $pushData['status_code'],
            'description' => $status,
            'data' => $data2,
            'res' => $pushData
        );
        echo json_encode($data);
	}



}

/* End of file Certification.php */
 
?>
