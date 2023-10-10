<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelRequest extends CI_Model
{
    public $service = null;
    public function GetData($param = '', $AjaxMethod = false)
    {
        try {
            $this->load->model('User/Api', 'api');
            if ($AjaxMethod == true) {
                if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']))
                    throw new Exception('Invalid Request');
                if (strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest')
                    throw new Exception('Not ajax Request');
            }

            if ($this->service == null)
                throw new Exception('service kosong');

            $AddParam = $param != '' ? "&{$param}" : "";

            // Request
            $Request = $this->api->Get($this->service, "{$AddParam}");
            // kalo request false
            if (!$Request)
                throw new Exception('Sedang terjadi masalah, silahkan coba beberapa saat lagi');

            // kalau status code tidak 200 
            if ($Request['status_code'] != 200)
                throw new Exception($Request['error']);

            $data['count'] = $Request['row_count'];
            $data['collections'] = $Request['data'];

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

    public function GetDataWithJWTAdmin($param = '')
    {
        try {
            // load model credential
            $AddParam = $param != '' ? "&{$param}" : "";

            // get token user
            $this->load->model('User/Api', 'apix');
            $this->load->model('User/Credential', 'kredensial');
            $GetTokenUser = $this->kredensial->GetTokenAdmin();
            if ($GetTokenUser['status'] != 200)
                throw new Exception($GetTokenUser['message']);

            $Token = $GetTokenUser['data'];
            // Request
            $Request = $this->apix->GetWithJWT($this->service . "?{$AddParam}", $Token);

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

    public function GetDataWithJWT($param = '')
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

    public function InsertWithJWT($data)
    {
        try {
            if (!is_array($data))
                throw new Exception("data tidak valid");

            // load model credential
            $this->load->model('User/Credential', 'credential');

            // get token user
            $GetTokenUser = $this->credential->GetTokenUser();

            if ($GetTokenUser['status'] != 200)
                throw new Exception($GetTokenUser['message']);

            $Token = $GetTokenUser['data'];
            // Request
            $Request = $this->api->InsertWithJWT($this->service, $data, $Token);

            // kalo request false
            if (!$Request)
                throw new Exception('Sedang terjadi masalah, silahkan coba beberapa saat lagi');

            // kalau status code tidak 200 
            if ($Request['status_code'] != 200)
                throw new Exception("Sedang terjadi masalah, silahkan cobalagi");

            // cek kosong atau tidak data requestnya
            $pesan = [
                'status'  => 200,
                'message' => 'ok',
            ];
        } catch (Exception $Error) {
            $pesan = [
                'status'  => 400,
                'message' => $Error->getMessage(),
            ];
        } catch (Throwable $Error) {
            $pesan = [
                'status'  => 400,
                'message' => 'Throwable ' . $Error->getMessage(),
            ];
        } finally {
            return $pesan;
        }
    }
}