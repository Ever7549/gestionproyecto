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
                        <h6 class="mb-0">Agregar Proyectos</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="table-responsive"> <!-- Hacemos la tabla responsiva -->
                        <table class="table table-striped table-bordered table-hover small text-nowrap"> <!-- Reducimos tamaño y evitamos quiebres de línea -->
                            <thead>
                            <?php echo form_open_multipart("Usuario_c/agregarbd"); ?>
                              <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="nombrev" class="form-label">Nombres</label>
                                  <input type="text" class="form-control" id="nombrev" name="nombrev" placeholder="Nombres" required>
                                </div>
                                <div class="col-md-4">
                                  <label for="primerApellidov" class="form-label">Primer Apellido</label>
                                  <input type="text" class="form-control" id="primerApellidov" name="primerApellidov" placeholder="Primer Apellido" required>
                                </div>
                                <div class="col-md-4">
                                  <label for="segundoApellidov" class="form-label">Segundo Apellido</label>
                                  <input type="text" class="form-control" id="segundoApellidov" name="segundoApellidov" placeholder="Segundo Apellido" required>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="emailv" class="form-label">Correo Electrónico</label>
                                  <input type="email" class="form-control" id="emailv" name="emailv" placeholder="Correo Electrónico" required>
                                </div>
                                <div class="col-md-4">
                                  <label for="telefonov" class="form-label">Teléfono</label>
                                  <input type="text" class="form-control" id="telefonov" name="telefonov" placeholder="Teléfono" required>
                                </div>
                                <div class="col-md-4">
                                  <label for="nombreUsuariov" class="form-label">Nombre de Usuario</label>
                                  <input type="text" class="form-control" id="nombreUsuariov" name="nombreUsuariov" placeholder="Nombre de Usuario" required>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <div class="col-md-4">
                                  <label for="contrasenav" class="form-label">Contraseña</label>
                                  <input type="password" class="form-control" id="contrasenav" name="contrasenav" placeholder="Contraseña" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="rolv" class="form-label">Rol de Usuario</label>
                                    <select class="form-control" id="rolv" name="rolv" required>
                                        <option value="" disabled selected>Selecciona un rol</option>
                                        <option value="ADMINISTRADOR">ADMINISTRADOR</option>
                                        <option value="ENCARGADO">ENCARGADO</option>
                                        <option value="VISITANTE">VISITANTE</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                  <label for="usuarioCreadorv" class="form-label">Usuario Creador</label>
                                  <input type="text" class="form-control" id="usuarioCreadorv" name="usuarioCreadorv" placeholder="Usuario Creador" required>
                                </div>
                              </div>

                              <button type="submit" class="btn btn-success">Agregar Usuario</button>
                            <?php echo form_close(); ?>
                            </thead>
                        </table>
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
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
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

