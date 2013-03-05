<?php
//quincuagesima sexta Fila

echo '<tr><td>';		

echo '<label>Cobertura  tercera PENTAVALENTE </label>';

echo form_hidden('actividad_56', 'Cobertura  tercera PENTAVALENTE');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_56', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_56', 'name'=>'comentario_56', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_56', 'id'=>'fecha_56', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//quincuagesima septima Fila

echo '<tr><td>';		

echo '<label>Cobertura  tercera OPV </label>';

echo form_hidden('actividad_57', 'Cobertura  tercera OPV');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_57', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_57', 'name'=>'comentario_57', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_57', 'id'=>'fecha_57', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//quincuagesima octava Fila

echo '<tr><td>';		

echo '<label>Cobertura BCG </label>';

echo form_hidden('actividad_58', 'Cobertura BCG');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_58', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_58', 'name'=>'comentario_58', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_58', 'id'=>'fecha_58', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//quincuagesima novena Fila

echo '<tr><td>';		

echo '<label>Cobertura segunda NEUMOCOCO</label>';

echo form_hidden('actividad_59', 'Cobertura sedunda NEUMOCOCO');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_59', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_59', 'name'=>'comentario_59', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_59', 'id'=>'fecha_59', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250