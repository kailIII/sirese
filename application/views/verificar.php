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
echo '<td>Seguimiento</td>';
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
		
		if (preg_match("/actividad/i", $key)){$actividad = $value;}
		elseif (preg_match("/opciones/i", $key)){$resultado = $value;}
		elseif (preg_match("/comentario/i", $key)){$comentario = $value;}
		elseif (preg_match("/total/i", $key)){
			$total = $value; 
			$clasificacion = round((($resultado/$total) * 100),2);
			if ($resultado== -1){$clasificacion = 'No aplica';}
			}
		elseif (preg_match("/fecha/i", $key)){
			$fecha = $value;			
			$i = 0;
			echo '<tr>';
			echo '<td>' . $actividad .'</td>';											
			echo '<td>' . $comentario . '</td>';
			if (isset($clasificacion)){
				echo '<td>' . $clasificacion . '% = >' . $resultado . '/' . $total . '</td>';
			}
			else {
				if ($resultado == -1){echo '<td>No Aplica</td>';}
				else {echo '<td>' .  $resultado . '</td>';}
				
			}
			echo '<td>' . $fecha . '</td>';
			echo '</tr>';
			
		}
		 		
	}
}	
echo '</tbody>';
echo '</table>'; 
echo '<label><a href="javascript:history.go(-1)">Atras</a></label><br><br>';
echo form_open('subobjetivo/guardar');
echo form_hidden('informacion', $informacion);
echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Guardar');
echo form_close();	
?>
