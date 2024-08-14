
 <h1>Lista de usuarios</h1>
<br>
<a href="<?php echo base_url(); ?>index.php/login_c/logout">
<button type="button" class="btn btn-warning">CERRAR CESION</button>
</a> 
<br>
<br>
<a href="<?php echo base_url(); ?>index.php/login_c/panel">
<button type="button" class="btn btn-warning">VOLVER</button>
</a> 

<!-- <h2>hola< ?php echo $this->session->userdata('login');?></h2>
<h2>hola< ?php echo $this->session->userdata('tipo');?></h2>
<h2>hola< ?php echo $this->session->userdata('idUsuario');?></h2> -->
<br>

<!--< ?php
echo date('Y/m/d H:i:s');
?>-->
    <br>
    <a href="<?php echo base_url();?>index.php/usuario_c/agregar">
    <button type="button" class="btn btn-primary">AGREGAR USUARIO</button>
    </a>
    <table class="table">
	<thead>
		<th>idUsuario</th>
		<th>Nombres</th>
		<th>Primer Apellido</th>
        <th>segundo Apellido</th>
		<th>Correo</th>
		<th>Teléfono</th>
        <th>Nombre Usuario</th>
        <th>Contraseña</th>
        <th>Estado</th>
        
	</thead>
    <tbody>
		<?php
		$contador=1;
		foreach($usuario->result() as $row)
		{
		?>
		<tr>
			<td><?php echo $contador;?></td>
			<td><?php echo $row->nombres; ?></td>
			<td><?php echo $row->primerApellido; ?></td>
            <td><?php echo $row->segundoApellido; ?></td>
			<td><?php echo $row->correo; ?></td>
            <td><?php echo $row->nombreUsuario; ?></td>
            <td><?php echo $row->contrasena; ?></td>
            <td><?php echo $row->estado; ?></td>


			<td>
			<?php
             echo form_open_multipart("Usuario_c/modificar");
            ?>
			<input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
			<button type=submit type="submit" class="btn btn-primary">Editar</button>
	        <?php
            echo form_close();
            ?>
			</td>

			<td>
			<?php
             echo form_open_multipart("Usuario_c/eliminarbd");
            ?>
			<input type="hidden" name="idusuario" value="<?php echo $row->idusuario; ?>">
			<button type=submit type="submit" class="btn btn-danger">Eliminar</button>
	        <?php
            echo form_close();
            ?>
			</td>


		

		</tr>
		<?php
		$contador++;
			}
		?>
	</tbody>
</table> 

