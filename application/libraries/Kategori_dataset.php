<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Kategori_dataset
{
    public $kat;

    public function get_category($data)
    {
        switch ($data) {
            case 'w':
            $this->kat = 'Web Development';
            
            break;
            case 'd':
            $this->kat = 'Design';
           
            break;
            case 'p':
            $this->kat = 'Photography & Videography';
           
            break;
            case 'm':
            $this->kat = 'Mobile App';
           
            break;
            default:
            $this->kat = 'No found';
           
        }
        return array('kat'=>$this->kat);
    }
}