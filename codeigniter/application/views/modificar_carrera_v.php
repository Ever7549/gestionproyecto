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
                        <h6 class="mb-0">Modificar Carreras</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>
                    <?php echo form_open_multipart("carrera_c/modificarbd"); ?>
                      <input type="hidden" name="idc" value="<?php echo $infocarrera->id; ?>">

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="titulo" class="form-label">Nombre Carrera</label>
                          <input type="text" class="form-control" id="nombreCarrera" name="nombreCarrera" placeholder="Escribe la Carrera" value="<?php echo $infocarrera->nombreCarrera; ?>" required>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <div class="col-md-6">
                          <label for="estado" class="form-label">Estado</label>
                          <select class="form-select" id="estado" name="estado" required>
                            <option value="1" <?php echo $infocarrera->estado == '1' ? 'selected' : ''; ?>>Activo</option>
                            <option value="0" <?php echo $infocarrera->estado == '0' ? 'selected' : ''; ?>>Inactivo</option>
                          </select>
                        </div>
                      </div>
                      <div class="mb-3">
                        <button type="submit" class="btn btn-success">Guardar Cambios</button>
                        <a href="javascript:history.back()" class="btn btn-secondary">Cancelar</a>
                      </div>
                    <?php echo form_close(); ?>
                    
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



