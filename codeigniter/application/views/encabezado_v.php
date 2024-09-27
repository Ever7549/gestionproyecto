<!-- Content Start -->
<div>
    <!-- Navbar Start -->
    <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
        <a href="<?php echo site_url('inicio_c'); ?>" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input class="form-control bg-dark border-0" type="search" placeholder="Buscar">
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <!-- Mensajes -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-envelope me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Mensajes</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <div class="d-flex align-items-center">
                            <img class="rounded-circle" src="<?php echo base_url('template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                            <div class="ms-2">
                                <h6 class="fw-normal mb-0">Nuevo mensaje de Juan</h6>
                                <small>Hace 15 minutos</small>
                            </div>
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">Ver todos los mensajes</a>
                </div>
            </div>
            <!-- Notificaciones -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-bell me-lg-2"></i>
                    <span class="d-none d-lg-inline-flex">Notificaciones</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">
                        <h6 class="fw-normal mb-0">Actualización de perfil</h6>
                        <small>Hace 2 horas</small>
                    </a>
                    <hr class="dropdown-divider">
                    <a href="#" class="dropdown-item text-center">Ver todas las notificaciones</a>
                </div>
            </div>
            <!-- Usuario -->
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <img class="rounded-circle me-lg-2" src="<?php echo base_url('template/img/user.jpg'); ?>" alt="" style="width: 40px; height: 40px;">
                    <span class="d-none d-lg-inline-flex">
                        <?php echo $this->session->userdata('nombre_usuario'); ?>
                    </span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-secondary border-0 rounded-0 rounded-bottom m-0">
                    <a href="#" class="dropdown-item">Perfil</a>
                    <a href="#" class="dropdown-item">Ajustes</a>
                    <a href="<?php echo site_url('login_c/logout'); ?>" class="dropdown-item">Cerrar sesión</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->
</div>
