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
                        <table id="tablaProyectos" class="table table-striped table-bordered table-hover small text-nowrap"> <!-- Reducimos tamaño y evitamos quiebres de línea -->
                            <thead>
                              <?php echo form_open("Proyecto_c/agregarbd"); ?>
                                <div class="row mb-3">
                                  <div class="col-md-2">
                                    <label for="codigov" class="form-label">Codigo</label>
                                    <input type="text" class="form-control" id="codigov" name="codigov" placeholder="Codigo" required>
                                  </div>
                                  <div class="col-md-5">
                                    <label for="titulov" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulov" name="titulov" placeholder="Título" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <div class="col-md-4">
                                    <label for="estudiante1v" class="form-label">Estudiante</label>
                                    <input type="text" class="form-control" id="estudiante1v" name="estudiante1v" placeholder="Estudiante" required>
                                  </div>
                                  <div class="col-md-4">
                                    <label for="estudiante2v" class="form-label">Estudiante</label>
                                    <input type="text" class="form-control" id="estudiante2v" name="estudiante2v" placeholder="Estudiante">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="estudiante3v" class="form-label">Estudiante</label>
                                    <input type="text" class="form-control" id="estudiante3v" name="estudiante3v" placeholder="Estudiante">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-2">
                                    <label for="gestionv" class="form-label">Gestión</label>
                                    <input type="text" class="form-control" id="gestionv" name="gestionv" placeholder="Gestión" required>
                                  </div>
                                  <div class="col-md-5">
                                    <label for="referenciav" class="form-label">referencia</label>
                                    <input type="text" class="form-control" id="referenciav" name="referenciav" placeholder="Referencia" required>
                                  </div>
                                  <div class="col-md-5">
                                    <label for="resumenv" class="form-label">Resumen</label>
                                    <textarea class="form-control" id="resumenv" name="resumenv" rows="3" placeholder="Resumen" required></textarea>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-3">
                                    <label for="ubicacionv" class="form-label">Ubicacion</label>
                                    <input type="text" class="form-control" id="ubicacionv" name="ubicacionv" placeholder="Ubicacion" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="usuarioCreadorv" class="form-label">Usuario Creador</label>
                                    <input type="text" class="form-control" id="usuarioCreadorv" name="usuarioCreadorv" placeholder="Usuario Creador" required>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-4">
                                    <label for="carrera_idv" class="form-label">Carrera</label>
                                    <select class="form-control bg-dark text-white" id="carrera_idv" name="carrera_idv" required>
                                        <option value="">Seleccione una carrera</option>
                                        <?php if (!empty($carreras)): ?>
                                            <!-- Iterar sobre las carreras obtenidas del controlador -->
                                            <?php foreach ($carreras as $carrera): ?>
                                                <option value="<?php echo $carrera->id; ?>">
                                                    <?php echo $carrera->nombreCarrera; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <option value="">No hay carreras disponibles</option>
                                        <?php endif; ?>
                                    </select>
                                  </div>
                                  
                                  <div class="col-md-4">
                                    <label for="modalidad_idv" class="form-label">Modalidad</label>
                                    <select class="form-control bg-dark text-white" id="modalidad_idv" name="modalidad_idv"required>
                                        <option value="">Seleccione una modalidad</option>
                                        <?php if (!empty($modalidades)): ?>
                                            <!-- Iterar sobre las carreras obtenidas del controlador -->
                                            <?php foreach ($modalidades as $modalidad): ?>
                                                <option value="<?php echo $modalidad->id; ?>">
                                                    <?php echo $modalidad->nombreModalidad; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <option value="">No hay modalidades disponibles</option>
                                        <?php endif; ?>
                                    </select>
                                  </div>

                                  <div class="col-md-4">
                                    <label for="tutor_idv" class="form-label">Tutor</label>
                                    <select class="form-control bg-dark text-white" id="tutor_idv" name="tutor_idv" required>
                                        <option value="">Seleccione un Tutor</option>
                                        <?php if (!empty($tutores)): ?>
                                            <!-- Iterar sobre las carreras obtenidas del controlador -->
                                            <?php foreach ($tutores as $tutor): ?>
                                                <option value="<?php echo $tutor->id; ?>">
                                                    <?php echo $tutor->tutorCompleto; ?>
                                                </option>
                                            <?php endforeach; ?>
                                        <?php else: ?>
                                            <option value="">No hay modalidades disponibles</option>
                                        <?php endif; ?>
                                    </select>
                                  </div>
                                </div>

                                <button type="submit" class="btn btn-success">Agregar Proyecto</button>
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


