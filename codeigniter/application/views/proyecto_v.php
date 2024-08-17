

<!-- Content Start -->
<div>
    <div class="row g-4">
        <!-- Botón para agregar un nuevo proyecto -->
        <div class="col-12 mb-4">
            <a href="<?php echo site_url('Proyecto_c/agregar'); ?>" class="btn btn-primary"><i class="bi bi-plus"></i> Agregar Proyecto</a>
        </div>
        <!-- Tabla para mostrar los proyectos -->
        <div class="col-12">
            <div class="bg-secondary rounded h-100 p-4">
                <h6 class="mb-4">Listado de Proyectos</h6>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Título</th>
                            <th>Egresado</th>
                            <th>Gestión</th>
                            <th>Resumen</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php if (!empty($proyectos)) { ?>
                            <?php foreach ($proyectos->result() as $proyecto) { ?>
                                <tr>
                                    <td><?php echo $proyecto->idproyecto; ?></td>
                                    <td><?php echo $proyecto->titulo; ?></td>
                                    <td><?php echo $proyecto->egresado; ?></td>
                                    <td><?php echo $proyecto->gestion; ?></td>
                                    <td><?php echo $proyecto->resumen; ?></td>
                                    <td>
                                        <?php echo $proyecto->estado ? 'Activo' : 'Inactivo'; ?>
                                    </td>
                                    <td>
                                        <!-- Botones CRUD -->
                                        <a href="<?php echo site_url('Proyecto_c/modificar/'.$proyecto->idproyecto); ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Modificar</a>
                                        <a href="<?php echo site_url('Proyecto_c/ver/'.$proyecto->idproyecto); ?>" class="btn btn-info"><i class="bi bi-eye"></i> Ver</a>
                                        <form action="<?php echo site_url('Proyecto_c/eliminarbd'); ?>" method="post" style="display:inline;">
                                            <input type="hidden" name="idProyecto" value="<?php echo $proyecto->idproyecto; ?>">
                                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php } ?>
                        <?php } else { ?>
                            <tr>
                                <td colspan="7">No hay proyectos registrados.</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Content End -->
