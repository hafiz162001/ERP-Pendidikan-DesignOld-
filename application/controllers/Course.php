<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Course extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->ImportModel();
        $this->load->model('ModelCourse', 'course');
        $this->load->model('ModelCourseNew', 'c_new');
        $this->load->model('ModelTrx', 'transaksi');
        $this->load->model('ModelCusCourse', 'modelcus');
    }

    public function show_data(){
    	$page = $this->input->post("page");
    	$tipe = $this->input->post("tipe");
    	$order = $this->input->post("order");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->c_new->get_data($page,$tipe,$q, $order);
        echo json_encode($get_data);
    }

    public function show_data_porto(){
    	$page = $this->input->post("page");
    	$tipe = $this->input->post("id_course");
    	$order = $this->input->post("order");
    	$kategori = $this->input->post("kategori");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->c_new->get_data_porto($page,$tipe,$q, $order, null, $kategori, 2);
        echo json_encode($get_data);
    }

    public function show_event(){		
		$get_data = $this->c_new->get_event();
        echo json_encode($get_data);
    }

    public function redirect($id){
        $encoding = $id;
        for ($i=0; $i < 3; $i++) { 
            $encoding = base64_encode($encoding);
        }
        $encoding = str_replace("=", "", $encoding);
        $url = $this->config->item('eventUrl').$encoding;
        redirect($url);
    }

    public function show_related_portofolio($id){
		$get_data = $this->c_new->get_data_porto_related($id);
        echo json_encode($get_data);
    }

    public function like(){
    	$data = $this->input->post();
        $post_ = $this->c_new->like( $data );
        echo json_encode($post_);
    }

    public function detail_portofolio($id){
        $data['title']="Portofolio Detail";
        $id = base64_decode($id);

        $data['id']=$id;
        $data['data'] = $this->c_new->get_data_porto_detail( $id );
        
        if ($this->session->userdata('token') == "") {
            $data['like'] = array(
                "data" => array(
                    "is_like" => 0,
                )
            );
        } else {
            $data['like'] = $this->c_new->get_like( $id );
        }
        
        if ($data['data']['row_count'] == 0) {
            $data['url'] = "course/portofolio";
            $data['caption'] = "Kembali ke halaman sebelumnya";
            $data['judul'] = "Halaman tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $data['meta_title'] = "Portofolio Detail >> ".$data['data']['data'][0]['nama_portofolio'];
            $data['meta_desc'] = $data['data']['data'][0]['nama_user'] . ' - ' . $data['data']['data'][0]['deskripsi_singkat'];
            $data['meta_images'] = $this->config->item('bisaUrl')."portofolio/media/foto_portofolio/".$data['data']['data'][0]['foto_portofolio'];
            $this->load->view('Course/porto_detail', $data, FALSE);
        }
    }

    function all_course($tipe){
        $data['tipe'] = $tipe;
        if ($tipe == 1) {
            $title = "FREE COURSE";
            $tagline = "Tersedia +50 Course GRATIS yang dapat kamu ikuti untuk belajar berbagai topik, dapatkan Sertifikat setelah menyelesaikan Quiz dan Tugas-nya";
            $data['title'] = "BELAJAR ONLINE FREE COURSE";
            $data['meta_title'] = "Bisa Design > FREE";
            $data['meta_desc'] = "Tersedia +50 Course GRATIS yang dapat kamu ikuti untuk belajar berbagai topik, dapatkan Sertifikat setelah menyelesaikan Quiz dan Tugas-nya";
        } elseif ($tipe == 3) {
            $title = "Master Class";
            $tagline = "";
            $data['title'] = "PREMIUM CLASS";
            $data['meta_title'] = "PREMIUM CLASS BISA DESIGN";
            $data['meta_desc'] = "Program premium kelas Bisa Design";
        } elseif ($tipe == 4) {
            $title = "Live Academy";
            $tagline = "";
        } else {
            $title = "Master Class + On Job Training";
            $tagline = "Program unggulan BISA DESIGN Academy selama 1 bulan penuh belajar terkait topik menarik, dipandu oleh instruktur berpengalaman, modul belajar yang lengkap dan on job training di BISA DESIGN Academy";
            $data['title'] = "PREMIUM CLASS & ON JOB TRAINING";
            $data['meta_title'] = "PREMIUM CLASS OJT";
            $data['meta_desc'] = "Program unggulan BISA DESIGN Academy selama 1 bulan penuh belajar terkait topik menarik, dipandu oleh instruktur berpengalaman, modul belajar yang lengkap dan on job training di BISA DESIGN Academy";
        }
        $data['title'] = $title;
        $data['tagline'] = $tagline;

        $this->load->view('Course/landing', $data, FALSE);
    }

    function portofolio(){
        $data['title'] = "Portofolio";
        $data['meta_title'] = "Bisa Design > Portofolio";
        $data['meta_desc'] = "Menampimpilkan data portofolio para pengguna Bisa Design Academy";
        $data['course'] = $this->c_new->get_course_porto();
        $data['kategori'] = $this->c_new->get_kategori();
        $data['tagline'] = "";
        $this->load->view('Course/portofolio', $data, FALSE);
    }

    public function index(){
        redirect('course/all_course/1','refresh');
    }

    function prakerja(){
        $data['title'] = "Program Prakerja BISA Design Academy";
        $data['tagline'] = "Berikut beberapa program pelatihan master class on job training di BISA Design Academy yang dapat didaftarkan melalui program prakerja";
        $data['meta_title'] = "Program Prakerja BISA Design Academy";
        $data['meta_desc'] = "Berikut beberapa program pelatihan master class on job training di BISA Design Academy yang dapat didaftarkan melalui program prakerja";

        $this->load->view('Course/prakerja', $data, FALSE);
    }

    function merdeka(){
        $data['title'] = "Program Studi Independen Bersertifikat BISA Design Academy";
        $data['tagline'] = "Berikut beberapa program pelatihan master class on job training di BISA Design Academy yang dapat didaftarkan melalui program Kampus Merdeka";
        $data['meta_title'] = "Program Studi Independen Bersertifikat BISA Design Academy";
        $data['meta_desc'] = "Berikut beberapa program pelatihan master class on job training di BISA Design Academy yang dapat didaftarkan melalui program Kampus Merdeka";
        $this->load->view('Course/merdeka', $data, FALSE);
    }

    function learningpath(){
        $data['title'] = "Program Studi Independen Bersertifikat BISA AI Academy";
        $data['tagline'] = "Berikut beberapa program pelatihan master class on job training di BISA AI Academy yang dapat didaftarkan melalui program Kampus Merdeka";
        $this->load->view('Course/learningpath', $data, FALSE);
    }

    // public function index__()
    // {
    //     $q = '';
    //     $page = '&page=1&';
    //     $pencarian = str_replace(" ", "%20", $this->input->get('search'));
    //     if (!empty($pencarian)) $q = '&q=' . $pencarian;
    //     if (isset($_GET['page']) && $_GET['page'] != null) $page = '&page=' . $_GET['page'] . '&';
    //     $data = $this->course->Get('&is_free=1', $q, $page);
    //     $this->load->view('Course/index', $data);
    // }
    // public function master()
    // {
    //     $q = '';
    //     $page = '&page=1&';
    //     $pencarian = str_replace(" ", "%20", $this->input->get('search'));
    //     if (!empty($pencarian)) $q = '&q=' . $pencarian;
    //     if (isset($_GET['page']) && $_GET['page'] != null) $page = '&page=' . $_GET['page'] . '&';
    //     $data = $this->course->Get('&is_free=0', $q, $page);
    //     $this->load->view('Course/master', $data);
    // }
    // public function ojt()
    // {
    //     $q = '';
    //     $page = '&page=1&';
    //     $pencarian = str_replace(" ", "%20", $this->input->get('search'));
    //     if (!empty($pencarian)) $q = '&q=' . $pencarian;
    //     if (isset($_GET['page']) && $_GET['page'] != null) $page = '&page=' . $_GET['page'] . '&';
    //     $data = $this->course->Get('&is_ojt=1&is_free=0', $q, $page);
    //     $this->load->view('Course/ojt', $data);
    // }
    // public function liveacademy()
    // {
    //     $q = '';
    //     $page = '&page=1&';
    //     $pencarian = str_replace(" ", "%20", $this->input->get('search'));
    //     if (!empty($pencarian)) $q = '&q=' . $pencarian;
    //     if (isset($_GET['page']) && $_GET['page'] != null) $page = '&page=' . $_GET['page'] . '&';
    //     $data = $this->course->Get('&is_ojt=3', $q, $page);
    //     $this->load->view('Course/liveacademy', $data);
    // }

    public function detail($id, $tipe=1){
        $data['title']="Course Detail";
        $data['tipe'] = $tipe;
        $id = base64_decode($id);
        $data['id_cus_course'] = null; 
        $data['tipe'] = $tipe; 
        if($this->session->userdata('token') != ""){
            $getIdCusCourse = $this->modelcus->get_history(1, $tipe, $id, 2);
            if(isset($getIdCusCourse['data'][0]['id_customer_course']) ){
                $data['id_cus_course'] = $getIdCusCourse['data'][0]['id_customer_course'];
            }
        }
        $data['data'] = $this->course->GetById($id);

        if ($data['data']['row_count'] == 0) {
            $data['url'] = "course/all_course/1";
            $data['caption'] = "Kembali ke halaman sebelumnya";
            $data['judul'] = "Halaman tidak ditemukan";
            $this->load->view('Templates/error404', $data, false);
        } else {
            $this->load->view('course_detail', $data, FALSE); 
        }
    }

    public function bayar(){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
		$id_course = $this->input->post("id_course");
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

		$pushData = $this->transaksi->post_bayar($id_course, $service_code, $kode_unik, $is_free, $coupon);

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
            // 'res' => $pushData
        );
        echo json_encode($data);
	}

    public function pembelian($id){
        if($this->session->userdata('token') == ""){ 
            redirect('login_customer');
        }
        $data['title']="Course Detail";
        $id = base64_decode($id);
        $data['metode_bayar'] = $this->course->GetMetodeBayar();
        $data['data'] = $this->course->GetById($id);
        $data['csrf']  = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        if ($data['data']['data'][0]['is_diskon'] == "1") {
            $hargaTTl =  $data['data']['data'][0]['price_discount'] + $data['data']['data'][0]['price_bisaai'] + $data['data']['data'][0]['price_transcripts'];

        } else {
            $hargaTTl = $data['data']['data'][0]['price'] + $data['data']['data'][0]['price_bisaai'] + $data['data']['data'][0]['price_transcripts'];
        }

        if($hargaTTl <= 0){
            $data['kode_unik'] = 0;
        } else {
            $data['kode_unik'] = $this->course->GetKodeUnik($hargaTTl);
            $data['kode_unik'] = $data['kode_unik']['data']['kode_unik'];
        }   
        $this->load->view('pembelian_course', $data);
    }

}
