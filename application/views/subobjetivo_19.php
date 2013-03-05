<?php
//Sexta Fila
echo '<tr><td>';
echo '<label>Catastro y expedientes de establecimientos con licencia sanitaria vigente</label>';
echo form_hidden('actividad_6', 'Catastro y expedientes de establecimientos con licencia sanitaria vigente');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Septima Fila
echo '<tr><td>';
echo '<label>Catastro y expedientes de establecimientos con tramite para la obtencion de licencias sanitarias</label>';
echo form_hidden('actividad_7', 'Catastro y expedientes de establecimientos con tramite para la obtencion de licencias sanitarias');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//octava Fila
echo '<tr><td>';
echo '<label>Programacion y cumplimiento de cursos para manipuladores de alimentos</label>';
echo form_hidden('actividad_8', 'Programacion y cumplimiento de cursos para manipuladores de alimentos');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//novena Fila
echo '<tr><td>';
echo '<label>Censo y registro de manipuladores de alimentos</label>';
echo form_hidden('actividad_9', 'Censo y registro de manipuladores de alimentos');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//decima Fila
echo '<tr><td>';
echo '<label>Plan de vigilancia de alimentos fortificados y de bebidas alcoholicas.</label>';
echo form_hidden('actividad_10', 'Plan de vigilancia de alimentos fortificados y de bebidas alcoholicas');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//decima primera Fila
echo '<tr><td>';
echo '<label>Numero de muestras  de alimentos fortificados y bebidas alcoholicas tomadas y enviadas al labotario</label>';
echo form_hidden('actividad_11', 'Numero de muestras  de alimentos fortificados y bebidas alcoholicas tomadas y enviadas al labotario');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//decima segunda Fila
echo '<tr><td>';
echo '<label>Registro de resultados de analisis de laboratorio de alimentos fortificados y bebidas alcoholicas fuera de norma</label>';
echo form_hidden('actividad_12', 'Registro de resultados de analisis de laboratorio de alimentos fortificados y bebidas alcoholicas fuera de norma');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_12', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//decima tercera Fila
echo '<tr><td>';
echo '<label>Registro de resultados de analisis de laboratorio de muestras de moluscos y bivalvos segun programacion</label>';
echo form_hidden('actividad_13', 'Registro de resultados de analisis de laboratorio de muestras de moluscos y bivalvos segun programacion');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_13', 'id'=>'fecha_13', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//decima cuarta Fila
echo '<tr><td>';
echo '<label>Registro de inspecciones realizadas a industrias fortificadoras de alimentos y fabricadores de bebidas alcoholicas</label>';
echo form_hidden('actividad_14', 'Registro de inspecciones realizadas a industrias fortificadoras de alimentos y fabricadores de bebidas alcoholicas');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_14', 'id'=>'fecha_14', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//decima quinta Fila
echo '<tr><td>';
echo '<label>Divulgacion de normas tecnicas sanitarias</label>';
echo form_hidden('actividad_15', 'Divulgacion de normas tecnicas sanitarias');
$opciones = array(100=>'Cumple', 60=>'Cumple Parcial', 0 =>'No Cumple');
echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_15', 'id'=>'fecha_15', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>