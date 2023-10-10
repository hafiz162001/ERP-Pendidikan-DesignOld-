<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class Testimonial extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        //Do your magic here
        $this->load->model('ModelTesti', 'testi');
    }

    public function index(){
        $data['title'] = "Testimonial";
        $data['meta_title'] = "Bisa Design > Testimonial Course";
        $data['meta_desc'] = "Menampimpilkan data testimoni para pengguna Bisa Design Academy";
        // $data['course'] = $this->c_new->get_course_porto();
        // $data['kategori'] = $this->c_new->get_kategori();
        $data['tagline'] = "";
        $this->load->view('Course/testimoni', $data, FALSE);
    }

    // $page,$id_course=null,$q=null,$order="waktu_desc", $rating=null){
    public function show_data(){
    	$page = $this->input->post("page");
    	$rating = $this->input->post("rating");
    	$id_course = $this->input->post("id_course");
    	$order = $this->input->post("order");
		$q = strip_tags(htmlspecialchars($this->input->post("q")));

		if($page === NULL || $page == ''){
			$page = '1';
		}else{
			$page = $page;
		}
		
		$get_data = $this->testi->get_data($page,$id_course,$q, $order, $rating);
        echo json_encode($get_data);
    }

}

/* End of file Testimonial.php */
