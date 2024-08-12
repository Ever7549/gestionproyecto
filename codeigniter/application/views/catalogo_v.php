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

</head>


<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Inicio del Spinner -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Cargando...</span> <!-- Texto alternativo para accesibilidad -->
            </div>
        </div>
        <!-- Fin del Spinner -->

        <!-- Inicio de la Barra Lateral -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3> <!-- Nombre del proyecto -->
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;"> <!-- Imagen de perfil -->
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div> <!-- Indicador de estado en línea -->
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6> <!-- Nombre del usuario -->
                        <span>Admin</span> <!-- Rol del usuario -->
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elementos</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="button.html" class="dropdown-item">Botones</a>
                            <a href="typography.html" class="dropdown-item">Tipografía</a>
                            <a href="element.html" class="dropdown-item">Otros Elementos</a>
                        </div>
                    </div>
                    <a href="widget.html" class="nav-item nav-link"><i class="fa fa-th me-2"></i>Widgets</a>
                    <a href="form.html" class="nav-item nav-link"><i class="fa fa-keyboard me-2"></i>Formularios</a>
                    <a href="table.html" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Tablas</a>
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
        <!-- Fin de la Barra Lateral -->

        <!-- Inicio del Contenido -->
        <div class="content">
            <!-- Inicio de la Barra de Navegación -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
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
                            <h6 class="fw-normal mb-0">Perfil actualizado</h6>
                            <small>Hace 15 minutos</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Nuevo usuario añadido</h6>
                            <small>Hace 15 minutos</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item">
                            <h6 class="fw-normal mb-0">Contraseña cambiada</h6>
                            <small>Hace 15 minutos</small>
                        </a>
                        <hr class="dropdown-divider">
                        <a href="#" class="dropdown-item text-center">Ver todas las notificaciones</a>
                    </div>
                </div>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                        <img class="rounded-circle me-lg-2" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                        <span class="d-none d-lg-inline-flex">John Doe</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                        <a href="#" class="dropdown-item">Mi perfil</a>
                        <a href="#" class="dropdown-item">Configuración</a>
                        <a href="#" class="dropdown-item">Cerrar sesión</a>
                    </div>
                </div>
            </div>
            </nav>
            <!-- Fin de la Barra de Navegación -->

            <!-- Inicio de Ventas y Ganancias -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Venta de Hoy -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-line fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Venta de Hoy</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Venta Total -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-bar fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Venta Total</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>

                   <!-- Ganancia de Hoy -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-area fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ganancia de Hoy</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    <!-- Ganancia Total -->
                    <div class="col-sm-6 col-xl-3">
                        <div class="bg-secondary rounded d-flex align-items-center justify-content-between p-4">
                            <i class="fa fa-chart-pie fa-3x text-primary"></i>
                            <div class="ms-3">
                                <p class="mb-2">Ganancia Total</p>
                                <h6 class="mb-0">$1234</h6>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                    <!-- Fin de Ventas y Ganancias -->

                    <!-- Inicio de Gráfico de Ventas -->
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-xl-6">
                                <div class="bg-secondary text-center rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h6 class="mb-0">Ventas Mundiales</h6>
                                        <a href="">Mostrar Todo</a>
                                    </div>
                                    <canvas id="worldwide-sales"></canvas> <!-- Gráfico de Ventas Mundiales -->
                                </div>
                            </div>
                            <div class="col-sm-12 col-xl-6">
                                <div class="bg-secondary text-center rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h6 class="mb-0">Ventas y Ganancias</h6>
                                        <a href="">Mostrar Todo</a>
                                    </div>
                                    <canvas id="salse-revenue"></canvas> <!-- Gráfico de Ventas y Ganancias -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de Gráfico de Ventas -->

                    <!-- Inicio de Ventas Recientes -->
                    <div class="container-fluid pt-4 px-4">
                        <div class="bg-secondary text-center rounded p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0">Ventas Recientes</h6>
                                <a href="">Mostrar Todo</a>
                            </div>
                            <div class="table-responsive">
                                <table class="table text-start align-middle table-bordered table-hover mb-0">
                                    <thead>
                                        <tr class="text-white">
                                            <th scope="col"><input class="form-check-input" type="checkbox"></th>
                                            <th scope="col">Fecha</th>
                                            <th scope="col">Factura</th>
                                            <th scope="col">Cliente</th>
                                            <th scope="col">Monto</th>
                                            <th scope="col">Estado</th>
                                            <th scope="col">Acción</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><input class="form-check-input" type="checkbox"></td>
                                            <td>01 Ene 2045</td>
                                            <td>INV-0123</td>
                                            <td>Jhon Doe</td>
                                            <td>$123</td>
                                            <td>Pagado</td>
                                            <td><a class="btn btn-sm btn-primary" href="">Detalle</a></td>
                                        </tr>
                                        <!-- Más filas pueden ser agregadas aquí -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- Fin de Ventas Recientes -->

                    <!-- Inicio de Widgets -->
                    <div class="container-fluid pt-4 px-4">
                        <div class="row g-4">
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="h-100 bg-secondary rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-2">
                                        <h6 class="mb-0">Mensajes</h6>
                                        <a href="">Mostrar Todo</a>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom py-3">
                                        <img class="rounded-circle flex-shrink-0" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                        <div class="w-100 ms-3">
                                            <div class="d-flex w-100 justify-content-between">
                                                <h6 class="mb-0">Jhon Doe</h6>
                                                <small>Hace 15 minutos</small>
                                            </div>
                                            <span>El mensaje corto va aquí...</span>
                                        </div>
                                    </div>

                          <!-- Inicio de Mensajes -->
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                    <span>El mensaje corto va aquí...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center border-bottom py-3">
                                <img class="rounded-circle flex-shrink-0" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                    <span>El mensaje corto va aquí...</span>
                                </div>
                            </div>
                            <div class="d-flex align-items-center pt-3">
                                <img class="rounded-circle flex-shrink-0" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                                <div class="w-100 ms-3">
                                    <div class="d-flex w-100 justify-content-between">
                                        <h6 class="mb-0">Jhon Doe</h6>
                                        <small>Hace 15 minutos</small>
                                    </div>
                                    <span>El mensaje corto va aquí...</span>
                                </div>
                            </div>
                            </div>
                            </div>
                            <!-- Fin de Mensajes -->

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
                            <!-- Fin de Calendario -->

                            <!-- Inicio de Lista de Tareas -->
                            <div class="col-sm-12 col-md-6 col-xl-4">
                                <div class="h-100 bg-secondary rounded p-4">
                                    <div class="d-flex align-items-center justify-content-between mb-4">
                                        <h6 class="mb-0">Lista de Tareas</h6>
                                        <a href="">Mostrar Todo</a>
                                    </div>
                                    <div class="d-flex mb-2">
                                        <input class="form-control bg-dark border-0" type="text" placeholder="Ingresa tarea">
                                        <button type="button" class="btn btn-primary ms-2">Agregar</button>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <div class="w-100 ms-3">
                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <span>La tarea corta va aquí...</span>
                                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <div class="w-100 ms-3">
                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <span>La tarea corta va aquí...</span>
                                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <input class="form-check-input m-0" type="checkbox" checked>
                                        <div class="w-100 ms-3">
                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <span><del>La tarea corta va aquí...</del></span>
                                                <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center border-bottom py-2">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <div class="w-100 ms-3">
                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <span>La tarea corta va aquí...</span>
                                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex align-items-center pt-2">
                                        <input class="form-check-input m-0" type="checkbox">
                                        <div class="w-100 ms-3">
                                            <div class="d-flex w-100 align-items-center justify-content-between">
                                                <span>La tarea corta va aquí...</span>
                                                <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Fin de Lista de Tareas -->

                            <!-- Inicio de Pie de Página -->
                            <div class="container-fluid pt-4 px-4">
                                <div class="bg-secondary rounded-top p-4">
                                    <div class="row">
                                        <div class="col-12 col-sm-6 text-center text-sm-start">
                                            &copy; <a href="#">Tu Nombre de Sitio</a>, Todos los Derechos Reservados.
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
                            <!-- Fin del Contenido -->

                            <!-- Volver al Inicio -->
                            <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
                            </div>

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

                        <!-- JavaScript del Template -->
                    <script src="<?php echo base_url('../template/js/main.js'); ?>"></script>

            </body>

</html>
