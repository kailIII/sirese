<div id="main">
<div class="blog-body">
<?php	
	echo '<div class="clear"></div>';
	echo '<div id="page">'; 
	if ($objetivo == 201){
	echo '<h2>Componente Administrativo</h2>';
		
}
else if ($objetivo == 202){
	echo '<h2>Componente Atencion Directa</h2>';
		
}
else if ($objetivo == 203){
	echo '<h2>Componente Docencia-Investigacion</h2>';
		
}
else if ($objetivo == 204){
	echo '<h2>MCC, Enfermeria</h2>';
		
}
else if ($objetivo == 205){
	echo '<h2>Guia de Monitoreo de Mortalidad y Morbilidad Extrema Materna Perineonatal</h2>';
		
}
	echo form_open('subobjetivo/instrumentoregional');
	echo form_hidden('subobjetivo', $subobjetivo); 	
	echo form_hidden('objetivo', $objetivo);
	echo form_hidden('hospital', $hospital);
	echo '<table class="table">';
		echo '<tr>';
			echo '<td>Hospital</td><td>';
			echo $nombre;
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Fecha</td><td>';		
			echo form_input(array('class'=>'fechador', 'name'=>'fecha', 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;', 'readonly'=>'readonly', 'value' => $tiempo));
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Fecha Seguimiento</td><td>';		
			echo form_input(array('class'=>'fechador', 'name'=>'fecha2', 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;', 'readonly'=>'readonly', 'value' => $tiempo));
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Problemas</td><td>';
			echo form_input(array('id'=>'problemas', 'name'=>'problemas', 'class'=>'text', ));
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Compromiso</td><td>';
			echo form_input(array('id'=>'compromiso', 'name'=>'compromiso', 'class'=>'text', ));
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Responsable</td><td>';
			echo form_input(array('id'=>'responsable', 'name'=>'responsable', 'class'=>'text', ));
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Tiempo</td><td>';
			echo form_input(array('id'=>'tiempo', 'name'=>'tiempo', 'class'=>'text', ));
			echo '</td>';			
		echo '</tr>';		
		echo '<tr>';
			echo '<td>Area o Servicio </td><td>';
			echo form_input(array('id'=>'area', 'name'=>'area', 'class'=>'text', ));
			echo '</td>';			
		echo '</tr>';
		
	echo '<tbody>';	
	echo '</table>';
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Ir al Instrumento');
	echo '</p>';
	echo form_close();
	echo '</div>';	
?>
</div>
</div>
<div class="clear"></div>
