<?php
//Primer Fila
echo '<tr><td>';		
echo '<label>Cuentan con un plan anual de Educacion para la Salud</label>';
echo form_hidden('actividad_1', 'Cuentan con un plan anual de Educacion para la Salud');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Segunda Fila
echo '<tr><td>';		
echo '<label>Cuentan con planes tacticos educativos</label>';
echo form_hidden('actividad_2', 'Cuentan con planes tacticos educativos');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>Se esta aplicando el modelo  de circulos educativos con embarazadas / porcentaje de embarazadas participando.</label>';
echo form_hidden('actividad_3', 'Se esta aplicando el modelo  de circulos educativos con embarazadas / porcentaje de embarazadas participando.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Cuarta Fila
echo '<tr><td>';		
echo '<label> Se cuentan con grupos de voluntarios ( de los diferentes ciclos de vida) participando en sesiones educativas sobre: proyectos de vida, promocion de control prenatal e infantil, nutricion y lactancia materna,tueberculosis, prevencion de violencia intrafamiliar, SSR, estilos de vida saludable entre otros</label>';
echo form_hidden('actividad_4', 'Se cuentan con grupos de voluntarios ( de los diferentes ciclos de vida) participando en sesiones educativas sobre: proyectos de vida, promocion de control prenatal e infantil, nutricion y lactancia materna,tueberculosis, prevencion de violencia intrafamiliar, SSR, estilos de vida saludable entre otros');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Quinta Fila
echo '<tr><td>';		
echo '<label>Cuentan con grupos organizados, trabajando conjuntamente en la prevencion de enfermedades y promocion de la salud</label>';
echo form_hidden('actividad_5', 'Cuentan con grupos organizados, trabajando conjuntamente en la prevencion de enfermedades y promocion de la salud');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Sexta Fila
echo '<tr><td>';		
echo '<label>Se mantiene coordinacion con los  medios de comunicacion social</label>';
echo form_hidden('actividad_6', 'Se mantiene coordinacion con los  medios de comunicacion social');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Septima Fila
echo '<tr><td>';		
echo '<label> Porcentaje de adolescentes del AGI que han participado en sesiones educativas sobre proyectos de vida y SSR</label>';
echo form_hidden('actividad_7', ' Porcentaje de adolescentes del AGI que han participado en sesiones educativas sobre proyectos de vida y SSR');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Octava Fila
echo '<tr><td>';		
echo '<label>La informacion estadistica se esta  registrando al dia</label>';
echo form_hidden('actividad_8', 'La informacion estadistica se esta  registrando al dia');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Novena Fila
echo '<tr><td>';		
echo '<label>Se cuenta con murales educativos y uso adecuado de los materiales educativos</label>';
form_hidden('actividad_9', 'Se cuenta con murales educativos y uso adecuado de los materiales educativos');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decima Fila
echo '<tr><td>';		
echo '<label>El establecimientos de salud cuenta con  clubes organizados y funcionando : adulto mayor , embarazadas, adolescentes, hipertensos, diabeticos, otros</label>';
echo form_hidden('actividad_10', 'El establecimientos de salud cuenta con  clubes organizados y funcionando : adulto mayor , embarazadas, adolescentes, hipertensos, diabeticos, otros');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $tiempo, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>