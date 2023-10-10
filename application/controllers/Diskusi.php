<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Diskusi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->ImportModel();
        $this->load->model('ModelDiskusi', 'diskusi');
    }

    public function index()
    {
        $q = '';
        $page = '&page=1&';
        $pencarian = str_replace(" ", "%20", $this->input->get('search'));
        if (!empty($pencarian)) $q = '&q=' . $pencarian;
        if (isset($_GET['page']) && $_GET['page'] != null) $page = '&page=' . $_GET['page'] . '&';
        $data = $this->diskusi->Get('&is_free=1', $q, $page);
        // $this->load->view('diskusi', $data);
    }
}
