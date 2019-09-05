<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

    public $table       = 't_user';
    public $foldername  = '';
    public $indexpage   = 'user/v_user';
    function __construct() {
        parent::__construct();
        include(APPPATH.'libraries/sessionakses.php');
    }
    function index(){
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
        $d['user']  = $this->input->post('user');
        $d['pass']  = $this->input->post('pass');
        $d['nama']  = $this->input->post('nama');
        $d['alamat']= $this->input->post('alamat');
        $result = $this->db->insert($this->table,$d);
        $r['sukses'] = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }

    function updatedata()
    {
        $d['user']  = $this->input->post('user');
        $d['pass']  = $this->input->post('pass');
        $d['nama']  = $this->input->post('nama');
        $d['alamat']= $this->input->post('alamat');
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
        $result = $this->db->delete($this->table,$w);
        $r['sukses'] = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }
}
