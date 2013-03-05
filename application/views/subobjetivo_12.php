<?php
//quincuagesima primera Fila

echo '<tr><td>';		

echo '<label>Realiza Movimientos de Biologicos en el tiempo establecido </label>';

echo form_hidden('actividad_51', 'Realiza Movimientos de Biologicos en el tiempo establecido');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_51', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_51', 'name'=>'comentario_51', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_51', 'id'=>'fecha_51', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//quincuagesima segunda Fila

echo '<tr><td>';		

echo '<label>Pedidos de Vacuna e Insumos de acuerdo a Necesidades </label>';

echo form_hidden('actividad_52', 'Pedidos de Vacuna e Insumos de acuerdo a Necesidades');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_52', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_52', 'name'=>'comentario_52', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_52', 'id'=>'fecha_52', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//quincuagesima tercera Fila

echo '<tr><td>';		

echo '<label>Lleva a diario hoja de control de Entradas y Salidas de Biologico </label>';

echo form_hidden('actividad_53', 'Lleva a diario hoja de control de Entradas y Salidas de Biologico');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_53', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_53', 'name'=>'comentario_53', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_53', 'id'=>'fecha_53', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//quincuagesima cuarta Fila

echo '<tr><td>';		

echo '<label>Fechas de caducidad de vacunas y jeringas vigentes </label>';

echo form_hidden('actividad_54', 'Fechas de caducidad de vacunas y jeringas vigentes');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_54', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_54', 'name'=>'comentario_54', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_54', 'id'=>'fecha_54', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//quincuagesima quinta Fila

echo '<tr><td>';		

echo '<label>Cuenta con Equipo de Emergencias </label>';

echo form_hidden('actividad_55', 'Cuenta con Equipo de Emergencias');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_55', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_55', 'name'=>'comentario_55', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_55', 'id'=>'fecha_55', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

?>