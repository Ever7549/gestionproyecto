<?php
class Estudiante_model extends CI_Model {

    public function buscar_estudiantes($criterio) {
        $this->db->select('*');
        $this->db->from('estudiante');
        $this->db->like('usuario', $criterio);
        $this->db->or_like('nombre', $criterio);
        $this->db->or_like('primerApellido', $criterio);
        $this->db->or_like('segundoApellido', $criterio);
        $this->db->or_like('ci', $criterio);
        return $this->db->get()->result();
    }
}
?>
