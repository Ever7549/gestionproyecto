<body>
    <?php $this->load->view('lateral_v'); ?> <!-- Incluye el menú lateral -->

    <!-- Content Start -->
    <div class="content container-fluid px-4">
        <?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
        <div class="row g-0">
            <div class="col-12">
                <div class="bg-secondary rounded h-100 p-4">
                    <nav class="navbar navbar-expand-lg navbar-light mb-4">
                        <a class="navbar-brand" href="#">Gestiónar Modalidades</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/login_c/logout">
                                        <button type="button" class="btn btn-warning">Cerrar Sesión</button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/login_c/panel">
                                        <button type="button" class="btn btn-warning">Volver</button>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/modalidad_c/agregar">
                                        <button type="button" class="btn btn-primary">Agregar Modalidad</button>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>

                    <!-- Tabla para mostrar los tutores -->
                    <h6 class="mb-4">Listado de Modalidades</h6>
                    <div class="table-responsive">
                        <table class="table table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>N°</th>
                                    <th>Modalidad</th>
                                    <th>Modificar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $contador = 1; // Inicializar el contador
                                if (!empty($modalidades)) { ?>
                                    <?php foreach ($modalidades as $modalidad) { ?>
                                        <tr>
                                            <td><?php echo $contador++; ?></td> <!-- Mostrar el número de fila -->
                                            <td><?php echo $modalidad->nombreModalidad; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Modalidad_c/modificar/'.$modalidad->idmodalidad); ?>" class="btn btn-warning">
                                                    <i class="bi bi-pencil-square"></i> Modificar
                                                </a>
                                            </td>
                                            <td>
                                                <form action="<?php echo site_url('Modalidad_c/eliminarbd'); ?>" method="post" style="display:inline;">
                                                    <input type="hidden" name="idModalidad" value="<?php echo $modalidad->idmodalidad; ?>">
                                                    <button type="submit" class="btn btn-danger">
                                                        <i class="bi bi-trash"></i> Eliminar
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                <?php } else { ?>
                                    <tr>
                                        <td colspan="7">No hay tutores registrados.</td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div> <!-- Fin de .bg-secondary -->
            </div> <!-- Fin de .col-12 -->
        </div> <!-- Fin de .row -->
        <?php $this->load->view('pie_v'); ?> <!-- Incluye pie de página -->
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
