<?php
	extract($_POST);		
?>
<div id="page">
	<h2>Instrumentos</h2>
<div id="bits">
<div class="line"></div>
	
	<div class="bit">		
		<h4>
			<?php
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '1'; 	
				$info['opcion'] = '1';
				echo form_hidden('info', $info);			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Instrumento de Monitoreo
y Supervision');		
				echo form_close();								
			?>						
		</h4>
	</div>
	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '2'; 	
				$info['opcion'] = '6';
				echo form_hidden('info', $info);					
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Promocion de la Salud');				
				echo form_close();
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>
	
	<div class="bit last">
		<h4>
			<?php
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '7'; 	
				$info['opcion'] = '24';
				echo form_hidden('info', $info);			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Monitoreos de Laboratorio Clinico');		
				echo form_close();	
			?>
		</h4>		
	</div>
	<div class="line"></div>
	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '3'; 	
				$info['opcion'] = '7';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Vacunacion');				
				echo form_close();
			?>
		</h4>
		<div class="photo">							
		</div>						
		<div id="p1">
		</div>
	</div>
	
	<div class="bit">
		<h4>
			<?php
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '5'; 	
				$info['opcion'] = '17';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Estandares de Calidad');				
				echo form_close();				
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>
	
	<div class="bit last">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '4'; 	
				$info['opcion'] = '14';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Carta Iberoamericana');				
				echo form_close();
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>
	
	<div class="line"></div>
	
		
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '6'; 	
				$info['opcion'] = '18';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Salud Ambiental');				
				echo form_close();
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '9'; 	
				$info['opcion'] = '26';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Supervision de Enfermeria');				
				echo form_close();
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>
	<div class="bit last">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgenerales');
				$info = array('centro' => $centro );
				$info['objetivo'] = '8'; 	
				$info['opcion'] = '25';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Salud Mental');				
				echo form_close();
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>	
	<?php
		echo form_close()
	?>
<div class="clear"></div>
</div></div>

