<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Casestudy extends CI_Controller
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

    public function webinar()
    {
        $this->load->view('casestudy-tampil');
    }
    public function kunjungan_industri()
    {
        $this->load->view('casestudy-kunjin');
    }
    public function cafe()
    {
        $this->load->view('casestudy-tupay');
    }
    public function freelance()
    {
        $this->load->view('casestudy-freelance');
    }
    public function kompetisi()
    {
        $this->load->view('casestudy-kompetisi');
    }
    public function diskusi_private()
    {
        $this->load->view('casestudy-diskusi');
    }
    public function bootcamp()
    {
        $this->load->view('casestudy-bootcamp');
    }
    public function event()
    {
        $this->load->view('casestudy-event');
    }
    public function ujian()
    {
        $this->load->view('casestudy-ujian');
    }
    public function ojt()
    {
        $this->load->view('casestudy-ojt');
    }
    public function job_fair()
    {
        $this->load->view('casestudy-jobfair');
    }
}
