<?php

$data['centro'] = $centro;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['niveles_participantes'] =  $niveles_participantes;

//encabezado
if ($subobjetivo == 7){
	echo '<h3>Gerencia</h3>';
}
elseif ($subobjetivo == 8){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	echo '<h3>Calidad de la Informacion</h3>';
}
elseif ($subobjetivo == 9){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	echo '<h3>Cadena de Frio</h3>';
}
elseif ($subobjetivo == 10){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	echo '<h3>Actividades de Vacunacion</h3>';
}
elseif ($subobjetivo == 11){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	echo '<h3>Vigilancia Epidemiologica</h3>';
}
elseif ($subobjetivo == 12){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	echo '<h3>Abastecimiento</h3>';
}
elseif ($subobjetivo == 13){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	echo '<h3>Coberturas</h3>';
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
	if ($subobjetivo == 7){
		$this -> load -> view('subobjetivo_07.php', $data);		
	}
	elseif ($subobjetivo == 8){
		$this -> load -> view('subobjetivo_08.php', $data);
	}
	elseif ($subobjetivo == 9){
		$this -> load -> view('subobjetivo_09.php', $data);
	}
	elseif ($subobjetivo == 10){
		$this -> load -> view('subobjetivo_10.php', $data);
	}
	elseif ($subobjetivo == 11){
		$this -> load -> view('subobjetivo_11.php', $data);
	}
	elseif ($subobjetivo == 12){
		$this -> load -> view('subobjetivo_12.php', $data);
	}
	elseif ($subobjetivo == 13){
		$this -> load -> view('subobjetivo_13.php', $data);
	}
	echo '</tbody>';
	echo '</table>';
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Verificar');
echo form_close();
	
//Fin Formulario
?>