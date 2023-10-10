<?php
class ModelEvent extends CI_Model
{
    private function ImportModel()
    {
        $this->load->model('General', 'api');
        $this->load->library('MyLibrary');
    }

    public function PaginationSaya($page = '&page=1')
    {
        try {
            $this->load->model('Credential', 'credential');

            // get credential
            $GetCredential = $this->credential->GetCredentialUser();
            if ($GetCredential['status'] != 200)
                throw new Exception($GetCredential['message']);

            $Token = $this->credential->GetTokenUser();
            $IdUser = $GetCredential[0]['id_user'];

            // filter event
            $RequestFilterEvent = $this->api->JWT('event/get_attendee_event?sudahDanBelumBayar=1&order_by=DESC&id_user=' . $IdUser . $page, $Token);
            // echo '<pre>'.printr($RequestFilterEvent,true).'</pre>';
            // exit(1);
            // cek status event
            if ($RequestFilterEvent['status_code'] != 200)
                throw new Exception($RequestFilterEvent['description']);

            $TampungFilterEvent = [];
            $counter = 0;
            foreach ($RequestFilterEvent['data'] as $list) :

                $TampungFilterEvent[$counter] = [
                    'banner'            => $list['banner'],
                    'deskripsi'         => $list['deskripsi'],
                    'id_event'          => $list['id_event'],
                    'id_event_kategori' => $list['id_event_kategori'],
                    'id_user'           => $list['id_user'],
                    'judul'             => $list['judul'],
                    // 'kuota'             => $list['kuota'],
                    'status'            => $list['status'],
                    'tipe_event'        => $list['tipe_event'],
                    'harga'             => $list['harga_bisaai'] + $list['harga_sertifikat'],
                    'tanggal_mulai'     => $list['tanggal_mulai'],
                    'tanggal_selesai'   => $list['tanggal_selesai'],
                    'waktu_mulai'       => $list['waktu_mulai'],
                    'waktu_selesai'     => $list['waktu_selesai'],
                ];

                // request kuota yg ikut
                $RequestYgIkut = $this->api->get('event/get_kuota_event', 'id_event=' . $list['id_event']);
                if ($RequestYgIkut['status_code'] != 200)
                    throw new Exception($RequestFilterEvent['description']);
                foreach ($RequestYgIkut['data'] as $ikut) :
                    $TampungFilterEvent[$counter]['yg_ikut'] = $ikut['kuota'];
                endforeach;
                $counter++;
            endforeach;

            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            $SetupPagination['base_url'] = site_url('event/filter');
            $SetupPagination['total_rows'] = $RequestFilterEvent['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();

            $message = [
                'status'     => 200,
                'message'    => '',
                'data'       => array_values($this->aasort($TampungFilterEvent, "status")),
                'pagination' => $Pagination,
                'count'      => $RequestFilterEvent['row_count']
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage(),
                'count' => 0
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => 'Throwable ' . $Error->getMessage(),
                'count' => 0
            ];
        } finally {
            return $message;
        }
    }

    private function aasort(&$array, $key)
    {
        $sorter = array();
        $ret = array();
        reset($array);
        foreach ($array as $ii => $va) {
            $sorter[$ii] = $va[$key];
        }
        asort($sorter);
        foreach ($sorter as $ii => $va) {
            $ret[$ii] = $array[$ii];
        }
        $array = $ret;
        return $array;
    }
    public function Pagination($page = 'page=1', $KategoriEvent = '', $StatusEvent = '', $TipeEvent = '', $partner = '')
    {
        try {
            // filter event
            $RequestFilterEvent = $this->api->get('event/get_event', 'is_aktif=1&order_by=asc&' . $page . $KategoriEvent . $StatusEvent . $TipeEvent . $partner);
            // cek status event
            if ($RequestFilterEvent['status_code'] != 200)
                throw new Exception($RequestFilterEvent['description']);

            $TampungFilterEvent = [];
            $counter = 0;
            foreach ($RequestFilterEvent['data'] as $list) :

                $TampungFilterEvent[$counter] = [
                    'banner'            => $list['banner'],
                    'deskripsi'         => $list['deskripsi'],
                    'id_event'          => $list['id_event'],
                    'id_event_kategori' => $list['id_event_kategori'],
                    'id_user'           => $list['id_user'],
                    'is_admin'          => $list['is_admin'],
                    'judul'             => $list['judul'],
                    // 'kuota'             => $list['kuota'],
                    'status'            => $list['status'],
                    'tipe_event'        => $list['tipe_event'],
                    'harga'             => $list['harga_bisaai'] + $list['harga_sertifikat'],
                    'tanggal_mulai'     => $list['tanggal_mulai'],
                    'tanggal_selesai'   => $list['tanggal_selesai'],
                    'waktu_mulai'       => $list['waktu_mulai'],
                    'waktu_selesai'     => $list['waktu_selesai'],
                ];

                // request kuota yg ikut
                $RequestYgIkut = $this->api->get('event/get_kuota_event', 'id_event=' . $list['id_event']);
                if ($RequestYgIkut['status_code'] != 200)
                    throw new Exception($RequestFilterEvent['description']);
                foreach ($RequestYgIkut['data'] as $ikut) :
                    $TampungFilterEvent[$counter]['yg_ikut'] = $ikut['kuota'];
                endforeach;
                $counter++;
            endforeach;

            $this->load->library('pagination');
            $SetupPagination = $this->SettingPagination();
            $SetupPagination['base_url'] = site_url('event/filter');
            $SetupPagination['total_rows'] = $RequestFilterEvent['row_count'];
            $this->pagination->initialize($SetupPagination);
            $Pagination = $this->pagination->create_links();

            $message = [
                'status'     => 200,
                'message'    => '',
                'data'       => $TampungFilterEvent,
                'pagination' => $Pagination,
                'count'      => $RequestFilterEvent['row_count']
            ];
        } catch (Exception $Error) {
            $message = [
                'status' => 400,
                'message' => $Error->getMessage(),
                'count' => 0
            ];
        } catch (Throwable $Error) {
            $message = [
                'status' => 400,
                'message' => 'Throwable ' . $Error->getMessage(),
                'count' => 0
            ];
        } finally {
            return $message;
        }
    }
    private function SettingPagination()
    {

        $config['per_page'] = 10; //show record per halaman
        $config["num_links"] = 5; // uri parameter
        $config["uri_segment"] = 3; // uri parameter
        // Membuat Style pagination untuk BootStrap v4
        $config['page_query_string'] = TRUE;
        $config['use_page_numbers'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['first_link'] = 'First';
        $config['last_link'] = 'Last';
        $config['next_link'] = 'Next';
        $config['prev_link'] = 'Prev';
        $config['full_tag_open'] = '<div class="pagging text-center">
    <nav>
        <ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul>
    </nav>
</div>';
        $config['num_tag_open'] = '<li class="page-item datatable-pagination"><span class="page-link">';
        $config['num_tag_close'] = '</span></li>';
        $config['cur_tag_open'] = '<li class="page-item datatable-pagination active"><span class="page-link">';
        $config['cur_tag_close'] = '<span class="sr-only">(current)</span></span></li>';
        $config['next_tag_open'] = '<li class="page-item datatable-pagination"><span class="page-link">';
        $config['next_tagl_close'] = '<span aria-hidden="true">&raquo;</span></span></li>';
        $config['prev_tag_open'] = '<li class="page-item datatable-pagination"><span class="page-link">';
        $config['prev_tagl_close'] = '</span>Next</li>';
        $config['first_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['first_tagl_close'] = '</span></li>';
        $config['last_tag_open'] = '<li class="page-item"><span class="page-link">';
        $config['last_tagl_close'] = '</span></li>';

        return $config;
    }
}
