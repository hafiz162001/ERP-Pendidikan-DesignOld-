<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
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

    public function home()
    {
        $this->load->view('index');
    }
    public function tampil()
    {
        $this->load->view('tampil-landing');
    }
    public function academy()
    {
        $this->load->view('academy-landing');
    }
    public function tupay()
    {
        $this->load->view('tupay-landing');
    }
    public function Tellhealth()
    {
        $this->load->view('tellhealth-landing');
    }
}
?>