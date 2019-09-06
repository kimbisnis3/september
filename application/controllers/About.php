<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class About extends CI_Controller {

	public $table       = 'm_about';
	public $aktifmenu	  = 'about';
	public $menu       	= 'about';
	public $mainpage	  = 'about/v_about';

    function __construct(){
    	parent::__construct();

    }
  	public function index(){
        $data['about_1'] = $this->db->get_where($this->table,array('kode' => 'about_1'))->row();
        $data['about_2'] = $this->db->get_where($this->table,array('kode' => 'about_2'))->row();
        $data['about_3'] = $this->db->get_where($this->table,array('kode' => 'about_3'))->row();
        $data['about_4'] = $this->db->get_where($this->table,array('kode' => 'about_4'))->row();

        $data['teksaboutus'] = $this->db->get_where('t_config_text',array('tipe' => 'elteksabout'))->row();
        $data['boardman'] = $this->db->get_where('t_config_text',array('tipe' => 'elboardman'))->row();
		    $this->load->view($this->mainpage,$data);
    }


}
