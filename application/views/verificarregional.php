<?php

$j = 0;
$i = 0;
$k = 0;
echo '<table class="table">';
echo '<thead>';
echo '<tr>';
echo '<td>Actividad</td>';											
echo '<td>Comentarios</td>';
echo '<td>Resultado</td>';
echo '</tr>';
echo '</thead>';
echo '<tbody>';
unset($informacion['Aceptar']);
foreach ($informacion as $key => $value) {
	
	
	if($j<=4){
					
		if ($j==4){echo '<br>';}		
		$j = $j + 1;		
	}	
	else {
		if (preg_match("/totalrecursos/i", $key)){$totalrecursos = $value;}
		elseif (preg_match("/total105/i", $key)){$total105 = $value;}
		elseif (preg_match("/muestra/i", $key)){$muestra = $value;}
		elseif (preg_match("/actividad/i", $key)){$actividad = $value;}
		elseif (preg_match("/opciones/i", $key)){$resultado = $value;}
		elseif (preg_match("/comentario/i", $key))
		{
			$comentario = $value;		
			$i = 0;
			echo '<tr>';
			if (isset($totalrecursos)){
				if ($muestra == '-'){$texto = ''; $muestra = '';}
				else {$texto = 'No. Capacitados:';}
					echo '<td>' . $actividad . $totalrecursos . $texto . $muestra . '</td>';	
					unset($totalrecursos);
			}
			else if (isset($total105)){
				
					echo '<td>' . $actividad . $total105 . '</td>';	
					unset($total105);
			}
			else{echo '<td>' . $actividad . ' </td>';	}
													
			echo '<td>' . $comentario . '</td>';
			echo '<td>' .  $resultado . '</td>';				
			}
			echo '</tr>';
			
		}
				
	}
	
echo '</tbody>';
echo '</table>'; 
echo '<label><a href="javascript:history.go(-1)">Atras</a></label><br><br>';
if (($this->session->userdata('tipo')==5)){
	echo form_open('subobjetivo/guardarenfermeria');
	echo form_hidden('informacion', $informacion);
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Guardar');
	echo form_close();	
}
else{
echo form_open('subobjetivo/guardarregional');
echo form_hidden('informacion', $informacion);
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Guardar');
echo form_close();	}
?>
