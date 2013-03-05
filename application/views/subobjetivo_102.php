<?php
//Primer Fila
$numero = 1;
$actividad = 'Cantidad de recursos humanos del hospital: ';
$opciones = array(100=>'Si', 0=>'No');
echo '<tr><td>';	
echo '<label>' . $actividad;
echo form_hidden('muestra_'.$numero, '-');
echo form_input(array( 'id'=>'totalrecursos_'. $numero,'name'=>'totalrecursos_1'. $numero, 'class'=>'text'));
echo '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Segunda Fila
$numero = 2;
$actividad = 'Cantidad de recursos humanos del hospital: ';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>Cantidad de personas  con  las que se ha socializado:';
echo form_input(array('id'=>'muestra_19','name'=>'muestra_19', 'class'=>'text'));
echo 'de: ';
echo form_input(array( 'id'=>'totalrecursos_19','name'=>'totalrecursos_19', 'class'=>'text'));
echo '</label>';
echo form_hidden('actividad_3', 'Cantidad de personas  con  las que se ha socializado:');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td></tr>';

//Cuarta Fila
$numero = 4;
$actividad = 'El plan esta actualizado';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


//Quinta Fila
$numero = 5;
$actividad = 'El plan se ha presentado a la Dirección Nacional de Hospitales ( evidencia)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

//Sexta Fila
$numero = 6;
$actividad = 'Estan  organizados los procedimientos de evacuación en cada sector.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 7;
$actividad = 'Existe descripción de las responsabilidades.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

echo '<th colspan ="2">Se ha establecido</th>';

$numero = 8;
$actividad = 'Un sistema de alarma a través del cual se informe oportunamente a los ocupantes del recinto.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 9;
$actividad = 'Los procedimientos esperados para todos los ocupantes y responsables ante la emergencia.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 10;
$actividad = 'Las comunicaciones necesarias, con quienes corresponda, en prioridad y oportunidad.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 11;
$actividad = 'Referencia de pacientes a otros establecimientos de la red de emergencias';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 12;
$actividad = 'Apoyo a los servicios prehospitalarios(Brigadas medicas, Hospital de campaña)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 13;
$actividad = 'Las situaciones que ameriten evacuación de los ocupantes del recinto. ( Incendio, terremoto)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 14;
$actividad = 'Las vías de evacuación principales y alternativas según la ubicación delos ocupantes.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 15;
$actividad = 'Las zonas de seguridad principales y alternativas frente a una evacuación.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 16;
$actividad = 'Se conoce la ubicación y uso de: extintores, control del suministro de energía, gas, combustible, agua.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 17;
$actividad = 'Se conocen los procedimientos de comunicación internos y externos (bomberos, cruz roja,policia, hospital, otros).';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 18;
$actividad = 'Estan descritos los niveles de responsabilidad.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 19;
$actividad = 'Se Realizan simulacros de emergencia con periodicidad y con la debida seriedad ( Minimo cada 6 meses)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

echo '<th colspan ="2">Información básica del recinto</th>';

$numero = 20;
$actividad = 'Se cuenta con las características de construcción ( planos)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 21;
$actividad = 'Se han descritos las áreas críticas( (Emergencia, Quirófanos, Cuidados Intensivos,Neonatología), o de apoyo (diagnóstico y tratamiento -Laboratorio Clínico, Radiología, Banco de Sangre- Farmacia, Logística, Planta eléctrica, servicios administrativos críticos.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 22;
$actividad = 'Se han señalizado las zonas de seguridad';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 23;
$actividad = 'Vías de evacuación';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';



$numero = 24;
$actividad = 'Se ha descrito la redistribución de espacios internos de Emergencia y uso de áreas de expansión ( paruqeo, bodegas etc.)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 25;
$actividad = 'Sistema de señalizaciones (incendio, evacuación, otros)';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 26;
$actividad = 'Sistemas eléctrico, de gas, combustible agua potable';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 27;
$actividad = 'Sistemas de alarma y de seguridad contra incendios';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 28;
$actividad = 'Diagnóstico de extintores y dispositivos de alerta (cantidad, ubicación,mantenimiento).';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

echo '<th colspan ="2">Información básica de las personas organizadas en brigradas</th>';

$numero = 29;
$actividad = 'Capacitación en evacuación.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 30;
$actividad = 'Capacitación en protección contra incendios.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 31;
$actividad = 'Capacitación en primeros auxilios.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 32;
$actividad = 'Números o anexos telefónicos de los encargados';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 33;
$actividad = 'Teléfonos de emergencias (bomberos, cruz roja, hospitales';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';


$numero = 34;
$actividad = 'Capacitación en triage.';
echo '<tr><td>';	
echo '<label>' . $actividad . '</label>';
echo form_hidden('actividad_' . $numero, $actividad);
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text'));
echo '</td></tr>';

?>