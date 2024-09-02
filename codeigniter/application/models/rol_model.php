<?php
class Rol_model extends CI_Model {

    public function obtener_rols() 
    {
       $this->db->where('estado', 1); // Suponiendo que 'estado' = 1 significa activo
        $query = $this->db->get('rol');
        return $query->result();
    }
}