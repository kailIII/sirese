<?php

	$opciones['100'] =  'Si';	
	$opciones['0'] =  'No';
echo '<th colspan="2">Area Administrativa</th>';
//1 Fila
$numero = 1;
$actividad = 'Se  planifica y ejecuta  la PAO de enfermeria';
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
$actividad = 'Cuenta con planes anuales y mensuales de trabajo';
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
$actividad = 'El tabulador diario de actividades de enfermeria se encuentra al dia';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//4 Fila
$numero = 4;
$actividad = 'Cuentan y aplican  las normas, guias y protocolos  para la atencion de enfermeria ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//5 Fila
$numero = 5;
$actividad = 'Se tiene y  cumple  con plan de educacion continua para el personal ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//6 Fila
$numero = 6;
$actividad = 'Se  aplican  instrumentos de supervision y /o monitoreos para las actividades de enfermeria ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//7 Fila
$numero = 7;
$actividad = 'Participa en la evaluacion de desempeno del personal de enfermeria bajo su conduccion en los formularios normados';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//8 Fila
$numero = 8;
$actividad = 'Se participa  en la evaluacion  de los programas  de se ofertan  en la UCSF ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//9 Fila
$numero = 9;
$actividad = 'Se tiene y se desarrolla el  Plan de Induccion  para personal de enfermeria de nuevo ingreso y de servicio social.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//10 Fila
$numero = 10;
$actividad = 'El personal de enfermeria  cumple con la norma de uniforme  establecido (uniforme completo, calzado correcto y no uso de prenda)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//11 Fila
$numero = 11;
$actividad = 'El personal de enfemeria cumple con los horarios  de trabajo establecidos';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

echo '<th colspan="2">Area Tecnica</th>';
//12 Fila
$numero = 12;
$actividad = 'Las diferentes areas de enfermeria se observan limpias , ordenadas y equipadas';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//13 Fila
$numero = 13;
$actividad = 'Se realiza proceso de limpieza, desineccion y esterilizacion de equipos  de acuerdo a norma ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//14 Fila
$numero = 14;
$actividad = 'Se  orienta a los usuarios y/ pacientes sobre los  procedimientos a realizar ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//15 Fila
$numero = 15;
$actividad = 'Los equipos de curacion, pinza de trasferencia e inyectables se mantienen según norma establecida';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//16 Fila
$numero = 16;
$actividad = 'Preparan equipos individuales para los procedimientos de curaciones';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//17 Fila
$numero = 17;
$actividad = 'Realizan cuidado posterior de los equipos utilizados en los procedimientos';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//18 Fila
$numero = 18;
$actividad = 'Hay seguimiento a pacientes con citologias sospechosas';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//19 Fila
$numero = 19;
$actividad = 'Realizan  visitas domiciliares  tomando en cuenta  criterios de riesgo de los usuarios(as) y apliicacion del PAE.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_'. $numero, 'id'=>'fecha_'. $numero, 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//20 Fila
$numero = 20;
$actividad = 'Los diferentes  libros de registro tienen el rayado según lineamiento (inyectables, curaciones, febriles, Rehidratacion Oral, nebulizaciones)';
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



