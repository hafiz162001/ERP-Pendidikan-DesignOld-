<?php
class Auth extends CI_Model
{
    private $login = '/vcon/login';
    private $daftar = '/vcon/daftar';

    public function __construct()
    {
        // $this->Auth();
    }

    private function Auth()
    {
        // cek session token
        if ($this->session->userdata(sha1('user') . '_access_token') != null) {

            // cek credential
            $JWT = $this->api->JWT('cek_credential', $this->session->userdata(sha1('user') . '_access_token'));
            // echo '<pre>' . print_r($JWT, true) . '</pre>';

            // kalo salah uname & pass
            if (is_array($JWT) && isset($JWT['description']) && isset($JWT['error']) && isset($JWT['status_code'])) {
                redirect('login');
            }

            // if ($JWT[0]['id_admin'])
            // kalo dia user tapi login ke form dapur
            if ($_SERVER['REQUEST_URI'] == '/vcon/dapur/login')
                redirect('/');


            // kalau dia ngakses ke login
            if ($_SERVER['REQUEST_URI'] == $this->login || $_SERVER['REQUEST_URI'] == $this->daftar) {
                redirect('/');
            }
        } else {
            // kalau belum login, yg diakses cuma
            $AllowAccess = [
                'dashboard',
                'login',
                'daftar',
                'forget'
            ];
            $SekarangAccessController = strtolower($this->router->fetch_class());

            // kalau user mengakses halaman yg bukan 'allowAccess'
            if (!in_array($SekarangAccessController, $AllowAccess)) {
                redirect('login');
            }
        }
    }
}