<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_c extends CI_Controller {

    public function listar()
    {
        $this->load->model('Tutor_model'); // Cargar el modelo
        $data['tutores'] = $this->Tutor_model->obtener_tutores(); // Obtener la lista de proyectos usando el nombre correcto del método
        $this->load->view('tutor_v', $data); // Cargar la vista con los datos
    }

    public function agregar()
    {
        $this->load->view('agregartutor_v'); // Cargar la vista de agregar proyecto
    }

    public function agregarbd()
    {
        $this->load->model('Tutor_model');
        $data['nombres'] = strtoupper($_POST['nombresv']);
        $data['apellidos'] = strtoupper($_POST['apellidosv']);
        $data['estado'] = strtoupper($_POST['estadov']);
        $data['carrera_idcarrera'] = $_POST['carrera_idcarrerav'];
        $data['rol_idrol'] = $_POST['rol_idrolv'];

        $this->Tutor_model->agregar_tutor($data); // Llamar al método correcto
        redirect('Tutor_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar($idtutor)
    {
        $this->load->model('Tutor_model');
        $this->Tutor_model->eliminar_tutor($idtutor); // Eliminar el proyecto usando el modelo
        redirect('Tutor_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $idTutor = $this->input->post('idTutor');
        $this->load->model('Tutor_model');
        $this->Tutor_model->eliminar_tutor($idTutor); // Llamar al método de eliminación en el modelo
        redirect('Tutor_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Tutor_model'); // Cargar el modelo Tutor_model
        $this->load->model('Carrera_model');
        $this->load->model('Rol_model');
    }

    public function modificar($idtutor) 
    {
        // Obtener los datos del tutor por ID
        $data['infotutor'] = $this->Tutor_model->recuperar_tutor($idtutor);
        // Obtener las carreras y roles para los select
        $data['carreras'] = $this->Carrera_model->obtener_carreras();
        $data['rols'] = $this->Rol_model->obtener_rols();
    
        // Cargar la vista
        $this->load->view('modificar_tutor_v', $data);
    }

    public function modificarbd()
    {
        // Asegúrate de que el modelo esté cargado
        $this->load->model('Tutor_model');
        
        // Obtener los datos del formulario
        $idtutor = $this->input->post('idtutor');
        $data = array(
            'nombres' => strtoupper($this->input->post('nombres')),
            'apellidos' => strtoupper($this->input->post('apellidos')),
            'estado' => $this->input->post('estado'),
            'carrera_idcarrera' => $this->input->post('carrera_idcarrera'),
            'rol_idrol' => $this->input->post('rol_idrol')
        );

        // Llamar al método de modelo para actualizar el tutor
        $this->Tutor_model->modificar_tutor($idtutor, $data);

        // Redireccionar a la lista de tutores
        redirect('Tutor_c/listar', 'refresh');
    }
    
}
