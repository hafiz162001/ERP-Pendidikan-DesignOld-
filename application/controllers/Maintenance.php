
<?php

class Maintenance extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('../controllers/Rest_Connect');
		$this->conn = new Rest_Connect; #Panggil Class Rest_Connect
		$this->load->model('Dashboard_m');
	
    }
    
    public function Index()
	{

		$this->load->view('Maintenance');
	}

}

?>