<?php

$opciones[0] =  "No";
$opciones[1] =  "Si";
$numero = 1; 
echo '<tr><td>';	
echo '<label>Hallazgo</label>';
echo form_input(array('id'=>'hallazgo_'. $numero, 'name'=>'hallazgo_'. $numero, 'class'=>'text', 'style'=>"width: 250px;padding: 5px;));"));
echo '<label>Causas</label>';
echo form_input(array('id'=>'causas_'. $numero, 'name'=>'causas_'. $numero, 'class'=>'text', 'style'=>"width: 250px;padding: 5px;));"));
echo '<label>Recomendaciones</label>';
echo form_input(array('id'=>'recomendaciones_'. $numero, 'name'=>'recomendaciones_'. $numero, 'class'=>'text', 'style'=>"width: 250px;padding: 5px;));"));
echo '<label>Encaragado</label>';
echo form_input(array('id'=>'encargado_'. $numero, 'name'=>'encargado_'. $numero, 'class'=>'text', 'style'=>"width: 250px;padding: 5px;));"));
echo '</td><td>';
echo '<label>Periodo</label>';
echo form_input(array('id'=>'periodo_'. $numero, 'name'=>'periodo_'. $numero, 'class'=>'text', 'style'=>"width: 250px;padding: 5px;));"));
echo '<label>Cumplimiento</label>';
echo form_dropdown('opciones_' . $numero, $opciones, '0', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
echo '<label>Comentario</label>';
echo form_input(array('id'=>'comentario_'. $numero, 'name'=>'comentario_'. $numero, 'class'=>'text','style'=>"width: 250px;padding: 5px;));"));
echo '</td></tr>';




?>