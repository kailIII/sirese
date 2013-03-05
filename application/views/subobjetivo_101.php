<?php

//Primer Fila
echo '<tr><td>';
echo '<label>Ha realizado analisis de la evaluacion de PAO del año anterior.( revisar documento)</label>';
echo form_hidden('actividad_1', 'Ha realizado analisis de la evaluacion de PAO del año anterior.( revisar documento)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td></tr>';


//Segunda Fila
echo '<tr><td>';
echo '<label>El hospital  realiza evaluacion y analisis mensual  de PAO.</label>';
echo form_hidden('actividad_2', 'El hospital  realiza evaluacion y analisis mensual  de PAO.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td></tr>';


//Tercera Fila
echo '<tr><td>';
echo '<label>Se cuenta plan de emergencias y desastres socializado ( Revisar documento)</label>';
echo form_hidden('actividad_3', 'Se cuenta plan de emergencias y desastres socializado ( Revisar documento)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td></tr>';


//Cuarta Fila
echo '<tr><td>';
echo '<label>Se cuenta con brigada capacitada para extincion de conato de incendios.(Revisar acta de conformacion)</label>';
echo form_hidden('actividad_4', 'Se cuenta con brigada capacitada para extincion de conato de incendios.(Revisar acta de conformacion)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td></tr>';


//Quinta Fila
echo '<tr><td>';
echo '<label>Cuenta con oficina de atencion al usuario.</label>';
echo form_hidden('actividad_5', 'Cuenta con oficina de atencion al usuario.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td></tr>';


//Sexta Fila
echo '<tr><td>';
echo '<label>El hospital cuenta con mecanismos para realizar valoracion de quejas y sugerencias por el usuario.</label>';
echo form_hidden('actividad_6', 'El hospital cuenta con mecanismos para realizar valoracion de quejas y sugerencias por el usuario.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td></tr>';


//Septima Fila 
echo '<tr><td>';
echo '<label>Ha realizado valoracion de satisfaccion del usuario externo.</label>';
echo form_hidden('actividad_7', 'Ha realizado valoracion de satisfaccion del usuario externo.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td></tr>';


//Octava Fila
echo '<tr><td>'; 
echo '<label>Cuenta con el Reglamento Interno de Hospitales, accesible y en buen estado.</label>';
echo form_hidden('actividad_8', 'Cuenta con el Reglamento Interno de Hospitales, accesible y en buen estado.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td></tr>';


//Novena Fila 
echo '<tr><td>';
echo '<label>El Director conoce el perfil epidemiologico de su hospital.</label>';
echo form_hidden('actividad_9', 'El Director conoce el perfil epidemiologico de su hospital.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td></tr>';


//Decima Fila 
echo '<tr><td>';
echo '<label>Conoce la mortalidad hospitalaria a&ntilde;o a la fecha </label>';
echo form_hidden('actividad_10', 'Conoce la mortalidad hospitalaria a&ntilde;o a la fecha');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td></tr>';


//Decima primera Fila 
echo '<tr><td>';
echo '<label>Conoce la defuncion hospitalaria general a la fecha</label>';
echo form_hidden('actividad_11', 'Conoce la defuncion hospitalaria general a la fecha');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td></tr>';


//Decima segunda Fila 
echo '<tr><td>';
echo '<label>Conoce la defuncion materna a la fecha</label>';
echo form_hidden('actividad_12', 'Conoce la defuncion materna a la fecha');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));
echo '</td></tr>';


//Decima tercera Fila 
echo '<tr><td>';
echo '<label>Conoce la defuncion perinatal a la fecha</label>';
echo form_hidden('actividad_13', 'Conoce la defuncion perinatal a la fecha');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));
echo '</td></tr>';


//Decima cuarta Fila 
echo '<tr><td>';
echo '<label>Conoce la defuncion  infantil a la fecha</label>';
echo form_hidden('actividad_14', 'Conoce la defuncion  infantil a la fecha');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));
echo '</td></tr>';


//Decima quinta Fila 
echo '<tr><td>';
echo '<label>El Director participa en las reuniones mensuales de su RIISS</label>';
echo form_hidden('actividad_15', 'El Director participa en las reuniones mensuales de su RIISS');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));
echo '</td></tr>';


//Decima sexta Fila 
echo '<tr><td>';
echo '<label>Se evalua el sistema de referencia y retorno en la RIISS</label>';
echo form_hidden('actividad_16', 'Se evalua el sistema de referencia y retorno en la RIISS');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_16', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_16', 'name'=>'comentario_16', 'class'=>'text'));
echo '</td></tr>';


