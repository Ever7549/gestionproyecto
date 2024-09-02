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
        $this->db->select('modalidad.idmodalidad, modalidad.nombreModalidad');
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
     public function cambiar_estado_modalidad($idmodalidad, $estado)
     {
         $this->db->where('idmodalidad', $idmodalidad);
         $this->db->update('modalidad', array('estado' => $estado));
     }
 
     // Método para recuperar un proyecto por ID
 
     public function recuperar_modalidad($idmodalidad) {
         $this->db->where('idmodalidad', $idmodalidad);
         $query = $this->db->get('modalidad');
         return $query->row(); // Debería devolver una fila de resultados
     }
 
     // Método para modificar un proyecto
 
     public function modificar_modalidad($idmodalidad, $data)
     {
     $this->db->where('idmodalidad', $idmodalidad);
     $this->db->update('modalidad', $data);
     }
     public function eliminar_modalidad($idModalidad)
     {
         $this->db->where('idmodalidad', $idModalidad);
         $this->db->delete('modalidad'); // Eliminar el proyecto de la base de datos
     }
}