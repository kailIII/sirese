<?php

//Primer Fila

echo '<tr><td>';		

echo '<label>Tabulador   y registro diario de  actividades   actualizado</label>';

echo form_hidden('actividad_1', 'Tabulador   y registro diario de  actividades   actualizado');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Segunda Fila

echo '<tr><td>';		

echo '<label>Produccion  por dia ( 40 examenes) mensual / recurso</label>';

echo form_hidden('actividad_2', 'Produccion  por dia ( 40 examenes) mensual / recurso');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Tercera Fila

echo '<tr><td>';		

echo '<label>Entrega  los  resultados  de  examenes   al  archivo por  medio  de   libro  de  recepcion</label>';

echo form_hidden('actividad_3', 'Entrega  los  resultados  de  examenes   al  archivo por  medio  de   libro  de  recepcion');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_2', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Cuarta Fila

echo '<tr><td>';		

echo '<label>Que  tipo de examenes  no  realiza laboratorio  segun  la  oferta  de   examenes  (Reactivos vencidos)</label>';

echo form_hidden('actividad_4', 'Que  tipo de examenes  no  realiza laboratorio  segun  la  oferta  de   examenes  (Reactivos vencidos)');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Quinta Fila

echo '<tr><td>';		

echo '<label>Kardex  interno  de  Laboratorio Clinico actualizado</label>';

echo form_hidden('actividad_5', 'Kardex  interno  de  Laboratorio Clinico actualizado');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Sexta Fila

echo '<tr><td>';		

echo '<label>Libro  de  registro  de  envio  de  muestras  de  dengue aperturado</label>';

echo form_hidden('actividad_6', 'Libro  de  registro  de  envio  de  muestras  de  dengue aperturado');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Septima Fila

echo '<tr><td>';		

echo '<label>Areas   y  mesas  de   trabajo   ordenadas   y  limpias   en  el  laboratorio</label>';

echo form_hidden('actividad_7', 'Areas   y  mesas  de   trabajo   ordenadas   y  limpias   en  el  laboratorio');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

//Octava Fila

echo '<tr><td>';		

echo '<label>Sintomaticos   Respiratorios   investigados en  el   Laboratorio   segun  lo programado</label>';

echo form_hidden('actividad_8', 'Sintomaticos   Respiratorios   investigados en  el   Laboratorio   segun  lo programado');

$opciones = array(100=>'Si', 0=>'No', -1 =>'No Aplica');

echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');

echo '</td><td>';

echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));

echo '</td><td>';

echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

echo '</td></tr>';

?>