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
                        <h6 class="mb-0">Listado de usuarios</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <!-- Centramos la tabla -->
                    <div class="row g-4 d-flex justify-content-center">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>N°</th>
                                        <th>Nombres</th>
                                        <th>Primer Apellido</th>
                                        <th>Segundo Apellido</th>
                                        <th>Correo</th>
                                        <th>Teléfono</th>
                                        <th>Nombre Usuario</th>
                                        <th>Rol</th>
                                        <th>Editar</th>
                                        <th>Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php 
                                    $contador = 1; // Inicializar el contador
                                    if (!empty($usuario)) { ?>
                                        <?php foreach ($usuario as $row) { 
                                            // Mostrar solo usuarios con estado igual a 1
                                            if ($row->estado == 1) { ?>
                                                <tr>
                                                    <td><?php echo $contador++; ?></td>
                                                    <td><?php echo $row->nombre; ?></td>
                                                    <td><?php echo $row->primerApellido; ?></td>
                                                    <td><?php echo $row->segundoApellido; ?></td>
                                                    <td><?php echo $row->email; ?></td>
                                                    <td><?php echo $row->telefono; ?></td>
                                                    <td><?php echo $row->nombreUsuario; ?></td>
                                                    <td><?php echo $row->rol; ?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('Usuario_c/modificar/'.$row->id); ?>" class="btn btn-warning btn-sm">
                                                            <i class="fas fa-edit"></i> <!-- Icono de editar -->
                                                        </a>
                                                    </td>
                                                    <td>
                                                        <?php echo form_open("usuario_c/eliminarbd"); ?>
                                                        <input type="hidden" name="id" value="<?php echo $row->id; ?>">
                                                        <button type="submit" class="btn btn-danger btn-sm">
                                                            <i class="fas fa-trash-alt"></i> <!-- Icono de eliminar -->
                                                        </button>
                                                        <?php echo form_close(); ?>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="7">No hay usuarios registrados.</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <!-- Botones de acciones -->
                    <div class="mt-4">
                        <a href="<?php echo base_url(); ?>index.php/login_c/logout" class="btn btn-warning">Cerrar Sesión</a>
                        <a href="<?php echo base_url(); ?>index.php/login_c/panel" class="btn btn-warning">Volver</a>
                        <a href="<?php echo base_url(); ?>index.php/usuario_c/agregar" class="btn btn-primary">Agregar Usuario</a>
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

    <!-- Bibliotecas de JavaScript -->
    <!-- Mantén solo una referencia de jQuery y Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Rutas correctas a tus scripts -->
    <script src="<?php echo base_url('template/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/js/main.js'); ?>"></script>

    <!-- Carga de FontAwesome para los iconos -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</body>
