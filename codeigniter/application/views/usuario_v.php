


<body>
    <?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
    <?php $this->load->view('lateral_v'); ?> <!-- Incluye el menú lateral -->

        <!-- Barra de navegación -->
        <div class="content container-fluid pt-4 px-4">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Gestión de Usuarios</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/login_c/logout">
                        <button type="button" class="btn btn-warning">Cerrar Sesión</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url(); ?>index.php/login_c/panel">
                        <button type="button" class="btn btn-warning">Volver</button>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo base_url();?>index.php/usuario_c/agregar">
                        <button type="button" class="btn btn-primary">Agregar Usuario</button>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    
    <!-- Contenido principal -->
 
    <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Responsive Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                        <th>#</th>
                                            <th>Nombres</th>
                                            <th>Primer Apellido</th>
                                            <th>Segundo Apellido</th>
                                            <th>Correo</th>
                                            <th>Teléfono</th>
                                            <th>Nombre Usuario</th>
                                            <th>Contraseña</th>
                                            <th>Estado</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                        $contador = 1;
                                        foreach ($usuario->result() as $row) {
                                        ?>
                                        <tr>
                                            <td><?php echo $contador; ?></td>
                                            <td><?php echo $row->nombres; ?></td>
                                            <td><?php echo $row->primerApellido; ?></td>
                                            <td><?php echo $row->segundoApellido; ?></td>
                                            <td><?php echo $row->correo; ?></td>
                                            <td><?php echo $row->telefono; ?></td>
                                            <td><?php echo $row->nombreUsuario; ?></td>
                                            <td><?php echo $row->contrasena; ?></td>
                                            <td><?php echo $row->estado; ?></td>
                                            <td>
                                                <?php echo form_open("usuario_c/modificar"); ?>
                                                <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
                                                <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                                                <?php echo form_close(); ?>
                                            </td>
                                            <td>
                                                <?php echo form_open("usuario_c/eliminarbd"); ?>
                                                <input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
                                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                                <?php echo form_close(); ?>
                                            </td>
                                        </tr>
                                        <?php
                                        $contador++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de Carreras -->
            <?php $this->load->view('pie_v'); ?> <!-- Incluye pie de página -->
        </div>
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

        