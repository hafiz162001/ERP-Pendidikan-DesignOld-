<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Info extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ModelInfo', 'info');
        
    }
    
    public function index()
    {
        $data["judul"] = "IT Solution";
        $data["background"] = "background: rgb(54,101,20);  background: linear-gradient(148deg, rgba(54,101,20,1) 0%, rgba(62,210,82,1) 100%);";
        $data["data"] = $this->info->get_data(2);
        $this->load->view('Info/landing_solution', $data, FALSE);
    }

    public function erp()
    {
        $data["judul"] = "ERP Pendidikan";
        $data["background"] = "background: rgb(20,101,100);  background: linear-gradient(148deg, rgba(20,101,100,1) 0%, rgba(43,56,45,1) 100%);";
        $data["data"] = $this->info->get_data(1);
        $this->load->view('Info/landing_solution', $data, FALSE);
    }

    public function ai_solution()
    {
        $data["judul"] = "AI Solution";
        $data["background"] = "background: rgb(139,50,50);        background: linear-gradient(148deg, rgba(139,50,50,1) 0%, rgba(61,6,6,1) 100%);";
        $data["data"] = $this->info->get_data(3);
        $this->load->view('Info/landing_solution', $data, FALSE);
    }

}

/*
 End of file Info.php */

?>