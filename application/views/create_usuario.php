<!-- main -->
<div id="main">
	<h2 class="inner">Crear nuevo usuario</h2>
	<div id="page">
		<div class="blog-post">
			<div class="blog-body">
				<?php echo form_open('inicio/usuarios');?>
					<table>
					<tr>
					<td>Usuario</td>
					<td>
                    <?php echo form_input(array('id'=>'usuario', 'name'=>'usuario', 'class'=>'text')); ?>                     
					</td>
					<tr>
					<td>Contrase&ntilde;a</td>
					<td>
					<?php echo form_password(array('id'=>'clave', 'name'=>'clave', 'class'=>'text')); ?>                     
					</td>
					</tr>
					<tr>
					<td>Repetir Contrase&ntilde;a</td>
					<td>
					<?php echo form_password(array('id'=>'clave2', 'name'=>'clave2', 'class'=>'text')); ?>                     
					</td>
					</tr>
					<tr>
					<td>Nombres</td>
					<td>
					<?php echo form_input(array('id'=>'nombres', 'name'=>'nombres', 'class'=>'text')); ?>                     
					</td>
					</tr>
					<tr>
					<td>Apellidos</td>
					<td>
					<?php echo form_input(array('id'=>'apellidos', 'name'=>'apellidos', 'class'=>'text')); ?>                     
					</td>
					</tr>
					<tr>
					<td>Tipo de Usuario</td>
					<td>
						<?php
						$opciones = array(2=>'Regional',3 =>'SIBASI', 4 => 'Regional - Hospitales', 5=> 'Regional Enfermeria - Segundo Nivel');
						echo form_dropdown('opciones', $opciones, '0', 'style="width: 210px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
						?>
					</td>
					</tr>
					</table>
				<?php
				
				echo validation_errors(); ?>
				</label>
				<?php echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Ingresar');?>
				<?php echo form_close()?>				
				<div class="clear"></div>
		</div>
</div>
</div>
	<div class="clear"></div>
</div>	
		