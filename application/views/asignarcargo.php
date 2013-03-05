<!-- main -->
<div id="main">
	<h2 class="inner">Asignar Cargo</h2>
	<div id="page">
		<div class="blog-post">
			<div class="blog-body">
				<?php echo form_open('inicio/cargos');?>
					<table>
					<tr>
					<td>Usuario</td>
					<td>
                    <?php echo form_input(array('id'=>'usuario', 'name'=>'usuario', 'class'=>'text', 'readonly' => 'readonly', 'value'=> $usuario)); ?>                     
					</td>
					<tr>					
					<tr>
					<td>
						<?php
							if ($tipo == 'regional'){echo 'Regional';}
							else { echo 'SIBASI';}
							echo form_hidden('tipo', $tipo);
						?>
					</td>
					<td>
						<?php
						foreach ($matriz->result() as $row){
							$matriz_r[$row->id] = ($row->nombre);       										
						}					
						echo form_dropdown('opciones', $matriz_r, '0', 'style="width: 210px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
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
		