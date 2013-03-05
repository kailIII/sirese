<?php

$data['centro'] = $centro;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['niveles_participantes'] =  $niveles_participantes;
$data['tiempo'] = $tiempo;
if ($objetivo == 1){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
		$this -> load -> view('objetivo_1.php', $data);	
}
elseif ($objetivo == 2){
	echo '<h2>Promocion de la Salud</h2>';	
	$this -> load -> view('objetivo_2.php', $data);
}
elseif ($objetivo == 3){
	echo '<h2>Programa de Vacunaciones e Inmunizaciones</h2>';
	$this -> load -> view('objetivo_3.php', $data);
}
elseif ($objetivo == 4){
	echo '<h2>Carta Iberoamericana</h2>';
	$this -> load -> view('objetivo_4.php', $data);
}
elseif ($objetivo == 5){
	echo '<h2>Estandares de Calidad</h2>';
	$this -> load -> view('objetivo_5.php', $data);
}
elseif ($objetivo == 6){
	echo '<h2>Salud Ambiental</h2>';
	$this -> load -> view('objetivo_6.php', $data);
}
elseif ($objetivo == 7){
	echo '<h2>Monitoreos de Laboratorio Clinico</h2>';
	$this -> load -> view('objetivo_7.php', $data);
}
elseif ($objetivo == 8){
	echo '<h2>Monitoreo de Salud Mental</h2>';
	$this -> load -> view('objetivo_8.php', $data);
}
elseif ($objetivo == 9){
	echo '<h2>Guia de Supervision Area Tecnica y Administrativa de Enfermeria</h2>';
	$this -> load -> view('objetivo_9.php', $data);
}
echo '<br>';
echo form_open('inicio/objetivo');
echo form_hidden('centro', $centro);
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Atras');
echo form_close();
?>
