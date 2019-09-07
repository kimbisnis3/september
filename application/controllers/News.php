<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class News extends CI_Controller {

	public $table       = '';
	public $aktifmenu	  = '';
	public $menu       	= 'news';
	public $mainpage	  = 'news/v_news';

    function __construct(){
    	parent::__construct();

    }

		public function index() {
			$page 	= ($this->input->get('page') == '' || $this->input->get('page') == null) ? 1 : $this->input->get('page');
			$limit 	= 6;
			$offset = ($page - 1) * $limit;
			$data['countdata'] 	= $this->db->query("select * from m_news ")->num_rows();
			$data['news'] 	= $this->db->query("select * from m_news LIMIT {$limit} OFFSET {$offset}")->result();
			$data['currentpage']= $page;
			$data['limit'] 			= $limit;
			$data['numofpage'] 	= ceil($data['countdata'] / $limit);
			$data['menu'] 			= $this->menu;
			$data['aktifmenu'] 	= $this->aktifmenu;
			$this->load->view($this->mainpage,$data);
		}
  	public function xindex(){
        $data['news'] = $this->db->get('m_news')->result();
		    $this->load->view($this->mainpage,$data);
    }


}
