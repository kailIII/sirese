<?php

$data['hospital'] = $hospital;
$data['fecha']= $fecha;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
$data['fecha2'] =  $fecha2;
$data['problemas'] = $problemas;
$data['compromiso'] = $compromiso;
$data['responsable'] = $responsable;
$data['tiempo2'] = $tiempo2;
$data['area'] = $area;
	
//Formulario
echo form_open('subobjetivo/verificarregional');
	echo form_hidden('hospital', $hospital);
	echo form_hidden('subobjetivo', $subobjetivo);
	echo form_hidden('objetivo', $objetivo);
	echo form_hidden('fecha', $fecha);
	echo form_hidden('fecha2', $fecha2);
	echo form_hidden('problemas', $problemas);
	echo form_hidden('compromiso', $compromiso);
	echo form_hidden('responsable', $responsable);
	echo form_hidden('tiempo2', $tiempo2);	
	echo form_hidden('area', $area);	
	echo '<table class="table">';
	echo '<thead>';
			echo '<tr>';
				echo '<td>Actividad</td>';
				echo '<td>Comentarios</td>';				
			echo '</tr>';
		echo '</thead>';
	echo '<tbody>';
	$data['tiempo'] = $tiempo;	
	if ($subobjetivo == 201){
		$this -> load -> view('subobjetivo_201.php', $data);		
	}	
	echo '</tbody>';
	echo '</table>';
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Verificar');
echo form_close();
	
//Fin Formulario
?>
