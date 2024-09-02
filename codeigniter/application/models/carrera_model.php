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
        $this->db->select('carrera.idcarrera, carrera.nombreCarrera');
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
     public function cambiar_estado_carrera($idcarrera, $estado)
     {
         $this->db->where('idcarrera', $idcarrera);
         $this->db->update('carrera', array('estado' => $estado));
     }
 
     // Método para recuperar un proyecto por ID
 
     public function recuperar_carrera($idcarrera) {
         $this->db->where('idcarrera', $idcarrera);
         $query = $this->db->get('carrera');
         return $query->row(); // Debería devolver una fila de resultados
     }
 
     // Método para modificar un proyecto
 
     public function modificar_carrera($idcarrera, $data)
     {
     $this->db->where('idcarrera', $idcarrera);
     $this->db->update('carrera', $data);
     }
     public function eliminar_carrera($idCarrera)
     {
         $this->db->where('idcarrera', $idCarrera);
         $this->db->delete('carrera'); // Eliminar el proyecto de la base de datos
     }
}