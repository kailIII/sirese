<?php



//Segunda Fila

echo '<tr><td>';	

echo '<tr><td>';		

echo '<label>Los establecimientos dan a conocer cartera de servicios  segun complejidad</label>';

echo form_hidden('actividad_2', 'Los establecimientos dan a conocer cartera de servicios  segun complejidad');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));

echo '</td><td>';							

echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Tercera Fila

echo '<tr><td>';		

echo '<label>Los establecimientos dan a conocer  los deberes y derechos de los ciudadanos</label>';

echo form_hidden('actividad_3', 'Los establecimientos dan a conocer  los deberes y derechos de los ciudadanos');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

?>