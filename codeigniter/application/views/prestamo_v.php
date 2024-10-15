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
                    <h1>Lista de Préstamos de Proyectos</h1>

                    <!-- Mensajes de éxito/error -->
                    <?php if ($this->session->flashdata('success')): ?>
                        <p style="color:green;"><?php echo $this->session->flashdata('success'); ?></p>
                    <?php endif; ?>

                    <?php if ($this->session->flashdata('error')): ?>
                        <p style="color:red;"><?php echo $this->session->flashdata('error'); ?></p>
                    <?php endif; ?>

                    <!-- Tabla de préstamos -->
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>Estudiante</th>
                                <th>Proyecto</th>
                                <th>Fecha Préstamo</th>
                                <th>Fecha Devolución</th>
                                <th>Estado</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php if (!empty($prestamos)): ?>
                                <?php foreach ($prestamos as $prestamo): ?>
                                    <tr>
                                        <td><?php echo $prestamo->nombre; ?></td>
                                        <td><?php echo $prestamo->titulo; ?></td>
                                        <td><?php echo $prestamo->fechaPrestamo; ?></td>
                                        <td><?php echo $prestamo->fechaDevolucion; ?></td>
                                        <td><?php echo ($prestamo->estado == 1) ? 'Activo' : 'Devuelto'; ?></td>
                                        <td>
                                            <?php if ($prestamo->estado == 1): ?>
                                                <a href="<?php echo base_url('prestamo_c/devolver/' . $prestamo->id); ?>">Devolver</a>
                                            <?php else: ?>
                                                Devuelto
                                            <?php endif; ?>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            <?php else: ?>
                                <tr>
                                    <td colspan="6">No hay préstamos registrados.</td>
                                </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>

                    <!-- Formulario para registrar nuevo préstamo -->
                    <h2>Registrar Nuevo Préstamo</h2>
                    <form action="<?php echo base_url('prestamo_c/registrar'); ?>" method="post">
                        <label for="proyecto_id">Proyecto:</label>
                        <select name="proyecto_id" id="proyecto_id" required>
                            <?php foreach ($proyectos as $proyecto): ?>
                                <option value="<?php echo $proyecto->id; ?>"><?php echo $proyecto->titulo; ?></option>
                            <?php endforeach; ?>
                        </select><br><br>

                        <label for="estudiante_id">Estudiante:</label>
                        <select name="estudiante_id" id="estudiante_id" required>
                            <?php foreach ($estudiantes as $estudiante): ?>
                                <option value="<?php echo $estudiante->id; ?>"><?php echo $estudiante->nombre; ?></option>
                            <?php endforeach; ?>
                        </select><br><br>

                        <label for="fecha_prestamo">Fecha de Préstamo:</label>
                        <input type="date" name="fecha_prestamo" id="fecha_prestamo" required><br><br>

                        <label for="fecha_devolucion">Fecha de Devolución:</label>
                        <input type="date" name="fecha_devolucion" id="fecha_devolucion" required><br><br>

                        <label for="observacion">Observación:</label>
                        <textarea name="observacion" id="observacion"></textarea><br><br>

                        <input type="submit" value="Registrar Préstamo">
                    </form>
                </div>

                <!-- Botones de acciones -->
                <div class="mt-4">
                    <a href="<?php echo base_url('login_c/logout'); ?>" class="btn btn-warning">Cerrar Sesión</a>
                    <a href="<?php echo base_url('login_c/panel'); ?>" class="btn btn-warning">Volver</a>
                    <a href="<?php echo base_url('tutor_c/agregar'); ?>" class="btn btn-primary">Agregar Tutor</a>
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
