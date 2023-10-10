<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
    }

    private function ImportModel()
    {
        $this->load->model('General', 'api');
        $this->load->model('ModelBerita', 'berita');
        // $this->load->model('AuthDapur');
    }

    public function index()
    {
        $this->load->view('blog');
    }
}
