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
            <h2 class="mb-4">Agregar Modalidad</h2>
            <?php echo form_open("Modalidad_c/agregarbd"); ?>
              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="nombreModalidadv" class="form-label"> Nombre Modalidad</label>
                  <input type="text" class="form-control" id="nombreModalidadv" name="nombreModalidadv" placeholder="Nombre Modalidad" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="estadov" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadov" name="estadov" placeholder="Estado" required>
                </div>
              </div>
              <button type="submit" class="btn btn-success">Agregar Modalidad</button>
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
