<body>
  <!-- Incluye el menú lateral -->
  <?php $this->load->view('lateral_v'); ?>

  <div class="content container-fluid px-4">
    <!-- Incluye el encabezado -->
    <?php $this->load->view('encabezado_v'); ?>

    <!-- Formulario de modificar usuario -->
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="bg-secondary rounded h-100">
          <div class="col-md-10">
            <h2 class="mb-4">Modificar Usuario</h2>
            <?php echo form_open_multipart('usuario_c/modificarbd'); ?>
            <input type="hidden" name="idusuario" value="<?php echo $infousuario->idusuario; ?>">

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="nombres" class="form-label">Nombres</label>
                  <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $infousuario->nombres; ?>" required>
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
                  <label for="correo" class="form-label">Correo Electrónico</label>
                  <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $infousuario->correo; ?>" required>
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
                <div class="col-md-6">
                  <label for="estado" class="form-label">Estado</label>
                  <select class="form-select" id="estado" name="estado" required>
                    <option value="activo" <?php echo $infousuario->estado == 'activo' ? 'selected' : ''; ?>>Activo</option>
                    <option value="inactivo" <?php echo $infousuario->estado == 'inactivo' ? 'selected' : ''; ?>>Inactivo</option>
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
