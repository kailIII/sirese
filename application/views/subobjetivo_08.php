<?php 

//Decimo Tercera Fila

echo '<tr><td>';		

echo '<label>Coinciden los datos de los formularios A-B-C con el informa mensual (Revisar 3 meses)</label>';

echo form_hidden('actividad_13', 'Coinciden los datos de los formularios A-B-C con el informa mensual (Revisar 3 meses)');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_13', 'id'=>'fecha_13', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimon Cuarta Fila

echo '<tr><td>';		

echo '<label>Existe derivacion de las dosis por municipio de procedencia</label>';

echo form_hidden('actividad_14', 'Existe derivacion de las dosis por municipio de procedencia');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_14', 'id'=>'fecha_14', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Quinta Fila

echo '<tr><td>';		

echo '<label>Es llenado correctamente los formularios A-B-C</label>';

echo form_hidden('actividad_15', 'Es llenado correctamente los formularios A-B-C');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_15', 'id'=>'fecha_15', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Sexta Fila

echo '<tr><td>';		

echo '<label>Registra las vacunas aplicadas en el expedinte clinico</label>';

echo form_hidden('actividad_16', 'Registra las vacunas aplicadas en el expedinte clinico');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_16', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_16', 'name'=>'comentario_16', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_16', 'id'=>'fecha_16', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Septima Fila

echo '<tr><td>';		

echo '<label>Existe seguimiento a los menores faltistas </label>';

echo form_hidden('actividad_17', 'Existe seguimiento a los menores faltistas ');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_17', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_17', 'name'=>'comentario_17', 'class'=>'text'));

echo '</td><td>';		

echo form_input(array('class'=>'fechador', 'name'=>'fecha_17', 'id'=>'fecha_17', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Octava Fila

echo '<tr><td>';		

echo '<label>Lleva control de RN de su AGI</label>';

echo form_hidden('actividad_18', 'Lleva control de RN de su AGI');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_18', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_18', 'name'=>'comentario_18', 'class'=>'text'));

echo '</td><td>';	

echo form_input(array('class'=>'fechador', 'name'=>'fecha_18', 'id'=>'fecha_18', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Decimo Novena Fila

echo '<tr><td>';		

echo '<label>Mantiene libro y/o Tarjetero Activo</label>';

echo form_hidden('actividad_19', 'Mantiene libro y/o Tarjetero Activo');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_19', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_19', 'name'=>'comentario_19', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_19', 'id'=>'fecha_19', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



//Vigesima Fila

echo '<tr><td>';		

echo '<label>Hay congruencia con Informe Mensual Manual y el Automatizado (Revisar en Linea 3 meses)</label>';

echo form_hidden('actividad_20', 'Hay congruencia con Informe Mensual Manual y el Automatizado (Revisar en Linea 3 meses)');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_20', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_20', 'name'=>'comentario_20', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_20', 'id'=>'fecha_20', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';



?>