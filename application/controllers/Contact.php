<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact extends CI_Controller {

	public $table       = '';
	public $aktifmenu	  = '';
	public $menu       	= 'contact';
	public $mainpage	  = 'contact/v_contact';

    function __construct(){
    	parent::__construct();

    }
  	public function index(){
        $data['elcontact1'] = $this->db->get_where('t_config_text',array('tipe' => 'elcontact1' ))->row();
        $data['elcontact2'] = $this->db->get_where('t_config_text',array('tipe' => 'elcontact2' ))->row();
        $configtext = 't_config_text';
        $data['elnohp']   = $this->db->get_where($configtext,array('tipe' => 'elnohp' ))->row()->teks;
        $data['elalamat'] = $this->db->get_where($configtext,array('tipe' => 'elalamat' ))->row()->teks;
        $data['elemail']  = $this->db->get_where($configtext,array('tipe' => 'elemail' ))->row()->teks;
		    $this->load->view($this->mainpage,$data);
    }

    function savedata() {
      $d['nama']    = $this->input->post('nama');
      $d['email']   = $this->input->post('email');
      $d['subject'] = $this->input->post('subject');
      $d['detail']  = $this->input->post('detail');

      $result = $this->db->insert('m_contact',$d);
      $r['sukses'] = $result ? 'success' : 'fail' ;
        echo json_encode($r);
    }


}
