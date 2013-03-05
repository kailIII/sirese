<?php
//Primer Fila
echo '<tr><td>';		
echo '<label>Las areas de la sede disponen de ambientes separados con privacidad y confidencialidad adecuada iluminacion y ventilacion</label>';
echo form_hidden('actividad_1', 'Las areas de la sede disponen de ambientes separados con privacidad y confidencialidad adecuada iluminacion y ventilacion');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Segunda Filaecho '<tr><td>';	
echo '<tr><td>';		
echo '<label>La sede de la UCSF cuenta con infraestructura segura para salvaguardar el equipo e insumos</label>';
echo form_hidden('actividad_2', 'La sede de la UCSF cuenta con infraestructura segura para salvaguardar el equipo e insumos');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';							
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con servicios basicos: Agua potable o tratada</label>';
echo form_hidden('actividad_3', 'La UCSF cuenta con servicios basicos: Agua potable o tratada');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Cuarta Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con energia electrica</label>';
echo form_hidden('actividad_4', 'La UCSF cuenta con energia electrica<');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Quinta Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con telefono</label>';
echo form_hidden('actividad_5', 'La UCSF cuenta con telefono');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Sexta Fila
echo '<tr><td>';		
echo '<label>La UCSF dispone de equipo de computo</label>';
echo form_hidden('actividad_6', 'La UCSF dispone de equipo de computo');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Septima Fila
echo '<tr><td>';		
echo '<label>La UCSF dispone de internet o intranet</label>';
echo form_hidden('actividad_7', 'La UCSF dispone de internet o intranet');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Octava Fila
echo '<tr><td>';		
echo '<label>La UCSF dispone fax</label>';
echo form_hidden('actividad_8', 'La UCSF dispone fax');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Novena Fila
echo '<tr><td>';		
echo '<label>La UCSF dispone autoclave estufa u olla de presion</label>';
form_hidden('actividad_9', 'La UCSF dispone autoclave estufa u olla de presion');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decima Fila
echo '<tr><td>';		
echo '<label>La UCSF dispone autoclave estufa u olla de presion</label>';
echo form_hidden('actividad_10', 'La UCSF dispone autoclave estufa u olla de presion');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Primera Fila
echo '<tr><td>';		
echo '<label>La UCSF dispone de equipo e insumos basicos para brindar la consulta medica y procedimientos Verificar anexo 1</label>';
echo form_hidden('actividad_11', 'La UCSF dispone de equipo e insumos basicos para brindar la consulta medica y procedimientos Verificar anexo 1');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td><td>';		
echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Segunda Fila
echo '<tr><td>';		
echo '<label>Existe disponibilidad de instrumentos de registro   Verificar  anexo 2</label>';
echo form_hidden('actividad_12', 'Existe_disponibilidad_de_instrumentos_de_registro_Verificar_anexo_2');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_12', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Tercera Fila
echo '<tr><td>';		
echo '<label>El personal de salud de las UCSF esta capacitado en las diferentes estrategias de atencion Verificar listado anexo 3</label>';
echo form_hidden('actividad_13', 'El personal de salud de las UCSF esta capacitado en las diferentes estrategias de atencion Verificar listado anexo 3');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_13', 'id'=>'fecha_13', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimon Cuarta Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con todos los integrantes del Equipo Comunitario de salud familiar o especializado Verificar anexo 4</label>';
echo form_hidden('actividad_14', 'La UCSF cuenta con todos los integrantes del Equipo Comunitario de salud familiar o especializado Verificar anexo 4');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_14', 'id'=>'fecha_14', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Quinta Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con transporte propio</label>';
$opciones = array(100=>'Si', 0=>'No');
echo form_hidden('actividad_15', 'La UCSF cuenta con transporte propio');
echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_15', 'id'=>'fecha_15', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Sexta Fila
echo '<tr><td>';		
echo '<label>La sede de la UCSF es propia</label>';
echo form_hidden('actividad_16', 'La sede de la UCSF es propia');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_16', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_16', 'name'=>'comentario_16', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_16', 'id'=>'fecha_16', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Septima Fila
echo '<tr><td>';		
echo '<label>La UCSF cuenta con el marco regulatorio para uso de farmacia</label>';
echo form_hidden('actividad_17', 'La UCSF cuenta con el marco regulatorio para uso de farmacia');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_17', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_17', 'name'=>'comentario_17', 'class'=>'text'));
echo '</td><td>';		
echo form_input(array('class'=>'fechador', 'name'=>'fecha_17', 'id'=>'fecha_17', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Octava Fila
echo '<tr><td>';		
echo '<label>Existe  asignacion de numero de familias por Promotor de Salud de acuerdo a lineamientos</label>';
echo form_hidden('actividad_18', 'Existe  asignacion de numero de familias por Promotor de Salud de acuerdo a lineamientos');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_18', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_18', 'name'=>'comentario_18', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_18', 'id'=>'fecha_18', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Novena Fila
echo '<tr><td>';		
echo '<label>La sede donde se ubica la UCSF cumple con los criterios de accesibilidad a la poblacion</label>';
echo form_hidden('actividad_19', 'La sede donde se ubica la UCSF cumple con los criterios de accesibilidad a la poblacion');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_19', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_19', 'name'=>'comentario_19', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_19', 'id'=>'fecha_19', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>