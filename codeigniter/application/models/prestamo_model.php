<?php
class Prestamo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database(); // Carga la base de datos
    }

    // Obtener todos los préstamos activos (estado = 1), incluyendo detalles del estudiante y del proyecto
    public function obtenerPrestamos() {
        $sql = "SELECT p.id, e.nombre, e.primerApellido, e.segundoApellido, pr.titulo, p.fechaPrestamo, p.fechaDevolucion, p.fechaRealDevolucion, p.estado, p.observacion 
                FROM prestamo p
                INNER JOIN prestamoestudiante pe ON p.id = pe.prestamo_id
                INNER JOIN estudiante e ON pe.estudiante_id = e.id
                INNER JOIN prestamoproyecto pp ON p.id = pp.prestamo_id
                INNER JOIN proyecto pr ON pp.proyecto_id = pr.id
                WHERE p.estado = 1";
        $query = $this->db->query($sql);
        return $query->result_array(); // Devuelve los resultados como un array asociativo
    }

    // Obtener préstamo por su ID, incluyendo detalles del estudiante y proyecto
    public function obtenerPrestamoPorId($id) {
        $sql = "SELECT p.id, e.nombre, e.primerApellido, e.segundoApellido, pr.titulo, p.fechaPrestamo, p.fechaDevolucion, p.fechaRealDevolucion, p.estado, p.observacion 
                FROM prestamo p
                INNER JOIN prestamoestudiante pe ON p.id = pe.prestamo_id
                INNER JOIN estudiante e ON pe.estudiante_id = e.id
                INNER JOIN prestamoproyecto pp ON p.id = pp.prestamo_id
                INNER JOIN proyecto pr ON pp.proyecto_id = pr.id
                WHERE p.id = ?";
        $query = $this->db->query($sql, array($id));
        return $query->row_array(); // Devuelve una fila como array asociativo
    }

    // Insertar un nuevo préstamo y asociar al estudiante y proyecto
    public function insertarPrestamo($dataPrestamo, $dataEstudiantes, $dataProyectos) {
        // Insertar en la tabla `prestamo`
        $this->db->insert('prestamo', $dataPrestamo);
        $prestamo_id = $this->db->insert_id(); // Obtener el ID del préstamo creado

        // Insertar en la tabla `prestamoestudiante` para cada estudiante asociado al préstamo
        foreach ($dataEstudiantes as &$estudiante) {
            $estudiante['prestamo_id'] = $prestamo_id;
        }
        $this->db->insert_batch('prestamoestudiante', $dataEstudiantes);

        // Insertar en la tabla `prestamoproyecto` para cada proyecto asociado al préstamo
        foreach ($dataProyectos as &$proyecto) {
            $proyecto['prestamo_id'] = $prestamo_id;
        }
        $this->db->insert_batch('prestamoproyecto', $dataProyectos);

        return $prestamo_id;  // Retornar el ID del préstamo creado
    }

    // Actualizar el estado del préstamo (para devolver, cancelar, etc.)
    public function actualizarEstadoPrestamo($id, $estado, $fechaRealDevolucion = null, $observacion = '') {
        $data = array(
            'estado' => $estado,
            'fechaRealDevolucion' => $fechaRealDevolucion,
            'observacion' => $observacion
        );
        $this->db->where('id', $id);
        return $this->db->update('prestamo', $data); // Actualiza el estado del préstamo
    }

    // Eliminar un préstamo por su ID
    public function eliminarPrestamo($id) {
        $this->db->where('id', $id);
        return $this->db->delete('prestamo'); // Elimina el préstamo
    }
}