//Decima septima Fila 
echo '<tr><td>';
echo '<label>El hospital ha definido su oferta de servicios segun categorizacion.( revisar documento)</label>';
echo form_hidden('actividad_17', 'El hospital ha definido su oferta de servicios segun categorizacion.( revisar documento)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_17', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_17', 'name'=>'comentario_17', 'class'=>'text'));
echo '</td></tr>';


//Decima octava Fila 
echo '<tr><td>';
echo '<label>Cuenta con servicios de apoyo las 24 horas (Laboratorio, Rayos X, Farmacia, ESDOMED, Ambulancia)</label>';
echo form_hidden('actividad_18', 'Cuenta con servicios de apoyo las 24 horas (Laboratorio, Rayos X, Farmacia, ESDOMED, Ambulancia)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_18', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_18', 'name'=>'comentario_18', 'class'=>'text'));
echo '</td></tr>';


//Decima novena Fila 
echo '<tr><td>';
echo '<label>El Director conoce el numero de medicos capacitados en STABLE Total recursos: '; 
echo form_input(array( 'id'=>'totalrecursos_19','name'=>'totalrecursos_19', 'class'=>'text'));
echo 'No. Capacitados:';
echo form_input(array('id'=>'muestra_19','name'=>'muestra_19', 'class'=>'text'));
echo '</label>';
echo form_hidden('actividad_19', 'El Director conoce el numero de medicos capacitados en STABLE Total recursos:');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_19', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_19', 'name'=>'comentario_19', 'class'=>'text'));
echo '</td></tr>';


//Vigesima Fila 
echo '<tr><td>';
echo '<label>El Director conoce el numero de medicos capacitados en NALS Total recursos: '; 
echo form_input(array('id'=>'totalrecursos_20', 'name'=>'totalrecursos_20', 'class'=>'text'));
echo 'No. Capacitados:';
echo form_input(array('id'=>'muestra_20','name'=>'muestra_20', 'class'=>'text'));
echo '</label>';
echo form_hidden('actividad_20', 'El Director conoce el numero de medicos capacitados en NALS Total recursos');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_20', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_20', 'name'=>'comentario_20', 'class'=>'text'));
echo '</td></tr>';


//Vigesima primera Fila 
echo '<tr><td>';
echo '<label>Conoce el  porcentaje mensual de rendimiento de quirofanos</label>';
echo form_hidden('actividad_21', 'Conoce el  porcentaje mensual de rendimiento de quirofanos');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_21', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_21', 'name'=>'comentario_21', 'class'=>'text'));
echo '</td></tr>';


//Vigesima segunda Fila 
echo '<tr><td>';
echo '<label>Conoce  el tiempo  de espera para cirugías electivas</label>';
echo form_hidden('actividad_22', 'Conoce  el tiempo  de espera para cirugias electivas');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_22', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_22', 'name'=>'comentario_22', 'class'=>'text'));
echo '</td></tr>';


