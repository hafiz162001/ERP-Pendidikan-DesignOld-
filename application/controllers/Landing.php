<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Landing extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->ImportModel();
    }

    // private function ImportModel()
    // {
    //     $this->load->model('General', 'api');
    //     $this->load->model('ModelBerita', 'berita');
    //     $this->load->model('AuthDapur');
    // }
    public function term(){
        $this->load->view('term');
    }
    public function Home()
    {
        $this->load->view('index');
    }
    public function Tampil()
    {
        $this->load->view('tampil-landing');
    }
    public function Academy()
    {
        $this->load->view('academy-landing');
    }
    public function Tupay()
    {
        $this->load->view('tupay-landing');
    }
    public function Tellhealth()
    {
        $this->load->view('tellhealth-landing');
    }
    public function TentangKami()
    {
        $this->load->view('tentang-kami');
    }
    public function Kolaborator()
    {
        $this->load->view('kolaborator');
    }
}
?>