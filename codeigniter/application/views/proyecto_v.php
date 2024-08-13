<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Proyectos</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url('../template/css/bootstrap.min.css'); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url('../template/css/style.css'); ?>" rel="stylesheet">

    <script src="<?php echo base_url('../template/js/scripts.js'); ?>"></script>
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3">
            <nav class="navbar bg-secondary navbar-dark">
                <a href="index.html" class="navbar-brand mx-4 mb-3">
                    <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>DarkPan</h3>
                </a>
                <div class="d-flex align-items-center ms-4 mb-4">
                    <div class="position-relative">
                        <img class="rounded-circle" src="<?php echo base_url('../template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Jhon Doe</h6>
                        <span>Admin</span>
                    </div>
                </div>
                <div class="navbar-nav w-100">
                    <a href="index.html" class="nav-item nav-link"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
                    <!-- Agrega más elementos de navegación si es necesario -->
                    <a href="<?php echo site_url('Proyecto_c'); ?>" class="nav-item nav-link active"><i class="fa fa-table me-2"></i>Proyectos</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->

        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <form class="d-none d-md-flex ms-4">
                    <input class="form-control bg-dark border-0" type="search" placeholder="Buscar">
                </form>
                <div class="navbar-nav align-items-center ms-auto">
                    <!-- Agrega aquí notificaciones, mensajes y perfil si es necesario -->
                </div>
            </nav>
            <!-- Navbar End -->

            <!-- Content Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">
                    <!-- Botón para agregar un nuevo proyecto -->
                    <div class="col-12 mb-4">
                        <a href="<?php echo site_url('Proyecto_c/agregar'); ?>" class="btn btn-primary"><i class="bi bi-plus"></i> Agregar Proyecto</a>
                    </div>
                    <!-- Tabla para mostrar los proyectos -->
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">Listado de Proyectos</h6>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Título</th>
                                        <th>Egresado</th>
                                        <th>Gestión</th>
                                        <th>Resumen</th>
                                        <th>Estado</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (!empty($proyectos)) { ?>
                                        <?php foreach ($proyectos->result() as $proyecto) { ?>
                                            <tr>
                                                <td><?php echo $proyecto->idproyecto; ?></td>
                                                <td><?php echo $proyecto->titulo; ?></td>
                                                <td><?php echo $proyecto->egresado; ?></td>
                                                <td><?php echo $proyecto->gestion; ?></td>
                                                <td><?php echo $proyecto->resumen; ?></td>
                                                <td>
                                                    <?php echo $proyecto->estado ? 'Activo' : 'Inactivo'; ?>
                                                </td>
                                                <td>
                                                    <!-- Botones CRUD con iconos y colores diferentes -->
                                                    <a href="<?php echo site_url('Proyecto_c/modificar/'.$proyecto->idproyecto); ?>" class="btn btn-warning"><i class="bi bi-pencil-square"></i> Modificar</a>
                                                    <a href="<?php echo site_url('Proyecto_c/ver/'.$proyecto->idproyecto); ?>" class="btn btn-info"><i class="bi bi-eye"></i> Ver</a>
                                                    <form action="<?php echo site_url('Proyecto_c/eliminarbd'); ?>" method="post" style="display:inline;">
                                                        <input type="hidden" name="idProyecto" value="<?php echo $proyecto->idproyecto; ?>">
                                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i> Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        <?php } ?>
                                    <?php } else { ?>
                                        <tr>
                                            <td colspan="7">No hay proyectos registrados.</td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Content End -->
        </div>
        <!-- Content End -->
    </div>
</body>
</html>
