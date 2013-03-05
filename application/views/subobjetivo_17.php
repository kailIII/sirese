<?php

echo '<thead>';
	echo '<tr>';
		echo '<td colspan="3">Atencion planificacion familiar</td>';	
	echo '</tr>';
echo '</thead>';

//Primer Fila
echo '<tr><td>';		
echo '<label>Toda usuario activo de PF en Inscripción  fue evaluado con los parámetros esenciales según guía</label>';
echo form_hidden('actividad_1', 'Toda usuario activo de PF en Inscripción  fue evaluado con los parámetros esenciales según guía');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_1', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_1', 'name'=>'comentario_1', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


//Segunda Fila
echo '<tr><td>';		
echo '<label>Toda usuaria  activa  de PF en control subsecuente  fue evaluada con los parámetros esenciales según guía</label>';
echo form_hidden('actividad_2', 'Toda usuaria  activa  de PF en control subsecuente  fue evaluada con los parámetros esenciales según guía');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_2', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_2', 'name'=>'comentario_2', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


echo '<thead>';
	echo '<tr>';
		echo '<td colspan="3">Atencion materna</td>';	
	echo '</tr>';
echo '</thead>';

//Tercera Fila
echo '<tr><td>';		
echo '<label>Toda  usuaria en su control prenatal  recibió las actividades  del control según la semana  de gestación, las cuales son registradas en el expediente clínico (HCP) según lineamientos.</label>';
echo form_hidden('actividad_3', 'Toda  usuaria en su control prenatal  recibió las actividades  del control según la semana  de gestación, las cuales son registradas en el expediente clínico (HCP) según lineamientos.');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_3', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_3', 'name'=>'comentario_3', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_3', 'id'=>'fecha_3', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Cuarta Fila
echo '<tr><td>';		
echo '<label>Toda  usuaria embarazada recibió las acciones definidas en la estrategia   de plan de parto y registradas en la ficha según lineamientos.</label>';
echo form_hidden('actividad_4', 'Toda  usuaria embarazada recibió las acciones definidas en la estrategia   de plan de parto y registradas en la ficha según lineamientos.');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_4', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_4', 'name'=>'comentario_4', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_4', 'id'=>'fecha_4', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Quinta Fila
echo '<tr><td>';		
echo '<label>Toda usuaria  en control puerperal recibió atención de acuerdo a los lineamientos.</label>';
echo form_hidden('actividad_5', 'Toda usuaria  en control puerperal recibió atención de acuerdo a los lineamientos.');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_5', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_5', 'name'=>'comentario_5', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_5', 'id'=>'fecha_5', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


echo '<thead>';
	echo '<tr>';
		echo '<td colspan="3">Atencion complicaciones maternas</td>';	
	echo '</tr>';
echo '</thead>';

//Sexta Fila
echo '<tr><td>';		
echo '<label>Toda usuaria embarazada con amenaza de parto pretermino(APP)  (entre 24 y 34 semanas de gestación) se le administro cortico esteroides (Primera dosis) en la </label>';
echo form_hidden('actividad_6', 'Toda usuaria embarazada con amenaza de parto pretermino(APP)  (entre 24 y 34 semanas de gestación) se le administro cortico esteroides (Primera dosis) en la ');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_6', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_6', 'name'=>'comentario_6', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_6', 'id'=>'fecha_6', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Septima Fila
echo '<tr><td>';		
echo '<label>Toda usuaria embarazada con diagnostico de  Preeclampsia Grave /Eclampsia que consulto a la UCSF Especializado recibió la dosis de impregnación del Sulfato</label>';
echo form_hidden('actividad_7', 'Toda usuaria embarazada con diagnostico de  Preeclampsia Grave /Eclampsia que consulto a la UCSF Especializado recibió la dosis de impregnación del Sulfato');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_7', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_7', 'name'=>'comentario_7', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_7', 'id'=>'fecha_7', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Octava Fila
echo '<tr><td>';		
echo '<label>Toda usuaria  embarazada con diagnostico de Hemorragia obstétrica en el segundo y tercer trimestre en una UCSF  recibió el  manejo inicial de acuerdo  a los 4</label>';
echo form_hidden('actividad_8', 'Toda usuaria  embarazada con diagnostico de Hemorragia obstétrica en el segundo y tercer trimestre en una UCSF  recibió el  manejo inicial de acuerdo  a los 4');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_8', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_8', 'name'=>'comentario_8', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_8', 'id'=>'fecha_8', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));

//Novena Fila
echo '<tr><td>';		
echo '<label>Toda usuaria que consulto a la UCSF por infección puerperal (mastitis, endometritis e infección del sitio quirúrgico) se  manejo según lineamientos </label>';
form_hidden('actividad_9', 'Toda usuaria que consulto a la UCSF por infección puerperal (mastitis, endometritis e infección del sitio quirúrgico) se  manejo según lineamientos');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_9', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_9', 'name'=>'comentario_9', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_9', 'id'=>'fecha_9', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


