<body>
    <?php $this->load->view('header_v'); ?> <!-- Incluye el encabezado -->
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <?php $this->load->view('lateral_v'); ?> <!-- Incluye el menú lateral -->
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
            <!-- Navbar End -->

            <!-- Inicio del Contenido Principal -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Catálogo de Programas Académicos</h6>
                        <a href="#">Mostrar Todo</a>
                    </div>

                    <div class="row g-4">
                        <!-- Botón de Contaduría Pública -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <a href="<?php echo base_url('ruta_a_contaduria'); ?>" class="text-decoration-none">
                                <div class="bg-primary text-white rounded d-flex flex-column align-items-center justify-content-center p-4">
                                    <i class="fa fa-book fa-4x"></i>
                                    <h5 class="mt-3 fs-3">Contaduría Pública</h5>
                                </div>
                            </a>
                        </div>

                        <!-- Botón de Secretariado Ejecutivo -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <a href="<?php echo base_url('ruta_a_secretariado'); ?>" class="text-decoration-none">
                                <div class="bg-success text-white rounded d-flex flex-column align-items-center justify-content-center p-4">
                                    <i class="fa fa-file-alt fa-4x"></i>
                                    <h5 class="mt-3 fs-3">Secretariado Ejecutivo</h5>
                                </div>
                            </a>
                        </div>

                        <!-- Botón de Sistemas Informáticos -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <a href="<?php echo base_url('ruta_a_sistemas'); ?>" class="text-decoration-none">
                                <div class="bg-info text-white rounded d-flex flex-column align-items-center justify-content-center p-4">
                                    <i class="fa fa-desktop fa-4x"></i>
                                    <h5 class="mt-3 fs-3">Sistemas Informáticos</h5>
                                </div>
                            </a>
                        </div>

                        <!-- Botón de Marketing y Publicidad -->
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <a href="<?php echo base_url('ruta_a_marketing'); ?>" class="text-decoration-none">
                                <div class="bg-warning text-white rounded d-flex flex-column align-items-center justify-content-center p-4">
                                    <i class="fa fa-bullhorn fa-4x"></i>
                                    <h5 class="mt-3 fs-3">Marketing y Publicidad</h5>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin del Contenido Principal -->

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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Librerías locales -->
    <script src="<?php echo base_url('template/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Script del template -->
    <script src="<?php echo base_url('template/js/main.js'); ?>"></script>
</body>

</html>
