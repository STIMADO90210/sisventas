<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_home extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('includes/cabecera.php');
        $this->load->view('includes/mainmenu.php');
        $this->load->view('index');
        $this->load->view('includes/rodapie.php');
    }

}
