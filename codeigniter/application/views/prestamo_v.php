<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Préstamos</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container">
    <h1>Listado de Proyectos</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Número</th>
                <th>Código</th>
                <th>Título</th>
                <th>Ubicación</th>
                <th>Estado</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($proyectos as $index => $proyecto): ?>
                <tr>
                    <td><?php echo $index + 1; ?></td>
                    <td><?php echo $proyecto->codigo; ?></td>
                    <td><?php echo $proyecto->titulo; ?></td>
                    <td><?php echo $proyecto->ubicacion; ?></td>
                    <td>
                        <?php if ($proyecto->estado == 1): ?>
                            <a href="<?php echo site_url('prestamo_c/cambiar_a_prestado/'.$proyecto->id); ?>" class="btn btn-success">Disponible</a>
                        <?php else: ?>
                            <a href="<?php echo site_url('prestamo_c/cambiar_a_devuelto/'.$proyecto->id); ?>" class="btn btn-danger">Prestado</a>
                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
</body>
</html>
