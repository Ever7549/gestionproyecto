<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_model extends CI_Model {
    public function listadetutores()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get(); // devuelve resultado
    }
    public function obtene_tutores() 
    {
        $this->db->select("tutor.id,tutor.profesion,' ', tutor.nombre, ' ', tutor.primerApellido, ' ', tutor.segundoApellido");
        $this->db->from('tutor');  // Tabla principal
        $this->db->where('tutor.estado', 1);  // Filtrar por tutores activos
        $query = $this->db->get();  // Ejecutar la consulta
        return $query->result();  // Devolver los resultados como un array de objetos
    }
    public function obtener_tutores() 
    {
        $this->db->select("tutor.id, CONCAT(tutor.profesion,' ', tutor.nombre, ' ', tutor.primerApellido, ' ', tutor.segundoApellido) AS tutorCompleto");
        $this->db->from('tutor');  // Tabla principal
        $this->db->where('tutor.estado', 1);  // Filtrar por tutores activos
        $query = $this->db->get();  // Ejecutar la consulta
        return $query->result();  // Devolver los resultados como un array de objetos
    }


     // Método para agregar un nuevo proyecto
     public function agregar_tutor($data)
    {
         $this->db->insert('tutor', $data);
    }
 
     // Método para cambiar el estado de un proyecto (en lugar de eliminar)
     public function cambiar_estado_tutor($id)
     {
        // Obtenemos el estado actual del proyecto
        $this->db->select('estado');
        $this->db->from('tutor');
        $this->db->where('id', $id);
        $query = $this->db->get();
    
        if ($query->num_rows() > 0) {
            // Obtenemos el estado actual
            $estado_actual = $query->row()->estado;
    
            // Alternamos el estado
            $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
    
            // Actualizamos el estado en la base de datos
            $this->db->where('id', $id);
            $this->db->update('tutor', array('estado' => $nuevo_estado));
    
            // Puedes agregar un mensaje de éxito aquí si lo deseas
            // Ejemplo: $this->session->set_flashdata('mensaje', 'Estado actualizado con éxito.');
        } else {
            // Manejar el caso en que no se encuentra el proyecto
            // Ejemplo: $this->session->set_flashdata('error', 'Proyecto no encontrado.');
        }
     }
 
     // Método para recuperar un proyecto por ID
 
     public function recuperar_tutor($id) {
         $this->db->where('id', $id);
         $query = $this->db->get('tutor');
         return $query->row(); // Debería devolver una fila de resultados
     }
 
     // Método para modificar un proyecto
 
     public function modificar_tutor($id, $data)
     {
     $this->db->where('id', $id);
     $this->db->update('tutor', $data);
     }
     public function eliminar_tutor($id)
     {
         $this->db->where('id', $id);
         $this->db->delete('tutor'); // Eliminar el proyecto de la base de datos
     }
 
 
 
}