<?php

$data['centro'] = $centro;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['niveles_participantes'] =  $niveles_participantes;

//encabezado
if ($subobjetivo == 14){
	echo '<h3>Principios Inspiradores</h3>';
}
elseif ($subobjetivo == 15){
	echo '<h2>Carta Iberoamericana</h2>';
	echo '<h3>Deberes y Drechos de los Ciudadanos</h3>';
}
elseif ($subobjetivo == 16){
	echo '<h2>Carta Iberoamericana</h2>';
	echo '<h3>SO de Acciones e Instrumentos para la Calidad en la Gestión Pública</h3>';
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
	if ($subobjetivo == 14){
		$this -> load -> view('subobjetivo_14.php', $data);		
	}
	elseif ($subobjetivo == 15){
		$this -> load -> view('subobjetivo_15.php', $data);
	}
	elseif ($subobjetivo == 16){
		$this -> load -> view('subobjetivo_16.php', $data);
	}
	
	echo '</tbody>';
	echo '</table>';
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Verificar');
echo form_close();
	
//Fin Formulario
?>