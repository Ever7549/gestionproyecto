<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

    public function validar($nombreUsuario,$contrasena){
        $contrasenaEncriptada = sha1($contrasena);
        $this->db->select('*');
        
        $this->db->from('usuario');
        $this->db->where('nombreUsuario',$nombreUsuario);
        $this->db->where('contrasena', $contrasenaEncriptada);
        $query = $this->db->get();
        return $query;;
    }

}
