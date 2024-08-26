<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {
    
    public function listadeusuarios()
    {
        $this->db->select('*');
        $this->db->from('usuario');
        return $this->db->get(); // devuelve resultado
     }
     public function agregarusuario($data)
     {
         $this->db->insert('usuario',$data);
     }
     public function cambiar_estado_usuario($idusuario,$estado)
    {
        $this->db->where('idusuario',$idusuario);
        $this->db->update('usuario',array('estado'=>$estado));
    } 
    public function recuperarusuario($idusuario)
    {
    $this->db->select('*');
    $this->db->from('usuario');
    $this->db->where('idusuario', $idusuario);
    $query=$this->db->get();
    return $query->row(); // devuelve el resultado
    }
    public function modificar_usuario($idusuario, $data)
    {
    $this->db->where('idusuario', $idusuario);
    $this->db->update('usuario', $data);
    }
    public function eliminar_usuario($idusuario)
    {
        $this->db->where('idusuario', $idusuario);
        $this->db->delete('usuario'); // Elimina el usuario de la tabla 'usuario'
    }

}