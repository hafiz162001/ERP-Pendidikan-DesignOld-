<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelTugas extends CI_Model
{
    private $service = 'academy/get_customer_course';
    public function GetData($param = '')
    {
        try {
            // load model credential
            $this->load->model('User/Credential', 'credential');
            $AddParam = $param != '' ? "&{$param}" : "";

            // get token user
            $GetTokenUser = $this->credential->GetTokenUser();
            if ($GetTokenUser['status'] != 200)
                throw new Exception($GetTokenUser['message']);

            $Token = $GetTokenUser['data'];
            // Request
            $Request = $this->api->GetWithJWT($this->service . "?{$AddParam}", $Token);

            // kalo request false
            if (!$Request)
                throw new Exception('Sedang terjadi masalah, silahkan coba beberapa saat lagi');

            // kalau status code tidak 200 
            if ($Request['status_code'] != 200)
                throw new Exception("Sedang terjadi masalah, silahkan cobalagi");

            // cek kosong atau tidak data requestnya
            $data['count'] = 0;
            $data['collections'] = [];
            if ($Request['row_count'] > 0) {
                $data['count'] = $Request['row_count'];
                $data['collections'] = $Request['data'];
            }
            $message = [
                'status'  => 200,
                'message' => 'ok',
                'count'   => $data['count'],
                'data'    => $data['collections'],
            ];
        } catch (Exception $Error) {
            $message = [
                'status'  => 400,
                'message' => $Error->getMessage(),
            ];
        } catch (Throwable $Error) {
            $message = [
                'status'  => 400,
                'message' => 'Throwable ' . $Error->getMessage(),
            ];
        } finally {
            return $message;
        }
    }
}