<?php
//Primera Fila
echo '<tr><td>';		
echo '<label> Existe disponibilidad de equipos e insumos  basicos para brindar la consulta medica y procedimientos (anexo 1)</label>';
echo form_hidden('actividad_1', ' Existe disponibilidad de equipos e insumos  basicos para brindar la consulta medica y procedimientos (anexo 1)');
$opciones = array(100=>'Si', 0=>'No', -1=>'No Aplica');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Segunda Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con los materiales e insumos para el area de inhaloterapia (Verificar  anexo 13)</label>';
echo form_hidden('actividad_2', 'La UCSF cuenta con los materiales e insumos para el area de inhaloterapia (Verificar  anexo 13)');
$opciones = array(100=>'Si', 0=>'No', -1=>'No Aplica');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con los materiales e insumos para el area de Rehidratacion Oral (Verificar  anexo 14)</label>';
echo form_hidden('actividad_3', 'La UCSF cuenta con los materiales e insumos para el area de Rehidratacion Oral (Verificar  anexo 14)');
$opciones = array(100=>'Si', 0=>'No', -1=>'No Aplica');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Cuarta Fila
echo '<tr><td>';		
echo '<label>La UCSF  cuenta con los materiales e insumos para la areas de curaciones,  inyecciones  y vacunacion. (Verificar  anexo 15)</label>';
echo form_hidden('actividad_4', 'La UCSF  cuenta con los materiales e insumos para la areas de curaciones,  inyecciones  y vacunacion. (Verificar  anexo 15)');
$opciones = array(100=>'Si', 0=>'No', -1=>'No Aplica');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Quinta Fila
echo '<tr><td>';		
echo '<label>Existe disponibilidad de papeleria e  instrumentos de registro, segun necesidad  (Verificar  anexo 2)</label>';
echo form_hidden('actividad_5', 'Existe disponibilidad de papeleria e  instrumentos de registro, segun necesidad  (Verificar  anexo 2)');
$opciones = array(100=>'Si', 0=>'No', -1=>'No Aplica');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Sexta Fila
echo '<tr><td>';		
echo '<label>Existe disponibilidad de medicamentos para un mes, que responda al numero de poblacion y segun morbilidad.  (Verificar  anexo 16)</label>';
echo form_hidden('actividad_6', 'Existe disponibilidad de medicamentos para un mes, que responda al numero de poblacion y segun morbilidad.  (Verificar  anexo 16)');
$opciones = array(100=>'Si', 0=>'No', -1=>'No Aplica');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>