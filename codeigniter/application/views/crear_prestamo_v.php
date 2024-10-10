<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Préstamo</title>
</head>
<body>
    <h1>Crear Nuevo Préstamo</h1>
    <form action="<?= site_url('prestamo_c/guardar') ?>" method="post">
        <label>Fecha de Devolución:</label>
        <input type="date" name="fechaDevolucion" required><br>

        <label>Observación:</label>
        <input type="text" name="observacion" required><br>

        <label>Estudiante:</label>
        <input type="number" name="estudiante_id" required><br>

        <label>Proyecto:</label>
        <input type="number" name="proyecto_id" required><br>

        <label>Observación del Proyecto:</label>
        <input type="text" name="observacion_proyecto" required><br>

        <label>Usuario:</label>
        <input type="number" name="usuario_id" required><br>

        <button type="submit">Guardar</button>
    </form>
</body>
</html>
