<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_c extends CI_Controller {

    public function m_listar()
    {
        $this->load->model('Usuario_model');
        $data['usuario'] = $this->Usuario_model->listadeusuarios();
        $this->load->view('usuario_v', $data);
    }

    public function agregar()
    {
        $this->load->view('agregarusuario_v');
    }

    public function agregarbd()
    {
        $this->load->model('Usuario_model');
        $estado_predeterminado = 1; // Estado como activo
        $data = array(
            'nombre' => strtoupper($this->input->post('nombrev')),
            'primerApellido' => strtoupper($this->input->post('primerApellidov')),
            'segundoApellido' => strtoupper($this->input->post('segundoApellidov')),
            'email' => $this->input->post('emailv'),
            'telefono' => $this->input->post('telefonov'),
            'nombreUsuario' => $this->input->post('nombreUsuariov'),
            'contrasena' => sha1($this->input->post('contrasenav')),
            'rol' => $this->input->post('rolv'),
            'estado' => $estado_predeterminado,
            'usuarioCreador' => $this->input->post('usuarioCreadorv')
        );

        $this->Usuario_model->agregarusuario($data);
        redirect('Usuario_c/m_listar', 'refresh');
    }

    // Función para eliminar usuario usando el método POST
    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->load->model('Usuario_model');
        $this->Usuario_model->cambiar_estado_usuario($id); // Llama al método eliminar_usuario en el modelo
        redirect('Usuario_c/m_listar', 'refresh');
    }

    // Función para eliminar usuario usando URL (GET)
    public function eliminar($id)
    {
        $this->load->model('Usuario_model');
        $this->Usuario_model->eliminar_usuario($id); // Llama al método eliminar_usuario en el modelo
        redirect('Usuario_c/m_listar', 'refresh');
    }

    public function modificar($id)
    {
        $this->load->model('Usuario_model');
        $data['infousuario'] = $this->Usuario_model->recuperarusuario($id);
        $this->load->view('modificar_usuario_v', $data);
    }

    public function modificarbd()
    {
        $this->load->model('Usuario_model');
        $id = $this->input->post('id');
        $data = array(
            'nombre' => strtoupper($this->input->post('nombre')),
            'primerApellido' => strtoupper($this->input->post('primerApellido')),
            'segundoApellido' => strtoupper($this->input->post('segundoApellido')),
            'email' => $this->input->post('email'),
            'telefono' => $this->input->post('telefono'),
            'nombreUsuario' => $this->input->post('nombreUsuario'),
            'rol' => strtoupper($this->input->post('rol')),
        );

        $this->Usuario_model->modificar_usuario($id, $data);
        redirect('Usuario_c/m_listar', 'refresh');
    }
}
