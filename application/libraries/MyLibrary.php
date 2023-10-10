<?php
class MyLibrary
{
    public function __construct()
    {
        $this->CI = &get_instance();
        $this->CI->load->model('General', 'api');
    }
    // countPages($path) 
    // digunakan untuk menghitung halman file ekstensi .pdf
    // $path : Lokasi file
    public function countPages($path)
    {
        $pdftext = file_get_contents($path);
        $num = preg_match_all("/\/Page\W/", $pdftext, $dummy);
        return $num;
    }

    public function FileSize($path)
    {
        $size = filesize($path);
        $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB', 'ZB', 'YB');
        $power = $size > 0 ? floor(log($size, 1024)) : 0;
        return number_format($size / pow(1024, $power), 2, '.', ',') . ' ' . $units[$power];
    }

    public function InformasiFile($path)
    {
        // cek file apakah ada / tidak
        if (file_exists($path)) {
            // ambil informasi file
            $informasiFile = get_file_info($path);
            if (is_array($informasiFile) && count($informasiFile) > 0) {

                // ambil ekstensi 
                $mime = get_mime_by_extension($informasiFile['name']);
                // ekstensi yg dibolehkan .pdf
                $allowed_mime_type_arr = array('application/pdf');

                // kalau file berbentuk pdf
                if (in_array($mime, $allowed_mime_type_arr)) {

                    // nama file (1)
                    $nama = $this->CI->session->userdata(sha1('cet4k') . '_OriNFile');

                    // ambil ukuran file (2)
                    $ukuran = $this->FileSize($informasiFile['server_path']) . '<br/>';

                    // ekstensi (3)
                    $ekstensi = 'pdf';

                    // total halaman (4)
                    $halaman = $this->countPages($informasiFile['server_path']);

                    // Request Api tinta
                    $IDTinta = base64_decode($this->CI->session->userdata(sha1('cet4k') . '_tinta'));
                    $Request = $this->CI->api->get('warna_tinta/get_warna_tinta', 'is_aktif=1&id_warna_tinta=' . $IDTinta)['data'][0];

                    // harga tinta
                    $HargaTinta = $Request['harga'];

                    // warna tinta
                    $WarnaTinta = $Request['nama'];

                    // harga print
                    $HargaPrint = $halaman * $HargaTinta;
                    $additionalMessage = '';
                    if ($HargaPrint <= 10000) {
                        $additionalMessage = "<br/><div><b class='text-danger text-center'>Mohon maaf <br/> print dibawah Rp.10.000 akan dikenakan saldo minimal yaitu Rp.10.000 </b></div><br/>";
                        $HargaPrint = 10000;
                    }
                    return [
                        'nama'       => $nama,
                        'ukuran'     => $ukuran,
                        'ekstensi'   => $ekstensi,
                        'halaman'    => $halaman,
                        'HargaTinta' => $HargaTinta,
                        'WarnaTinta' => $WarnaTinta,
                        'HargaPrint' => $HargaPrint,
                        'addMessage' => $additionalMessage
                    ];
                }
            }
        }

        // kalau salah
        return false;
    }

