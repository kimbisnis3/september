<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {
    
    public $table       = 'm_berita';
    public $foldername  = 'berita';
    public $indexpage   = 'berita/v_berita';
    function __construct() {
        parent::__construct();
    }
    function index(){
        // include(APPPATH.'libraries/sessionakses.php');
        $this->load->view(api_url().$this->indexpage);  
    }

    public function getall(){
        $this->db->order_by('id', 'desc');
        $result = $this->db->get($this->table)->result();
        echo json_encode(array('data' => $result));
    }

    public function edit()
    {
        $w['id']= $this->input->post('id');
        $data   = $this->db->get_where($this->table,$w)->row();
        echo json_encode($data);
    }

    public function savedata()
    {   
        $image = $this->libre->goUpload('image','img-'.time(),$this->foldername);
        $d['image']     = $image;
        $d['judul']     = $this->input->post('judul');
        $d['subjudul']  = $this->input->post('subjudul');
        $d['artikel']   = $this->input->post('artikel');
        $d['ket']       = $this->input->post('ket');
        $d['slug']      = slug($this->input->post('judul'));
        $result = $this->db->insert($this->table,$d);
        $r['sukses'] = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }

    function updatedata()
    {
        if (!empty($_FILES['image']['name'])) {
            $path = $this->libre->goUpload('image','img-'.time(),$this->foldername);
            $d['image'] = $path;
            $oldpath = $this->input->post('path');
            @unlink(".".$oldpath);
        } else {
            $d['image'] = $this->input->post('path');
        }

        $d['judul']     = $this->input->post('judul');
        $d['subjudul']  = $this->input->post('subjudul');
        $d['artikel']   = $this->input->post('artikel');
        $d['ket']       = $this->input->post('ket');
        $d['slug']      = slug($this->input->post('judul'));
        $w['id'] = $this->input->post('id');

        $result = $this->db->update($this->table,$d,$w);
        $r['sukses']    = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }

    function aktifdata() {
        $w['id'] = $this->input->post('id');   
        $s = $this->db->get_where($this->table,$w)->row()->aktif;
        $s == 1 ? $status = 0 : $status =1;
        $d['aktif'] = $status;
        $result = $this->db->update($this->table,$d,$w);
        $r['sukses'] = $result > 0 ? 'success' : 'fail' ;
        echo json_encode($r);
    }

    public function deletedata()
    {
        $w['id'] = $this->input->post('id');
        $path   = $this->db->get_where($this->table,$w)->row();
        @unlink('.'.$path->image);
        $result = $this->db->delete($this->table,$w);
        $r['sukses'] = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }
}