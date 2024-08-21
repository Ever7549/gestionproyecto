<!DOCTYPE html>
<html lang="es"> <!-- Se cambió el idioma a español -->

<head>
    <meta charset="utf-8">
    <title>DarkPan - Plantilla de Administración Bootstrap 5</title> <!-- Título en español -->
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php echo base_url('../template/img/favicon.ico'); ?>" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    
    <!-- Estilos de fuentes de iconos -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Estilos de bibliotecas -->
    <link href="<?php echo base_url('../template/lib/owlcarousel/assets/owl.carousel.min.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('../template/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css'); ?>" rel="stylesheet" />

    <!-- Estilos personalizados de Bootstrap -->
    <link href="<?php echo base_url('../template/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Estilo de la plantilla -->
    <link href="<?php echo base_url('../template/css/style.css'); ?>" rel="stylesheet">


    <div class="container-fluid position-relative d-flex p-0">
        <!-- Inicio del Spinner -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span> <!-- Texto alternativo para accesibilidad -->
            </div>
        </div>
        <!-- Fin del Spinner -->

        <!-- Inicio del Contenido -->
        <div class="container-fluid pt-4 px-1">
            <!-- Inicio de la Barra de Navegación -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Buscar">
                </form>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <i class="fa fa-envelope me-lg-2"></i>
                            <span class="d-none d-lg-inline-flex">Mensajes</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon te envió un mensaje</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon te envió un mensaje</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <div class="d-flex align-items-center">
                                    <img class="rounded-circle" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                    <div class="ms-2">
                                        <h6 class="fw-normal mb-0">Jhon te envió un mensaje</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                </div>
                            </a>
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
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Notificación 1</h6>
                                <small>Hace 15 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Notificación 2</h6>
                                <small>Hace 15 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item">
                                <h6 class="fw-normal mb-0">Notificación 3</h6>
                                <small>Hace 15 minutos</small>
                            </a>
                            <hr class="dropdown-divider">
                            <a href="#" class="dropdown-item text-center">Ver todas las notificaciones</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Jhon Doe</span> <!-- Nombre del usuario -->
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                            <a href="#" class="dropdown-item">Perfil</a>
                            <a href="#" class="dropdown-item">Ajustes</a>
                            <a href="<?php echo site_url('login_c/logout'); ?>" class="dropdown-item">Cerrar sesión</a> <!-- Agregado para cerrar sesión -->
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Fin de la Barra de Navegación -->

            <!-- Contenido Principal -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Aquí va el contenido específico de la página -->
                </div>
            </div>
        </div>
        <!-- Fin del Contenido -->

        <!-- Scripts de bibliotecas -->
        <script src="<?php echo base_url('../template/lib/jquery/jquery.min.js'); ?>"></script>
        <script src="<?php echo base_url('../template/lib/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
        <script src="<?php echo base_url('../template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
        <script src="<?php echo base_url('../template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
        <script src="<?php echo base_url('../template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

        <!-- Script personalizado -->
        <script src="<?php echo base_url('../template/js/main.js'); ?>"></script>
    </div>
    
</head>

</html>
