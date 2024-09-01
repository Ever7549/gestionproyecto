<?php
class Carrera_model extends CI_Model {

    public function obtener_carreras() {
       // $this->db->where('estado', 1); // Suponiendo que 'estado' = 1 significa activo
        $query = $this->db->get('carrera');
        return $query->result();
    }
}