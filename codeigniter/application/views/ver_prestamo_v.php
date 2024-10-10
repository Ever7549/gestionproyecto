<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalles del Préstamo</title>
    <link rel="stylesheet" href="<?php echo base_url('template/css/style.css'); ?>"> <!-- Ruta al archivo CSS -->
</head>
<body>
    <div class="container">
        <h1>Detalles del Préstamo</h1>

        <?php if ($prestamo): ?> <!-- Si existe el préstamo -->
        <table class="table table-bordered">
            <tr>
                <th>ID del Préstamo</th>
                <td><?php echo $prestamo->id_prestamo; ?></td>
            </tr>
            <tr>
                <th>Nombre del Solicitante</th>
                <td><?php echo $prestamo->nombre_solicitante; ?></td>
            </tr>
            <tr>
                <th>Fecha de Préstamo</th>
                <td><?php echo $prestamo->fecha_prestamo; ?></td>
            </tr>
            <tr>
                <th>Fecha de Devolución</th>
                <td><?php echo $prestamo->fecha_devolucion; ?></td>
            </tr>
            <tr>
                <th>Proyecto Asociado</th>
                <td><?php echo $prestamo->nombre_proyecto; ?></td>
            </tr>
            <tr>
                <th>Estado</th>
                <td><?php echo $prestamo->estado_prestamo ? 'Activo' : 'Finalizado'; ?></td>
            </tr>
        </table>

        <!-- Botones para Editar, Eliminar y Volver -->
        <a href="<?php echo site_url('prestamo_c/editar/' . $prestamo->id_prestamo); ?>" class="btn btn-primary">Editar</a>
        <a href="<?php echo site_url('prestamo_c/eliminar/' . $prestamo->id_prestamo); ?>" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este préstamo?');">Eliminar</a>
        <a href="<?php echo site_url('prestamo_c'); ?>" class="btn btn-secondary">Volver</a>

        <?php else: ?> <!-- Si no existe el préstamo -->
        <p>No se encontraron detalles para este préstamo.</p>
        <?php endif; ?>
    </div>

    <script src="<?php echo base_url('template/js/script.js'); ?>"></script> <!-- Ruta al archivo JS -->
</body>
</html>
