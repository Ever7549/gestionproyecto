<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Préstamos</title>
</head>
<body>
    <h1>Lista de Préstamos</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Fecha de Préstamo</th>
                <th>Fecha de Devolución</th>
                <th>Estudiante</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($prestamos as $prestamo): ?>
            <tr>
                <td><?= $prestamo->id ?></td>
                <td><?= $prestamo->fechaPrestamo ?></td>
                <td><?= $prestamo->fechaDevolucion ?></td>
                <td><?= $prestamo->nombre ?> <?= $prestamo->primerApellido ?></td>
                <td>
                    <a href="<?= site_url('prestamo_c/ver/'.$prestamo->id) ?>">Ver</a> |
                    <a href="<?= site_url('prestamo_c/eliminar/'.$prestamo->id) ?>">Eliminar</a>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <a href="<?= site_url('prestamo_c/crear') ?>">Crear Préstamo</a>
</body>
</html>
