<?php
//cuadragesima sexta Fila

echo '<tr><td>';		

echo '<label>Realiza Vigilancia Pasiva y Activa en Inmunoprevenibles </label>';

echo form_hidden('actividad_46', 'Realiza Vigilancia Pasiva y Activa en Inmunoprevenibles');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_46', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_46', 'name'=>'comentario_46', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_46', 'id'=>'fecha_46', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//cuadragesima septima Fila

echo '<tr><td>';		

echo '<label>Existe Notificacion Semanal Negativa oportuna </label>';

echo form_hidden('actividad_47', 'Existe Notificacion Semanal Negativa oportuna');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_47', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_47', 'name'=>'comentario_47', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_47', 'id'=>'fecha_47', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//cuadragesima octava Fila

echo '<tr><td>';		

echo '<label>Han notificado e Investigado de casos sospechosos de Inmunoprevenibles </label>';

echo form_hidden('actividad_48', 'Han notificado e Investigado de casos sospechosos de Inmunoprevenibles');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_48', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_48', 'name'=>'comentario_48', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_48', 'id'=>'fecha_48', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//cuadragesima novena Fila

echo '<tr><td>';		

echo '<label>Las Intervenciones se realizaron segun lineamientos establecidos </label>';

echo form_hidden('actividad_49', 'Las Intervenciones se realizaron segun lineamientos establecidos');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_49', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_49', 'name'=>'comentario_49', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_49', 'id'=>'fecha_49', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//quincuagesima Fila

echo '<tr><td>';		

echo '<label>Mapeo de Casos </label>';

echo form_hidden('actividad_50', 'Mapeo de Casos');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_50', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_50', 'name'=>'comentario_50', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_50', 'id'=>'fecha_50', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


?>