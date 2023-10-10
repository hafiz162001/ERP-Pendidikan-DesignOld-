<?php
class AuthDapur extends CI_Model
{
    private $login = '/academy/dapur/login';
    // private $daftar = '/e_learning/dapur/daftar';
    public function __construct()
    {
        $this->Auth();
        // $this->AuthPosisi();
    }

    private function Auth()
    {
        // cek session token
        if ($this->session->userdata(sha1('user-admin') . '_ADMaccess_token') != null) {

            // cek credential
            $JWT = $this->api->JWT('cek_credential', $this->session->userdata(sha1('user-admin') . '_ADMaccess_token'));
            // echo '<pre>'.print_r($JWT,true).'</pre>';
            // exit(1);
            // kalo salah uname & pass
            if (is_array($JWT) && isset($JWT['description']) && isset($JWT['error']) && isset($JWT['status_code'])) {
                redirect('dapur/login');
            }
            // kalau dia ngakses ke login
            if ($_SERVER['REQUEST_URI'] == $this->login) {
                redirect('dapur');
            }
            // exit(1);
        } else {
            // echo "hsad";
            // kalau belum login, yg diakses hanya
            $AllowAccess = [
                'login',
            ];
            $SekarangAccessController = strtolower($this->router->fetch_class());
            // echo $SekarangAccessController . ' | xsxs';
            // kalau user mengakses halaman yg bukan 'allowAccess'
            if (!in_array($SekarangAccessController, $AllowAccess)) {
                redirect('dapur/login');
            }
        }
    }

    private function AuthPosisi()
    {
        $this->load->model('Credential', 'credential');
        $GetCredential = $this->credential->GetCredential();
        if ($GetCredential['status'] == 200) {

            try {

                if (!isset($GetCredential[0]))
                    throw new Exception('Sedang terjadi masalah, silahkan coba lagi');

                // cek kalau dia admin
                if (isset($GetCredential[0]['id_users']))
                    throw new Exception("anda tidak bisa mengakses halaman ini, hanya untuk admin ");

                // cek kalau admin biasa
                if ($GetCredential[0]['posisi'] == 2) {

                    // untuk admin biasa hanya boleh akses
                    $AllowAccess = [
                        'customer',
                        'course'
                    ];

                    // sekarang si admin biasa ini , sedang akses kontroller mana
                    $SekarangAccessController = strtolower($this->router->fetch_class());
                    // echo $SekarangAccessController . ' | xsxs';
                    // kalau user mengakses halaman yg bukan 'allowAccess'
                    if (!in_array($SekarangAccessController, $AllowAccess))
                        throw new Exception("anda tidak diizinkan mengakses halaman ini, hanya untuk admin super");
                }
            } catch (Exception $Error) {
                $this->session->set_flashdata('pesan', "<script>toastr.info('" . $Error->getMessage() . "')</script>");
                redirect('/');
            } catch (Exception $Error) {
                $this->session->set_flashdata('pesan', "<script>toastr.error('error','" . $Error->getMessage() . "')</script>");
                redirect('/');
            }
        }
    }
}