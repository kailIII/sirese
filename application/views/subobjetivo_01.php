<?php
//Primer Fila
echo '<tr><td>';		
echo '<label>Generalidades</label>';
echo form_hidden('actividad_1', 'Generalidades');

for ($i=0; $i<=23; $i++){
	$opciones[$i] = $i;
}
$opciones[-1] = 'No Aplica';
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';							
echo form_hidden('total_1', 23);
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Segunda Fila
echo '<tr><td>';		
echo '<label>Monitoreo y supervision</label>';
echo form_hidden('actividad_2', 'Monitoreo y supervision');
unset($opciones);

for ($i=0; $i<=3; $i++){
	$opciones[$i] = $i;
}
$opciones[-1] = 'No Aplica';
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_hidden('total_2', 3);
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>Aplicacion de la Normativa</label>';
echo form_hidden('actividad_3', 'Aplicacion de la Normativa');
unset($opciones);

for ($i=0; $i<=44; $i++){
	$opciones[$i] = $i;
}
$opciones[-1] = 'No Aplica';
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';							
echo form_hidden('total_3', 44);
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Cuarta Fila
echo '<tr><td>';		
echo '<label>Modelo de Atencion</label>';
echo form_hidden('actividad_4', 'Modelo de Atencion');
unset($opciones);

for ($i=0; $i<=15; $i++){
	$opciones[$i] = $i;
}
$opciones[-1] = 'No Aplica';
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';							
echo form_hidden('total_4', 15);
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Quinta Fila
echo '<tr><td>';		
echo '<label>UCSF Intermedia/Especializada</label>';
echo form_hidden('actividad_5', 'UCSF Intermedia/Especializada');
unset($opciones);

for ($i=0; $i<=15; $i++){
	$opciones[$i] = $i;
}
$opciones[-1] = 'No Aplica';
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';							
echo form_hidden('total_5', 15);
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
	?>