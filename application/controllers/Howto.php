<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Howto extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
    }

    private function ImportModel()
    {
        $this->load->model('General', 'api');
    }

    public function index()
    {
        try {
            $token = $this->session->userdata(sha1('user') . '_access_token');
            $RequestFaq = $this->api->JWT("general/get_faq?is_aktif=1&is_mobile=2", $token);
            if ($RequestFaq['status_code'] != 200)
                throw new Exception("Sedang terjadi masalah, silahkan coba beberapa saat lagi");

            $data['collections'] = [];
            $data['count'] = 0;
            if ($RequestFaq['row_count'] > 0) {
                $data['collections'] = $RequestFaq['data'];
                $data['count'] = $RequestFaq['row_count'];
            }
            return $this->load->view('howto', $data);
        } catch (Exception $Error) {
            $this->session->set_flashdata('pesan', "<script>toastr.info('" . $Error->getMessage() . "','info')</script>");
            redirect();
        } catch (Throwable $Error) {
            $this->session->set_flashdata('pesan', "<script>pesan_error('Error','Throwable " . $Error->getMessage() . "')</script>");
            redirect();
        }
    }
}
