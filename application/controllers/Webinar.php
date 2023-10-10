<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Webinar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->ImportModel();
        $this->load->model('ModelWebinar', 'webinar');
    }

    public function index()
    {
        $q = '';
        $page = '&page=1&';
        $pencarian = str_replace(" ", "%20", $this->input->get('search'));
        if (!empty($pencarian)) $q = '&q=' . $pencarian;
        if (isset($_GET['page']) && $_GET['page'] != null) $page = '&page=' . $_GET['page'] . '&';
        $data = $this->webinar->Get($q, $page);
        $this->load->view('webinar', $data);
    }
}
