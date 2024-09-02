<body>
<?php $this->load->view('lateral_v'); ?> <!-- Incluye el menú lateral -->

    <!-- Content Start -->
    <div class="content container-fluid px-4">
        <?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
        <div class="row g-0">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                
                    <!-- Botón para agregar un nuevo proyecto -->
                    <div class="col-12 mb-4">
                        <a href="<?php echo site_url('Proyecto_c/agregar'); ?>" class="btn btn-primary">
                            <i class="bi bi-plus"></i> Agregar Proyecto
                        </a>
                    </div>
                    <!-- Tabla para mostrar los proyectos -->
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Listado de Proyectos</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Título</th>
                                        <th>Egresado</th>
                                        <th>Gestión</th>
                                        <th>Resumen</th>
                                        <th>Tutor</th>
                                        <th>Carrera</th>
                                        <th>Modificar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $contador = 1; // Inicializar el contador
                                    if (!empty($proyectos)) { ?>
                                        <?php foreach ($proyectos->result() as $proyecto) { ?>
                                            <tr>
                                                <td><?php echo $contador++; ?></td> <!-- Mostrar el número de fila -->
                                                <td><?php echo $proyecto->titulo; ?></td>
                                                <td><?php echo $proyecto->egresado; ?></td>
                                                <td><?php echo $proyecto->gestion; ?></td>
                                                <td><?php echo $proyecto->resumen; ?></td>
                                                <td><?php echo $proyecto->nombre_tutor; ?></td> <!-- Mostrando el nombre del tutor -->
                                                <td><?php echo $proyecto->nombre_carrera; ?></td> <!-- Mostrando el nombre de la carrera -->
                                                <td>
                                                    <a href="<?php echo site_url('Proyecto_c/modificar/'.$proyecto->idproyecto); ?>" class="btn btn-warning">
                                                        <i class="bi bi-pencil-square"></i> Modificar
                                                    </a>
                                                </td>
                                                <td>
                                                    <form action="<?php echo site_url('Proyecto_c/eliminarbd'); ?>" method="post" style="display:inline;">
                                                        <input type="hidden" name="idProyecto" value="<?php echo $proyecto->idproyecto; ?>">
                                                        <button type="submit" class="btn btn-danger">
                                                            <i class="bi bi-trash"></i> Eliminar
                                                        </button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="8">No hay proyectos registrados.</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div> <!-- Fin de .col-12 -->
                </div> <!-- Fin de .bg-secondary -->
            </div> <!-- Fin de .col-12 -->
            <?php $this->load->view('pie_v'); ?> <!-- Incluye pie de página -->
        </div> <!-- Fin de .row -->
    </div> <!-- Fin de .content -->

    <!-- Volver al Inicio -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Bibliotecas de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('../template/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('../template/dist/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/dist/js/scripts.js'); ?>"></script>
</body>
