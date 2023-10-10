<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->ImportModel();
        $this->load->model('ModelCourse', 'course');
    }

    public function index()
    {
        $data = $this->course->Home();
        $this->load->view('index', $data);
    }

    public function coba()
    {
        $this->load->view('zzzzz');
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
    public function tellhealth()
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
    public function Kolaborator_academy()
    {
        $this->load->view('kolaborator-academy');
    }
    public function kontak_kami()
    {
        $this->load->view('contact');
    }
}
