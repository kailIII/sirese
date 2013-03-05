<div id="main">
<div class="blog-body">
<?php	
	echo '<div class="clear"></div>';
	echo '<div id="page">'; 
	if ($objetivo == 100){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
		
}
else if ($objetivo == 101){
	echo '<h2>Areas de Atencion y Gobierno Hospitalario</h2>';
		
}
else if ($objetivo == 102){
	echo '<h2>Monitoreo Plan de Desastres</h2>';
		
}
else if ($objetivo == 103){
	echo '<h2>Monitoreo Plan de Reducción MM</h2>';
		
}
else if ($objetivo == 104){
	echo '<h2>Seguimiento a los Planes de Mejora Auditorias</h2>';
		
}
else if ($objetivo == 105){
	echo '<h2>Supervision Consulta Especializada</h2>';
		
}
else if ($objetivo == 106){
	echo '<h2>Supervision de Cirugias Electivas</h2>';
		
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
			echo '<td>Fecha de Seguimiento</td><td>';		
			echo form_input(array('class'=>'fechador', 'name'=>'fecha2', 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;', 'readonly'=>'readonly', 'value' => $tiempo));
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
