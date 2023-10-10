<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Degree extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('ModelCourse', 'course');
        $this->load->model('ModelDegree', 'deg');

        //Do your magic here
    }
    
    public function index()
    {
        $data['title'] = "Pendidikan Jarak Jauh";
        $data['tipe'] = 1;
        $data['tagline'] = "Pendidikan Jarak Jauh merupakan pendidikan formal berbasis lembaga yang peserta didik dan instrukturnya berada di lokasi terpisah sehingga memerlukan sistem telekomunikasi interaktif untuk menghubungkan keduanya dan berbagai sumber daya yang diperlukan di dalamnya. Pembelajaran elektronik (e-learning) atau pembelajaran daring (online) merupakan bagian dari pendidikan jarak jauh yang secara khusus menggabungkan teknologi elektronika dan teknologi berbasis internet";
        $data['prodi'] = $this->deg->get_prodi();
        $data['univ'] = $this->deg->get_universitas();
        $data['jenjang'] = $this->deg->get_jenjang();
        
        $this->load->view('Degree/landing', $data, FALSE);
        
    }

    public function campuss()
    {
        $data['title'] = "Pendidikan Profesional di Universitas";
        $data['tipe'] = 1;
        $data['tagline'] = "Dapatkan Certificate Profesional (Non Degree) dari Universitas/Politeknik Partner BISA AI Academy pada bidang Artificial Intelligence dan bidang lainnya. Program ini biasanya diselesaikan dalam waktu 1 - 2 tahun. Program ini dapat diperpanjang dengan Degree yang tersedia dalam berbagai pilihan";
        $data['prodi'] = $this->deg->get_prodi();
        $data['univ'] = $this->deg->get_universitas();
        $data['jenjang'] = $this->deg->get_jenjang();
        
        $this->load->view('Degree/landing_universitas', $data, FALSE);
        
    }

    public function detail($id){
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['id'] = "1";
        $data['data'] = $this->deg->get_degree(1,null, $id, null, null, null, 1);
        
        if ($data['data']['row_count'] == 0) {
            $data['url'] = "degree";
            $data['caption'] = "Kembali ke halaman sebelumnya";
            $data['judul'] = "Halaman tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $data['batch'] = $this->deg->get_batch($id);
            $data['identitas'] = $this->deg->get_identitas();
    
            $hargaTTl =  $data['data']['data'][0]['harga_pendaftaran'] ;
    
            if($hargaTTl <= 0){
                $data['kode_unik'] = 0;
            } else {
                $data['kode_unik'] = $this->course->GetKodeUnik($hargaTTl);
                $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
            } 
    
            $data['metode_bayar'] = $data['metode_bayar'] = $this->course->GetMetodeBayar();
            $this->load->view('Degree/detail_degree', $data, FALSE);
        }
    }


    public function detail_university($id){
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        $data['id'] = "1";
        $data['data'] = $this->deg->get_degree(1,null, $id, null, null, null, 2);
        
        if ($data['data']['row_count'] == 0) {
            $data['url'] = "degree/campuss";
            $data['caption'] = "Kembali ke halaman sebelumnya";
            $data['judul'] = "Halaman tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $data['batch'] = $this->deg->get_batch($id);
            $data['identitas'] = $this->deg->get_identitas();
    
            $hargaTTl =  $data['data']['data'][0]['harga_pendaftaran'] ;
    
            if($hargaTTl <= 0){
                $data['kode_unik'] = 0;
            } else {
                $data['kode_unik'] = $this->course->GetKodeUnik($hargaTTl);
                $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
            } 
    
            $data['metode_bayar'] = $data['metode_bayar'] = $this->course->GetMetodeBayar();
            $this->load->view('Degree/detail_degree_universitas', $data, FALSE);
        }        
    }

    public function bayar(){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
		$id = $this->input->post("id");
        $is_free = $this->input->post("is_free");
        $pakeKupon = $this->input->post("pakeKupon");

        $nama_ijazah = $this->input->post("nama_ijazah");
        $jenis_identitas = $this->input->post("jenis_identitas");
        $nomor_identitas = $this->input->post("nomor_identitas");
        $kewarganegaraan = $this->input->post("kewarganegaraan");
        $batch = $this->input->post("batch");
        
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

		$pushData = $this->deg->post_bayar($batch, $id,$nama_ijazah, $jenis_identitas, $nomor_identitas, $kewarganegaraan, $service_code, $kode_unik, $is_free, $coupon);

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

    public function show_data(){
    	$page = $this->input->post("page");
		$univ = $this->input->post("univ");
    	$prodi = $this->input->post("prodi");
    	$jenjang = $this->input->post("jenjang");
    	$tipe = $this->input->post("tipe");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

        $univ = ($univ == "") ? null : $univ;
        $prodi = ($prodi == "") ? null : $prodi;
        $jenjang = ($jenjang == "") ? null : $jenjang;

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->deg->get_degree($page,$q, null, $univ, $prodi, $jenjang, $tipe);
        echo json_encode($get_data);
    }

    // function download_kartu_ujian($filename){
    //     return $this->deg->image($filename);
    // }

}

/* End of file Degree.php */
