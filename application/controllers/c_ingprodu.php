<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_ingprodu extends CI_Controller {

    public function __construct() {
        parent::__construct();
       $this->load->library('form_validation');
    }

    public function index() {       
        //$data['productos']=$this->Producto_model->listar_productos();
        $this->load->view('includes/cabecera.php');
        $this->load->view('includes/mainmenu.php');
        $this->load->view('form_producto');
        $this->load->view('includes/rodapie.php');
    }
    
    
    

}