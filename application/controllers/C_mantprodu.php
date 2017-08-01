<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class C_mantprodu extends CI_Controller {

    public function __construct() {
        parent::__construct();
       $this->load->model('Producto_model');
    }

    public function index() {       
        $data['productos']=$this->Producto_model->listar_productos();
        $this->load->view('includes/cabecera.php');
        $this->load->view('includes/mainmenu.php');
        $this->load->view('mantprodu',$data);
        $this->load->view('includes/rodapie.php');
    }
    
    
    

}
