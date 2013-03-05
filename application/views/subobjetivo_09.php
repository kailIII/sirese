
<?php 

//Vigesima primera Fila

echo '<tr><td>';		

echo '<label>Frigorifico exclusivo para vauna</label>';

echo form_hidden('actividad_21', 'Frigorifico exclusivo para vauna');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_21', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_21', 'name'=>'comentario_21', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_21', 'id'=>'fecha_21', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Vigesima segunda Fila

echo '<tr><td>';		

echo '<label>Esta a 15cm de la pared en la sombra y alejado de fuentes de calor</label>';

echo form_hidden('actividad_22', 'Esta a 15cm de la pared en la sombra y alejado de fuentes de calor');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_22', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_22', 'name'=>'comentario_22', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_22', 'id'=>'fecha_22', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//Vigesima tercera Fila

echo '<tr><td>';		

echo '<label>Si es frigorifico domestico cuenta con las botellas de agua necesarias</label>';

echo form_hidden('actividad_23', 'Si es frigorifico domestico cuenta con las botellas de agua necesarias');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_23', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_23', 'name'=>'comentario_23', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_23', 'id'=>'fecha_23', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//Vigesima cuarta Fila

echo '<tr><td>';		

echo '<label>Ubicacion de las vacunas de acuerdo a su clasificacion</label>';

echo form_hidden('actividad_24', 'Ubicacion de las vacunas de acuerdo a su clasificacion');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_24', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_24', 'name'=>'comentario_24', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_24', 'id'=>'fecha_24', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Vigesima quinta Fila

echo '<tr><td>';		

echo '<label>Cuenta con termometro interno</label>';

echo form_hidden('actividad_25', 'Cuenta con termometro interno');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_25', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_25', 'name'=>'comentario_25', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_25', 'id'=>'fecha_25', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';


//Vigesima sexta Fila

echo '<tr><td>';		

echo '<label>Cuenta con programacion de limpieza del frigorifico</label>';

echo form_hidden('actividad_26', 'Cuenta con programacion de limpieza del frigorifico');

$opciones = array(100=>'Si', 0=>'No');

echo form_dropdown('opciones_26', $opciones, '0', 'style="width: 250px;paddi