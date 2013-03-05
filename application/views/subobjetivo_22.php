<?php 
//primera Fila
echo '<tr><td>';
echo '<label>Censo de establecimientos generadores de desechos bioinfecciosos</label>';
echo form_hidden('actividad_1', 'Censo de establecimientos generadores de desechos bioinfecciosos');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//segunda Fila
echo '<tr><td>';
echo '<label>Socializacion de la norma de manejo de los desechos bioinfecciosos</label>';
echo form_hidden('actividad_2', 'Socializacion de la norma de manejo de los desechos bioinfecciosos');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//terceraFila
echo '<tr><td>';
echo '<label>Informes de inspeccion a establecimientos generadores</label>';
echo form_hidden('actividad_3', 'Informes de inspeccion a establecimientos generadores');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

?>