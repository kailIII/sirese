<?php
//Primer Fila
echo '<tr><td>';		
echo '<label>Medico</label>';
echo form_hidden('actividad_1', 'Medico');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Segunda Filaecho '<tr><td>';	
echo '<tr><td>';		
echo '<label>Enfermera</label>';
echo form_hidden('actividad_2', 'Enfermera');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>Auxiliar de Enfermeria</label>';
echo form_hidden('actividad_3', 'Auxiliar de Enfermeria');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Cuarta Fila
echo '<tr><td>';		
echo '<label>Promotores de salud, segun poblacion</label>';
echo form_hidden('actividad_4', 'Promotores de salud, segun poblacion<');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Quinta Fila
echo '<tr><td>';		
echo '<label>Polivalente</label>';
echo form_hidden('actividad_5', 'Polivalente');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Sexta Fila
echo '<tr><td>';		
echo '<label>Medico Director</label>';
echo form_hidden('actividad_6', 'Medico Director');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Septima Fila
echo '<tr><td>';		
echo '<label>Ginecoobstetra</label>';
echo form_hidden('actividad_7', 'Ginecoobstetra');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Octava Fila
echo '<tr><td>';		
echo '<label>Pediatra</label>';
echo form_hidden('actividad_8', 'Pediatra');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Novena Fila
echo '<tr><td>';		
echo '<label>Internista/Medico de Familia</label>';
form_hidden('actividad_9', 'Internista/Medico de Familia');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decima Fila
echo '<tr><td>';		
echo '<label>Fisioterapista</label>';
echo form_hidden('actividad_10', 'Fisioterapista');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Primera Fila
echo '<tr><td>';		
echo '<label>Educador para la salud</label>';
echo form_hidden('actividad_11', 'Educador para la salud');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td><td>';		
echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Segunda Fila
echo '<tr><td>';		
echo '<label>Nutricionista</label>';
echo form_hidden('actividad_12', 'Nutricionista');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_12', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Tercera Fila
echo '<tr><td>';		
echo '<label>Psicologo</label>';
echo form_hidden('actividad_13', 'Psicologo');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_13', 'id'=>'fecha_13', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimon Cuarta Fila
echo '<tr><td>';		
echo '<label>Laboratorista</label>';
echo form_hidden('actividad_14', 'Laboratorista');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_14', 'id'=>'fecha_14', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Quinta Fila
echo '<tr><td>';		
echo '<label>Estadistico</label>';
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_hidden('actividad_15', 'Estadistico');
echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_15', 'id'=>'fecha_15', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Sexta Fila
echo '<tr><td>';		
echo '<label>Odontologo</label>';
echo form_hidden('actividad_16', 'Odontologo');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_16', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_16', 'name'=>'comentario_16', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_16', 'id'=>'fecha_16', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Septima Fila
echo '<tr><td>';		
echo '<label>Inspector de saneamiento ambiental</label>';
echo form_hidden('actividad_17', 'Inspector de saneamiento ambiental');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_17', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_17', 'name'=>'comentario_17', 'class'=>'text'));
echo '</td><td>';		
echo form_input(array('class'=>'fechador', 'name'=>'fecha_17', 'id'=>'fecha_17', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Octava Fila
echo '<tr><td>';		
echo '<label>Motorista</label>';
echo form_hidden('actividad_18', 'Motorista');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_18', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_18', 'name'=>'comentario_18', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_18', 'id'=>'fecha_18', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Novena Fila
echo '<tr><td>';		
echo '<label>Encargado de archivo</label>';
echo form_hidden('actividad_19', 'Encargado de archivo');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_19', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_19', 'name'=>'comentario_19', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_19', 'id'=>'fecha_19', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Vigesima Fila
echo '<tr><td>';		
echo '<label>Encargado de farmacia</label>';
echo form_hidden('actividad_20', 'Encargado de farmacia');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_20', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_20', 'name'=>'comentario_20', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_20', 'id'=>'fecha_20', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Vigesima Fila
echo '<tr><td>';		
echo '<label>Ordenanza</label>';
echo form_hidden('actividad_21', 'Ordenanza');
$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');
echo form_dropdown('opciones_21', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_21', 'name'=>'comentario_21', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_21', 'id'=>'fecha_21', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>