<?php
class Prestamo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Crear un nuevo préstamo
    public function crear_prestamo($data_prestamo, $data_prestamo_estudiante, $data_prestamo_proyecto) {
        $this->db->trans_start();  // Iniciar la transacción

        // Insertar en la tabla `prestamo`
        $this->db->insert('prestamo', $data_prestamo);
        $prestamo_id = $this->db->insert_id();  // Obtener el ID del préstamo creado

        // Insertar en la tabla `prestamoestudiante`
        foreach ($data_prestamo_estudiante as &$estudiante) {
            $estudiante['prestamo_id'] = $prestamo_id;
        }
        $this->db->insert_batch('prestamoestudiante', $data_prestamo_estudiante);

        // Insertar en la tabla `prestamoproyecto`
        foreach ($data_prestamo_proyecto as &$proyecto) {
            $proyecto['prestamo_id'] = $prestamo_id;
        }
        $this->db->insert_batch('prestamoproyecto', $data_prestamo_proyecto);

        $this->db->trans_complete();  // Completar la transacción

        if ($this->db->trans_status() === FALSE) {
            return false;  // Si algo falló, cancelar la transacción
        }

        return $prestamo_id;  // Retornar el ID del préstamo creado
    }

    // Obtener todos los préstamos
    public function obtener_prestamos() {
        $this->db->select('p.*, e.nombre, e.primerApellido, e.segundoApellido');
        $this->db->from('prestamo p');
        $this->db->join('prestamoestudiante pe', 'p.id = pe.prestamo_id');
        $this->db->join('estudiante e', 'pe.estudiante_id = e.id');
        $query = $this->db->get();
        return $query->result();
    }

    // Obtener detalles de un préstamo por su ID
    public function obtener_prestamo_por_id($id) {
        $this->db->select('p.*, e.nombre, e.primerApellido, e.segundoApellido');
        $this->db->from('prestamo p');
        $this->db->join('prestamoestudiante pe', 'p.id = pe.prestamo_id');
        $this->db->join('estudiante e', 'pe.estudiante_id = e.id');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Actualizar préstamo
    public function actualizar_prestamo($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('prestamo', $data);
    }

    // Eliminar préstamo
    public function eliminar_prestamo($id) {
        $this->db->where('id', $id);
        return $this->db->delete('prestamo');
    }
}
