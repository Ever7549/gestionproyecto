
<body>
    
    
    <!-- Barra de navegación -->
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

    <!-- Contenido Principal -->
    <div class="container mt-4">
        <h1 class="mb-4">Lista de Usuarios</h1>
        <table class="table table-hover table-bordered">
            <thead class="thead-dark">
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

    <!-- Scripts -->
    <script src="<?php echo base_url('../template/dist/js/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/dist/js/bootstrap.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('../template/dist/js/scripts.js'); ?>"></script>

    <?php $this->load->view('pie_v'); ?> <!-- Incluye el pie de página -->
</body>
