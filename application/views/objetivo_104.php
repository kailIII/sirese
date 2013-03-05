<?php

$data['hospital'] = $hospital;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['fecha2'] =  $fecha2;

//Formulario
echo form_open('subobjetivo/guardarregional1');
	echo form_hidden('hospital', $hospital);
	echo form_hidden('subobjetivo', $subobjetivo);
	echo form_hidden('objetivo', $objetivo);
	echo form_hidden('fecha', $fecha);
	echo form_hidden('fecha2', $fecha2);
	echo '<table class="table">';
	echo '<thead>';
			echo '<tr>';
				echo '<td></td>';
				echo '<td></td>';				
			echo '</tr>';
		echo '</thead>';
	echo '<tbody>';
	$data['tiempo'] = $tiempo;	
	if ($subobjetivo == 104){
		$this -> load -> view('subobjetivo_104.php', $data);		
	}	
	echo '</tbody>';
	echo '</table>';
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Guardar');
echo form_close();
	
//Fin Formulario
?>