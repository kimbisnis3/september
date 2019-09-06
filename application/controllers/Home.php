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
		    $this->load->view($this->mainpage,$data);
    }


}
