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
        $this->load->model('Carrera_model'); // Cargar el modelo de carrera
        $data['carreras'] = $this->Carrera_model->obtener_carreras(); // Obtener las carreras

        $this->load->model('Modalidad_model'); // Cargar el modelo de carrera
        $data['modalidades'] = $this->Modalidad_model->obtener_modalidades(); // Obtener las carreras
        // Pasar los datos de las carreras a la vista

        $this->load->model('Tutor_model'); // Cargar el modelo de carrera
        $data['tutores'] = $this->Tutor_model->obtener_tutores(); // Obtener las carreras
        // Pasar los datos de las carreras a la vista
        $this->load->view('agregarproyecto_v', $data); // Asegúrate de pasar $data
    }


    public function agregarbd()
    {
        $this->load->model('Proyecto_model');
        $estado_predeterminado = 1; // Estado como activo
        $fecha_actual = date('Y-m-d H:i:s'); // Fecha y hora actual
        
        $data['codigo'] = strtoupper($_POST['codigov']);
        $data['titulo'] = strtoupper($_POST['titulov']);
        $data['estudiante1'] = strtoupper($_POST['estudiante1v']);
        $data['estudiante2'] = strtoupper($_POST['estudiante2v']);
        $data['estudiante3'] = strtoupper($_POST['estudiante3v']);
        $data['gestion'] = strtoupper($_POST['gestionv']);
        $data['referencia'] = strtoupper($_POST['referenciav']);
        $data['resumen'] = strtoupper($_POST['resumenv']);
        $data['ubicacion'] = strtoupper($_POST['ubicacionv']);
        $data['estado'] = ($estado_predeterminado);
        $data['fechaRegistro'] = ($fecha_actual);
        $data['ultimaActualizacion'] = ($fecha_actual);
        $data['usuarioCreador'] = ($_POST['usuarioCreadorv']);
        $data['carrera_id'] = $_POST['carrera_idv'];
        $data['modalidad_id'] = $_POST['modalidad_idv'];
        $data['tutor_id'] = $_POST['tutor_idv'];
        

        $this->Proyecto_model->agregar_proyecto($data); // Llamar al método correcto
        redirect('Proyecto_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar($id)
    {
        $this->load->model('Proyecto_model');
        $this->Proyecto_model->eliminar_proyecto($id); // Eliminar el proyecto usando el modelo
        redirect('Proyecto_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->load->model('Proyecto_model');
        $this->Proyecto_model->cambiar_estado_proyecto($id); // Llamar al método de eliminación en el modelo
        redirect('Proyecto_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function actualizar_estado($id) 
    {
        $resultado = $this->Modelo_m->cambiar_estado($id);
        
        // Verificamos si la actualización fue exitosa
        if ($resultado) {
            echo "Estado cambiado exitosamente.";
        } else {
            echo "Error al cambiar el estado.";
        }
    }



        public function __construct() {
            parent::__construct();
            $this->load->model('Proyecto_model');
            $this->load->model('Carrera_model');
            $this->load->model('Tutor_model');
            $this->load->model('Modalidad_model'); 
        }
    

        public function modificar($id) {
            // Obtener los datos del proyecto
            $data['infoproyecto'] = $this->Proyecto_model->recuperar_proyecto($id);
            $data['carreras'] = $this->Carrera_model->obtener_carreras();
            $data['tutores'] = $this->Tutor_model->obtener_tutores();
            $data['modalidades'] = $this->Modalidad_model->obtener_modalidades();
            
            // Cargar la vista
            $this->load->view('modificar_proyecto_v', $data);
        }
    
        public function modificarbd()
        {
            // Obtener los datos del formulario
            $id = $this->input->post('id');
            $data = array(
                'codigo' => strtoupper($this->input->post('codigo')),
                'titulo' => strtoupper($this->input->post('titulo')),
                'estudiante1' => strtoupper($this->input->post('estudiante1')),
                'estudiante2' => strtoupper($this->input->post('estudiante2')),
                'estudiante3' => strtoupper($this->input->post('estudiante3')),
                'gestion' => $this->input->post('gestion'),
                'referencia' => strtoupper($this->input->post('referencia')),
                'resumen' => strtoupper($this->input->post('resumen')),
                'ubicacion' => strtoupper($this->input->post('ubicacion')),
                'estado' => $this->input->post('estado'),
                'usuarioCreador' => $this->input->post('usuarioCreador'), // Asegúrate de que este campo se está manejando correctamente
                'carrera_id' => $this->input->post('carrera_id'),
                'modalidad_id' => $this->input->post('modalidad_id'),
                'tutor_id' => $this->input->post('tutor_id')
            );

            // Llamar al método de modelo para actualizar el proyecto
            $this->Proyecto_model->modificar_proyecto($id, $data); 


            // Redireccionar a la lista de proyectos
            redirect('Proyecto_c/listar', 'refresh');
        }
    
    
}
