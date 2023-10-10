<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Porto_topik extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('token_admin') == "") {
            redirect(base_url("Dapur/login"));
        }
        $this->load->model('Admin/ModelQuery', 'query');
    }

    public function index()
    {
        $data['title'] = "Portofolio Topik Modeling";
        $this->load->view('Admin/porto_topik_modeling', $data, false);
    }

    public function save()
    {
        $data = $this->input->post();
        if ($this->input->post('id_certification_category') == "") {
            $url = "certification/insert_certification_category";
            $save = $this->query->post_data($url, $data);

        } else {

            $url = "certification/update_certification_category";
            $save = $this->query->put_data($url, $data);
        }
        echo json_encode($save);
    }

    public function course_flag()
    {
        $data = $this->input->post();

        $url = "certification/update_certification_category";
        $save = $this->query->put_data($url, $data);
        echo json_encode($save);
    }

    public function showdata()
    {
        $page = $this->input->post("page");
        $aktif = $this->input->post("aktif");
        $q = $this->input->post("q");
        $id = $this->input->post("id");
        $jenis = $this->input->post("jenis");

        if ($page === null || $page == '') {
            $page = '1';
        } else {
            $page = $page;
        }

        $body = array(
            // "is_aktif" => $aktif,
            "page" => $page,
            "id_course" => $id,
            "search" => $q,
            "order_by" => $aktif,
        );

        $url = "analytics/get_course_topic_modeling";

        if ($id != "") {
            $body = array(
                "id_course" => $id,
            );
        }

        $get_data = $this->query->get_data($url, $body);
        echo json_encode($get_data);
    }

}

/* End of file Course.php */
