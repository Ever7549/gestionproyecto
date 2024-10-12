<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Detalles del Préstamo</title>
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
</head>
<body>
<div class="container">
    <h1>Detalles del Préstamo</h1>
    <form action="<?php echo site_url('prestamo_c/registrar_prestamo'); ?>" method="post">
        <!-- Datos del Proyecto -->
        <div class="row">
            <div class="col-md-6">
                <label>Código del Proyecto:</label>
                <input type="text" name="codigo" value="<?php echo $proyecto->codigo; ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label>Título:</label>
                <input type="text" name="titulo" value="<?php echo $proyecto->titulo; ?>" class="form-control" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Ubicación:</label>
                <input type="text" name="ubicacion" value="<?php echo $proyecto->ubicacion; ?>" class="form-control" readonly>
            </div>
            <div class="col-md-6">
                <label>Fecha de Devolución:</label>
                <input type="date" name="fechaDevolucion" class="form-control">
            </div>
        </div>
        <br>
        <!-- Datos del Estudiante -->
        <div class="row">
            <div class="col-md-6">
                <label>Buscar Estudiante:</label>
                <input type="text" name="criterio" class="form-control" placeholder="Nombre o CI del Estudiante">
            </div>
            <div class="col-md-6">
                <label>Observación:</label>
                <textarea name="observacion" class="form-control"></textarea>
            </div>
        </div>
        <br>
        <input type="hidden" name="proyecto_id" value="<?php echo $proyecto->id; ?>">
        <input type="hidden" name="estudiante_id" id="estudiante_id">
        <button type="submit" class="btn btn-primary">Registrar Préstamo</button>
    </form>
</div>
</body>
</html>
