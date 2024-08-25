<div class="container mt-4">
    <h2>Modificar Usuario</h2>
    <?php echo form_open_multipart('usuario_c/modificarbd'); ?>
    <input type="hidden" name="idusuario" value="<?php echo $infousuario->idusuario; ?>">
 

        <div class="mb-3">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres" value="<?php echo $infousuario->nombres; ?>" required>
        </div>

        <div class="mb-3">
            <label for="primerApellido" class="form-label">Primer Apellido</label>
            <input type="text" class="form-control" id="primerApellido" name="primerApellido" value="<?php echo $infousuario->primerApellido; ?>" required>
        </div>

        <div class="mb-3">
            <label for="segundoApellido" class="form-label">Segundo Apellido</label>
            <input type="text" class="form-control" id="segundoApellido" name="segundoApellido" value="<?php echo $infousuario->segundoApellido; ?>" required>
        </div>

        <div class="mb-3">
            <label for="correo" class="form-label">Correo Electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $infousuario->correo; ?>" required>
        </div>

        <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $infousuario->telefono; ?>" required>
        </div>

        <div class="mb-3">
            <label for="nombreUsuario" class="form-label">Nombre de Usuario</label>
            <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" value="<?php echo $infousuario->nombreUsuario; ?>" required>
        </div>

        <!--div class="mb-3">
            <label for="contrasenav" class="form-label">Contraseña</label>
            <input type="password" class="form-control" id="contrasenav" name="contrasenav" value="< ?php echo $infousuario->contrasena; ?>" required>
        </div -->

        <div class="mb-3">
            <label for="estado" class="form-label">Estado</label>
            <select class="form-select" id="estado" name="estado" required>
                <option value="activo" <?php echo $infousuario->estado == 'activo' ? 'selected' : ''; ?>>Activo</option>
                <option value="inactivo" <?php echo $infousuario->estado == 'inactivo' ? 'selected' : ''; ?>>Inactivo</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    <a href="javascript:history.back()" class="btn btn-secondary">Cancelar</a>
</form>
</div>
