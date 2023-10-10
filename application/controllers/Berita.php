<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Berita extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->ImportModel();
    }

    private function ImportModel()
    {
        $this->load->model('General', 'api');
        $this->load->model('ModelBerita', 'berita');
        // $this->load->model('AuthDapur');
    }

    public function index()
    {
        $q = '';
        $page = 'page=1&';
        if (!empty($this->input->get('search'))) $q = '&q=' . $this->input->get('search');
        if (isset($_GET['page']) && $_GET['page'] != null) $page = 'page=' . $_GET['page'] . '&';
        $this->berita->Get('is_aktif=1&', $q, 'index', $page);
        // $this->load->view('berita',$data);
    }
    public function detail()
    {
        $id = base64_decode($this->input->get('id'));
        $data = $this->berita->detail($id);
        // echo '<pre>'.print_r($data, true) . '</pre>';
        // exit(1);
        $this->load->view('view-berita',['ubah' => $data['data']]);
    }
// public function action()
// {
//         // ambil action dari post button
//     $action = $this->input->post('action');

//         // ambil id dari post
//     $id = base64_decode($this->input->post('id_berita'));

//         // kalau actionnya edit
//     if ($action == 'edit') {

//             // ambil data dari modelnews edit()
//         $Edit = $this->berita->edit($id);

//             // echo '<pre>' . print_r($Edit['data'][0], true) . '</pre>';
//             // kalau return data status nya bukan '200'
//         if ($Edit['status'] != 200) {

//                 // set message erro pada berita 
//             $this->session->set_flashdata('pesan', "<script>            
//                 pesan_error('Error', '" . ($Edit['message']) . "')
//                 </script>");

//                 // kembali ke halaman berita
//             exit(1);
//             redirect('dapur/berita');
//             return false;
//         }

//             // tampil halaman form edit & masukan data yg di ambil dari model berita edit()
//         $this->load->view('Dapur/berita/Edit', ['ubah' => $Edit['data'][0],'kat' => $Edit['kat']]);

//         return true;
//     }
//         // kalau hapus 
//     elseif ($action == 'hapus') {
//             // hapus
//         try {

//             $data = [
//                 'id_berita'   => $id,
//                 'is_aktif' => 2
//             ];

//             $delete = $this->berita->delete($data);

//                 // kalau status nya tidak 200
//             if ($delete['status'] != 200)
//                 throw new Exception($delete['message']);

//                 // kalau lulus validasi
//             $this->session->set_flashdata('pesan', "<script>pesan_sukses('berhasil','data telah di hapus/inonaktifkan')</script>");
//         } catch (Exception $Error) {
//             $this->session->set_flashdata('pesan', "<script>pesan_error('error','" . ($Error->getMessage()) . "')</script>");
//         } catch (Throwable $Error) {
//             $this->session->set_flashdata('pesan', "<script>pesan_error('Throwable error','" . ($Error->getMessage()) . "')</script>");
//         }
//         redirect('dapur/berita');
//     } elseif ($action == 'restore') {
//         try {

//             $data = [
//                 'id_berita'   => $id,
//                 'is_aktif' => 1
//             ];

//             $delete = $this->berita->restore($data);

//                 // kalau status nya tidak 200
//             if ($delete['status'] != 200)
//                 throw new Exception($delete['message']);

//                 // kalau lulus validasi
//             $this->session->set_flashdata('pesan', "<script>pesan_sukses('berhasil','data telah di aktifkan kembali')</script>");
//         } catch (Exception $Error) {
//             $this->session->set_flashdata('pesan', "<script>pesan_error('error','" . ($Error->getMessage()) . "')</script>");
//         } catch (Throwable $Error) {
//             $this->session->set_flashdata('pesan', "<script>pesan_error('Throwable error','" . ($Error->getMessage()) . "')</script>");
//         }
//         redirect('dapur/berita/trash');
//     } else redirect('dapur/berita');
// }
public function trash()
{
    $q = '';
    $page = 'page=1&';
    if (!empty($this->input->post('search'))) $q = '&q=' . $this->input->post('search');
    if (isset($_GET['page']) && $_GET['page'] != null) $page = 'page=' . $_GET['page'] . '&';
    $this->berita->Get('is_aktif=2&', 'order_by=ASC&', $q, 'trash', $page);
}
public function trash_category()
{
    $q = '';
    $page = 'page=1&';
    if (!empty($this->input->post('search'))) $q = '&q=' . $this->input->post('search');
    if (isset($_GET['page']) && $_GET['page'] != null) $page = 'page=' . $_GET['page'] . '&';
    $this->berita->kategori('is_aktif=2', $q, 'trash_kategori', $page);
}
}