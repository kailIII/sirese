<?php

$datestring = "%Y-%m-%d";			
$time = time();					
$fecha =  mdate($datestring, $time);
$baja = array(
    'name'        => 'clasificacion_baja',
    'id'          => 'clasificacion_baja',
    'value'       => 'baja',
    'checked'     => TRUE,
    'style'       => 'margin:10px',	    
    );
$media = array(
    'name'        => 'clasificacion_media',
    'id'          => 'clasificacion_media',
    'value'       => 'media',
    'checked'     => TRUE,
    'style'       => 'margin:10px',	    
    );
$alta = array(
    'name'        => 'clasificacion_alta',
    'id'          => 'clasificacion_alta',
    'value'       => 'alta',
    'checked'     => TRUE,
    'style'       => 'margin:10px',	    
    );
$js = 'onClick="test(this)"';

echo form_open('inicio/reporte');
echo '<table class="table" onload="test()">';
	echo '<thead>';
			echo '<tr>';
				echo '<td colspan="3">Fecha Inicial</td>';
				echo '<td colspan="3">Fecha Final</td>';				
			echo '</tr>';
		echo '</thead>';
	echo '<tbody>';				
echo '<tr><td colspan="3">';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td><td colspan="3">';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td></tr>';

echo '<thead><tr ><td colspan="6">Clasificacion</td></tr></thead>';
echo '<tr>';
	echo '<td colspan="2">';
		echo 'Clasificacion Baja (0-59)';
		echo form_checkbox($baja);
	echo '</td>';
	echo '<td colspan="2">';
		echo 'Clasificacion Media (60-79)';
		echo form_checkbox($media);
	echo '</td>';
	echo '<td colspan="2">';
		echo 'Clasificacion Alta (80-100)';
		echo form_checkbox($alta);
	echo '</td>'; 
echo'</tr>';
echo '</tbody>';
echo '</table>';
echo form_hidden('tabla', $tabla);
echo form_hidden('campos', $campos);
echo form_hidden('where', $where);
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Crear Reporte');
echo form_close();
?>

  
<script type="text/javascript">
function test(){
alert('hi');
	alert(control.checked);
	
}
</script>