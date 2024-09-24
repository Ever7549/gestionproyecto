<body>
    
    <?php $this->load->view('lateral_v'); ?> <!-- Incluye el menú lateral -->
    
    <!-- Contenido principal -->
    <div class="content container-fluid px-4">
        <?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
        <div class="row g-4">
            <!-- Inicio de Carreras -->
            <div class="col-md-12">
                <div class="row g-4">
                    <!-- Carrera de Contaduría Pública -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo base_url('ruta_a_contaduria'); ?>" class="text-decoration-none">
                            <div class="bg-primary text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                                <i class="fa fa-book fa-4x"></i>
                                <i class="fa fa-pencil-alt fa-2x mt-2"></i> <!-- Icono de libro con lápiz -->
                                <h5 class="mt-3 fs-3">Contaduría Pública</h5>
                            </div>
                        </a>
                    </div>
                    <!-- Carrera de Secretariado Ejecutivo -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo base_url('ruta_a_secretariado'); ?>" class="text-decoration-none">
                            <div class="bg-success text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                                <i class="fa fa-file-alt fa-4x"></i>
                                <h5 class="mt-3 fs-3">Secretariado Ejecutivo</h5>
                            </div>
                        </a>
                    </div>
                    <!-- Carrera de Sistemas Informáticos -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo base_url('ruta_a_sistemas'); ?>" class="text-decoration-none">
                            <div class="bg-info text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                                <i class="fa fa-desktop fa-4x"></i>
                                <h5 class="mt-3 fs-3">Sistemas Informáticos</h5>
                            </div>
                        </a>
                    </div>
                    <!-- Carrera de Marketing y Publicidad -->
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <a href="<?php echo base_url('ruta_a_marketing'); ?>" class="text-decoration-none">
                            <div class="bg-warning text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                                <i class="fa fa-bullhorn fa-4x"></i>
                                <h5 class="mt-3 fs-3">Marketing y Publicidad</h5>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <!-- Fin de Carreras -->
            
            <!-- Inicio de Widgets -->
            <div class="row g-4 mt-4">
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <h6 class="mb-0">Mensajes</h6>
                            <a href="">Mostrar Todo</a>
                        </div>
                        <!-- Inicio de Mensajes -->
                        <div class="d-flex align-items-center border-bottom py-3">
                            <img class="rounded-circle flex-shrink-0" src="<?php echo base_url('template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                            <div class="w-100 ms-3">
                                <div class="d-flex w-100 justify-content-between">
                                    <h6 class="mb-0">Jhon Doe</h6>
                                    <small>Hace 15 minutos</small>
                                </div>
                                <span>El mensaje corto va aquí...</span>
                            </div>
                        </div>
                        <!-- Repetir los mensajes según sea necesario -->
                    </div>
                </div>

                <!-- Inicio de Calendario -->
                <div class="col-sm-12 col-md-6 col-xl-4">
                    <div class="h-100 bg-secondary rounded p-4">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <h6 class="mb-0">Calendario</h6>
                            <a href="">Mostrar Todo</a>
                        </div>
                        <div id="calender"></div>
                    </div>
                </div>
            </div>
            <!-- Fin de Widgets -->

            <?php $this->load->view('pie_v'); ?> <!-- Incluye pie de página -->
        </div>
    </div>

    <!-- Volver al Inicio -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- Bibliotecas de JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('template/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/js/main.js'); ?>"></script>
</body>