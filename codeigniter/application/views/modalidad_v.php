<body>
    <?php $this->load->view('header_v'); ?> <!-- Incluye el encabezado -->
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <?php $this->load->view('lateral_v'); ?> <!-- Incluye el menú lateral -->
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
            <!-- Navbar End -->

            <!-- Inicio del Contenido Principal -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Listado de Modalidades</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="row g-4">
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
                                                <a href="<?php echo site_url('Modalidad_c/modificar/'.$modalidad->id); ?>" class="btn btn-warning">
                                                    <i class="bi bi-pencil-square"></i> Modificar
                                                </a>
                                            </td>
                                            <td>
                                                <form action="<?php echo site_url('Modalidad_c/eliminarbd'); ?>" method="post" style="display:inline;">
                                                    <input type="hidden" name="id" value="<?php echo $modalidad->id; ?>">
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

                    <!-- Botones de acciones -->
                    <div class="mt-4">
                        <a href="<?php echo base_url(); ?>index.php/login_c/logout" class="btn btn-warning">Cerrar Sesión</a>
                        <a href="<?php echo base_url(); ?>index.php/login_c/panel" class="btn btn-warning">Volver</a>
                        <a href="<?php echo base_url(); ?>index.php/modalidad_c/agregar" class="btn btn-primary">Agregar Modalidad</a>
                    </div>
                </div>
            </div>
            <!-- Fin del Contenido Principal -->

            <!-- Inicio del Pie de Página -->
            <div class="container-fluid pt-4 px-4">
                <?php $this->load->view('pie_v'); ?> <!-- Incluye pie de página -->
            </div>
            <!-- Fin del Pie de Página -->
        </div>
        <!-- Content End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('template/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/js/main.js'); ?>"></script>
    <script src="<?php echo base_url('template/dist/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/dist/js/scripts.js'); ?>"></script>

</body>
