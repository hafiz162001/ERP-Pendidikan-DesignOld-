<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Credential extends CI_Model
{
    // fungsi GetTokenUser() gunanya buat ngambil 'access_token' yang bertipe user
    public function GetTokenUser()
    {
        try {
            // ambil token dari session
            $token = $this->session->userdata(sha1('user_academy') . '_access_token');

            // cek token(udah login/belum)
            if ($token == null)
                throw new Exception('Anda belum login');

            // kalau lulus validasi
            $message = [
                'status' => 200,
                'message' => 'ok',
                'data'   => $token
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => 'Throwable ' . $Error->getMessage()
            ];
        } finally {
            return $message;
        }
    }

    public function GetCredentialUser()
    {
        try {
            $token = $this->session->userdata(sha1('user_academy') . '_access_token');
            // cek session token
            if ($token == null)
                throw new Exception('Anda belum login');

            // cek credential   
            $this->load->model('Api', 'api');
            $JWT = $this->api->GetWithJWT('cek_credential', $token);
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
}