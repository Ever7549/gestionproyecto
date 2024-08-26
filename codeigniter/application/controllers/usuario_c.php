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
        $data = array(
            'nombres' => strtoupper($this->input->post('nombresv')),
            'primerApellido' => strtoupper($this->input->post('primerApellidov')),
            'segundoApellido' => strtoupper($this->input->post('segundoApellidov')),
            'correo' => $this->input->post('correov'),
            'telefono' => $this->input->post('telefonov'),
            'nombreUsuario' => $this->input->post('nombreUsuariov'),
            'contrasena' => sha1($this->input->post('contrasenav')),
            'estado' => $this->input->post('estadov'),
            'usuarioCreador' => $this->input->post('usuarioCreadorv'),
            'carrera_idcarrera' => $this->input->post('carrera_idcarrerav'),
            'rol_idrol' => $this->input->post('rol_idrolv')
        );

        $this->Usuario_model->agregarusuario($data);
        redirect('Usuario_c/m_listar', 'refresh');
    }

    // Función para eliminar usuario usando el método POST
    public function eliminarbd()
    {
        $this->load->model('Usuario_model');
        $idusuario = $this->input->post('idusuario');
        $this->Usuario_model->eliminar_usuario($idusuario); // Llama al método eliminar_usuario en el modelo
        redirect('Usuario_c/m_listar', 'refresh');
    }

    // Función para eliminar usuario usando URL (GET)
    public function eliminar($idusuario)
    {
        $this->load->model('Usuario_model');
        $this->Usuario_model->eliminar_usuario($idusuario); // Llama al método eliminar_usuario en el modelo
        redirect('Usuario_c/m_listar', 'refresh');
    }

    public function modificar($idusuario)
    {
        $this->load->model('Usuario_model');
        $data['infousuario'] = $this->Usuario_model->recuperarusuario($idusuario);
        $this->load->view('modificar_usuario_v', $data);
    }

    public function modificarbd()
    {
        $this->load->model('Usuario_model');
        $idusuario = $this->input->post('idusuario');
        $data = array(
            'nombres' => strtoupper($this->input->post('nombres')),
            'primerApellido' => strtoupper($this->input->post('primerApellido')),
            'segundoApellido' => strtoupper($this->input->post('segundoApellido')),
            'correo' => $this->input->post('correo'),
            'telefono' => $this->input->post('telefono'),
            'nombreUsuario' => $this->input->post('nombreUsuario'),
            'estado' => $this->input->post('estado')
        );

        $this->Usuario_model->modificar_usuario($idusuario, $data);
        redirect('Usuario_c/m_listar', 'refresh');
    }
}
