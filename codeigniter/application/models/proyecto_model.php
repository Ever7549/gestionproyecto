<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

    // Método para obtener la lista de proyectos
    public function obtener_proyectos()
    {
        // Define la consulta SQL
        $sql = "SELECT p.id,p.codigo,p.titulo,p.estudiante1,p.estudiante2,p.estudiante3,p.gestion,p.referencia,p.resumen,
                    p.ubicacion,c.nombreCarrera,m.nombreModalidad,
                CONCAT(t.profesion, ' ', t.nombre, ' ', t.primerApellido, ' ', t.segundoApellido)AS tutor_info
            FROM gestionproyecto2.proyecto p
            JOIN gestionproyecto2.carrera c ON p.carrera_id = c.id
            JOIN gestionproyecto2.modalidad m ON p.modalidad_id = m.id
            JOIN gestionproyecto2.tutor t ON p.tutor_id = t.id";
        // Ejecuta la consulta
        $query = $this->db->query($sql);
        // Devuelve el resultado como un array de objetos
        return $query->result();
    }
    
        // Método para obtener todas las carreras
    public function obtener_carreras()
    {
        $this->db->select('id, nombreCarrera');
        $this->db->from('carrera');
        $query = $this->db->get();
        return $query->result(); // Devuelve el resultado como un array de objetos
    }
    public function obtener_modalidades()
    {
        $this->db->select('id, nombreModalidad');
        $this->db->from('modalidad');
        $query = $this->db->get();
        return $query->result(); // Devuelve el resultado como un array de objetos
    }

    // Método para obtener todos los tutores
    public function obtener_tutores()
    {
        $this->db->select('id, CONCAT(profesion," ",nombre," ", primerApellido," ",segundoApellido) as nombre_tutor');
        $this->db->from('tutor');
        $query = $this->db->get();
        return $query->result(); // Devuelve el resultado como un array de objetos
    }
    
    // Método para agregar un nuevo proyecto
    public function agregar_proyecto($data)
    {
        $this->db->insert('proyecto', $data);
    }

    // Método para cambiar el estado de un proyecto (en lugar de eliminar)
    public function cambiar_estado_proyecto($id)
    {
        // Obtenemos el estado actual del proyecto
        $this->db->select('estado');
        $this->db->from('proyecto');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            // Obtenemos el estado actual
            $estado_actual = $query->row()->estado;
    
            // Alternamos el estado
            $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
    
            // Actualizamos el estado en la base de datos
            $this->db->where('id', $id);
            $this->db->update('proyecto', array('estado' => $nuevo_estado));
    
            // Puedes agregar un mensaje de éxito aquí si lo deseas
            // Ejemplo: $this->session->set_flashdata('mensaje', 'Estado actualizado con éxito.');
        } else {
            // Manejar el caso en que no se encuentra el proyecto
            // Ejemplo: $this->session->set_flashdata('error', 'Proyecto no encontrado.');
        }
    }
    

    // Método para recuperar un proyecto por ID

    public function recuperar_proyecto($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('proyecto');
        return $query->row(); // Debería devolver una fila de resultados
    }

    // Método para modificar un proyecto

    public function modificar_proyecto($id, $data)
    {
    $this->db->where('id', $id);
    $this->db->update('proyecto', $data);
    }
    public function eliminar_proyecto($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('proyecto'); // Eliminar el proyecto de la base de datos
    }

}
