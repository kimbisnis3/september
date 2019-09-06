<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {

	public $table       = 't_config_image';
	public $aktifmenu	  = 'home';
	public $menu       	= 'home';
	public $mainpage	  = 'home/v_home';

    function __construct(){
    	parent::__construct();

    }
  	public function index(){
        $this->db->where('tipe','ss');
        $data['slider'] = $this->db->get($this->table)->result();
				$data['elhome'] = $this->db->get_where('t_config_text',array('tipe' => 'elhome' ))->row();
				$data['elhome2'] = $this->db->get_where('t_config_text',array('tipe' => 'elhome2' ))->row();
				$data['ellastest'] = $this->db->get_where('t_config_text',array('tipe' => 'ellastest' ))->row();
		    $this->load->view($this->mainpage,$data);
    }


}
