<?php 
//primera Fila
echo '<tr><td>';
echo '<label>Diagnostico sanitario del area de influencia</label>';
echo form_hidden('actividad_1', 'Diagnostico sanitario del area de influencia ');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//segunda Fila
echo '<tr><td>';
echo '<label>Programa general de actividades</label>';
echo form_hidden('actividad_2', 'Programa general de actividades');

echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//terceraFila
echo '<tr><td>';
echo '<label>Planificacion  anual  operativa  de saneamiento ambiental</label>';
echo form_hidden('actividad_3', 'Planificacion  anual  operativa  de saneamiento ambiental ');

echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//cuarta Fila
echo '<tr><td>';
echo '<label>Calendario mensual de actividades</label>';
echo form_hidden('actividad_4', 'Calendario mensual de actividades');

echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//quinta Fila
echo '<tr><td>';
echo '<label>Tabulador diario de actividades</label>';
echo form_hidden('actividad_5', 'Tabulador diario de actividades');

echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Sexta Fila
echo '<tr><td>';
echo '<label>Denuncias y solicitudes</label>';
echo form_hidden('actividad_6', 'Denuncias y solicitudes');

echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Septima Fila
echo '<tr><td>';
echo '<label>Evaluacion de Indicadores priorizados  de  saneamiento ambiental</label>';
echo form_hidden('actividad_7', 'Evaluacion de Indicadores priorizados  de  saneamiento ambiental');

echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//octava Fila
echo '<tr><td>';
echo '<label>Cumplimiento del plan de trabajo mensual</label>';
echo form_hidden('actividad_8', 'Cumplimiento del plan de trabajo mensual');

echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//novena Fila
echo '<tr><td>';
echo '<label>Participacion social</label>';
echo form_hidden('actividad_9', 'Participacion social');

echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//decima Fila
echo '<tr><td>';
echo '<label>Cumplimiento de Normas Administrativas</label>';
echo form_hidden('actividad_10', 'Cumplimiento de Normas Administrativas');

echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//decima primera Fila
echo '<tr><td>';
echo '<label>Socializacion de los instrumentos regulatorios</label>';
echo form_hidden('actividad_11', 'Socializacion de los instrumentos regulatorios');

echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';



?>