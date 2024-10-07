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
                        <h6 class="mb-0">Editar Usuario</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="table-responsive"> <!-- Hacemos la tabla responsiva -->
                        <table id="tablaProyectos" class="table table-striped table-bordered table-hover small text-nowrap"> <!-- Reducimos tamaño y evitamos quiebres de línea -->
                            <thead>
                              <?php echo form_open_multipart('usuario_c/modificarbd'); ?>
                                <input type="hidden" name="id" value="<?php echo $infousuario->id; ?>">

                                  <div class="row mb-3">
                                    <div class="col-md-6">
                                      <label for="nombre" class="form-label">Nombres</label>
                                      <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $infousuario->nombre; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="primerApellido" class="form-label">Primer Apellido</label>
                                      <input type="text" class="form-control" id="primerApellido" name="primerApellido" value="<?php echo $infousuario->primerApellido; ?>" required>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <div class="col-md-6">
                                      <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                                      <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" value="<?php echo $infousuario->segundoApellido; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="email" class="form-label">Correo Electrónico</label>
                                      <input type="email" class="form-control" id="email" name="email" value="<?php echo $infousuario->email; ?>" required>
                                    </div>
                                  </div>

                                  <div class="row mb-3">
                                    <div class="col-md-6">
                                      <label for="telefono" class="form-label">Teléfono</label>
                                      <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $infousuario->telefono; ?>" required>
                                    </div>
                                    <div class="col-md-6">
                                      <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
                                      <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo $infousuario->nombreUsuario; ?>" required>
                                    </div>
                                  </div>
                                  
                                  <div class="row mb-3">
                                    <div class="col-md-4">
                                        <label for="rol" class="form-label">Rol de Usuario</label>
                                        <select class="form-control bg-dark" id="rol" name="rol" required>
                                            <!-- Opción para mostrar el rol actual -->
                                            <option value="<?php echo $infousuario->rol; ?>" selected>
                                                <?php echo $infousuario->rol; ?>
                                            </option>

                                            <!-- Opciones predefinidas -->
                                            <option value="ADMINISTRADOR" <?php echo ($infousuario->rol == 'ADMINISTRADOR') ? 'selected' : ''; ?>>ADMINISTRADOR</option>
                                            <option value="ENCARGADO" <?php echo ($infousuario->rol == 'ENCARGADO') ? 'selected' : ''; ?>>ENCARGADO</option>
                                            <option value="VISITANTE" <?php echo ($infousuario->rol == 'VISITANTE') ? 'selected' : ''; ?>>VISITANTE</option>
                                        </select>
                                    </div>
                                </div>

                                  <div class="mb-3">
                                    <button type="submit" class="btn btn-success">Guardar Cambios</button>
                                    <a href="javascript:history.back()" class="btn btn-secondary">Cancelar</a>
                                  </div>
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