echo '<thead>';
	echo '<tr>';
		echo '<td colspan="3">Atencion de la morbilidad obstetrica</td>';	
	echo '</tr>';
echo '</thead>';

//Decima Fila
echo '<tr><td>';		
echo '<label>Toda usuaria embarazada con morbilidad (IVU, VAGINOSIS y RPM)  se manejo  de acuerdo a los criterios  por patología según lineamientos.</label>';
echo form_hidden('actividad_10', 'Toda usuaria embarazada con morbilidad (IVU, VAGINOSIS y RPM)  se manejo  de acuerdo a los criterios  por patología según lineamientos.');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_10', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_10', 'name'=>'comentario_10', 'class'=>'text'));
echo '</td><td>';	
echo form_input(array('class'=>'fechador', 'name'=>'fecha_10', 'id'=>'fecha_10', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


echo '<thead>';
	echo '<tr>';
		echo '<td colspan="3">Indicadores de la atencion infantil</td>';	
	echo '</tr>';
echo '</thead>';

//Decimo Primera Fila
echo '<tr><td>';		
echo '<label>Todo neonato menor de 8 días en su consulta de inscripción al  control infantil en la UCSF es evaluado de acuerdo a 32 criterios según lineamientos técnicos </label>';
echo form_hidden('actividad_11', 'Todo neonato menor de 8 días en su consulta de inscripción al  control infantil en la UCSF es evaluado de acuerdo a 32 criterios según lineamientos técnicos ');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_11', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_11', 'name'=>'comentario_11', 'class'=>'text'));
echo '</td><td>';		
echo form_input(array('class'=>'fechador', 'name'=>'fecha_11', 'id'=>'fecha_11', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Segunda Fila
echo '<tr><td>';		
echo '<label>Todo niño y  niña  menor de 5 años en control infantil subsecuente en  la UCSF se le evalúa el desarrollo y tendencia de crecimiento según los instrumentos </label>';
echo form_hidden('actividad_12', 'Todo niño y  niña  menor de 5 años en control infantil subsecuente en  la UCSF se le evalúa el desarrollo y tendencia de crecimiento según los instrumentos ');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_12', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_12', 'name'=>'comentario_12', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_12', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Tercera Fila
echo '<tr><td>';		
echo '<label>Número de niños y niñas menores de 5 años  con diagnóstico de NEUMONÍA que recibieron el tratamiento según los lineamientos técnicos para la atención </label>';
echo form_hidden('actividad_13', 'Número de niños y niñas menores de 5 años  con diagnóstico de NEUMONÍA que recibieron el tratamiento según los lineamientos técnicos para la atención ');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_13', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_13', 'name'=>'comentario_13', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_13', 'id'=>'fecha_13', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Cuarta Fila
echo '<tr><td>';		
echo '<label>Todo niño  y niña  menor de 5 años  que consulta a la UCSF por DIARREA es manejado según  los lineamientos técnicos para la atención integral del menor de 5 años.</label>';
echo form_hidden('actividad_14', 'Todo niño  y niña  menor de 5 años  que consulta a la UCSF por DIARREA es manejado según  los lineamientos técnicos para la atención integral del menor de 5 años.');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_14', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_14', 'name'=>'comentario_14', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_12', 'id'=>'fecha_14', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

//Decimo Quinta Fila
echo '<tr><td>';		
echo '<label>Todo prematuro que consulta a la UCSF es evaluado  según guía de seguimiento del prematuro para el primer nivel de atención.</label>';
echo form_hidden('actividad_15', 'Todo prematuro que consulta a la UCSF es evaluado  según guía de seguimiento del prematuro para el primer nivel de atención. ');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_15', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_15', 'name'=>'comentario_15', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_15', 'id'=>'fecha_15', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';


echo '<thead>';
	echo '<tr>';
		echo '<td colspan="3">Atencion por Dengue</td>';	
	echo '</tr>';
echo '</thead>';

//Decimo Sexta Fila
echo '<tr><td>';		
echo '<label>Todo usuario que consulta por fiebre  a la UCSF con diagnóstico  presuntivo de Dengue  es manejado de acuerdo a los 10 criterio según los lineamientos actualizados  2011 para el manejo de casos de dengue</label>';
echo form_hidden('actividad_16', 'Todo usuario que consulta por fiebre  a la UCSF con diagnóstico  presuntivo de Dengue  es manejado de acuerdo a los 10 criterio según los lineamientos actualizados  2011 para el manejo de casos de dengue');
$opciones = array(0,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31,32,33,34,35,36,37,38,39,40,41,42,43,44,45,46,47,48,49,50,51,52,53,54,55,56,57,58,59,60,61,62,63,64,65,66,67,68,69,70,71,72,73,74,75,76,77,78,79,80,81,82,83,84,85,86,87,88,89,90,91,92,93,94,95,96,97,98,99,100,);
echo form_dropdown('opciones_16', $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '</td><td>';
echo form_input(array('id'=>'comentario_16', 'name'=>'comentario_16', 'class'=>'text'));
echo '</td><td>';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_16', 'id'=>'fecha_16', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';
?>