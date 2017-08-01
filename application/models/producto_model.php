<?php

class Producto_model extends CI_Model{
    public function __construct() {
        parent::__construct();
        
    }
    
    function listar_productos(){
        $consul = $this->db->get('producto');
       
        return $consul->result();
    }
}