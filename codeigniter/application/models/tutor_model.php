<?php
class Tutor_model extends CI_Model {

    public function obtener_tutores() {
        //$this->db->where('estado', 1); // Suponiendo que 'estado' = 1 significa activo
        $query = $this->db->get('tutor');
        return $query->result();
    }
}