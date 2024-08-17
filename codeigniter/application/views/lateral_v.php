<!-- Inicio de la Barra Lateral -->
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <a href="<?php echo site_url('proyecto_c'); ?>" class="navbar-brand mx-4 mb-3">
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
            <a href="<?php echo site_url('proyecto_c'); ?>" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-laptop me-2"></i>Elementos</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="button.html" class="dropdown-item">Botones</a>
                    <a href="typography.html" class="dropdown-item">Tipografía</a>
                    <a href="element.html" class="dropdown-item">Otros Elementos</a>
                </div>
            </div>
            <a href="<?php echo site_url('proyecto_c/listar'); ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Proyectos</a> <!-- direcciona al listar -->
            <a href="<?php echo site_url('usuario_c/m_listar'); ?>" class="nav-item nav-link"><i class="fa fa-table me-2"></i>Usuarios</a> <!-- direcciona al listar -->
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
<!-- Fin de la Barra Lateral -->
