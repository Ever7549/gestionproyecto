<?php
class Prestamo_c extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Prestamo_model');
        $this->load->model('Proyecto_model');
        $this->load->model('Estudiante_model');
    }

    // Método para listar los préstamos de proyectos
    public function listar()
    {
        // Verificar si hay datos almacenados
        // Si no hay datos, inicializar un arreglo vacío para los préstamos
        $prestamos = $this->Prestamo_model->obtenerPrestamos();
        if (empty($prestamos)) {
            $prestamos = []; // Inicializar como un array vacío si no hay resultados
        }

        // Obtener todos los proyectos y estudiantes
        $proyectos = $this->Proyecto_model->obtener_proyectos();
        $estudiantes = $this->Estudiante_model->obtener_estudiantes();

        // Preparar datos para la vista
        $data = [
            'proyectos' => $proyectos,
            'estudiantes' => $estudiantes,
            'prestamos' => $prestamos
        ];

        // Cargar la vista de préstamos
        $this->load->view('prestamo_v', $data);
    }

    // Método para registrar un préstamo
    public function registrar()
    {
        // Obtener los datos del formulario
        $proyecto_id = $this->input->post('proyecto_id');
        $estudiantes = $this->input->post('estudiantes'); // Asumiendo que es un array de IDs de estudiantes
        $fecha_prestamo = $this->input->post('fecha_prestamo');
        $fecha_devolucion = $this->input->post('fecha_devolucion');
        $observacion = $this->input->post('observacion');

        // Preparar datos para insertar en la tabla `prestamo`
        $datosPrestamo = [
            'fechaPrestamo' => $fecha_prestamo,
            'fechaDevolucion' => $fecha_devolucion,
            'observacion' => $observacion,
            'estado' => 1 // Estado inicial del préstamo (activo)
        ];

        // Insertar el préstamo y obtener el ID generado
        $prestamo_id = $this->Prestamo_model->insertarPrestamo($datosPrestamo, $estudiantes, [['proyecto_id' => $proyecto_id]]);

        // Redirigir a la lista de préstamos con un mensaje de éxito
        redirect(base_url() . 'prestamo_c/listar');
    }

    // Método para devolver un proyecto
    public function devolver($id_prestamo)
    {
        // Actualizar el estado del préstamo como devuelto
        $fechaRealDevolucion = date('Y-m-d'); // Fecha actual como la fecha de devolución real
        $this->Prestamo_model->actualizarEstadoPrestamo($id_prestamo, 2, $fechaRealDevolucion); // Estado 2 para devuelto

        // Redirigir a la página de listado de préstamos con un mensaje de éxito
        redirect(base_url() . 'prestamo_c/listar');
    }

    // Método para generar el PDF de los préstamos
    public function generar_pdf()
    {
        $prestamos = $this->Prestamo_model->obtenerPrestamos();

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
            $pdf->Cell(40, 10, $prestamo['nombre'], 1);
            $pdf->Cell(60, 10, $prestamo['titulo'], 1);
            $pdf->Cell(40, 10, $prestamo['fechaPrestamo'], 1);
            $pdf->Cell(40, 10, $prestamo['fechaDevolucion'], 1);
            $pdf->Ln();
        }

        // Salida del PDF
        $pdf->Output('D', 'prestamos_proyectos.pdf');
    }
}
