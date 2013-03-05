<!-- main -->
<div id="main">
	<h2 class="inner">Ingresar</h2>
	<div id="page">
		<div class="blog-post">
			<div class="blog-body">
				<?php echo form_open('inicio/login');?>
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
					</table>
				<?php if ($this->session->flashdata('login_error')== TRUE) {
					echo "Usuario o Contraseña Inválidos.<br>";
				}
				echo validation_errors(); ?>
				</label>
				<?php echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Ingresar');?>
				<?php echo form_close()?>
				<br>
                 <!--<?php echo form_open('inicio/recovery_pass');?>
                 <?php echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Recuperar Clave');?>
                 <?php echo form_close()?>-->
			</div>
				<div class="clear"></div>
		</div>
</div>
</div>
	<div class="clear"></div>
</div>	
		
