<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ModelKelas extends CI_Model
{
    public function CariCourse($id = null)
    {
        try {
            if ($id == null)
                throw new Exception("param kosong");

            // load model request
            $this->load->model('User/ModelRequest', 'request');

            $this->request->service = 'academy/get_customer_course';
            $RequestCekCourse = $this->request->GetDataWithJWT("id_course={$id}");
            // $this->library->printr($RequestCekCourse);
            if ($RequestCekCourse['status'] != 200)
                throw new Exception($RequestCekCourse['message']);

            $message = [
                'status' => 200,
                'message' => 'ok',
                'count'   => $RequestCekCourse['count']
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage()
            ];
        } finally {
            return $message;
        }
    }
}