<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_producto extends CI_Controller {

    public function index() {
        $this->load->view('includes/cabecera.php');
        $this->load->view('includes/mainmenu.php');
        $this->load->view('producto');
        $this->load->view('includes/rodapie.php');
    }

}
