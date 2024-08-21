<body>
  <!-- Incluye el menú lateral -->
  <?php $this->load->view('lateral_v'); ?>

  <div class="content container-fluid px-4">
    <!-- Incluye el encabezado -->
    <?php $this->load->view('encabezado_v'); ?>

    <!-- Formulario de agregar usuario -->
    <div class="container mt-3">
      <div class="row justify-content-center">
        <div class="bg-secondary rounded h-100">
          <div class="col-md-10">
            <h2 class="mb-4">Agregar Usuario</h2>
            <?php echo form_open_multipart("Usuario_c/agregarbd"); ?>
              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="nombresv" class="form-label">Nombres</label>
                  <input type="text" class="form-control" id="nombresv" name="nombresv" placeholder="Nombres" required>
                </div>
                <div class="col-md-4">
                  <label for="primerApellidov" class="form-label">Primer Apellido</label>
                  <input type="text" class="form-control" id="primerApellidov" name="primerApellidov" placeholder="Primer Apellido" required>
                </div>
                <div class="col-md-4">
                  <label for="segundoApellidov" class="form-label">Segundo Apellido</label>
                  <input type="text" class="form-control" id="segundoApellidov" name="segundoApellidov" placeholder="Segundo Apellido" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="correov" class="form-label">Correo Electrónico</label>
                  <input type="email" class="form-control" id="correov" name="correov" placeholder="Correo Electrónico" required>
                </div>
                <div class="col-md-4">
                  <label for="telefonov" class="form-label">Teléfono</label>
                  <input type="text" class="form-control" id="telefonov" name="telefonov" placeholder="Teléfono" required>
                </div>
                <div class="col-md-4">
                  <label for="nombreUsuariov" class="form-label">Nombre de Usuario</label>
                  <input type="text" class="form-control" id="nombreUsuariov" name="nombreUsuariov" placeholder="Nombre de Usuario" required>
                </div>
              </div>

              <div class="row mb-3">
                <div class="col-md-4">
                  <label for="contrasenav" class="form-label">Contraseña</label>
                  <input type="password" class="form-control" id="contrasenav" name="contrasenav" placeholder="Contraseña" required>
                </div>
                <div class="col-md-4">
                  <label for="estadov" class="form-label">Estado</label>
                  <input type="text" class="form-control" id="estadov" name="estadov" placeholder="Estado" required>
                </div>
                <div class="col-md-4">
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
                  <label for="rol_idrolv" class="form-label">Rol</label>
                  <input type="text" class="form-control" id="rol_idrolv" name="rol_idrolv" placeholder="Rol" required>
                </div>
              </div>

              <button type="submit" class="btn btn-success">Agregar Usuario</button>
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
