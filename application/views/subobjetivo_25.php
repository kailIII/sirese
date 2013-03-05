<?php
//Primer Fila
echo '<tr><td>';		
echo '<label>Existencia de recurso especializado para la atencion de salud mental.</label>';
echo form_hidden('actividad_1', 'Existencia de recurso especializado para la atencion de salud mental.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Segunda Fila
echo '<tr><td>';		
echo '<label>Existencia de Unidad de Salud Mental</label>';
echo form_hidden('actividad_2', 'Existencia de Unidad de Salud Mental');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Tercera Fila
echo '<tr><td>';		
echo '<label>Cuenta con Referentes de salud mental</label>';
echo form_hidden('actividad_3', 'Cuenta con Referentes de salud mental');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Cuarta Fila
echo '<tr><td>';		
echo '<label>Existe un area especifica y adecuada para la atencion de la salud mental.</label>';
echo form_hidden('actividad_4', 'Existe un area especifica y adecuada para la atencion de la salud mental.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Quinta Fila
echo '<tr><td>';		
echo '<label>Existencia de Plan de Salud Mental actualizado</label>';
echo form_hidden('actividad_5', 'Existencia de Plan de Salud Mental actualizado');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Sexta Fila
echo '<tr><td>';		
echo '<label>Existencia de evidencia epidemiologica de problemas mas frecuentes de  salud mental en el establecimiento de salud</label>';
echo form_hidden('actividad_6', 'Existencia de evidencia epidemiologica de problemas mas frecuentes de  salud mental en el establecimiento de salud');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Septima Fila
echo '<tr><td>';		
echo '<label>Plan de salud mental integrado al plan contingencial para situaciones de emergencias y desastres.</label>';
echo form_hidden('actividad_7', 'Plan de salud mental integrado al plan contingencial para situaciones de emergencias y desastres.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Octava Fila
echo '<tr><td>';		
echo '<label>Existencia de personal capacitado para la atencion en salud mental ante situaciones de emergencias y desastres.</label>';
echo form_hidden('actividad_8', 'Existencia de personal capacitado para la atencion en salud mental ante situaciones de emergencias y desastres.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Novena Fila
echo '<tr><td>';		
echo '<label>Cuenta con equipo de primera respuesta para intervenciones en salud mental en situaciones de emergencias y desastres.</label>';
echo form_hidden('actividad_9', 'Cuenta con equipo de primera respuesta para intervenciones en salud mental en situaciones de emergencias y desastres.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decima Fila
echo '<tr><td>';		
echo '<label>Cuenta con un plan de acciones preventivas relacionadas con deteccion precoz y tratamiento oportuno de problemas de salud mental.</label>';
echo form_hidden('actividad_10', 'Cuenta con un plan de acciones preventivas relacionadas con deteccion precoz y tratamiento oportuno de problemas de salud mental.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo primera fila
echo '<tr><td>';		
echo '<label>Cuentan con una red social intersectorial de salud mental.</label>';
echo form_hidden('actividad_11', 'Cuentan con una red social intersectorial de salud mental.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo Segunda fila
echo '<tr><td>';		
echo '<label>Personal medico capacitado en el uso del CIE-10</label>';
echo form_hidden('actividad_12', 'Personal medico capacitado en el uso del CIE-10');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_12', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo tercera fila
echo '<tr><td>';		
echo '<label>Existencia de CIE-10 en consultorios</label>';
echo form_hidden('actividad_13', 'Existencia de CIE-10 en consultorios');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_13', 'id'=>'fecha_13', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo cuarta fila
echo '<tr><td>';		
echo '<label>Uso de capitulo V de CIE-10 para el diagnostico de los trastornos mentales y del comportamiento</label>';
echo form_hidden('actividad_14', 'Uso de capitulo V de CIE-10 para el diagnostico de los trastornos mentales y del comportamiento');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_14', 'id'=>'fecha_14', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo quinta fila
echo '<tr><td>';		
echo '<label>Se cuenta con un plan para acciones preventivas relacionadas con deteccion precoz y tratamiento oportuno para morbilidad en salud mental.</label>';
echo form_hidden('actividad_15', 'Se cuenta con un plan para acciones preventivas relacionadas con deteccion precoz y tratamiento oportuno para morbilidad en salud mental.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_15', 'id'=>'fecha_15', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo sexta fila
echo '<tr><td>';		
echo '<label>Existencia de medicamento psicotropicos para la atencion de personas con problemas de salud mental.</label>';
echo form_hidden('actividad_16', 'Existencia de medicamento psicotropicos para la atencion de personas con problemas de salud mental.');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_16', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_16', 'name'=>'comentario_16', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_16', 'id'=>'fecha_16', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
//Decimo septima fila
echo '<tr><td>';		
echo '<label>Existe registro de personas referidas por problemas de salud mental a otros establecimientos</label>';
echo form_hidden('actividad_17', 'Existe registro de personas referidas por problemas de salud mental a otros establecimientos');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_17', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_17', 'name'=>'comentario_17', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_17', 'id'=>'fecha_17', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>