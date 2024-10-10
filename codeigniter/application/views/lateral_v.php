
<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-secondary navbar-dark">
        <!-- Nombre del Proyecto -->
        <a href="<?php echo site_url('proyecto_c'); ?>" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>INCOS</h3>
        </a>
        
        <!-- Información del Usuario -->
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <img class="rounded-circle" src="<?php echo base_url('template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                <!-- Indicador de estado en línea -->
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <!-- Nombre del Usuario -->
                <h6 class="mb-0"><?php echo $this->session->userdata('nombre_usuario'); ?></h6>
                <!-- Rol del Usuario -->
                <span><?php echo $this->session->userdata('rol_usuario'); ?></span>
            </div>
        </div>

        <!-- Menú de Navegación -->
        <div class="navbar-nav w-100">
            <!-- Dashboard -->
            <a href="<?php echo site_url('proyecto_c'); ?>" class="nav-item nav-link active">
                <i class="fa fa-tachometer-alt me-2"></i>Dashboard
            </a>

            <!-- Formularios Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-laptop me-2"></i>Formularios
                </a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="<?php echo site_url('proyecto_c/listar'); ?>" class="dropdown-item">Proyectos</a>
                    <a href="<?php echo site_url('usuario_c/m_listar'); ?>" class="dropdown-item">Usuarios</a>
                    <a href="<?php echo site_url('tutor_c/listar'); ?>" class="dropdown-item">Tutores</a>
                    <a href="<?php echo site_url('carrera_c/listar'); ?>" class="dropdown-item">Carreras</a>
                    <a href="<?php echo site_url('modalidad_c/listar'); ?>" class="dropdown-item">Modalidades</a>
                    <a href="<?php echo site_url('prestamo_c/index'); ?>" class="dropdown-item">Prestamos</a>
                </div>
            </div>

            <!-- Otras Opciones del Menú -->
            <a href="widget.html" class="nav-item nav-link">
                <i class="fa fa-th me-2"></i>Widgets
            </a>
            <a href="form.html" class="nav-item nav-link">
                <i class="fa fa-keyboard me-2"></i>Formularios
            </a>
            <a href="chart.html" class="nav-item nav-link">
                <i class="fa fa-chart-bar me-2"></i>Gráficos
            </a>

            <!-- Páginas Dropdown -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="far fa-file-alt me-2"></i>Páginas
                </a>
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

