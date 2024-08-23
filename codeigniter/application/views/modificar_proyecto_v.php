<br><br>
<h1>Editar Proyecto</h1>
<br>  

<?php
echo form_open_multipart("proyecto_c/modificarbd");
?>
<input type="hidden" name="idproyecto" value="<?php echo $infoproyecto->idproyecto; ?>">

<input type="text" class="form-control" name="titulo" placeholder="Escribe el título" value="<?php echo $infoproyecto->titulo; ?>" required>

<input type="text" class="form-control" name="egresado" placeholder="Escribe el egresado" value="<?php echo $infoproyecto->egresado; ?>" required>

<input type="text" class="form-control" name="gestion" placeholder="Escribe la gestión" value="<?php echo $infoproyecto->gestion; ?>" required>

<textarea class="form-control" name="resumen" placeholder="Escribe el resumen" required><?php echo $infoproyecto->resumen; ?></textarea>

<input type="text" class="form-control" name="estado" placeholder="Escribe el estado" value="<?php echo $infoproyecto->estado; ?>" required>

<input type="text" class="form-control" name="usuarioCreador" placeholder="Escribe el usuario creador" value="<?php echo $infoproyecto->usuarioCreador; ?>" required>

<input type="text" class="form-control" name="carrera_idcarrera" placeholder="Escribe el ID de carrera" value="<?php echo $infoproyecto->carrera_idcarrera; ?>" required>

<input type="text" class="form-control" name="modalidad_idmodalidad" placeholder="Escribe el ID de modalidad" value="<?php echo $infoproyecto->modalidad_idmodalidad; ?>" required>

<input type="text" class="form-control" name="tutor_idtutor" placeholder="Escribe el ID de tutor" value="<?php echo $infoproyecto->tutor_idtutor; ?>" required>

<div class="mb-3">
    <button type="submit" class="btn btn-success">Modificar Proyecto</button>
    <a href="javascript:history.back()" class="btn btn-secondary">Cancelar</a>
</div>

<?php
echo form_close();
?>

<div class="col-sm-12 col-xl-6">
    <div class="bg-secondary rounded h-100 p-4">
        <h6 class="mb-4">Basic Form</h6>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
    </div>
</div>
