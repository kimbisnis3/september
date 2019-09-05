<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Berita extends CI_Controller {

	public $table       = 'm_berita';
	public $aktifmenu	  = 'berita';
	public $menu       	= 'berita';
	public $mainpage	  = 'berita/v_berita';
	public $detpage		  = 'berita/v_berita_det';

function __construct(){
	parent::__construct();

}
	public function index()
	{
		// $this->load->view('template/header');
		$page 	= ($this->input->get('page') == '' || $this->input->get('page') == null) ? 1 : $this->input->get('page');
		$limit 	= 3;
		$offset = ($page - 1) * $limit;
		$data['countdata'] 	= $this->db->query("select * from m_berita where aktif = 1 ")->num_rows();
		$data['maindata'] 	= $this->db->query("select * from m_berita where aktif = 1 LIMIT {$limit} OFFSET {$offset}")->result();
		$data['currentpage']= $page;
		$data['limit'] 		  = $limit;
		$data['numofpage'] 	= ceil($data['countdata'] / $limit);
		$data['menu'] 		  = $this->menu;
		$data['aktifmenu'] 	= $this->aktifmenu;
		if ($data['countdata'] > 0) {
			$this->load->view($this->mainpage,$data);
		} else {
			$this->load->view('template/datakosong');
		}
		// $this->load->view('template/footer');
		// $this->load->view('template/js');
    }

    public function detail($slug=null)
  	{
  		$data['countdata'] 	= $this->db->query("select * from m_berita where aktif = 1 and slug = '{$slug}'")->num_rows();
  		$data['maindata'] 	= $this->db->query("select * from m_berita where aktif = 1 and slug = '{$slug}'")->row();
  		$data['menu'] 		  = $this->menu;
  		$data['aktifmenu'] 	= $this->aktifmenu;
  		if ($data['countdata'] > 0) {
  			$this->load->view($this->detpage,$data);
  		} else {
  			$this->load->view('template/datakosong');
  		}
  	}


}
