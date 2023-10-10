<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelPath extends CI_Model
{
    private $serviceDetail = 'learning_path/get_learning_path_detail';
    public $service = null;

    public function GetDataDetail($Decode)
    {
        try {

            // Request learning path detail
            $RequestDetail = $this->api->Get($this->serviceDetail, "is_aktif=1&id_learning_path={$Decode}");

            // cek status
            if ($RequestDetail['status_code'] != 200)
                throw new Exception('sedang terjadi masalah, silahkan coba beberapa saat lagi');

            // cek kosong atau tidak detail learninng path nya
            if ($RequestDetail['row_count'] <= 0)
                throw new Exception('daftar kelas belum tersedia, silahkan hubungi kami');

            // kalau lulus validasi
            $message = [
                'data'     => $RequestDetail['data'],
                'count'    => $RequestDetail['row_count'],
                'status'   => 200,
                'message'  => 'ok'
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
            // $this->library->printr($this->service);

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
                'id_transaksi' => $Request['id_transaction']
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