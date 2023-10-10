<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Page extends CI_Controller
{
    public function not_found404()
    {
        return $this->load->view('404');
    }
    public function index()
    {
        redirect('/');
    }
}