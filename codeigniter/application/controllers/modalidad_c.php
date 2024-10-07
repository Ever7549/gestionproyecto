<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modalidad_c extends CI_Controller {

    public function listar()
    {
        $this->load->model('Modalidad_model'); // Cargar el modelo
        $data['modalidades'] = $this->Modalidad_model->obtener_modalidades(); // Obtener la lista de proyectos usando el nombre correcto del método
        $this->load->view('modalidad_v', $data); // Cargar la vista con los datos
    }

    public function agregar()
    {
        $this->load->view('agregarmodalidad_v'); // Cargar la vista de agregar proyecto
    }

    public function agregarbd()
    {
        $this->load->model('Modalidad_model');
        $data['nombreModalidad'] = strtoupper($_POST['nombreModalidadv']);

        $this->Modalidad_model->agregar_modalidad($data); // Llamar al método correcto
        redirect('Modalidad_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar($id)
    {
        $this->load->model('Modalidad_model');
        $this->Modalidad_model->eliminar_modalidad($id); // Eliminar el proyecto usando el modelo
        redirect('Modalidad_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->load->model('Modalidad_model');
        $this->Modalidad_model->cambiar_estado_modalidad($id); // Llamar al método de eliminación en el modelo
        redirect('Modalidad_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Modalidad_model'); // Cargar el modelo Tutor_model
    }

    public function modificar($id) 
    {
        // Obtener los datos del tutor por ID
        $data['infomodalidad'] = $this->Modalidad_model->recuperar_modalidad($id);
        // Cargar la vista
        $this->load->view('modificar_modalidad_v', $data);
    }

    public function modificarbd()
    {
        // Asegúrate de que el modelo esté cargado
        $this->load->model('Modalidad_model');
        
        // Obtener los datos del formulario
        $id = $this->input->post('id');
        $data = array(
            'nombreModalidad' => strtoupper($this->input->post('nombreModalidad')),
        );

        // Llamar al método de modelo para actualizar el tutor
        $this->Modalidad_model->modificar_modalidad($id, $data);

        // Redireccionar a la lista de tutores
        redirect('Modalidad_c/listar', 'refresh');
    }
    
}
