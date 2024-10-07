<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tutor_c extends CI_Controller {

    public function listar()
    {
        $this->load->model('Tutor_model'); // Cargar el modelo
        $data['tutores'] = $this->Tutor_model->obtene_tutores(); // Obtener la lista de proyectos usando el nombre correcto del método
        $this->load->view('tutor_v', $data); // Cargar la vista con los datos
    }

    public function agregar()
    {
        $this->load->view('agregartutor_v'); // Cargar la vista de agregar proyecto
    }

    public function agregarbd()
    {
        $this->load->model('Tutor_model');
        $data['nombre'] = strtoupper($_POST['nombrev']);
        $data['primerApellido'] = strtoupper($_POST['primerApellidov']);
        $data['segundoApellido'] = strtoupper($_POST['segundoApellidov']);
        $data['profesion'] = strtoupper($_POST['profesionv']);
        $data['estado'] = strtoupper($_POST['estadov']);
        

        $this->Tutor_model->agregar_tutor($data); // Llamar al método correcto
        redirect('Tutor_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar($id)
    {
        $this->load->model('Tutor_model');
        $this->Tutor_model->eliminar_tutor($id); // Eliminar el proyecto usando el modelo
        redirect('Tutor_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->load->model('Tutor_model');
        $this->Tutor_model->cambiar_estado_tutor($id); // Llamar al método de eliminación en el modelo
        redirect('Tutor_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Tutor_model'); // Cargar el modelo Tutor_model
    }

    public function modificar($id) 
    {
        // Obtener los datos del tutor por ID
        $data['infotutor'] = $this->Tutor_model->recuperar_tutor($id);
    
        // Cargar la vista
        $this->load->view('modificar_tutor_v', $data);
    }

    public function modificarbd()
    {
        // Asegúrate de que el modelo esté cargado
        $this->load->model('Tutor_model');
        
        // Obtener los datos del formulario
        $id = $this->input->post('id');
        $data = array(
            'nombre' => strtoupper($this->input->post('nombre')),
            'primerApellido' => strtoupper($this->input->post('primerApellido')),
            'segundoApellido' => strtoupper($this->input->post('segundoApellido')),
            'profesion' => strtoupper($this->input->post('profesion')),
        );

        // Llamar al método de modelo para actualizar el tutor
        $this->Tutor_model->modificar_tutor($id, $data);

        // Redireccionar a la lista de tutores
        redirect('Tutor_c/listar', 'refresh');
    }
    
}
