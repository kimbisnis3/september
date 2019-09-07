<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {

    public $table       = 'm_contact';
    public $foldername  = '';
    public $indexpage   = 'contact/v_contact';
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

    public function deletedata()
    {
        $w['id'] = $this->input->post('id');
        $result = $this->db->delete($this->table,$w);
        $r['sukses'] = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }
}
