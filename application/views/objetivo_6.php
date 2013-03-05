<?php

$data['centro'] = $centro;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['niveles_participantes'] =  $niveles_participantes;

//encabezado
if ($subobjetivo == 18){
	echo '<h3>Supervision Programa: Calidad del agua de Consumno Humano.</h3>';
}
if ($subobjetivo == 19){
	echo '<h3>Supervision Programa: Proteccion e Higiene de Alimentos.</h3>';
}
if ($subobjetivo == 20){
	echo '<h3>Supervision Programa: Disposición Sanitaria de Excretas.</h3>';
}
if ($subobjetivo ==21){
	echo '<h3>Supervision Programa: Desechos Sólidos.</h3>';
}
if ($subobjetivo == 22){
	echo '<h3>Supervision Programa: Desechos Bioinfecciosos.</h3>';
}
if ($subobjetivo == 23){
	echo '<h3>Supervision Programa: Aguas Residuales de Tipo Ordinario</h3>';
}
if ($subobjetivo == 27){
	echo '<h3>Supervision Programa: Aspectos Geneerales</h3>';
}
if ($subobjetivo == 28){
	echo '<h3>Guia de Capacidad Instalada</h3>';
}
if ($subobjetivo == 29){
	echo '<h3>Guia Supervision de Campo</h3>';
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
	if ($subobjetivo == 18){
	$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo == 19){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo == 20){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo ==21){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo == 22){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo == 23){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo == 27){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	if ($subobjetivo == 28){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}		
	if ($subobjetivo == 29){
		$this -> load -> view('subobjetivo_'. $subobjetivo .'.php', $data);
	}
	
	echo '</tbody>';
	echo '</table>';
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Verificar');
echo form_close();
	
//Fin Formulario
?>