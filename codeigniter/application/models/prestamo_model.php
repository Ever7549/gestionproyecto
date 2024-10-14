<!--?php
class Prestamo_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Crear un nuevo préstamo
    public function crear_prestamo($data_prestamo, $data_prestamo_estudiante, $data_prestamo_proyecto) {
        $this->db->trans_start();  // Iniciar la transacción

        // Insertar en la tabla `prestamo`
        $this->db->insert('prestamo', $data_prestamo);
        $prestamo_id = $this->db->insert_id();  // Obtener el ID del préstamo creado

        // Insertar en la tabla `prestamoestudiante`
        foreach ($data_prestamo_estudiante as &$estudiante) {
            $estudiante['prestamo_id'] = $prestamo_id;
        }
        $this->db->insert_batch('prestamoestudiante', $data_prestamo_estudiante);

        // Insertar en la tabla `prestamoproyecto`
        foreach ($data_prestamo_proyecto as &$proyecto) {
            $proyecto['prestamo_id'] = $prestamo_id;
        }
        $this->db->insert_batch('prestamoproyecto', $data_prestamo_proyecto);

        $this->db->trans_complete();  // Completar la transacción

        if ($this->db->trans_status() === FALSE) {
            return false;  // Si algo falló, cancelar la transacción
        }

        return $prestamo_id;  // Retornar el ID del préstamo creado
    }

    // Obtener todos los préstamos
    public function obtener_prestamos() {
        $this->db->select('p.*, e.nombre, e.primerApellido, e.segundoApellido');
        $this->db->from('prestamo p');
        $this->db->join('prestamoestudiante pe', 'p.id = pe.prestamo_id');
        $this->db->join('estudiante e', 'pe.estudiante_id = e.id');
        $query = $this->db->get();
        return $query->result();
    }

    // Obtener detalles de un préstamo por su ID
    public function obtener_prestamo_por_id($id) {
        $this->db->select('p.*, e.nombre, e.primerApellido, e.segundoApellido');
        $this->db->from('prestamo p');
        $this->db->join('prestamoestudiante pe', 'p.id = pe.prestamo_id');
        $this->db->join('estudiante e', 'pe.estudiante_id = e.id');
        $this->db->where('p.id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    // Actualizar préstamo
    public function actualizar_prestamo($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('prestamo', $data);
    }

    // Eliminar préstamo
    public function eliminar_prestamo($id) {
        $this->db->where('id', $id);
        return $this->db->delete('prestamo');
    }
} -- !>
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
        $this->db->trans_start();  // Iniciar transacción

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

        $this->db->trans_complete();  // Completar transacción

        // Verificar si la transacción fue exitosa
        if ($this->db->trans_status() === FALSE) {
            return false;  // Si hubo error, revertir todo
        }

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



