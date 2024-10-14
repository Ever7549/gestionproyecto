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

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prestamo_model');
        $this->load->model('Proyecto_model');
        $this->load->model('Estudiante_model');
        session_start();
        if (empty($_SESSION['activo'])) {
            redirect(base_url());
        }
    }

    // Método para listar los préstamos de proyectos
    public function listar()
    {
        // Obtener todos los proyectos, estudiantes y préstamos desde los modelos
        $proyectos = $this->Proyecto_model->obtener_proyectos();
        $estudiantes = $this->Estudiante_model->obtener_estudiantes();
        $prestamos = $this->Prestamo_model->obtener_prestamos();

        // Pasar los datos a la vista
        $data = ['proyectos' => $proyectos, 'estudiantes' => $estudiantes, 'prestamos' => $prestamos];
        $this->load->view('prestamo_v', $data);
    }

    // Método para registrar un préstamo
    public function registrar()
    {
        // Obtener los datos del formulario
        $proyecto_id = $this->input->post('proyecto_id');
        $estudiante_id = $this->input->post('estudiante_id');
        $fecha_prestamo = $this->input->post('fecha_prestamo');
        $fecha_devolucion = $this->input->post('fecha_devolucion');
        $observacion = $this->input->post('observacion');

        // Registrar el préstamo usando el modelo Prestamo_model
        $datosPrestamo = [
            'proyecto_id' => $proyecto_id,
            'estudiante_id' => $estudiante_id,
            'fecha_prestamo' => $fecha_prestamo,
            'fecha_devolucion' => $fecha_devolucion,
            'observacion' => $observacion
        ];

        // Insertar el préstamo en la base de datos
        $this->Prestamo_model->insertar_prestamo($datosPrestamo);

        // Redirigir a la página de listado de préstamos
        redirect(base_url() . 'prestamo_c/listar');
    }

    // Método para devolver un proyecto
    public function devolver($id_prestamo)
    {
        // Actualizar el estado del préstamo como devuelto
        $this->Prestamo_model->actualizar_estado_prestamo($id_prestamo, 'devuelto');

        // Redirigir a la página de listado de préstamos
        redirect(base_url() . 'prestamo_c/listar');
    }

    // Método para generar el PDF de los préstamos
    public function generar_pdf()
    {
        $prestamos = $this->Prestamo_model->obtener_prestamos();

        // Cargar la biblioteca FPDF
        $this->load->library('pdf');
        $pdf = new FPDF();
        $pdf->AddPage();
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell(0, 10, 'Lista de Préstamos de Proyectos', 0, 1, 'C');
        $pdf->Ln(10);

        // Encabezado de la tabla
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(40, 10, 'Estudiante', 1);
        $pdf->Cell(60, 10, 'Proyecto', 1);
        $pdf->Cell(40, 10, 'Fecha Préstamo', 1);
        $pdf->Cell(40, 10, 'Fecha Devolución', 1);
        $pdf->Ln();

        // Datos de la tabla
        $pdf->SetFont('Arial', '', 10);
        foreach ($prestamos as $prestamo) {
            $pdf->Cell(40, 10, $prestamo->nombre_estudiante, 1);
            $pdf->Cell(60, 10, $prestamo->titulo_proyecto, 1);
            $pdf->Cell(40, 10, $prestamo->fecha_prestamo, 1);
            $pdf->Cell(40, 10, $prestamo->fecha_devolucion, 1);
            $pdf->Ln();
        }

        // Salida del PDF
        $pdf->Output('D', 'prestamos_proyectos.pdf');
    }
}


