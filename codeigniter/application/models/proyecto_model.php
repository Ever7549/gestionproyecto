<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_model extends CI_Model {

    // Método para obtener la lista de proyectos
    public function obtener_proyectos()
    {
        $this->db->select('proyecto.*, carrera.nombreCarrera as nombre_carrera, CONCAT(tutor.nombres, " ", tutor.apellidos) as nombre_tutor, CONCAT(usuario.nombres, " ", usuario.primerApellido, " ", usuario.segundoApellido) as nombre_usuario');
        $this->db->from('proyecto');
        $this->db->join('carrera', 'proyecto.carrera_idcarrera = carrera.idcarrera');
        $this->db->join('modalidad', 'proyecto.modalidad_idmodalidad = modalidad.idmodalidad');
        $this->db->join('tutor', 'proyecto.tutor_idtutor = tutor.idtutor');
        $this->db->join('usuario', 'proyecto.usuarioCreador = usuario.idusuario');
        return $this->db->get(); // Devuelve el resultado como un objeto CI_DB_result
    }
        // Método para obtener todas las carreras
    public function obtener_carreras()
    {
        $this->db->select('idcarrera, nombreCarrera');
        $this->db->from('carrera');
        $query = $this->db->get();
        return $query->result(); // Devuelve el resultado como un array de objetos
    }

    // Método para obtener todos los tutores
    public function obtener_tutores()
    {
        $this->db->select('idtutor, CONCAT(nombres, " ", apellidos) as nombre_tutor');
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
    public function cambiar_estado_proyecto($idproyecto, $estado)
    {
        $this->db->where('idproyecto', $idproyecto);
        $this->db->update('proyecto', array('estado' => $estado));
    }

    // Método para recuperar un proyecto por ID
    public function recuperar_proyecto($idProyecto)
    {
        $this->db->select('*');
        $this->db->from('proyecto');
        $this->db->where('idproyecto', $idProyecto);
        $query = $this->db->get();
        return $query->row(); // Devuelve un único objeto
    }

    // Método para modificar un proyecto
    public function modificar_proyecto($idproyecto, $data)
    {
        $this->db->where('idproyecto', $idproyecto);
        $this->db->update('proyecto', $data);
    }
    public function eliminar_proyecto($idProyecto)
    {
        $this->db->where('idproyecto', $idProyecto);
        $this->db->delete('proyecto'); // Eliminar el proyecto de la base de datos
    }

}
