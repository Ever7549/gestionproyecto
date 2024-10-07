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
                        <h6 class="mb-0">Editar Proyectos</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="table-responsive"> <!-- Hacemos la tabla responsiva -->
                        <table id="tablaProyectos" class="table table-striped table-bordered table-hover small text-nowrap"> <!-- Reducimos tamaño y evitamos quiebres de línea -->
                            <thead>
                              <?php echo form_open_multipart("proyecto_c/modificarbd"); ?>
                                <input type="hidden" name="id" value="<?php echo $infoproyecto->id; ?>">

                                <div class="row mb-3">
                                  <div class="col-md-2">
                                    <label for="codigo" class="form-label">Codigo</label>
                                    <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Escribe el Codigo" value="<?php echo $infoproyecto->codigo; ?>" required>
                                  </div>
                                  <div class="col-md-10">
                                    <label for="titulo" class="form-label">Título</label>
                                    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escribe el título" value="<?php echo $infoproyecto->titulo; ?>" required>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-4">
                                    <label for="estudiante1" class="form-label">Estudiante</label>
                                    <input type="text" class="form-control" id="estudiante1" name="estudiante1" placeholder="Escribe el estudiante" value="<?php echo $infoproyecto->estudiante1; ?>" required>
                                  </div>
                                  
                                  <div class="col-md-4">
                                    <label for="estudiante2" class="form-label">Estudiante</label>
                                    <input type="text" class="form-control" id="estudiante2" name="estudiante2" placeholder="Escribe el estudiante" value="<?php echo $infoproyecto->estudiante2; ?>">
                                  </div>
                                  <div class="col-md-4">
                                    <label for="estudiante3" class="form-label">Estudiante</label>
                                    <input type="text" class="form-control" id="estudiante3" name="estudiante3" placeholder="Escribe el estudiante" value="<?php echo $infoproyecto->estudiante3; ?>">
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-3">
                                    <label for="referencia" class="form-label">Referencia</label>
                                    <textarea class="form-control" id="referencia" name="referencia" rows="3" placeholder="Escribe el referencia" required><?php echo $infoproyecto->referencia; ?></textarea>
                                  </div>
                                  <div class="col-md-9">
                                    <label for="resumen" class="form-label">Resumen</label>
                                    <textarea class="form-control" id="resumen" name="resumen" rows="3" placeholder="Escribe el resumen" required><?php echo $infoproyecto->resumen; ?></textarea>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <div class="col-md-2">
                                    <label for="gestion" class="form-label">Gestión</label>
                                    <input type="text" class="form-control" id="gestion" name="gestion" placeholder="Escribe la gestión" value="<?php echo $infoproyecto->gestion; ?>" required>
                                  </div>
                                  
                                  <div class="col-md-2">
                                    <label for="ubicacion" class="form-label">Ubicacion</label>
                                    <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="<?php echo $infoproyecto->ubicacion; ?>" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="usuarioCreador" class="form-label">Usuario Creador</label>
                                    <input type="text" class="form-control" id="usuarioCreador" name="usuarioCreador" value="<?php echo $infoproyecto->usuarioCreador; ?>" required>
                                  </div>
                                </div>
                                
                                <div class="row mb-3">
                                  <div class="col-md-3">
                                    <label for="carrera_id" class="form-label">Carrera</label>
                                    <select class="form-select" id="carrera_id" name="carrera_id" required>
                                      <?php foreach ($carreras as $carrera): ?>
                                        <option value="<?php echo $carrera->id; ?>" <?php echo $infoproyecto->carrera_id == $carrera->id ? 'selected' : ''; ?>>
                                          <?php echo $carrera->nombreCarrera; ?>
                                        </option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>

                                  <div class="col-md-3">
                                    <label for="modalidad_id" class="form-label">Modalidad</label>
                                    <select class="form-select" id="modalidad_id" name="modalidad_id" required>
                                      <?php foreach ($modalidades as $modalidad): ?>
                                        <option value="<?php echo $modalidad->id; ?>" <?php echo $infoproyecto->modalidad_id == $modalidad->id ? 'selected' : ''; ?>>
                                          <?php echo $modalidad->nombreModalidad; ?>
                                        </option>
                                      <?php endforeach; ?>
                                    </select>
                                  </div>

                                  <div class="col-md-6">
                                    <label for="tutor_id" class="form-label">Tutor</label>
                                    <select class="form-select" id="tutor_id" name="tutor_id" required>
                                      <?php foreach ($tutores as $tutor): ?>
                                        <option value="<?php echo $tutor->id; ?>" <?php echo $infoproyecto->tutor_id == $tutor->id ? 'selected' : ''; ?>>
                                          <?php echo $tutor->tutorCompleto; ?>
                                          
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

