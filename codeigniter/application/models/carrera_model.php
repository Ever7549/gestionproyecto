<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrera_model extends CI_Model {
    public function listadecarreras()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get(); // devuelve resultado
    }
    public function obtener_carreras() 
    {
        $this->db->select('carrera.id, carrera.nombreCarrera');
        $this->db->from('carrera');  // Tabla principal
        $this->db->where('carrera.estado', 1);  // Filtrar por tutores activos
        $query = $this->db->get();  // Ejecutar la consulta
        return $query->result();  // Devolver los resultados como un array de objetos
    }
     // Método para agregar un nuevo proyecto
     public function agregar_carrera($data)
    {
         $this->db->insert('carrera', $data);
    }
 
     // Método para cambiar el estado de un proyecto (en lugar de eliminar)
     public function cambiar_estado_carrera($id)
     {
        // Obtenemos el estado actual del proyecto
        $this->db->select('estado');
        $this->db->from('carrera');
        $this->db->where('id', $id);
        $query = $this->db->get();
       
        if ($query->num_rows() > 0) {
            // Obtenemos el estado actual
            $estado_actual = $query->row()->estado;
       
               // Alternamos el estado
            $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
       
               // Actualizamos el estado en la base de datos
            $this->db->where('id', $id);
            $this->db->update('carrera', array('estado' => $nuevo_estado));
       
               // Puedes agregar un mensaje de éxito aquí si lo deseas
               // Ejemplo: $this->session->set_flashdata('mensaje', 'Estado actualizado con éxito.');
           } else {
               // Manejar el caso en que no se encuentra el proyecto
               // Ejemplo: $this->session->set_flashdata('error', 'Proyecto no encontrado.');
           }
     }
 
     // Método para recuperar un proyecto por ID
 
     public function recuperar_carrera($id) {
         $this->db->where('id', $id);
         $query = $this->db->get('carrera');
         return $query->row(); // Debería devolver una fila de resultados
     }
 
     // Método para modificar un proyecto
 
     public function modificar_carrera($id, $data)
     {
     $this->db->where('id', $id);
     $this->db->update('carrera', $data);
     }
     public function eliminar_carrera($id)
     {
         $this->db->where('id', $id);
         $this->db->delete('carrera'); // Eliminar el proyecto de la base de datos
     }
}