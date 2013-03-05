<?php

	$opciones['100'] =  'Si';	
	$opciones['0'] =  'No';
echo '<th colspan="2">Estructura</th>';
//Primer Fila
$numero = 1;
$actividad = 'Total de Quirofanos';
echo '<tr><td>';	
echo '<label>' . $actividad;
echo form_input(array( 'id'=>'total105_'. $numero,'name'=>'total105_'. $numero, 'class'=>'text'));
//echo form_input(array( 'id'=>'totalrecursos_19','name'=>'totalrecursos_19', 'class'=>'text'));
echo form_hidden('actividad_' . $numero, $actividad);
echo form_hidden('opciones_' . $numero, '100');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Segunda Fila
$numero = 2;
$actividad = 'Se utilizan todos los quirófanos disponibles';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Tercer Fila
$numero = 3;
$actividad = 'Total de Cirujanos en el Hospital';
echo '<tr><td>';	
echo '<label>' . $actividad;
echo form_input(array( 'id'=>'total105_'. $numero,'name'=>'total105_'. $numero, 'class'=>'text'));
//echo form_input(array( 'id'=>'totalrecursos_19','name'=>'totalrecursos_19', 'class'=>'text'));
echo form_hidden('actividad_' . $numero, $actividad);
echo form_hidden('opciones_' . $numero, '100');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Cuarta Fila
$numero = 4;
$actividad = 'Todos los cirujanos cuentan con agendas institucionales';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


echo '<th colspan="2">Procesos</th>';

//Quinta Fila
$numero = 5;
$actividad = 'Existe pogramacion semana del Cirugias';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Sexta Fila
$numero = 6;
$actividad = 'Coinciden las angendas de la consulta con lo programado en esta semana en sala (Revisar tres agendas)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Septima Fila
$numero = 7;
$actividad = 'Se utiliza diaramente el quirofano para cirugias electivas';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Octava Fila
$numero = 8;
$actividad = 'Se cuenta con distribución de horarios de uso de quirófanos';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Novena Fila
$numero = 9;
$actividad = 'Cirugías programadas para menos de 60 días';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Decima Fila
$numero = 10;
$actividad = 'Todas las cirugias están programadas para menos de 60 días';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

?>