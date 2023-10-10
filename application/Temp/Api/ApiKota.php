<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ApiKota extends CI_Controller
{
    public function __construct()
    {
        $this->load->model('ModelKota', 'kota');
    }
    public function index()
    {
        return $this->kota->GetCollections();
    }
}