<?php

	$opciones['0'] =  'No';	
	$opciones['1'] =  'Si';

echo '<tr><th>Comunicacion</th></tr>';

//Primer Fila
$numero = 1;
$actividad = 'Existe un listado mensual de medicos residente y ginecologo de turno de emergencia y encargado de servicio';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 2;
$actividad = 'Las referencias a tercer nivel han sido avaladas por medicos especialistas ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 3;
$actividad = 'Se evidencia la asignacion de medico en la unidad de emergencia para la recepcion de llamadas de pacientes referidos las 24 horas del día.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 4;
$actividad = 'Durante el presente mes se ha recibido un listado de Embarazadas a verificar parto.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 5;
$actividad = 'Se cuenta con la notificacion de medicos de turno en hospital de 3° nivel, así como numero de telefono para emergencias.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 6;
$actividad = 'Se han presentado casos de referencias no aceptadas por hospitales de tercer nivel';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Segunda Fila
$numero = 7;
echo '<tr><th>Organizacion</th></tr>';
$actividad = 'Existe una Unidad de Bienestar Materno Fetal';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 8;
$actividad = 'Se cuenta con medicos especialistas en Ginecología y Pediatría';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 9;
$actividad = 'Se cuenta con equipos e insumos medicos basicos para la atencion materno infantil';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 10;
$actividad = 'Hay evidencia del reporte diario de Morbilidades Obstetricias Extremas';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 11;
$actividad = 'Se evidencia que se han evaluado las referencias segun capacidad resolutiva.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Tercer Fila
$numero = 12;
echo '<tr><th>Suministros de Material e Insumos</th></tr>';
$actividad = 'Se cuenta con stock de medicamentos para el manejo de morbilidades obstetricas';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 13;
$actividad = 'Hay disponibilidad de quirofano las 24 horas del dia';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 14;
$actividad = 'Se dispone del recurso humano capacitado para la atencion, las 24 horas del dia';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 15;
$actividad = 'Se dispone de derivados hematicos las 24 horas del dia';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Cuarta Fila
$numero = 16;
echo '<tr><th>Educacion Medica Continua</th></tr>';	
$actividad = 'Existe y se le da cumplimiento a la programacion de temas obstetricos dirigidos al personal medico, de enfermeria y anestesistas';
echo '<tr><td>';
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 17;
$actividad = 'Existe evidencia de Evaluaciones de Tecnica Quirurgica';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Quinta Fila
$numero = 18;
echo '<tr><th>Auditoria de Casos</th></tr>';	
$actividad = 'Se han realizado auditorias de muertes Maternas-Perinatales en las primeras 24 hrs. de ocurrido el evento.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 19;
$actividad = 'Se han realizado auditorias de Morbilidad Obstetrica';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 20;
$actividad = 'Se cuenta con plan de mejora de cada falla encontrada en el evento';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 21;
$actividad = 'Se le da seguimiento al Plan de Mejora';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Sexta Fila
$numero = 22;
echo '<tr><th>Supervision Monitoreo y Evaluacion</th></tr>';
$actividad = 'Cuenta el Comite de Vigilancia de Morbimortalidad Materno Infantil (CVMMI) con un Plan de M&E';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

$numero = 23;
$actividad = 'Se evidencia que el CVMMI ha ejecutado las actividades mensuales programadas en el Plan';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';



?>
