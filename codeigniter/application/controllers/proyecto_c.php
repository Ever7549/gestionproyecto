<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyecto_c extends CI_Controller {

    public function listar()
    {
        $this->load->model('Proyecto_model'); // Cargar el modelo
        $data['proyectos'] = $this->Proyecto_model->obtener_proyectos(); // Obtener la lista de proyectos usando el nombre correcto del método
        $this->load->view('proyecto_v', $data); // Cargar la vista con los datos
    }

    public function agregar()
    {
        $this->load->view('agregarproyecto_v'); // Cargar la vista de agregar proyecto
    }

    public function agregarbd()
    {
        $this->load->model('Proyecto_model');
        $data['titulo']=strtoupper($_POST['titulov']);
        $data['egresado']=strtoupper($_POST['egresadov']);
        $data['gestion']=strtoupper($_POST['gestionv']);
        $data['resumen']=strtoupper($_POST['resumenv']);
        $data['estado']=strtoupper($_POST['estadov']);
        $data['usuarioCreador']=strtoupper($_POST['usuarioCreadorv']);
        $data['carrera_idcarrera']=$_POST['carrera_idcarrerav'];
        $data['modalidad_idmodalidad']=$_POST['modalidad_idmodalidadv'];
        $data['tutor_idtutor']=$_POST['tutor_idtutorv'];

        $this->Proyecto_model->agregar_proyecto($data); // Llamar al método correcto
        redirect('Proyecto_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar()
    {
        $idProyecto = $this->input->post('idProyecto');
        $this->load->model('Proyecto_model');
        $this->Proyecto_model->cambiar_estado_proyecto($idProyecto, 0); // Cambiar el estado del proyecto a inactivo (0)
        redirect('Proyecto_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function modificar($idproyecto)
    {
        $this->load->model('Proyecto_model');
        $data['infoproyecto'] = $this->Proyecto_model->recuperar_proyecto($idproyecto); // Usar el nombre correcto del método
        $this->load->view('modificar_proyecto_v', $data); // Cargar la vista de modificar proyecto
    }
    public function modificarbd()
    {
        $this->load->model('Proyecto_model');
        $idproyecto = $this->input->post('idproyecto');
        $data = array(
            'titulo' => strtoupper($this->input->post('titulo')),
            'egresado' => strtoupper($this->input->post('egresado')),
            'gestion' => $this->input->post('gestion'),
            'resumen' => strtoupper($this->input->post('resumen')),
            'estado' => $this->input->post('estado'),
            'usuarioCreador' => $this->input->post('usuarioCreador'),
            'carrera_idcarrera' => $this->input->post('carrera_idcarrera'),
            'modalidad_idmodalidad' => $this->input->post('modalidad_idmodalidad'),
            'tutor_idtutor' => $this->input->post('tutor_idtutor')
        );

        $this->Proyecto_model->modificar_proyecto($idproyecto, $data); // Usar el nombre correcto del método
        redirect('proyecto_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }
}

