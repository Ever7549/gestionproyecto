<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_model extends CI_Model {
    public function listadetutores()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get(); // devuelve resultado
    }
    public function obtener_tutores() 
    {
        $this->db->select('tutor.idtutor, tutor.nombres, tutor.apellidos, carrera.nombreCarrera as nombre_carrera, rol.nombreRol as nombre_rol');
        $this->db->from('tutor');  // Tabla principal
        $this->db->join('carrera', 'tutor.carrera_idcarrera = carrera.idcarrera');  // Unión con la tabla carrera
        $this->db->join('rol', 'tutor.rol_idrol = rol.idrol');  // Unión con la tabla rol
        $this->db->where('tutor.estado', 1);  // Filtrar por tutores activos
        $query = $this->db->get();  // Ejecutar la consulta
        return $query->result();  // Devolver los resultados como un array de objetos
    }

    public function obtener_carreras()
    {
         $this->db->select('idcarrera, nombreCarrera');
         $this->db->from('carrera');
         $query = $this->db->get();
         return $query->result(); // Devuelve el resultado como un array de objetos
    }
     // Método para agregar un nuevo proyecto
     public function agregar_tutor($data)
    {
         $this->db->insert('tutor', $data);
    }
 
     // Método para cambiar el estado de un proyecto (en lugar de eliminar)
     public function cambiar_estado_tutor($idtutor, $estado)
     {
         $this->db->where('idtutor', $idtutor);
         $this->db->update('tutor', array('estado' => $estado));
     }
 
     // Método para recuperar un proyecto por ID
 
     public function recuperar_tutor($idtutor) {
         $this->db->where('idtutor', $idtutor);
         $query = $this->db->get('tutor');
         return $query->row(); // Debería devolver una fila de resultados
     }
 
     // Método para modificar un proyecto
 
     public function modificar_tutor($idtutor, $data)
     {
     $this->db->where('idtutor', $idtutor);
     $this->db->update('tutor', $data);
     }
     public function eliminar_tutor($idTutor)
     {
         $this->db->where('idtutor', $idTutor);
         $this->db->delete('tutor'); // Eliminar el proyecto de la base de datos
     }
 
 
 
}