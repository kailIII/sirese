<?php

$data['centro'] = $centro;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['niveles_participantes'] =  $niveles_participantes;

//encabezado
if ($subobjetivo == 1){
	echo '<h3>Consolidado del Instrumento de Monitoreo y Supervision</h3>';
}
elseif ($subobjetivo == 2){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
	
}
elseif ($subobjetivo == 3){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
	
}
elseif ($subobjetivo == 4){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
	
}
elseif ($subobjetivo == 5){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
	
}
//Fin de Encabezado


//Formulario
echo form_open('subobjetivo/verificar');
	echo form_hidden('centro', $centro);
	echo form_hidden('subobjetivo', $subobjetivo);
	echo form_hidden('objetivo', $objetivo);
	echo form_hidden('fecha', $fecha);
	echo form_hidden('niveles_participantes', $niveles_participantes);	
	echo '<table class="table">';
	echo '<thead>';
			echo '<tr>';
				echo '<td>Actividad</td>';
				echo '<td>Comentarios</td>';
				echo '<td>Seguimiento</td>';
			echo '</tr>';
		echo '</thead>';
	echo '<tbody>';
	$data['tiempo'] = $tiempo;	
	if ($subobjetivo == 1){
		$this -> load -> view('subobjetivo_01.php', $data);		
	}
	elseif ($subobjetivo == 2){
		$this -> load -> view('subobjetivo_02.php', $data);
	}
	elseif ($subobjetivo == 3){
		$this -> load -> view('subobjetivo_03.php', $data);
	}
	elseif ($subobjetivo == 4){
		$this -> load -> view('subobjetivo_04.php', $data);
	}
	elseif ($subobjetivo == 5){
		$this -> load -> view('subobjetivo_05.php', $data);
	}
	echo '</tbody>';
	echo '</table>';
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Verificar');
echo form_close();
	
//Fin Formulario
?>
