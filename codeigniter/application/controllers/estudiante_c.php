<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_c extends CI_Controller {

    public function listar()
    {
        $this->load->model('Estudiante_model'); // Cargar el modelo
        $data['estudiantes'] = $this->Estudiante_model->obtener_estudiantes(); // Obtener la lista de proyectos usando el nombre correcto del método
        $this->load->view('estudiante_v', $data); // Cargar la vista con los datos
    }

    public function agregar()
    {
        $this->load->model('Carrera_model'); // Cargar el modelo de carrera
        $data['carreras'] = $this->Carrera_model->obtener_carreras(); // Obtener las carreras
    }


    public function agregarbd()
    {
        $this->load->model('Estudiante_model');
        $estado_predeterminado = 1; // Estado como activo
        $fecha_actual = date('Y-m-d H:i:s'); // Fecha y hora actual
        
        $data['usuario'] = strtoupper($_POST['usuariov']);
        $data['nombre'] = strtoupper($_POST['nombrev']);
        $data['primerApellido'] = strtoupper($_POST['primerApellidov']);
        $data['segundoApellido'] = strtoupper($_POST['segundoApellidov']);
        $data['ci'] = strtoupper($_POST['civ']);
        $data['email'] = ($_POST['emailv']);
        $data['telefono'] = ($_POST['telefonov']);
        $data['estado'] = ($estado_predeterminado);
        $data['usuarioCreador'] = ($_POST['usuarioCreadorv']);
        $data['fechaRegistro'] = ($fecha_actual);        

        $this->Estudiante_model->agregar_estudiante($data); // Llamar al método correcto
        redirect('Estudiante_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminar($id)
    {
        $this->load->model('Estudiante_model');
        $this->Estudiante_model->eliminar_estudiante($id); // Eliminar el proyecto usando el modelo
        redirect('Estudiante_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
    }

    public function eliminarbd()
    {
        $id = $this->input->post('id');
        $this->load->model('Estudiante_model');
        $this->Estudiante_model->cambiar_estado_estudiante($id); // Llamar al método de eliminación en el modelo
        redirect('Estudiante_c/listar', 'refresh'); // Redireccionar a la lista de proyectos
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
            $this->load->model('Estudiante_model');
            $this->load->model('Carrera_model');
        }
    

        public function modificar($id) {
            // Obtener los datos del proyecto
            $data['infoestudiante'] = $this->Estudiante_model->recuperar_estudiante($id);
            $data['carreras'] = $this->Carrera_model->obtener_carreras();           
            // Cargar la vista
            $this->load->view('modificar_estudiante_v', $data);
        }
        
        public function modificarbd()
        {
            // Obtener los datos del formulario
            $id = $this->input->post('id');
            $carrera_id = $this->input->post('carrera_id');
            $data = array(
                'usuario' => strtoupper($this->input->post('usuario')),
                'nombre' => strtoupper($this->input->post('nombre')),
                'primerApellido' => strtoupper($this->input->post('primerApellido')),
                'segundoApellido' => strtoupper($this->input->post('segundoApellido')),
                'ci' => strtoupper($this->input->post('ci')),
                'email' => $this->input->post('email'),
                'telefono' => $this->input->post('telefono'),
                //'estado' => $this->input->post('estado'),
                'usuarioCreador' => $this->input->post('usuarioCreador')
            );

            // Llamar al método de modelo para actualizar el proyecto
            $this->Estudiante_model->modificar_estudiante($id, $data, $carrera_id);


            // Redireccionar a la lista de proyectos
            redirect('Estudiante_c/listar', 'refresh');
        }

}