//Vigesima tercera Fila 
echo '<tr><td>';
echo '<label>Cuenta con programación de horarios de consulta especializada.</label>';
echo form_hidden('actividad_23', 'Cuenta con programacion de horarios de consulta especializada.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_23', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_23', 'name'=>'comentario_23', 'class'=>'text'));
echo '</td></tr>';


//Vigesima cuarta Fila 
echo '<tr><td>';
echo '<label>Conoce el promedio diario de consulta externa.</label>';
echo form_hidden('actividad_24', 'Conoce el promedio diario de consulta externa.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_24', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_24', 'name'=>'comentario_24', 'class'=>'text'));
echo '</td></tr>';


//Vigesima quinta Fila 
echo '<tr><td>';
echo '<label>Conoce  el tiempo  de espera para consulta especializada.</label>';
echo form_hidden('actividad_25', 'Conoce  el tiempo  de espera para consulta especializada.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_25', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_25', 'name'=>'comentario_25', 'class'=>'text'));
echo '</td></tr>';


//Vigesima sexta Fila 
echo '<tr><td>';
echo '<label>Cuentan con Plan de Acciones Emergentes para Reducir Muertes Materna - Infantil</label>';
echo form_hidden('actividad_26', 'Cuentan con Plan de Acciones Emergentes para Reducir Muertes Materna - Infantil');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_26', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_26', 'name'=>'comentario_26', 'class'=>'text'));
echo '</td></tr>';


//Vigesima septima Fila 
echo '<tr><td>';
echo '<label>Se realizan monitoreos periodicos del Plan Emergente de Reduccion de Mortalidad materna-Infantil. (Revisar Informe)</label>';
echo form_hidden('actividad_27', 'Se realizan monitoreos periodicos del Plan Emergente de Reduccion de Mortalidad materna-Infantil. (Revisar Informe)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_27', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_27', 'name'=>'comentario_27', 'class'=>'text'));
echo '</td></tr>';


//Vigesima octava Fila 
echo '<tr><td>';
echo '<label>Realiza seguimiento a planes de mejora de auditorias medicas de Morbi-Mortalidad hospitalaria.</label>';
echo form_hidden('actividad_28', 'Realiza seguimiento a planes de mejora de auditorias medicas de Morbi-Mortalidad hospitalaria.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_28', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_28', 'name'=>'comentario_28', 'class'=>'text'));
echo '</td></tr>';


//Vigesima novena Fila 
echo '<tr><td>';
echo '<label>Cuenta con proyectos de mejora continua de calidad resultado de las mediciones de Carta Iberoamericana de la calidad</label>';
echo form_hidden('actividad_29', 'Cuenta con proyectos de mejora continua de calidad resultado de las mediciones de Carta Iberoamericana de la calidad');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_29', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_29', 'name'=>'comentario_29', 'class'=>'text'));
echo '</td></tr>';


//Trigesima Fila 
echo '<tr><td>';
echo '<label>Cuenta con proyectos de mejora continua de calidad resultado de las mediciones de Carta Iberoamericana de la calidad</label>';
echo form_hidden('actividad_30', 'Cuenta con proyectos de mejora continua de calidad resultado de las mediciones de Carta Iberoamericana de la calidad');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_30', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_30', 'name'=>'comentario_30', 'class'=>'text'));
echo '</td></tr>';


//Trigesima primera Fila 
echo '<tr><td>';
echo '<label>El hospital se observa ordenado y limpio (Art 60  "Ley General  de Prevencion de Riesgos en los lugares de trabajo": El piso de los lugares de trabajo debe mantenerse en buenas condiciones de orden y limpieza, asimismo los pasillos y salidas deben permanecer sin obstaculos para tener libre acceso). </label>';
echo form_hidden('actividad_31', 'El hospital se observa ordenado y limpio (Art 60  "Ley General  de Prevencion de Riesgos en los lugares de trabajo": El piso de los lugares de trabajo debe mantenerse en buenas condiciones de orden y limpieza, asimismo los pasillos y salidas deben permanecer sin obstaculos para tener libre acceso). ');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_31', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_31', 'name'=>'comentario_31', 'class'=>'text'));
echo '</td></tr>';


//Trigesima segunda Fila 
echo '<tr><td>';
echo '<label>Cuenta con se&ntilde;alizacion en las diferentes areas.</label>';
echo form_hidden('actividad_32', 'Cuenta con se&ntilde;alizacion en las diferentes areas.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_32', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_32', 'name'=>'comentario_32', 'class'=>'text'));
echo '</td></tr>';


//Trigesima tercera Fila 
echo '<tr><td>';
echo '<label>Cuenta con identificacion de las diferentes areas o servicios del hospital</label>';
echo form_hidden('actividad_33', 'Cuenta con identificacion de las diferentes areas o servicios del hospital');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_33', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_33', 'name'=>'comentario_33', 'class'=>'text'));
echo '</td></tr>';


//Trigesima cuarta Fila 
echo '<tr><td>';
echo '<label>Se cuenta  con los requisitos arquitectonicos para facilitar el acceso, transito y permanencia de personas  con discapacidad.( Rampla y Pasamanos)</label>';
echo form_hidden('actividad_34', 'Se cuenta  con los requisitos arquitectonicos para facilitar el acceso, transito y permanencia de personas  con discapacidad.( Rampla y Pasamanos)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_34', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_34', 'name'=>'comentario_34', 'class'=>'text'));
echo '</td></tr>';


//Trigesima quinta Fila 
echo '<tr><td>';
echo '<label>La iluminacion de las diferentes areas es adecuada.(Art. 41.- Para la iluminacion de los lugares de trabajo, se dara preferencia a la luz solar difusa).</label>';
echo form_hidden('actividad_35', 'La iluminacion de las diferentes areas es adecuada.(Art. 41.- Para la iluminacion de los lugares de trabajo, se dara preferencia a la luz solar difusa).');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_35', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_35', 'name'=>'comentario_35', 'class'=>'text'));
echo '</td></tr>';


