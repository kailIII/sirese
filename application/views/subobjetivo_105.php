<?php

	$opciones['100'] =  'Si';	
	$opciones['0'] =  'No';
echo '<th colspan="2">Estructura</th>';
//Primer Fila
$numero = 1;
$actividad = 'Total de Consultorios';
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
$actividad = 'Se utilizan todos los consultorios disponibles';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Tercer Fila
$numero = 3;
$actividad = 'Total de Médicos en el Hospital';
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
$actividad = 'Todos los médicos cuentan con agendas institucionales';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Quinta Fila
$numero = 5;
$actividad = 'Cuentan con Seleccion de Pacientes';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

echo '<th colspan="2">Procesos</th>';


//Sexta Fila
$numero = 6;
$actividad = 'El tiempo de espera de consulta es menor de 2 meses (Presentar evidencia de programación por Médico)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Septima Fila
$numero = 7;
$actividad = 'Cuentan con plan contigencial en caso de ausencias de médicos (Presentar Plan)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Octava Fila
$numero = 8;
$actividad = 'Existen horas médico asignadas para las Evaluacciones PreOperatorias';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Novena Fila
$numero = 9;
$actividad = 'Las agendas de los Médicos(as) especialistas disponen de cupos para consultas de primera vez';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';
?>