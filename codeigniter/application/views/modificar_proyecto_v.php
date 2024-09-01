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
            <h2 class="mb-4">Modificar Proyecto</h2>
            <?php echo form_open_multipart("proyecto_c/modificarbd"); ?>
              <input type="hidden" name="idproyecto" value="<?php echo $infoproyecto->idproyecto; ?>">

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="titulo" class="form-label">Título</label>
                  <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Escribe el título" value="<?php echo $infoproyecto->titulo; ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="egresado" class="form-label">Egresado</label>
                  <input type="text" class="form-control" id="egresado" name="egresado" placeholder="Escribe el egresado" value="<?php echo $infoproyecto->egresado; ?>" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="gestion" class="form-label">Gestión</label>
                  <input type="text" class="form-control" id="gestion" name="gestion" placeholder="Escribe la gestión" value="<?php echo $infoproyecto->gestion; ?>" required>
                </div>
                <div class="col-md-6">
                  <label for="resumen" class="form-label">Resumen</label>
                  <textarea class="form-control" id="resumen" name="resumen" rows="3" placeholder="Escribe el resumen" required><?php echo $infoproyecto->resumen; ?></textarea>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-6">
                  <label for="estado" class="form-label">Estado</label>
                  <select class="form-select" id="estado" name="estado" required>
                    <option value="1" <?php echo $infoproyecto->estado == '1' ? 'selected' : ''; ?>>Activo</option>
                    <option value="0" <?php echo $infoproyecto->estado == '0' ? 'selected' : ''; ?>>Inactivo</option>
                  </select>
                </div>
              </div>
              
                <div class="col-md-6">
                  <label for="usuarioCreador" class="form-label">Usuario Creador</label>
                  <input type="text" class="form-control" id="usuarioCreador" name="usuarioCreador" placeholder="Escribe el usuario creador" value="<?php echo $infoproyecto->usuarioCreador; ?>" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="carrera_idcarrera" class="form-label">Carrera</label>
                  <input type="text" class="form-control" id="carrera_idcarrera" name="carrera_idcarrera" placeholder="Escribe el ID de carrera" value="<?php echo $infoproyecto->carrera_idcarrera; ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="modalidad_idmodalidad" class="form-label">Modalidad</label>
                  <input type="text" class="form-control" id="modalidad_idmodalidad" name="modalidad_idmodalidad" placeholder="Escribe el ID de modalidad" value="<?php echo $infoproyecto->modalidad_idmodalidad; ?>" required>
                </div>
                <div class="col-md-4">
                  <label for="tutor_idtutor" class="form-label">Tutor</label>
                  <input type="text" class="form-control" id="tutor_idtutor" name="tutor_idtutor" placeholder="Escribe el ID de tutor" value="<?php echo $infoproyecto->tutor_idtutor; ?>" required>
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
