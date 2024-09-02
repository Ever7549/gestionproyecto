<body>
  <!-- Incluye el menú lateral -->
  <?php $this->load->view('lateral_v'); ?>

  <div class="content container-fluid px-4">
    <!-- Incluye el encabezado -->
    <?php $this->load->view('encabezado_v'); ?>

    <!-- Formulario de agregar proyecto -->
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="bg-secondary rounded h-100">
          <div class="col-md-10">
            <h2 class="mb-4">Agregar Tutor</h2>
            <?php echo form_open("Tutor_c/agregarbd"); ?>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="nombresv" class="form-label">Nombres</label>
                  <input type="text" class="form-control" id="nombresv" name="nombresv" placeholder="Nombres" required>
                </div>
                <div class="col-md-6">
                  <label for="apellidosv" class="form-label">Egresado</label>
                  <input type="text" class="form-control" id="apellidosv" name="apellidosv" placeholder="Apellidos" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="estadov" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadov" name="estadov" placeholder="Estado" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="carrera_idcarrerav" class="form-label">Carrera</label>
                  <input type="text" class="form-control" id="carrera_idcarrerav" name="carrera_idcarrerav" placeholder="Carrera" required>
                </div>
                <div class="col-md-4">
                  <label for="rol_idrolv" class="form-label">Cargo</label>
                  <input type="text" class="form-control" id="rol_idrolv" name="rol_idrolv" placeholder="Cargo" required>
                </div>
              </div>

              <button type="submit" class="btn btn-success">Agregar Tutor</button>
            <?php echo form_close(); ?>
          </div>
        </div>
      </div>
    </div>

    <!-- Incluye el pie de página -->
    <?php $this->load->view('pie_v'); ?>
  </div>

  <!-- Volver al Inicio -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

  <!-- Bibliotecas de JavaScript -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('../template/lib/chart/chart.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/lib/easing/easing.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/lib/waypoints/waypoints.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/js/main.js'); ?>"></script>
  <script src="<?php echo base_url('../template/dist/js/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('../template/dist/js/scripts.js'); ?>"></script>
</body>
