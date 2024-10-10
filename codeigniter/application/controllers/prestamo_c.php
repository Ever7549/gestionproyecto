<?php
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
}
