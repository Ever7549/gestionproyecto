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
            <h2 class="mb-4">Agregar Proyecto</h2>
            <?php echo form_open("Proyecto_c/agregarbd"); ?>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="titulov" class="form-label">Título</label>
                  <input type="text" class="form-control" id="titulov" name="titulov" placeholder="Título" required>
                </div>
                <div class="col-md-6">
                  <label for="egresadov" class="form-label">Egresado</label>
                  <input type="text" class="form-control" id="egresadov" name="egresadov" placeholder="Egresado" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="gestionv" class="form-label">Gestión</label>
                  <input type="text" class="form-control" id="gestionv" name="gestionv" placeholder="Gestión" required>
                </div>
                <div class="col-md-6">
                  <label for="resumenv" class="form-label">Resumen</label>
                  <textarea class="form-control" id="resumenv" name="resumenv" rows="3" placeholder="Resumen" required></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="estadov" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadov" name="estadov" placeholder="Estado" required>
                </div>
                <div class="col-md-6">
                  <label for="usuarioCreadorv" class="form-label">Usuario Creador</label>
                  <input type="text" class="form-control" id="usuarioCreadorv" name="usuarioCreadorv" placeholder="Usuario Creador" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="carrera_idcarrerav" class="form-label">Carrera</label>
                  <input type="text" class="form-control" id="carrera_idcarrerav" name="carrera_idcarrerav" placeholder="Carrera" required>
                </div>
                <div class="col-md-4">
                  <label for="modalidad_idmodalidadv" class="form-label">Modalidad</label>
                  <input type="text" class="form-control" id="modalidad_idmodalidadv" name="modalidad_idmodalidadv" placeholder="Modalidad" required>
                </div>
                <div class="col-md-4">
                  <label for="tutor_idtutorv" class="form-label">Tutor</label>
                  <input type="text" class="form-control" id="tutor_idtutorv" name="tutor_idtutorv" placeholder="Tutor" required>
                </div>
              </div>

              <button type="submit" class="btn btn-success">Agregar Proyecto</button>
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
