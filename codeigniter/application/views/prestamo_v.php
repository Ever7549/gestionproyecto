
<body>
    <?php ?> <!-- Incluye el encabezado -->
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <?php  ?> <!-- Incluye el menú lateral -->
            </nav>
        </div>
        <!-- Sidebar End -->
        <?php if (isset($_GET['no_s'])) { ?>
            <div class="toast ml-auto mr-1 bg-danger text-white" id="alerta" role="alert" data-delay="3000" aria-live="assertive" aria-atomic="true">
                <div class="toast-header">
                    <img src="<?php echo base_url(); ?>Assets/img/error.png" class="rounded mr-2" width="20">
                    <strong class="mr-auto">Alerta</strong>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="toast-body">
                    No hay libro disponible, intente en otro momento.
                </div>
            </div>
        <?php } ?>
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php ?> <!-- Incluye el encabezado -->
            <!-- Navbar End -->

            <!-- Inicio del Contenido Principal -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Editar Usuario</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>
                    <div class="col-md-12 p-2">
                        <?php if ($_SESSION['rol'] == 1) { ?>
                            <button class="btn btn-primary" type="button" data-toggle="modal" data-target="#prestar"><i class="fas fa-plus-circle"></i> Prestar Proyecto</button>
                        <?php } ?>
                    </div>
                <div class="col-md-12">
                    <div class="table-responsive"> <!-- Hacemos la tabla responsiva -->



                        <table id="tablaProyectos" class="table table-striped table-bordered table-hover small text-nowrap"> <!-- Reducimos tamaño y evitamos quiebres de línea -->
                        
                        
                        
                        <thead class="thead-dark">
                            <tr>
                                <th>Proyecto</th>
                                <th>Estudiante</th>
                                <th>Fecha Préstamo</th>
                                <th>Fecha Devolución</th>
                                <th>Observación</th>
                                <th>Estado</th>
                                <th>Devolución</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($prestamos as $row) {
                                $estado = $row->estado == 'prestado' ? 
                                    '<span class="badge badge-danger p-1 rounded">Prestado</span>' : 
                                    '<span class="badge badge-success p-1 rounded">Devuelto</span>';
                            ?>
                                <tr>
                                    <td><?php echo $row->titulo_proyecto; ?></td>
                                    <td><?php echo $row->nombre_estudiante; ?></td>
                                    <td><?php echo $row->fecha_prestamo; ?></td>
                                    <td><?php echo $row->fecha_devolucion; ?></td>
                                    <td><?php echo $row->observacion; ?></td>
                                    <td><?php echo $estado; ?></td>
                                    <td>
                                        <?php if ($row->estado == 'prestado' && $_SESSION['rol'] == 1) { ?>
                                            <form method="post" action="<?php echo base_url(); ?>prestamo_c/devolver/<?php echo $row->id_prestamo; ?>" class="devolver">
                                                <button class="btn btn-primary" type="submit"><i class="fas fa-arrow-alt-circle-left"></i> Devolver</button>
                                            </form>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!-- Fin del Contenido Principal -->

                    <!-- Modal para prestar un proyecto -->
                    <div id="prestar" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="my-modal-title" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="my-modal-title">Prestar Proyecto</h5>
                                    <button class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="post" action="<?php echo base_url(); ?>prestamo_c/registrar">
                                        <div class="form-group">
                                            <label for="buscar_proyecto">Proyecto</label><br>
                                            <select id="buscar_proyecto" class="form-control" name="proyecto_id">
                                                <?php foreach ($proyectos as $proyecto) { ?>
                                                    <option value="<?php echo $proyecto->id; ?>"><?php echo $proyecto->titulo; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="estudiante">Estudiante</label><br>
                                            <select name="estudiante_id" id="estudiante" class="form-control">
                                                <?php foreach ($estudiantes as $est) { ?>
                                                    <option value="<?php echo $est->id; ?>"><?php echo $est->nombre . " - " . $est->carrera; ?></option>
                                                <?php } ?>
                                            </select>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fecha_prestamo">Fecha de Préstamo</label>
                                                    <input id="fecha_prestamo" class="form-control" type="date" name="fecha_prestamo" value="<?php echo date("Y-m-d"); ?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="fecha_devolucion">Fecha de Devolución</label>
                                                    <input id="fecha_devolucion" class="form-control" type="date" name="fecha_devolucion" value="<?php echo date("Y-m-d"); ?>">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="observacion">Observación</label>
                                            <textarea id="observacion" class="form-control" name="observacion" rows="3"></textarea>
                                        </div>
                                        <button class="btn btn-primary" type="submit">Prestar</button>
                                        <button class="btn btn-danger" type="button" data-dismiss="modal">Cancelar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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



</body>

