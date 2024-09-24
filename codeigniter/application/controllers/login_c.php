<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login_c extends CI_Controller{
     public function index(){
        $this->load->model('login_model');
     
        if($this->session->userdata('login_v'))
        {
           //el usr ya esta logueado
           redirect('login_c/panel','refresh');
        }
        else
        {
           //usuario no esta logueado
           $this->load->view('login_v');
        }
    }
    public function validarUsuario(){
        $this->load->model('Login_model');
        //$nombreUsuario=$_POST['nombreUsuario'];
        //$contrasena=$_POST['contrasena'];
        $nombreUsuario = $this->input->post('nombreUsuario');
        $contrasena = $this->input->post('contrasena');

        $consulta=$this->Login_model->validar($nombreUsuario,$contrasena);

        
       if($consulta->num_rows()>0)
       {         
            //usuario valido           
                $row = $consulta->row();
                $this->session->set_userdata('id', $row->id);
                $this->session->set_userdata('nombreUsuario', $row->nombreUsuario);
                $this->session->set_userdata('rol', $row->rol); // Guarda el rol
                
                redirect('login_c/panel','refresh');
            
        }
        else
       {
             //usuario incorrecto-volvemos a login
               redirect('login_c/index','refresh');
        }
    }

    public function panel()
    {
      
        if($this->session->userdata('nombreUsuario'))
        {
           $this->load->view('catalogo_v'); 
          //redirect('C_libro/m_listar','refresh');
              
        }
        else
        {
           redirect('login_c/index','refresh');
        }
    }
    public function logout()
    {
       $this->session->sess_destroy();
        redirect('login_c/index','refresh');
    }
}