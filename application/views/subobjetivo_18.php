<?php 
//primera Fila
echo '<tr><td>';
echo '<label>Croquis sanitario donde se muestre ubicacion de fuentes, tanques y sistema de distribucion de agua</label>';
echo form_hidden('actividad_1', 'Croquis sanitario donde se muestre ubicacion de fuentes, tanques y sistema de distribucion de agua ');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//segunda Fila
echo '<tr><td>';
echo '<label>Registro de lecturas de cloro</label>';
echo form_hidden('actividad_2', 'Registro de lecturas de cloro');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//terceraFila
echo '<tr><td>';
echo '<label>Registro de resultados de muestra de agua (fisicoquimico y bacteriologico)</label>';
echo form_hidden('actividad_3', 'Registro de resultados de muestra de agua (fisicoquimico y bacteriologico) ');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//cuarta Fila
echo '<tr><td>';
echo '<label>Programacion de vigilancia de la calidad del agua</label>';
echo form_hidden('actividad_4', 'Programacion de vigilancia de la calidad del agua');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//quinta Fila
echo '<tr><td>';
echo '<label>Registro de produccion y distribucion de PURIAGUA</label>';
echo form_hidden('actividad_5', 'Registro de produccion y distribucion de PURIAGUA');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

?>