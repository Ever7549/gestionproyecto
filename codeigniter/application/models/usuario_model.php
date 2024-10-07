<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    public function listadeusuarios()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get()->result(); // Cambiar a result()
     }

     public function agregarusuario($data)
     {
         $this->db->insert('usuario',$data);
     }
     public function cambiar_estado_usuario($id)
    {
           // Obtenemos el estado actual del proyecto
           $this->db->select('estado');
           $this->db->from('usuario');
           $this->db->where('id', $id);
           $query = $this->db->get();
       
           if ($query->num_rows() > 0) {
               // Obtenemos el estado actual
               $estado_actual = $query->row()->estado;
       
               // Alternamos el estado
               $nuevo_estado = ($estado_actual == 1) ? 0 : 1;
       
               // Actualizamos el estado en la base de datos
               $this->db->where('id', $id);
               $this->db->update('usuario', array('estado' => $nuevo_estado));
       
               // Puedes agregar un mensaje de éxito aquí si lo deseas
               // Ejemplo: $this->session->set_flashdata('mensaje', 'Estado actualizado con éxito.');
           } else {
               // Manejar el caso en que no se encuentra el proyecto
               // Ejemplo: $this->session->set_flashdata('error', 'Proyecto no encontrado.');
           }
    } 
    public function recuperarusuario($id)
    {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('id', $id);
    $query=$this->db->get();
    return $query->row(); // devuelve el resultado
    }
    public function modificar_usuario($id, $data)
    {
    $this->db->where('id', $id);
    $this->db->update('usuario', $data);
    }
    public function eliminar_usuario($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('usuario'); // Elimina el usuario de la tabla 'usuario'
    }

}