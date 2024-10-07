<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidad_model extends CI_Model {
    public function listademodalidades()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get(); // devuelve resultado
    }
    public function obtener_modalidades() 
    {
        $this->db->select('modalidad.id, modalidad.nombreModalidad');
        $this->db->from('modalidad');  // Tabla principal
        $this->db->where('modalidad.estado', 1);  // Filtrar por tutores activos
        $query = $this->db->get();  // Ejecutar la consulta
        return $query->result();  // Devolver los resultados como un array de objetos
    }
     // Método para agregar un nuevo proyecto
     public function agregar_modalidad($data)
    {
         $this->db->insert('modalidad', $data);
    }
 
     // Método para cambiar el estado de un proyecto (en lugar de eliminar)
     public function cambiar_estado_modalidad($id)
     {
        // Obtenemos el estado actual del proyecto
        $this->db->select('estado');
        $this->db->from('modalidad');
        $this->db->where('id', $id);
        $query = $this->db->get();
       
        if ($query->num_rows() > 0) {
            // Obtenemos el estado actual
            $estado_actual = $query->row()->estado;
       
               // Alternamos el estado
            $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
       
               // Actualizamos el estado en la base de datos
            $this->db->where('id', $id);
            $this->db->update('modalidad', array('estado' => $nuevo_estado));
       
               // Puedes agregar un mensaje de éxito aquí si lo deseas
               // Ejemplo: $this->session->set_flashdata('mensaje', 'Estado actualizado con éxito.');
           } else {
               // Manejar el caso en que no se encuentra el proyecto
               // Ejemplo: $this->session->set_flashdata('error', 'Proyecto no encontrado.');
           }
     }
 
     // Método para recuperar un proyecto por ID
 
     public function recuperar_modalidad($id) {
         $this->db->where('id', $id);
         $query = $this->db->get('modalidad');
         return $query->row(); // Debería devolver una fila de resultados
     }
 
     // Método para modificar un proyecto
 
     public function modificar_modalidad($id, $data)
     {
     $this->db->where('id', $id);
     $this->db->update('modalidad', $data);
     }
     public function eliminar_modalidad($id)
     {
         $this->db->where('id', $id);
         $this->db->delete('modalidad'); // Eliminar el proyecto de la base de datos
     }
}