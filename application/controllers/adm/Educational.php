<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Educational extends CI_Controller {

    public $table       = 'm_educational';
    public $foldername  = 'educational';
    public $indexpage   = 'educational/v_educational';
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
        $d['judul']     = $this->input->post('judul');
        $d['artikel']   = $this->input->post('artikel');
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

        $d['judul']     = $this->input->post('judul');
        $d['artikel']   = $this->input->post('artikel');
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
