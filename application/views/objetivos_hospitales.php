<?php
	extract($_POST);		
?>
<div id="page">
<div id="bits">
<div class="line"></div>
	
	<div class="bit">		
		<h4>
			<?php
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '100'; 	
				$info['opcion'] = '100';
				echo form_hidden('info', $info);			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Estandares de Calidad');		
				echo form_close();								
			?>						
		</h4>
	</div>
	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '101'; 	
				$info['opcion'] = '101';
				echo form_hidden('info', $info);					
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Areas de Atencion y 
Gobiernos Hospitalarios');				
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
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '102'; 	
				$info['opcion'] = '102';
				echo form_hidden('info', $info);			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Monitoreo Plan de Desastres');		
				echo form_close();	
			?>
		</h4>		
	</div>
	<div class="line"></div>
	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '103'; 	
				$info['opcion'] = '103';
				echo form_hidden('info', $info);	
				echo '<br>';			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Monitoreo plan de 
Reduccion MM');				
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
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '104'; 	
				$info['opcion'] = '104';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Seguimiento a los Planes de 
Mejora Auditorias');				
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
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '105'; 	
				$info['opcion'] = '105';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Supervision Consulta Especializada');				
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
				echo form_open('subobjetivo/datosgeneralesregional');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '106'; 	
				$info['opcion'] = '106';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Supervision de Cirugias Electivas');				
				echo form_close();
			?>
		</h4>
		<!--<div class="photo">							
		</div>						
		<div id="p1">
		</div>-->
	</div>
	
	
	
	<div class="line"></div>
		
		
	<?php
		echo form_close()
	?>
<div class="clear"></div>
</div></div>

