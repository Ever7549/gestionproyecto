<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <title>Sistema - Gestion de Proyectos</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon--
    <link href="< ?php echo base_url('template/img/favicon.ico'); ?>" rel="icon"-->

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
    <link href="<?php echo base_url('template/css/custom/style2.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('template/css/style.css'); ?>" rel="stylesheet">
   
</head>

<body style="background-image: url('<?php echo base_url('template/img/portada.png'); ?>'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
    <div class="container-fluid position-relative d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-dark position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Sign In Start -->
        <div class="container-fluid">
        <div class="row h-100 align-items-center justify-content-end" style="min-height: 100vh;">
                <div class="col-12 col-sm-8 col-md-6 col-lg-5 col-xl-4">
                    <div class="login-box rounded p-4 p-sm-5 my-4 mx-3">
                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h3 class="text-primary"><i class="fa fa-user-edit me-2"></i>INICIAR SECCION</h3>
                        </div>

                        <?php echo form_open_multipart("login_c/validarUsuario"); ?>
                        
                        <div class="text-info fw-bold form-floating mb-3">
                            <input type="text" class="text-info fw-bold btn btn-outline form-control" id="nombreUsuario" name="nombreUsuario" placeholder="Escribe usuario" required>
                            <label for="nombreUsuario">Nombre de Usuario</label>
                        </div>
                        <div class="text-info fw-bold  form-floating mb-4">
                            <input type="password" class="text-info fw-bold btn btn-outline form-control" id="contrasena" name="contrasena" placeholder="Escribe contraseña" required>
                            <label for="contrasena">Contraseña</label>
                        </div>
                        <!-- div class="d-flex align-items-center justify-content-between mb-4">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Remember me</label>
                            </div>
                            <a href="">Forgot Password</a>
                        </div -->
                        <button type="submit" class="btn btn-outline-info py-3 w-100 mb-4">Ingresar</button>
                        <!-- p class="text-center mb-0">Don't have an Account? <a href="">Sign Up</a></p -->

                        <?php echo form_close(); ?>

                    </div>
                </div>
            </div>
        </div>
        <!-- Sign In End -->
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('template/lib/chart/chart.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/easing/easing.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/waypoints/waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/owlcarousel/owl.carousel.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/moment-timezone.min.js'); ?>"></script>
    <script src="<?php echo base_url('template/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js'); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo base_url('template/js/main.js'); ?>"></script>
    <link href="<?php echo base_url('template/css/style.css'); ?>" rel="stylesheet">
</body>

</html>
