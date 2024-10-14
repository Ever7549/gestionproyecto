<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

    // Método para obtener la lista de proyectos
    public function obtener_estudiantes()
    {
        // Define la consulta SQL corregida usando la tabla intermedia 'estudiantecarrera'
        $sql = "SELECT e.id, e.usuario, e.ci, e.email, e.telefono, c.nombreCarrera,
                CONCAT(e.nombre, ' ', e.primerApellido, ' ', e.segundoApellido) AS estudiante_info
                FROM gestionproyecto2.estudiante e
                JOIN gestionproyecto2.estudiantecarrera ec ON e.id = ec.estudiante_id
                JOIN gestionproyecto2.carrera c ON ec.carrera_id = c.id
                WHERE e.estado = 1"; 
               
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
    
    // Método para agregar un nuevo proyecto
    public function agregar_estudiante($data)
    {
        $this->db->insert('estudiante', $data);
    }

    // Método para cambiar el estado de un proyecto (en lugar de eliminar)
    public function cambiar_estado_estudiante($id)
    {
        // Obtenemos el estado actual del proyecto
        $this->db->select('estado');
        $this->db->from('estudiante');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            // Obtenemos el estado actual
            $estado_actual = $query->row()->estado;
    
            // Alternamos el estado
            $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
    
            // Actualizamos el estado en la base de datos
            $this->db->where('id', $id);
            $this->db->update('estudiante', array('estado' => $nuevo_estado));
    
            // Puedes agregar un mensaje de éxito aquí si lo deseas
            // Ejemplo: $this->session->set_flashdata('mensaje', 'Estado actualizado con éxito.');
        } else {
            // Manejar el caso en que no se encuentra el proyecto
            // Ejemplo: $this->session->set_flashdata('error', 'Proyecto no encontrado.');
        }
    }
    

    // Método para modificar un proyecto
    public function recuperar_estudiante($id) {
        // Seleccionamos las columnas necesarias de la tabla estudiante y la tabla intermedia estudiante_carrera
        $this->db->select('estudiante.*, estudiantecarrera.carrera_id');
        $this->db->from('estudiante');
        $this->db->join('estudiantecarrera', 'estudiante.id = estudiantecarrera.estudiante_id', 'left'); // Ajustar según tu estructura
        $this->db->where('estudiante.id', $id);
        
        $query = $this->db->get();
        return $query->row(); // Esto devuelve un objeto
    }
    


    public function modificar_estudiante($id, $data, $carrera_id)
    {
    $this->db->where('id', $id);
    $this->db->update('estudiante', $data);
            // Actualiza o inserta la relación en la tabla estudiante_carrera
        // Primero, eliminamos la relación existente
        $this->db->where('estudiante_id', $id);
        $this->db->delete('estudiantecarrera');
    
        // Luego, insertamos la nueva relación
        if (!empty($carrera_id)) {
            $this->db->insert('estudiantecarrera', array(
                'estudiante_id' => $id,
                'carrera_id' => $carrera_id
            ));
        }
    }


    public function eliminar_estudiante($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('estudiante'); // Eliminar el proyecto de la base de datos
    }

    public function obtener_estudiantes_disponibles() {
        $this->db->select('*');
        $this->db->from('estudiante');
        $this->db->where('estado', 1); // Proyectos disponibles
        return $this->db->get()->result();
    }

    public function buscar_por_usuario($usuario) {
        return $this->db->get_where('estudiante', array('usuario' => $usuario))->row();
    }

}
