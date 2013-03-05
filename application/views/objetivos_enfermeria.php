<?php
	extract($_POST);		
?>
<div id="page">
<div id="bits">
<div class="line"></div>
	
	<div class="bit">		
		<h4>
			<?php
				echo form_open('subobjetivo/datosgeneralesenfermeria');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '201'; 	
				$info['opcion'] = '201';
				echo form_hidden('info', $info);			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Componente Administrativo');		
				echo form_close();								
			?>						
		</h4>
	</div>
	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgeneralesenfermeria');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '202'; 	
				$info['opcion'] = '202';
				echo form_hidden('info', $info);					
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Componente Atencion Directa');				
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
				echo form_open('subobjetivo/datosgeneralesenfermeria');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '203'; 	
				$info['opcion'] = '203';
				echo form_hidden('info', $info);			
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Componente Docencia Investigacion');		
				echo form_close();	
			?>
		</h4>		
	</div>
	<div class="line"></div>
	
	<div class="bit">
		<h4>
			<?php	
				echo form_open('subobjetivo/datosgeneralesenfermeria');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '204'; 	
				$info['opcion'] = '204';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'MCC, Enfermeria');				
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
				echo form_open('subobjetivo/datosgeneralesenfermeria');
				$info = array('hospital' => $hospital);
				$info['objetivo'] = '205'; 	
				$info['opcion'] = '205';
				echo form_hidden('info', $info);				
				echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Guia de Monitoreo de Mortalidad y 
Morbilidad Extrema
Materna Perineonatal');				
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

