<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landingpage extends CI_Controller {
    
    public $table       = '';
    public $judul       = 'Landing Page';
    public $indexpage   = 'v_landingpage.php';

    function __construct() {
        parent::__construct();
        // include(APPPATH.'libraries/sessionakses.php');
        $title      = $this->judul;
    }

    public function index(){
        $this->load->view(api_url().$this->indexpage);  
    }

    

}
