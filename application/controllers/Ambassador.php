<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Ambassador extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->ImportModel();
        // $this->load->model('ModelCourse', 'course');
    }

    public function index()
    {
        // $data = $this->course->Home();
        $this->load->view('ambassador');
    }
}
