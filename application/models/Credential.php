<?php
class Credential extends CI_Model
{
    public function CekCredential()
    {
        try {

            // cek session token
            if ($this->session->userdata(sha1('user') . '_ADMaccess_token') == null)
                throw new Exception('Anda belum login');


            // cek credential
            $JWT = $this->api->JWT('cek_credential', $this->session->userdata(sha1('user') . '_ADMaccess_token'));
            if (isset($JWT['status_code']) && $JWT['status_code'] != 200)
                throw new Exception('Token invalid');

            $message = [
                'status' => 200,
                'message' => 'lulus validasi'
            ];
            // kalau lulus validasi
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => 'Throwable Error :' . $Error->getMessage()
            ];
        }
        return $message;
    }

    public function GetCredential()
    {
        try {

            // cek session token
            if ($this->session->userdata(sha1('user') . '_ADMaccess_token') == null)
                throw new Exception('Anda belum login');

            // cek credential
            $JWT = $this->api->JWT('cek_credential', $this->session->userdata(sha1('user') . '_ADMaccess_token'));
            if (isset($JWT['status_code']) && $JWT['status_code'] != 200)
                throw new Exception('Token invalid');

            // kalau lulus validasi
            $JWT['status'] = 200;
            $JWT['message'] = "Wokeeh";
            return $JWT;
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
            return $message;
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
            return $message;
        }
    }

    public function GetToken()
    {
        if ($this->session->userdata(sha1('user') . '_ADMaccess_token') != null)
            return $this->session->userdata(sha1('user') . '_ADMaccess_token');
        return false;
    }


    public function CekCredentialUser()
    {
        try {

            // cek session token
            if ($this->session->userdata(sha1('user') . '_access_token') == null)
                throw new Exception('Anda belum login');


            // cek credential
            $JWT = $this->api->JWT('cek_credential', $this->session->userdata(sha1('user') . '_access_token'));
            if (isset($JWT['status_code']) && $JWT['status_code'] != 200)
                throw new Exception('Token invalid');

            $message = [
                'status' => 200,
                'message' => 'lulus validasi'
            ];
            // kalau lulus validasi
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => 'Throwable Error :' . $Error->getMessage()
            ];
        }
        return $message;
    }

    public function GetCredentialUser()
    {
        try {

            // cek session token
            if ($this->session->userdata(sha1('user') . '_access_token') == null)
                throw new Exception('Anda belum login');

            // cek credential
            $JWT = $this->api->JWT('cek_credential', $this->session->userdata(sha1('user') . '_access_token'));
            if (isset($JWT['status_code']) && $JWT['status_code'] != 200)
                throw new Exception('Token invalid');

            // kalau lulus validasi
            $JWT['status'] = 200;
            $JWT['message'] = "Wokeeh";
            return $JWT;
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
            return $message;
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
            return $message;
        }
    }

    public function GetTokenUser()
    {
        if ($this->session->userdata(sha1('user') . '_access_token') != null)
            return $this->session->userdata(sha1('user') . '_access_token');
        return false;
    }

    public function ForumCredential()
    {
        try {
            $flag = 0;
            $is = 'user';
            $status = 200;
            $CekCredentialUser = $this->GetCredentialUser();
            $message['data'] = [];
            if ($CekCredentialUser['status'] != 200) {
                $flag += 1;
                $is = 'admin';
            } else
                $message['data'] = $CekCredentialUser[0];

            $CekCredentialAdmin = $this->GetCredential();
            if ($CekCredentialAdmin['status'] != 200) {
                $flag += 1;
                $is = 'user';
            } else
                $message['data'] = $CekCredentialAdmin[0];

            if ($flag == 2) {
                $is = '';
                $status = 201;
                $message['message'] = 'belum login';
            } elseif ($flag == 0)
                $message['message'] = 'sudah login ';


            $message['status'] = $status;
            $message['who'] = $is;
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => "Throwable " . $Error->getMessage()
            ];
        } finally {
            // echo '<pre>' . print_r($_SESSION, true) . '</pre>';
            return $message;
        }
    }
}
