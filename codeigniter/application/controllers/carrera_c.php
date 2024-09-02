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
        $data['nombreCarrera'] = strtoupper($_POST['nombreCarrerav']);
        $data['estado'] = strtoupper($_POST['estadov']);

        $this->Carrera_model->agregar_carrera($data); // Llamar al método correcto
        redirect('Carrera_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar($idcarrera)
    {
        $this->load->model('Carrera_model');
        $this->Carrera_model->eliminar_carrera($idcarrera); // Eliminar el proyecto usando el modelo
        redirect('Carrera_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $idCarrera = $this->input->post('idCarrera');
        $this->load->model('Carrera_model');
        $this->Carrera_model->eliminar_carrera($idCarrera); // Llamar al método de eliminación en el modelo
        redirect('Carrera_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function __construct() 
    {
        parent::__construct();
        $this->load->model('Carrera_model'); // Cargar el modelo Tutor_model
    }

    public function modificar($idcarrera) 
    {
        // Obtener los datos del tutor por ID
        $data['infocarrera'] = $this->Carrera_model->recuperar_carrera($idcarrera);
        // Cargar la vista
        $this->load->view('modificar_carrera_v', $data);
    }

    public function modificarbd()
    {
        // Asegúrate de que el modelo esté cargado
        $this->load->model('Carrera_model');
        
        // Obtener los datos del formulario
        $idcarrera = $this->input->post('idcarrera');
        $data = array(
            'nombreCarrera' => strtoupper($this->input->post('nombreCarrera')),
            'estado' => $this->input->post('estado'),
        );

        // Llamar al método de modelo para actualizar el tutor
        $this->Carrera_model->modificar_carrera($idcarrera, $data);

        // Redireccionar a la lista de tutores
        redirect('Carrera_c/listar', 'refresh');
    }
    
}
