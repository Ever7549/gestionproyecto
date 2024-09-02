<body>
  <!-- Incluye el menú lateral -->
  <?php $this->load->view('lateral_v'); ?>

  <div class="content container-fluid px-4">
    <!-- Incluye el encabezado -->
    <?php $this->load->view('encabezado_v'); ?>

    <!-- Formulario de modificar proyecto -->
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="bg-secondary rounded h-100">
          <div class="col-md-10">
            <h2 class="mb-4">Modificar Modalidad</h2>
            <?php echo form_open_multipart("modalidad_c/modificarbd"); ?>
              <input type="hidden" name="idmodalidad" value="<?php echo $infomodalidad->idmodalidad; ?>">

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="titulo" class="form-label">Nombre Modalidad</label>
                  <input type="text" class="form-control" id="nombreModalidad" name="nombreModalidad" placeholder="Escribe la modalidad" value="<?php echo $infomodalidad->nombreModalidad; ?>" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="estado" class="form-label">Estado</label>
                  <select class="form-select" id="estado" name="estado" required>
                    <option value="1" <?php echo $infomodalidad->estado == '1' ? 'selected' : ''; ?>>Activo</option>
                    <option value="0" <?php echo $infomodalidad->estado == '0' ? 'selected' : ''; ?>>Inactivo</option>
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
