<?php 
//primera Fila
echo '<tr><td>';
echo '<label>Registro de inspecciones a viviendas y establecimientos con problemas de aguas residuales</label>';
echo form_hidden('actividad_2', 'Registro de inspecciones a viviendas y establecimientos con problemas de aguas residuales');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

?>