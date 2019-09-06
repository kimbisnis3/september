<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Boardman extends CI_Controller {

    public $table       = 'm_boardman';
    public $foldername  = 'boardman';
    public $indexpage   = 'boardman/v_boardman';
    function __construct() {
        parent::__construct();
        include(APPPATH.'libraries/sessionakses.php');
    }
    function index(){
        $this->load->view(api_url().$this->indexpage);
    }

    public function getall(){
        $this->db->order_by('id', 'asc');
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
        $d['nama']      = $this->input->post('nama');
        $d['jabatan']   = $this->input->post('jabatan');
        $d['fb']        = $this->input->post('fb');
        $d['twitter']   = $this->input->post('twitter');
        $d['linkedin']  = $this->input->post('linkedin');
        $d['slug']      = slug($this->input->post('nama'));
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

        $d['nama']      = $this->input->post('nama');
        $d['jabatan']   = $this->input->post('jabatan');
        $d['fb']        = $this->input->post('fb');
        $d['twitter']   = $this->input->post('twitter');
        $d['linkedin']  = $this->input->post('linkedin');
        $d['slug']      = slug($this->input->post('nama'));
        $w['id'] = $this->input->post('id');

        $result = $this->db->update($this->table,$d,$w);
        $r['sukses']    = $result ? 'success' : 'fail' ;
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
