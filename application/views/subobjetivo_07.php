<?php
//Primer Fila

echo '<tr><td>';		

echo '<label>Area de Vacunacion Identificada</label>';

echo form_hidden('actividad_1', 'Area de Vacunacion Identificada');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//Segunda Fila

echo '<tr><td>';		

echo '<label>Ha recibido capacitacion sobre PNVI</label>';

echo form_hidden('actividad_2', 'Ha recibido capacitacion sobre PNVI');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//Tercera Fila

echo '<tr><td>';		

echo '<label>Tiene los Modulos y Normatica del PNVI</label>';

echo form_hidden('actividad_3', 'Tiene los Modulos y Normatica del PNVI');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//Cuarta Fila

echo '<tr><td>';		

echo '<label>Cuenta con el Plan Operativo Anual</label>';

echo form_hidden('actividad_4', 'Cuenta con el Plan Operativo Anual');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Quinta Fila

echo '<tr><td>';		

echo '<label>Existe coordinacion con otras instituciones</label>';

echo form_hidden('actividad_5', 'Existe coordinacion con otras instituciones');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Sexta Fila

echo '<tr><td>';		

echo '<label>Conoce la poblacion de Riesgo del AGI</label>';

echo form_hidden('actividad_6', 'Conoce la poblacion de Riesgo del AGI');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Septima Fila

echo '<tr><td>';		

echo '<label>Sala Situacional  Actualizada</label>';

echo form_hidden('actividad_7', 'Sala Situacional  Actualizada');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Octava Fila

echo '<tr><td>';		

echo '<label>Grafico de Vacunacion actualizado</label>';

echo form_hidden('actividad_8', 'Grafico de Vacunacion actualizado');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));



//Novena Fila

echo '<tr><td>';		

echo '<label>Tasa de Acceso </label>';

form_hidden('actividad_9', 'Tasa de Acceso');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decima Fila

echo '<tr><td>';		

echo '<label>Tasa de Oportunidad</label>';

echo form_hidden('actividad_10', 'Tasa de Oportunidad');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Primera Fila

echo '<tr><td>';		

echo '<label>Tasas de Desercion Pentavalente Rotavirus OPV Neumococo MMR)</label>';

echo form_hidden('actividad_11', 'Tasas de Desercion Pentavalente Rotavirus OPV Neumococo MMR');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));

echo '</td><td>';		

echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Segunda Fila

echo '<tr><td>';		

echo '<label>Existe evidencia de analisis de Cobertura cada mes</label>';

echo form_hidden('actividad_12', 'Existe evidencia de analisis de Cobertura cada mes');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_12', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



?>