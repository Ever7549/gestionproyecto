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
                        <h6 class="mb-0">Editar Estudiante</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="table-responsive"> <!-- Hacemos la tabla responsiva -->
                        <table id="tablaEstudiantes" class="table table-striped table-bordered table-hover small text-nowrap"> <!-- Reducimos tamaño y evitamos quiebres de línea -->
                            <thead>
                              <?php echo form_open_multipart("estudiante_c/modificarbd"); ?>
                                <input type="hidden" name="id" value="<?php echo $infoestudiante->id; ?>">

                                <div class="row mb-3">
                                  <div class="col-md-2">
                                    <label for="usuario" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Escribe el Usuario" value="<?php echo $infoestudiante->usuario; ?>" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="nombre" class="form-label">Nombre(s)</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Escribe nombre(s)" value="<?php echo $infoestudiante->nombre; ?>" required>
                                  </div>
                                  <div class="col-md-3">
                                        <label for="primerApellido" class="form-label">Primer Apellido</label>
                                        <input type="text" class="form-control" id="primerApellido" name="primerApellido" placeholder="Escribe primer apellido" value="<?php echo $infoestudiante->primerApellido; ?>" required>
                                    </div>

                                    <div class="col-md-3">
                                        <label for="segundoApellido" class="form-label">Segundo Apellido</label>
                                        <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" placeholder="Escribe segundo apellido" value="<?php echo $infoestudiante->segundoApellido; ?>" required>
                                    </div> 
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-2">
                                    <label for="ci" class="form-label">N° Carnet</label>
                                    <input type="text" class="form-control" id="ci" name="ci" placeholder="Escribe N° C.I." value="<?php echo $infoestudiante->ci; ?>" required>
                                  </div>
                                  
                                  <div class="col-md-4">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" class="form-control" id="email" name="email" value="<?php echo $infoestudiante->email; ?>" required>
                                  </div>

                                  <div class="col-md-3">
                                    <label for="telefono" class="form-label">Celular</label>
                                    <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $infoestudiante->telefono; ?>" required>
                                  </div>

                                  <div class="col-md-3">
                                    <label for="usuarioCreador" class="form-label">Usuario Creador</label>
                                    <input type="text" class="form-control" id="usuarioCreador" name="usuarioCreador" value="<?php echo $infoestudiante->usuarioCreador; ?>" required>
                                  </div>
                                </div>
                                
                                <div class="row mb-3">
                                  <div class="col-md-3">
                                    <label for="carrera_id" class="form-label">Carrera</label>
                                    <select class="form-select" id="carrera_id" name="carrera_id" required>
                                      <?php foreach ($carreras as $carrera): ?>
                                        <option value="<?php echo $carrera->id; ?>" <?php echo $infoestudiante->carrera_id == $carrera->id ? 'selected' : ''; ?>>
                                          <?php echo $carrera->nombreCarrera; ?>
                                        </option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>
                                </div>

                                <div class="mb-3">
                                  <button type="submit" class="btn btn-outline-info py-3 mb-4">Guardar</button>
                                  <a href="javascript:history.back()" class="btn btn-outline-danger py-3 mb-4">Cancelar</a>
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

