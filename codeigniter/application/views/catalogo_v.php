<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DarkPan - Bootstrap 5 Admin Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('template/img/favicon.ico'); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url('template/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('template/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('template/css/style.css'); ?>" rel="stylesheet">

</head>

<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="<?php echo site_url('proyecto_c'); ?>" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>INCOS</h3> <!-- Nombre del proyecto -->
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url('template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;"> <!-- Imagen de perfil -->
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> <!-- Indicador de estado en línea -->
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">-----</h6> <!-- Nombre del usuario -->
                        <span></span> <!-- Rol del usuario -->
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="<?php echo site_url('proyecto_c'); ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Formularios</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="<?php echo site_url('proyecto_c/listar'); ?>" class="dropdown-item">Proyectos</a>
                            <a href="<?php echo site_url('usuario_c/m_listar'); ?>" class="dropdown-item">usuarios</a>
                            <a href="<?php echo site_url('tutor_c/listar'); ?>" class="dropdown-item">Tutores</a>
                            <a href="<?php echo site_url('carrera_c/listar'); ?>" class="dropdown-item">Carreras</a>
                            <a href="<?php echo site_url('modalidad_c/listar'); ?>" class="dropdown-item">Modalidades</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Formularios</a>
                    <a href="chart.html" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Gráficos</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Páginas</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="signin.html" class="dropdown-item">Iniciar Sesión</a>
                            <a href="signup.html" class="dropdown-item">Registrarse</a>
                            <a href="404.html" class="dropdown-item">Error 404</a>
                            <a href="blank.html" class="dropdown-item">Página en Blanco</a>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Search">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Mensajes</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">

                            <hr class="dropdown-divider">
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todos los mensajes</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-bell me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Notificaciones</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                           
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todas las notificaciones</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo base_url('template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">---</span> <!-- Nombre del usuario -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="#" class="dropdown-item">Ajustes</a>
                            <a href="<?php echo site_url('login_c/logout'); ?>" class="dropdown-item">Cerrar sesión</a> <!-- Agregado para cerrar sesión -->
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->


            <!-- Recent Sales Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="bg-secondary text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">Recent Salse</h6>
                        <a href="">Show All</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
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
                        </table>
                    </div>
                </div>
            </div>
            <!-- Recent Sales End -->

         <!-- Inicio de Pie de Página -->
            <div class="container-fluid pt-4 px-1">
                <div class="bg-secondary rounded-top p-4">
                    <div class="row">
                        <div class="col-12 col-sm-6 text-center text-sm-start">
                            &copy; <a href="#">Ever Calle Arancibia</a>, Todos los Derechos Reservados.
                        </div>
                        <div class="col-12 col-sm-6 text-center text-sm-end">
                            <!--/*** Este template es gratuito siempre que mantengas el enlace de crédito del autor. Si deseas usar el template sin el enlace de crédito del autor, puedes comprar la Licencia de Eliminación de Crédito en "https://htmlcodex.com/credit-removal". Gracias por tu apoyo. ***/-->
                            Diseñado por <a href="https://htmlcodex.com">HTML Codex</a>
                            <br>Distribuido por: <a href="https://themewagon.com" target="_blank">ThemeWagon</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Fin de Pie de Página -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

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

    <!-- Javascript del template -->
    <script src="<?php echo base_url('template/js/main.js'); ?>"></script>
    </body>

</html>