//Trigesima sexta Fila 
echo '<tr><td>';
echo '<label>Existe se&ntilde;alizacion de la ruta de evacuacion. (Plan de emergencia y evacuacion Art. 8 No 4" Ley Genearal  de Prevencion de riesgos en los lugares de trabajo"</label>';
echo form_hidden('actividad_36', 'Existe se&ntilde;alizacion de la ruta de evacuacion. (Plan de emergencia y evacuacion Art. 8 No 4" Ley Genearal  de Prevencion de riesgos en los lugares de trabajo"');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_36', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_36', 'name'=>'comentario_36', 'class'=>'text'));
echo '</td></tr>';


//Trigesima septima Fila 
echo '<tr><td>';
echo '<label>Se cuenta con extintores en buenas condiciones (verificar presion y ultima revision) ( inspeccionar lugares claves como archivo, sala de operaciones, emergencia)</label>';
echo form_hidden('actividad_37', 'Se cuenta con extintores en buenas condiciones (verificar presion y ultima revision) ( inspeccionar lugares claves como archivo, sala de operaciones, emergencia)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_37', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_37', 'name'=>'comentario_37', 'class'=>'text'));
echo '</td></tr>';


//Trigesima octava Fila 
echo '<tr><td>';
echo '<label>Se realiza la disposicion de desechos comunes y bioinfecciosos en todas las areas de acuerdo a norma ( Revisar Emergencia y un servicio de encamados)</label>';
echo form_hidden('actividad_38', 'Se realiza la disposicion de desechos comunes y bioinfecciosos en todas las areas de acuerdo a norma ( Revisar Emergencia y un servicio de encamados)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_38', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_38', 'name'=>'comentario_38', 'class'=>'text'));
echo '</td></tr>';


//Trigesima novena Fila 
echo '<tr><td>';
echo '<label>Se cuenta con flujograma de atencion para las diferentes areas y servicios.</label>';
echo form_hidden('actividad_39', 'Se cuenta con flujograma de atencion para las diferentes areas y servicios.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_39', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_39', 'name'=>'comentario_39', 'class'=>'text'));
echo '</td></tr>';


//Cuadrigesima Fila
echo '<tr><td>'; 
echo '<label>Cuenta con Manual de funciones. ( verificar en Recursos humanos)</label>';
echo form_hidden('actividad_40', 'Cuenta con Manual de funciones. ( verificar en Recursos humanos)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_40', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_40', 'name'=>'comentario_40', 'class'=>'text'));
echo '</td></tr>';


//Cuadrigesima primera Fila 
echo '<tr><td>';
echo '<label>El jefe  de cada departamento  cuenta con Plan Anual Operativo entregado a la Direccion. ( Revisar tres planes)</label>';
echo form_hidden('actividad_41', 'El jefe  de cada departamento  cuenta con Plan Anual Operativo entregado a la Direccion. ( Revisar tres planes)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_41', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_41', 'name'=>'comentario_41', 'class'=>'text'));
echo '</td></tr>';


//Cuadrigesima segunda Fila 
echo '<tr><td>';
echo '<label>El personal Medico cumple  con las actividades propuestas en su Plan Mensual de trabajo. ( Revisar planes y verificar tres medicos)</label>';
echo form_hidden('actividad_42', 'El personal M�dico cumple  con las actividades propuestas en su Plan Mensual de trabajo. ( Revisar planes y verificar tres medicos)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_42', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_42', 'name'=>'comentario_42', 'class'=>'text'));
echo '</td></tr>';

//Cuadrigesima tercera Fila 
echo '<tr><td>';
echo '<label>El jefe de la unidad cuenta con  plan de capacitacion para el personal de salud de acuerdo a diagnostico de necesidades.</label>';
echo form_hidden('actividad_43', 'El jefe de la unidad cuenta con  plan de capacitacion para el personal de salud de acuerdo a diagnostico de necesidades.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_43', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_43', 'name'=>'comentario_43', 'class'=>'text'));
echo '</td></tr>';

//Cuadrigesima cuarta Fila 
echo '<tr><td>';
echo '<label>El Jefe Medico del Servicio realiza visita a pacientes ingresados. </label>';
echo form_hidden('actividad_44', 'El Jefe Medico del Servicio realiza visita a pacientes ingresados. ');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_44', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_44', 'name'=>'comentario_44', 'class'=>'text'));
echo '</td></tr>';

//Cuadrigesima quinta Fila 
echo '<tr><td>';
echo '<label>El Jefe Medico del Servicio realiza reuniones con el personal  y deja constancia de acuerdos y compromisos.( revisar libro)</label>';
echo form_hidden('actividad_45', 'El Jefe Medico del Servicio realiza reuniones con el personal  y deja constancia de acuerdos y compromisos.( revisar libro)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_45', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_45', 'name'=>'comentario_45', 'class'=>'text'));
echo '</td></tr>';

//Cuadrigesima sexta Fila 
echo '<tr><td>';
echo '<label>Se cuenta con sala situacional actualizada</label>';
echo form_hidden('actividad_46', 'Se cuenta con sala situacional actualizada');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_46', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_46', 'name'=>'comentario_46', 'class'=>'text'));
echo '</td></tr>';

//Cuadrigesima septima Fila 
echo '<tr><td>';
echo '<label>El epidemiologo  realiza auditoria de la calidad de datos que se registra en los diferentes sistemas  de informacion.</label>';
echo form_hidden('actividad_47', 'El epidemiologo  realiza auditoria de la calidad de datos que se registra en los diferentes sistemas  de informacion.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_47', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_47', 'name'=>'comentario_47', 'class'=>'text'));
echo '</td></tr>';


//Cuadrigesima octava Fila 
echo '<tr><td>';
echo '<label>Los sistemas de  informacion se encuentran  actualizados.</label>';
echo form_hidden('actividad_48', 'Los sistemas de  informacion se encuentran  actualizados.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_48', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_48', 'name'=>'comentario_48', 'class'=>'text'));
echo '</td></tr>';

//Cuadrigesima novena Fila 
echo '<tr><td>';
echo '<label>Se realiza monitoreo diario de disponibilidad de sangre y sus derivados. ( verificar documento en laboratorio)</label>';
echo form_hidden('actividad_49', 'Se realiza monitoreo diario de disponibilidad de sangre y sus derivados. ( verificar documento en laboratorio)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_49', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_49', 'name'=>'comentario_49', 'class'=>'text'));
echo '</td></tr>';


//Quincuagesima Fila 
echo '<tr><td>';
echo '<label>Cuenta con proyectos de mejora continua de calidad resultado de las mediciones de estandares SICONE-PF </label>';
echo form_hidden('actividad_50', 'Cuenta con proyectos de mejora continua de calidad resultado de las mediciones de estandares SICONE-PF ');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_50', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_50', 'name'=>'comentario_50', 'class'=>'text'));
echo '</td></tr>';

//Quincuagesima primera Fila 
echo '<tr><td>';
echo '<label>Cuenta con plan de mantenimiento preventivo de equipos en las diferentes areas.( Equipo medico, planta fisica, equipo basico, verificar con jefe de mantenimiento)</label>';
echo form_hidden('actividad_51', 'Cuenta con plan de mantenimiento preventivo de equipos en las diferentes areas.( Equipo medico, planta fisica, equipo basico, verificar con jefe de mantenimiento)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_51', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_51', 'name'=>'comentario_51', 'class'=>'text'));
echo '</td></tr>';


//Quincuagesima segunda Fila 
echo '<tr><td>';
echo '<label>Cuenta con plan de mantenimiento correctivo de equipos en las diferentes areas.( verificar con jefe de mantenimiento)</label>';
echo form_hidden('actividad_52', 'Cuenta con plan de mantenimiento correctivo de equipos en las diferentes areas.( verificar con jefe de mantenimiento)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_52', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_52', 'name'=>'comentario_52', 'class'=>'text'));
echo '</td></tr>';


//Quincuagesima tercera Fila 
echo '<tr><td>';
echo '<label>Las autoridades hospitalarias realizan visitas de monitoreo a las diferentes areas o servicios.(revisar libro de visitas)</label>';
echo form_hidden('actividad_53', 'Las autoridades hospitalarias realizan visitas de monitoreo a las diferentes areas o servicios.(revisar libro de visitas)');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_53', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_53', 'name'=>'comentario_53', 'class'=>'text'));
echo '</td></tr>';


//Quincuagesima cuarta Fila 
echo '<tr><td>';
echo '<label>Sala de Operaciones cuentan con libro unico  de control de  programacion de cirugias.</label>';
echo form_hidden('actividad_54', 'Sala de Operaciones cuentan con libro unico  de control de  programacion de cirugias.');
$opciones = array(100=>'Si', 0=>'No');
echo form_dropdown('opciones_54', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_54', 'name'=>'comentario_54', 'class'=>'text'));
echo '</td></tr>';
?>