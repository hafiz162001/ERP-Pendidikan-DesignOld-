<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('../controllers/Rest_Connect');
        $this->conn = new Rest_Connect; #Panggil Class Rest_Connect
        $this->load->model('Dashboard_m');
        $this->load->helper('date');
    }

    public function index()
    {
        $service = "fitur/get_fitur";
        $param = "page=1&is_aktif=1";
        $service_agenda = "agenda/get_agenda";
        $param_agenda = "page=1&is_aktif=1&order_by=1";
        

        // $data['aicase'] = $this->dashboard_m->getAicase()->result();
        $data['carousel'] = $this->dashboard_m->Carousel();
        $data['about'] = $this->dashboard_m->getAbout1();
        $data['layanan'] = $this->dashboard_m->getLayanan();
        $data['y_fitur'] = $this->dashboard_m->getFeature($service, $param)->data;
        $data['berita'] = $this->dashboard_m->Berita();
        $data['faq'] = $this->dashboard_m->getFaq();
        $data['info'] = $this->dashboard_m->getInfo();
        $data['des_layanan'] = $this->dashboard_m->getDesLayanan();
        $data['client'] = $this->dashboard_m->getClient();
        $data['katclient'] = $this->dashboard_m->getKatClient();
        $data['testimoni'] = $this->dashboard_m->getTestimoni();
        $data['agenda'] = $this->dashboard_m->getAgenda($service_agenda, $param_agenda)->data;
        $data['feature'] = $this->dashboard_m->getFeature($service, $param)->data;
       
        
        $this->load->view('dashboard', $data);
    }

    public function Agenda()
    {
        # code...
        $data['title'] = "Agenda";
        $service_agenda = "agenda/get_agenda";
        $param_agenda = "page=1&is_aktif=1&order_by=1";
        $data['agenda'] = $this->dashboard_m->getAgenda($service_agenda, $param_agenda)->data;
        $data['about'] = $this->dashboard_m->getAbout1();
        
        // var_dump($data);
        // die();

        $this->load->view('v_agenda', $data);
    }

    public function List_Agenda()
    {
        # code...
        $data['title'] = "Agenda";
        $service_agenda = "agenda/get_agenda";
        $param_agenda = "page=1&is_aktif=1&order_by=1";
        $data['list_agenda'] = $this->dashboard_m->getAgenda($service_agenda, $param_agenda)->data;
        $data['about'] = $this->dashboard_m->getAbout1();
        $data['info'] = $this->dashboard_m->getInfo();
        
        $service = "fitur/get_fitur";
        $param = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param)->data;
        
        // var_dump($data);
        // die();

        $this->load->view('v_agenda_list', $data);
    }

    public function Detail_Agenda()
    {
        $data['title'] = "Agenda";

        $id = $this->input->get('id');

        $service_agenda = "agenda/get_agenda";
        $param_agenda = "page=1&is_aktif=1&id_agenda=" . $id . "";
        $param_agenda2 = "page=1&is_aktif=1&order_by=1";
        $data['detail_agenda'] = $this->dashboard_m->getAgenda($service_agenda, $param_agenda)->data;
        $data['list_agenda'] = $this->dashboard_m->getAgenda($service_agenda,$param_agenda2)->data;
        $data['info'] = $this->dashboard_m->getInfo();
        $data['about'] = $this->dashboard_m->getAbout1();
        
        $service = "fitur/get_fitur";
        $param = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param)->data;

        // var_dump($data);
        // die();

        $this->load->view('v_agenda_detail', $data);
    }

    public function Service()
    {
        # code...
         $service = "fitur/get_fitur";
        $param1 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param1)->data;
        
        $data['info'] = $this->dashboard_m->getInfo();
         $data['about'] = $this->dashboard_m->getAbout1();
        $data['jenis_server'] = $this->dashboard_m->getJenisServer();
        
        
        $this->load->view('v_service_baru', $data);
    }

    public function HistoryService()
    {
        # code...
        $data['carousel'] = $this->dashboard_m->Carousel();
        $data['about'] = $this->dashboard_m->getAbout1();
        $data['layanan'] = $this->dashboard_m->getLayanan();
        $data['feature'] = $this->dashboard_m->getFitur();
        $data['berita'] = $this->dashboard_m->getBerita();
        $data['faq'] = $this->dashboard_m->getFaq();
        $data['info'] = $this->dashboard_m->getInfo();
        $data['des_layanan'] = $this->dashboard_m->getDesLayanan();
        $data['client'] = $this->dashboard_m->getClient();
        $data['katclient'] = $this->dashboard_m->getKatClient();
        $data['testimoni'] = $this->dashboard_m->getTestimoni();
        $this->load->view('v_history_baru', $data);
    }

    public function DetailServiceCPU()
    {
        # code...
        $data['info'] = $this->dashboard_m->getInfo();
        $data['server'] = $this->dashboard_m->getServerService();
        $data['about'] = $this->dashboard_m->getAbout1();
        $this->load->view('v_detail_service_CPU', $data);
    }

    public function DetailServiceGPU()
    {
        # code...
        $data['info'] = $this->dashboard_m->getInfo();
        $data['server'] = $this->dashboard_m->getServerService();
        $data['about'] = $this->dashboard_m->getAbout1();
        $this->load->view('v_detail_service_GPU', $data);
    }

    public function DetailServiceBigData()
    {
        # code...
        $data['info'] = $this->dashboard_m->getInfo();
        $data['server'] = $this->dashboard_m->getServerService();
        $data['about'] = $this->dashboard_m->getAbout1();
        $this->load->view('v_detail_service_BigData', $data);
    }

    public function DateCPU()
    {
        # code...
        $data['info'] = $this->dashboard_m->getInfo();
        $data['server'] = $this->dashboard_m->getServerService();
        $data['about'] = $this->dashboard_m->getAbout1();
        $this->load->view('v_date_CPU', $data);
    }

    public function DateGPU()
    {
        # code...
        $data['info'] = $this->dashboard_m->getInfo();
        $data['server'] = $this->dashboard_m->getServerService();
        $data['about'] = $this->dashboard_m->getAbout1();
        $this->load->view('v_date_GPU', $data);
        
    }
    
     public function ListBerita()
    {
        $data['title'] = "Berita";
        
        $service = "fitur/get_fitur";
        $param1 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param1)->data;

        $service = "berita/get_berita";
        $param = "page=1&is_aktif_berita=1&order_by=1";
        
        $data['berita'] = $this->dashboard_m->getBerita($service,$param)->data;
        $data['about'] = $this->dashboard_m->getAbout1();
        $data['info'] = $this->dashboard_m->getInfo();
        
        $service2 = "fitur/get_fitur";
        $param2 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service2, $param2)->data;
        // var_dump($data);
        // die();

        $this->load->view('v_news_list', $data);
    }

    public function Detail_berita()
    {
        # code...
        
        $data['title'] = "Berita";
        $id = $this->input->get('id');

        $service = "fitur/get_fitur";
        $param1 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param1)->data;

        $service1 = "berita/get_berita";
        $param = "page=1&is_aktif_berita=1&order_by=1&id_berita=" . $id . "";
        $paramlist = "page=1&is_aktif_berita=1&order_by=1";
        $data['detail_berita'] = $this->dashboard_m->getBerita($service1, $param)->data;
        $data['list_berita'] = $this->dashboard_m->getBerita($service1,$paramlist)->data;
        $data['info'] = $this->dashboard_m->getInfo();
        $data['about'] = $this->dashboard_m->getAbout1();

        // var_dump($data);
        // die();

        $this->load->view('v_news_detail', $data);
    }

    public function Elearning()
    {
        # code...
        //  $data['carousel'] = $this->dashboard_m->Carousel();
        // $data['about'] = $this->dashboard_m->getAbout1();
        // $data['layanan'] = $this->dashboard_m->getLayanan();
        // $data['fitur'] = $this->dashboard_m->getFitur();
        // 		$data['det_berita'] = $this->dashboard_m->Berita();
        // $data['faq'] = $this->dashboard_m->getFaq();
        // $data['book'] = $this->dashboard_m->insBook();
        // 		$data['info'] = $this->dashboard_m->getInfo();
        //$data['server'] = $this->dashboard_m->getServerService();
        // $data['des_layanan'] = $this->dashboard_m->getDesLayanan();
        // $data['client'] = $this->dashboard_m->getClient();
        // $data['katclient'] = $this->dashboard_m->getKatClient();
        // $data['testimoni'] = $this->dashboard_m->getTestimoni();
        $this->load->view('mainten');
    }


    public function Dataset()
    {
        $data['dataset_title'] = "Dataset";

        $service = "fitur/get_fitur";
        $param1 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param1)->data;


        $service = "dataset/get_dataset_kategori";
        $param = "page=1&is_aktif=1";
        $data['data_set'] = $this->dashboard_m->getDataset($service, $param)->data;
        $data['about'] = $this->dashboard_m->getAbout1();
        $data['info'] = $this->dashboard_m->getInfo();
        // var_dump($data);
        // die();

        $this->load->view('v_dataset', $data);
    }


    public function List_dataset()
    {
        $data['kategori_title'] = "Dataset Kategori";

        $service = "fitur/get_fitur";
        $param1 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param1)->data;

        $id = $this->input->get('id');
        $service = "dataset/get_dataset";
        $param = "page=1&is_aktif=1&id_dataset_kategori=" . $id . "";
        $data['data_set'] = $this->dashboard_m->getDataset($service, $param)->data;
        $data['info'] = $this->dashboard_m->getInfo();
        $data['about'] = $this->dashboard_m->getAbout1();
        // var_dump($data);
        // die();

        $this->load->view('v_list_dataset', $data);
    }

    public function Detail_dataset()
    {
        $id = $this->input->get('id');

        $service = "fitur/get_fitur";
        $param1 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param1)->data;

        // 		$one = 1;
        // 		$idmin = $id - $one;
        $service = "dataset/get_dataset";
        $param = "page=1&is_aktif=1&id_dataset=" . $id . "";
        $data['data_set'] = $this->dashboard_m->getDataset($service, $param)->data;
        $data['info'] = $this->dashboard_m->getInfo();
        $data['about'] = $this->dashboard_m->getAbout1();

        // var_dump($data);
        // die();

        $this->load->view('v_detail_dataset', $data);
    }

    public function Fitur()
    {
        $service = "fitur/get_fitur";
        $param = "page=1&is_aktif=1";
        $data['fitur'] = $this->dashboard_m->getFitur($service, $param)->data;
        $data['about'] = $this->dashboard_m->getAbout1();
        // var_dump($data);
        // die();

        $this->load->view('v_header', $data);
        $this->load->view('v_feature', $data);
    }


    public function List_fitur()
    {
        $id = $this->input->get('id');

        $service = "fitur/get_fitur";
        $param = "page=1&is_aktif=1&id_fitur=" . $id . "";
        $param2 = "page=1&is_aktif=1";
        $data['feature'] = $this->dashboard_m->getFeature($service, $param)->data;
        $fitur = $this->dashboard_m->getFeature($service, $param)->data;
        $data['judul'] = $fitur[0]->judul;

        $data['service'] = $this->dashboard_m->getFeature($service, $param2)->data;
        // 		$fitur2 = $this->dashboard_m->getFeature($service,$param2)->data;
        // 		$data['judul2'] = $fitur2[0]->judul;
        $data['info'] = $this->dashboard_m->getInfo();
        $data['about'] = $this->dashboard_m->getAbout1();

        $this->load->view('v_detail_fitur', $data);
    }


}
