<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/** If empty null helper **/
if (!function_exists('status')) {

    function api_url()
    {
        return 'adm/';
    }

    function admin_url()
    {
        return 'panel/';
    }

    function ien($text)
    {
        if ($text=='') {
            $text = NULL;
        }
        else {
            $text = $text;
        }
       
        return $text;
    }

    function aktif($text)
    {
        if ($text=='0' || $text=='NULL' || $text=='') {
            $text = '<span class="label label-danger">Tidak Aktif</span>';
        }
        else {
            $text = '<span class="label label-success">Aktif</span>';
        }
       
        return $text;
    }

    function id_date($date)
    {
        if ($date != NULL) {
            
        $indonesian_month = array("Jan", "Feb", "Mar",
            "Apr", "Mei", "Jun",
            "Jul", "Agt", "Sep",
            "Okto", "Nov", "Des");
        $year        = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
        $month       = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
        $currentdate = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
        $result = $currentdate . " " . $indonesian_month[(int) $month - 1] . " " . $year;

        return $result;
    }else {
        
    }
    }
    
    function indonesian_date($date)
    {
        // fungsi atau method untuk mengubah tanggal ke format indonesia
        // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
        $indonesian_month = array("Januari", "Februari", "Maret",
            "April", "Mei", "Juni",
            "Juli", "Agustus", "September",
            "Oktober", "November", "Desember");
        $year        = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
        $month       = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
        $currentdate = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
        $result = $currentdate . " " . $indonesian_month[(int) $month - 1] . " " . $year;
        return $result;
    }

    function dfh($text)
    {
        if ($text=='') {
            $text = NULL;
        }
        else {
            $text = date('Y-m-d', strtotime($text));
        }
       
        return $text;
    }

    function tip($text)
    {
        if ($text=='') {
            $text = NULL;
        }
        else {
            $text = $this->input->post($text);
        }
       
        return $text;
    }

    function checkcolor($text)
    {
        if ($text=='t') {
            $text = '<span class="label label-success" style="align: center;"><i class="glyphicon glyphicon-ok" aria-hidden="true"></i></span>';
        }
        else {
            $text = '<span class="label label-danger" style="align: center;"><i class="glyphicon glyphicon-remove" aria-hidden="true"></i></span>';
        }
       
        return $text;
    }

    function showimage($i){
         
        if ($i == NULL){
            $i = "(Noimage)";
        } else {
            $img = base_url().''.$i;
            $i = "<img style='max-width : 60px;' src='".$img."'>";
        }

        return $i;
    }

    function dlimage($i){
         
        if ($i == NULL){
            $i = "(Noimage)";
        } else {
            $img = base_url().''.$i;
            $i = '<a href="'.$img.'" title="ImageName"  download="img_'.time().'" ><img style="max-width : 60px;" src="'.$img.'" alt="ImageName"></a>';
        }

        return $i;
    }

    function query_to_var($query,$filter) {
        $find       = array_keys($filter);
        $replace    = array_values($filter);
        $n          = str_replace($find, $replace, $query);
        return $n ;
    }

    function truefalse($data, $labeltrue, $labelfalse)
    {
        if ($data=='0' || $data=='NULL' || $data=='' || $data=='f') {
            $data = '<span class="label label-danger">'.$labelfalse.'</span>';
        }
        else {
            $data = '<span class="label label-success">'.$labeltrue.'</span>';
        }
       
        return $data;
    }

    function slug($text)
    {
        $text = preg_replace('~[^\\pL\d]+~u', '-', $text);
        $text = trim($text, '-');
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = strtolower($text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        if (empty($text))
        {
            return 'n-a';
        }
        return $text;
    }

    function btnud($text)
    {
        $text = ("<button type='button' class='btn btn-sm btn-warning btn-flat' data-toggle='tooltip' data-placement='top' title='Edit' onclick='edit_data(".$text.")'><i class='glyphicon glyphicon-pencil'></i></button>
            <button type='button' class='btn btn-sm btn-danger btn-flat' data-toggle='tooltip' data-placement='top' title='Hapus' onclick='hapus_data(".$text.")'><i class='glyphicon glyphicon-trash'></i></button>");
     
        return $text;
    }

    function btnuda($text)
    {
        $text = ("
            <button type='button' class='btn btn-sm btn-warning btn-flat' data-placement='top' title='Edit' onclick='edit_data(".$text.")'><i class='glyphicon glyphicon-pencil'></i></button>
            <button type='button' class='btn btn-sm btn-danger btn-flat' data-placement='top' title='Hapus' onclick='hapus_data(".$text.")'><i class='glyphicon glyphicon-trash'></i></button>
            <button type='button' class='btn btn-sm btn-success btn-flat' data-placement='top' title='Aktif' onclick='aktif_data(".$text.")'><i class='glyphicon glyphicon-ok'></i></button>
            ");
     
        return $text;
    }

    function btnudax($text)
    {
        $text = ("
            <button type='button' class='btn btn-sm btn-warning btn-flat' data-placement='top' title='Edit' onclick='edit_data(".$text.")'><i class='glyphicon glyphicon-pencil'></i></button>
            <button type='button' class='btn btn-sm btn-danger btn-flat' data-placement='top' title='Hapus' onclick='hapus_data(".$text.")'><i class='glyphicon glyphicon-trash'></i></button>
            <button type='button' class='btn btn-sm btn-success btn-flat' data-placement='top' title='Aktif' onclick='aktif_data(".$text.")'><i class='glyphicon glyphicon-ok'></i></button>
            <button type='button' class='btn btn-sm btn-primary btn-flat' data-placement='top' title='Unggulan' onclick='tampil_data(".$text.")'><i class='glyphicon glyphicon-star'></i></button>
            ");
     
        return $text;
    }

    function btnudavue($text)
    {
        $text = ("
            <button type='button' class='btn btn-sm btn-warning btn-flat' data-placement='top' title='Edit' @click='edit_data(".$text.")'><i class='glyphicon glyphicon-pencil'></i></button>
            <button type='button' class='btn btn-sm btn-danger btn-flat' data-placement='top' title='Hapus' @click='hapus_data(".$text.")'><i class='glyphicon glyphicon-trash'></i></button>
            <button type='button' class='btn btn-sm btn-success btn-flat' data-placement='top' title='Aktif' @click='aktif_data(".$text.")'><i class='glyphicon glyphicon-ok'></i></button>
            ");
     
        return $text;
    }

    function btnu($text)
    {
        $text = ("<button type='button' class='btn btn-sm btn-warning btn-flat' data-toggle='tooltip' data-placement='top' title='Edit' onclick='edit_data(".$text.")'><i class='glyphicon glyphicon-pencil'></i></button>");
     
        return $text;
    }

    function btnd($text)
    {
        $text = ("
            <button type='button' class='btn btn-sm btn-danger btn-flat' data-placement='top' title='Hapus' onclick='hapus_data(".$text.")'><i class='glyphicon glyphicon-trash'></i></button>
            ");
     
        return $text;
    }

    function btndownload($text)
    {
        if ($text != '' || $text != null) {
            $text = ("
            <button type='button' class='btn btn-sm btn-primary btn-flat' onclick='unduh_data(\"{$text}\")'><i class='fa fa-download'></i> Unduh</button>
            ");
        } else {
            $text = ("File Tidak Ada");
        }
        

        return $text;
    }

}