    public function XssClean($data)
    {
        // Fix &entity\n;
        $data = str_replace(array('&amp;', '&lt;', '&gt;'), array('&amp;amp;', '&amp;lt;', '&amp;gt;'), $data);
        $data = preg_replace('/(&#*\w+)[\x00-\x20]+;/u', '$1;', $data);
        $data = preg_replace('/(&#x*[0-9A-F]+);*/iu', '$1;', $data);
        $data = html_entity_decode($data, ENT_COMPAT, 'UTF-8');

        // Remove any attribute starting with "on" or xmlns
        $data = preg_replace('#(<[^>]+?[\x00-\x20"\'])(?:on|xmlns)[^>]*+>#iu', '$1>', $data);

        // Remove javascript: and vbscript: protocols
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=[\x00-\x20]*([`\'"]*)[\x00-\x20]*j[\x00-\x20]*a[\x00-\x20]*v[\x00-\x20]*a[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2nojavascript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*v[\x00-\x20]*b[\x00-\x20]*s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:#iu', '$1=$2novbscript...', $data);
        $data = preg_replace('#([a-z]*)[\x00-\x20]*=([\'"]*)[\x00-\x20]*-moz-binding[\x00-\x20]*:#u', '$1=$2nomozbinding...', $data);

        // Only works in IE: <span style="width: expression(alert('Ping!'));"></span>
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?expression[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?behaviour[\x00-\x20]*\([^>]*+>#i', '$1>', $data);
        $data = preg_replace('#(<[^>]+?)style[\x00-\x20]*=[\x00-\x20]*[`\'"]*.*?s[\x00-\x20]*c[\x00-\x20]*r[\x00-\x20]*i[\x00-\x20]*p[\x00-\x20]*t[\x00-\x20]*:*[^>]*+>#iu', '$1>', $data);

        // Remove namespaced elements (we do not need them)
        $data = preg_replace('#</*\w+:\w[^>]*+>#i', '', $data);

        do {
            // Remove really unwanted tags
            $old_data = $data;
            $data = preg_replace('#</*(?:applet|b(?:ase|gsound|link)|embed|frame(?:set)?|i(?:frame|layer)|l(?:ayer|ink)|meta|object|s(?:cript|tyle)|title|xml)[^>]*+>#i', '', $data);
        } while ($old_data !== $data);

        // we are done...
        return empty($data) ? '-' : $data;
    }

    public function GetDay($DayName)
    {
        $tampung = '';
        switch ($DayName) {
            case 'Sun,':
                $tampung = 'Minggu';
                break;
            case 'Mon,':
                $tampung = 'Senin';
                break;
            case 'Tue,':
                $tampung = 'Selasa';
                break;
            case 'Wed,':
                $tampung = 'Rabu';
                break;
            case 'Thu,':
                $tampung = 'Kamis';
                break;
            case 'Fri,':
                $tampung = 'Jum\'at';
                break;
            case 'Sat,':
                $tampung = 'Sabtu';
                break;
        }

        return $tampung;
    }

    public function GetMonth($MonthName)
    {
        $tampung = '';
        switch ($MonthName) {
            case 'Jan':
                $tampung = 'januari';
                break;
            case 'Feb':
                $tampung = 'februari';
                break;
            case 'Mar':
                $tampung = 'maret';
                break;
            case 'Apr':
                $tampung = 'april';
                break;
            case 'May':
                $tampung = 'mei';
                break;
            case 'Jun':
                $tampung = 'juni';
                break;
            case 'Jul':
                $tampung = 'juli';
                break;
            case 'Aug':
                $tampung = 'agustus';
                break;
            case 'Sept':
                $tampung = 'september';
                break;
            case 'Oct':
                $tampung = 'oktober';
                break;
            case 'Nov':
                $tampung = 'november';
                break;
            case 'Dec':
                $tampung = 'desember';
                break;
        }
        return $tampung;
    }

    public function get_client_ip()
    {
        $ipaddress = '';
        if (getenv('HTTP_CLIENT_IP'))
            $ipaddress = getenv('HTTP_CLIENT_IP');
        else if (getenv('HTTP_X_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
        else if (getenv('HTTP_X_FORWARDED'))
            $ipaddress = getenv('HTTP_X_FORWARDED');
        else if (getenv('HTTP_FORWARDED_FOR'))
            $ipaddress = getenv('HTTP_FORWARDED_FOR');
        else if (getenv('HTTP_FORWARDED'))
            $ipaddress = getenv('HTTP_FORWARDED');
        else if (getenv('REMOTE_ADDR'))
            $ipaddress = getenv('REMOTE_ADDR');
        else
            $ipaddress = 'IP tidak dikenali';
        return $ipaddress;
    }

    // Mendapatkan jenis web browser pengunjung
    function get_client_browser()
    {
        $browser = '';
        if (strpos($_SERVER['HTTP_USER_AGENT'], 'Netscape'))
            $browser = 'Netscape';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Firefox'))
            $browser = 'Firefox';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Chrome'))
            $browser = 'Chrome';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'Opera'))
            $browser = 'Opera';
        else if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE'))
            $browser = 'Internet Explorer';
        else
            $browser = 'Other';
        return $browser;
    }
    public function Encode($string, $count = 7)
    {
        $tampung = [];
        for ($x = 0; $x < $count; $x++) {
            if (count($tampung) == 0) $tampung[] = base64_encode($string);
            else $tampung[] = base64_encode($tampung[$x - 1]);
        }

        return str_replace('=', '', ($tampung[count($tampung) - 1]));
    }

    public function Decode($stringDecode, $count, $RemoveSalt = '')
    {
        $tampung = [];
        for ($x = 0; $x < $count; $x++) {
            if (count($tampung) == 0) $tampung[] = base64_decode($stringDecode);
            else $tampung[] = base64_decode($tampung[$x - 1]);
        }

        return str_replace('=', '', ($tampung[count($tampung) - 1]));
    }
    public function UrlMedia($link, $file)
    {
        return $this->CI->config->item('bisaUrl') . $link . "/media/" . $file;
        // return "https://ehosdev.javafirst.id/elearning_dev/" . $link . "/media/" . $file;
    }
    public function Media($link, $file)
    {
        return "https://gate.bisaai.id/bisa_ai_vcon_v2/" . $link . "/media/" . $file;
    }
}
