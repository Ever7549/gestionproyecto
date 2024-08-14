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
     public function eliminarusuario($idusuario)
     {
        $this->db->where('idusuario',$idusuario);
        $this->db->delete('usuario');
     } 
     public function recuperarusuario($idusuario)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('idusuario',$idusuario);
		return $this->db->get(); //devuelve el resultado
	}

	public function modificarusuario($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);
		$this->db->update('usuario',$data);
	}

}