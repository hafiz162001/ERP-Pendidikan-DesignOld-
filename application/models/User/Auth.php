<?php
class Auth extends CI_Model
{
    private $login = '/elearning/login';
    private $daftar = '/elearning/daftar';

    public function __construct()
    {
        $this->Auth();
    }

    private function Auth()
    {
        // cek session token
        if ($this->session->userdata(sha1('user_academy') . '_access_token') != null) {

            // cek credential
            $JWT = $this->api->GetWithJWT('cek_credential', $this->session->userdata(sha1('user_academy') . '_access_token') . 'sd');
            // echo '<pre>' . print_r($JWT, true) . '</pre>';
            // exit(1);


            // if ($JWT[0]['id_admin'])
            // kalo dia user tapi login ke form dapur
            if ($_SERVER['REQUEST_URI'] == '/elearning/dapur/login')
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
            ];
            $SekarangAccessController = strtolower($this->router->fetch_class());

            // kalau user mengakses halaman yg bukan 'allowAccess'
            if (!in_array($SekarangAccessController, $AllowAccess)) {
                redirect('login');
            }
        }
    }
}