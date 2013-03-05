<?php

	$opciones['100'] =  'Cumple';	
	$opciones['60'] =  'Cumple Parcial';
	$opciones['0'] =  'No Cumple';

//1 Fila
$numero = 1;
$actividad = 'Cobertura de Recoleccion';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//2 Fila
$numero = 2;
$actividad = 'Proyectos de recoleccion de desechos plasticos(llantas, latas, plasticos)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//3 Fila
$numero = 3;
$actividad = 'Registros de inspecciones a rellenos sanitarios, estaciones de transferencia y composteras';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


?>