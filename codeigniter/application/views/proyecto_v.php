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
                        <h6 class="mb-0">Listado de Proyectos</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="row g-4">
                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Codigo</th>
                                                <th>Título</th>
                                                <th>Egresado 1</th>
                                                <th>Egresado 2</th>
                                                <th>Egresado 3</th>
                                                <th>Gestión</th>
                                                <th>Referencia</th>
                                                <th>Resumen</th>
                                                <th>Ubicacion</th>
                                                <th>Carrera</th>
                                                <th>Modalidad</th>
                                                <th>Tutor</th>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            $contador = 1; 
                                            if (!empty($proyectos)) { ?>
                                                <?php foreach ($proyectos as $proyecto) { ?>
                                                    <tr>
                                                        <td><?php echo $contador++; ?></td>
                                                        <td><?php echo $proyecto->codigo; ?></td>
                                                        <td><?php echo $proyecto->titulo; ?></td>
                                                        <td><?php echo $proyecto->estudiante1; ?></td>
                                                        <td><?php echo $proyecto->estudiante2; ?></td>
                                                        <td><?php echo $proyecto->estudiante3; ?></td>
                                                        <td><?php echo $proyecto->gestion; ?></td>
                                                        <td><?php echo $proyecto->referencia; ?></td>
                                                        <td><?php echo $proyecto->resumen; ?></td>
                                                        <td><?php echo $proyecto->ubicacion; ?></td>
                                                        <td><?php echo $proyecto->nombreCarrera; ?></td>
                                                        <td><?php echo $proyecto->nombreModalidad; ?></td>
                                                        <td><?php echo $proyecto->tutor_info; ?></td> <!-- Mostrando el nombre del tutor -->
                                                        <td>
                                                            <?php if (isset($proyecto->id)) { ?>
                                                                <a href="<?php echo site_url('Proyecto_c/modificar/'.$proyecto->id); ?>" class="btn btn-warning">
                                                                    <i class="bi bi-pencil-square"></i> Modificar
                                                                </a>
                                                            <?php } else { ?>
                                                                <span>No disponible</span>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <form action="<?php echo site_url('Proyecto_c/eliminarbd'); ?>" method="post" style="display:inline;">
                                                                <input type="hidden" name="id" value="<?php echo $proyecto->id; ?>">
                                                                <button type="submit" class="btn btn-danger">
                                                                    <i class="bi bi-trash"></i> Eliminar
                                                                </button>
                                                            </form>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <tr>
                                                    <td colspan="11">No hay proyectos registrados.</td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                    </div>

                    <!-- Botones de acciones -->
                    <div class="mt-4">
                        <a href="<?php echo base_url(); ?>index.php/login_c/logout" class="btn btn-warning">Cerrar Sesión</a>
                        <a href="<?php echo base_url(); ?>index.php/login_c/panel" class="btn btn-warning">Volver</a>
                        <a href="<?php echo base_url(); ?>index.php/carrera_c/agregar" class="btn btn-primary">Agregar Carrera</a>
                        <a href="<?php echo site_url('Proyecto_c/agregar'); ?>" class="btn btn-primary"><i class="bi bi-plus"></i> Agregar Proyecto</a>      
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Librerías locales -->
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
