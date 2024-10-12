<!-- ?php
class Prestamo_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Prestamo_model');
        $this->load->helper('url');
    }

    // Mostrar lista de préstamos
    public function index() {
        $data['prestamos'] = $this->Prestamo_model->obtener_prestamos();
        $this->load->view('prestamo_v', $data);
    }

    // Formulario para crear un nuevo préstamo
    public function crear() {
        $this->load->view('crear_prestamo_v');
    }

    // Guardar nuevo préstamo
    public function guardar() {
        $data_prestamo = array(
            'fechaPrestamo' => date('Y-m-d H:i:s'),
            'fechaDevolucion' => $this->input->post('fechaDevolucion'),
            'observacion' => $this->input->post('observacion'),
            'usuario_id' => $this->input->post('usuario_id')
        );

        $data_prestamo_estudiante = array(
            array('estudiante_id' => $this->input->post('estudiante_id'))
        );

        $data_prestamo_proyecto = array(
            array('proyecto_id' => $this->input->post('proyecto_id'), 'estado' => 1, 'observacion' => $this->input->post('observacion_proyecto'))
        );

        $prestamo_id = $this->Prestamo_model->crear_prestamo($data_prestamo, $data_prestamo_estudiante, $data_prestamo_proyecto);
        if ($prestamo_id) {
            redirect('prestamo_c');
        } else {
            echo "Error al crear el préstamo";
        }
    }

    // Ver detalles de un préstamo
    public function ver($id) {
        $data['prestamo'] = $this->Prestamo_model->obtener_prestamo_por_id($id);
        $this->load->view('ver_prestamo_v', $data);
    }

    // Eliminar un préstamo
    public function eliminar($id) {
        $this->Prestamo_model->eliminar_prestamo($id);
        redirect('prestamo_c');
    }
} -- !>
<?php
class Prestamo_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Prestamo_model');
    }

    // Vista inicial del sistema de préstamos
    public function index() {
        $data['proyectos'] = $this->Prestamo_model->obtener_proyectos();
        $this->load->view('prestamo_v', $data);
    }

    // Buscar proyecto por código
    public function buscar_proyecto() {
        $codigo = $this->input->post('codigo');
        $data['proyecto'] = $this->Prestamo_model->obtener_proyecto_por_codigo($codigo);
        $this->load->view('prestamo_detalle_v', $data);
    }

    // Registrar un nuevo préstamo
    public function registrar_prestamo() {
        $proyectoId = $this->input->post('proyecto_id');
        $estudianteId = $this->input->post('estudiante_id');
        
        // Datos del préstamo
        $dataPrestamo = array(
            'fechaPrestamo' => date('Y-m-d H:i:s'),
            'fechaDevolucion' => $this->input->post('fechaDevolucion'),
            'estado' => 1,  // Disponible
            'observacion' => $this->input->post('observacion'),
            'usuario_id' => $estudianteId
        );

        // Guardar el préstamo
        $prestamoId = $this->Prestamo_model->registrar_prestamo($dataPrestamo);

        // Guardar en la tabla prestamoproyecto
        $dataPrestamoProyecto = array(
            'proyecto_id' => $proyectoId,
            'prestamo_id' => $prestamoId,
            'estado' => 1,  // Disponible
            'observacion' => $this->input->post('observacion')
        );
        
        $this->Prestamo_model->registrar_prestamo_proyecto($dataPrestamoProyecto);
        redirect('prestamo_c/index');
    }

    // Cambiar estado a "Prestado"
    public function cambiar_a_prestado($prestamoId) {
        $data = array('observacion' => 'Proyecto Prestado');
        $this->Prestamo_model->actualizar_estado_prestamo($prestamoId, 2, $data);  // 2 para "Prestado"
        redirect('prestamo_c/index');
    }

    // Cambiar estado a "Devuelto"
    public function cambiar_a_devuelto($prestamoId) {
        $data = array('observacion' => 'Proyecto Devuelto');
        $this->Prestamo_model->actualizar_estado_prestamo($prestamoId, 3, $data);  // 3 para "Devuelto"
        redirect('prestamo_c/index');
    }

    // Buscar estudiante
    public function buscar_estudiante() {
        $criterio = $this->input->post('criterio');
        $data['estudiantes'] = $this->Prestamo_model->buscar_estudiante($criterio);
        $this->load->view('buscar_estudiante_v', $data);
    }
}

