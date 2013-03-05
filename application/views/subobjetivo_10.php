<?php 

//trigesima cuarta Fila

echo '<tr><td>';		

echo '<label>Imparte charla sobre vacunacion dejando constancia de ello </label>';

echo form_hidden('actividad_34', 'Imparte charla sobre vacunacion dejando constancia de ello');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_34', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_34', 'name'=>'comentario_34', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_34', 'id'=>'fecha_34', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//trigesima quinta Fila

echo '<tr><td>';		

echo '<label>Existen horarios de vacunacion </label>';

echo form_hidden('actividad_35', 'Existen horarios de vacunacion');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_35', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_35', 'name'=>'comentario_35', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_35', 'id'=>'fecha_35', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//trigesima sexta Fila

echo '<tr><td>';		

echo '<label>Area de vacunacion limpia y ordenada </label>';

echo form_hidden('actividad_36', 'Area de vacunacion limpia y ordenada');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_36', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_36', 'name'=>'comentario_36', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_36', 'id'=>'fecha_36', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//trigesima septima Fila

echo '<tr><td>';		

echo '<label>Aplica Normativa vigente en cuanto a vias tecnicas y dosis </label>';

echo form_hidden('actividad_37', 'Aplica Normativa vigente en cuanto a vias tecnicas y dosis');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_37', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_37', 'name'=>'comentario_37', 'class'=>'text'))