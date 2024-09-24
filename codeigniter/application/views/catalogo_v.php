<?php $this->load->view('encabezado_v'); ?> <!-- Incluye el encabezado -->
<!-- Contenido principal -->
<div class="content container-fluid px-4">
    <div class="row g-4">
        <!-- Inicio de Carreras -->
        <div class="col-md-12">
            <h2 class="mb-4">Catálogo de Carreras</h2>
            <div class="row g-4">
                <!-- Carrera de Contaduría Pública -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="<?php echo base_url('ruta_a_contaduria'); ?>" class="text-decoration-none">
                        <div class="bg-primary text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                            <i class="fa fa-book fa-4x"></i>
                            <i class="fa fa-pencil-alt fa-2x mt-2"></i>
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
                        <div class="bg-warning text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                            <i class="fa fa-laptop fa-4x"></i>
                            <h5 class="mt-3 fs-3">Sistemas Informáticos</h5>
                        </div>
                    </a>
                </div>
                <!-- Carrera de Marketing y Publicidad -->
                <div class="col-sm-6 col-md-4 col-lg-3">
                    <a href="<?php echo base_url('ruta_a_marketing'); ?>" class="text-decoration-none">
                        <div class="bg-danger text-white rounded d-flex flex-column align-items-center justify-content-center p-4 btn-card">
                            <i class="fa fa-bullhorn fa-4x"></i>
                            <h5 class="mt-3 fs-3">Marketing y Publicidad</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
