<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrera_c extends CI_Controller {

    public function listar()
    {
        $this->load->model('Carrera_model'); // Cargar el modelo
        $data['carreras'] = $this->Carrera_model->obtener_carreras(); // Obtener la lista de proyectos usando el nombre correcto del método
        $this->load->view('carrera_v', $data); // Cargar la vista con los datos
    }

    public function agregar()
    {
        $this->load->view('agregarcarrera_v'); // Cargar la vista de agregar proyecto
    }

    public function agregarbd()
    {
        $this->load->model('Carrera_model');
        $estado_predeterminado = 1; // Estado como activo
        
        // Crear el array correctamente
        $data = [
            'nombreCarrera' => strtoupper($this->input->post('nombreCarrerav')), // Evitar el uso directo de $_POST
            'estado' => $estado_predeterminado // Agregar estado predeterminado dentro del array
        ];
    
        // Llamar al método agregar_carrera
        $this->Carrera_model->agregar_carrera($data);
    
        // Redireccionar a la lista de carreras
        redirect('Carrera_c/listar', 'refresh');
    }
    

    public function eliminar($id)
    {
        $this->load->model('Carrera_model');
        $this->Carrera_model->eliminar_carrera($id); // Eliminar el proyecto usando el modelo
        redirect('Carrera_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->load->model('Carrera_model');
        $this->Carrera_model->cambiar_estado_carrera($id); // Llamar al método de eliminación en el modelo
        redirect('Carrera_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Carrera_model'); // Cargar el modelo Tutor_model
    }

    public function modificar($id) 
    {
        // Obtener los datos del tutor por ID
        $data['infocarrera'] = $this->Carrera_model->recuperar_carrera($id);
        // Cargar la vista
        $this->load->view('modificar_carrera_v', $data);
    }

    public function modificarbd()
    {
        // Asegúrate de que el modelo esté cargado
        $this->load->model('Carrera_model');
        
        // Obtener los datos del formulario
        $id = $this->input->post('id');
        $data = array(
            'nombreCarrera' => strtoupper($this->input->post('nombreCarrera')),
        );

        // Llamar al método de modelo para actualizar el tutor
        $this->Carrera_model->modificar_carrera($id, $data);

        // Redireccionar a la lista de tutores
        redirect('Carrera_c/listar', 'refresh');
    }
    
}
