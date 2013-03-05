<script language="javascript">
$(document).ready(function() {
	$(".botonExcel").click(function(event) {
		$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
		$("#FormularioExportacion").submit();
});
});
</script>

<?php

//CHECKBOX DE CLASIFICACION
if ($clasificacion_alta== FALSE){
	$ca = FALSE;
}
else{$ca = TRUE;}
if ($clasificacion_media== FALSE){
	$cm = FALSE;
}
else{$cm = TRUE;}
if ($clasificacion_baja== FALSE){
	$cb = FALSE;
}
else{$cb = TRUE;}

$baja = array(
    'name'        => 'clasificacion_baja',
    'id'          => 'clasificacion_baja',
    'value'       => 'baja',
    'checked'     => $cb,
    'style'       => 'margin:10px',	    
    );
$media = array(
    'name'        => 'clasificacion_media',
    'id'          => 'clasificacion_media',
    'value'       => 'media',
    'checked'     => $cm,
    'style'       => 'margin:10px',	    
    );
$alta = array(
    'name'        => 'clasificacion_alta',
    'id'          => 'clasificacion_alta',
    'value'       => 'alta',
    'checked'     => $ca,
    'style'       => 'margin:10px',	    
    );
$js = 'onClick="test(this)"';
//END OF CHECKBOX DE CLASIFICACION

//ESTABLECIMIENTOS
$reporte = $this->select_model->select_from($campos, 'resultados_objetivo_regional', $where . ' and fechaseguimiento between "' . $fecha_1 . '" and  "'. $fecha_2 .'"Order by fechaseguimiento');
$i = 0;
$tabla = array();
if ($reporte == FALSE){echo '<h2>Sin resultados obtenidos</h2>';}
else{
foreach ($reporte ->result()  as $fila) {
	$row["fechaseguimiento"] = $fila->fechaseguimiento;
	$fecha[$i] =  $fila->fechaseguimiento;
	$row["objetivo"] = $fila->objetivo;
	//$row["nombre"] = $fila->nombre;
    $establecimiento[$i] =  $fila->hospital;
	$row["puntaje"] = $fila->clasificacion;
	$tabla[$i] = $row;	
	$i = $i + 1;				
}
$result = array_unique($establecimiento);
//ESTABLECIMIENTOS END
}
//TABLA DE OPCIONES DE REPORTE
echo form_open('inicio/reporteregional');
echo '<table class="table">';
	echo '<thead>';
			echo '<tr>';
				echo '<td colspan="3">Fecha Inicial</td>';
				echo '<td colspan="3">Fecha Final</td>';				
			echo '</tr>';
		echo '</thead>';
	echo '<tbody>';				
echo '<tr><td colspan="3">';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_1', 'id'=>'fecha_1', 'readonly'=>'readonly', 'value' => $fecha_1, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
echo '</td><td colspan="3">';
echo form_input(array('class'=>'fechador', 'name'=>'fecha_2', 'id'=>'fecha_2', 'readonly'=>'readonly', 'value' => $fecha_2, 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;'));
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
echo '<br>';
echo '<table class="table">';

//echo '<thead ><tr ><td colspan="6" style="background-Color: #1175CE; color:white"></td></tr></thead>';
echo '<tbody>';	
	$i = 0;
	$k = 0;
	if ($reporte == FALSE){echo '<h2>Sin resultados obtenidos</h2>';}
else{
	$nombres = $this->select_model->select_from('hospital', 'hospitales', 'WHERE id = '. $fila->hospital);
		foreach ($nombres ->result()  as $fila2) {
		$caja_establecimiento = array(
			'name'        => $fila2->hospital,
			'id'          => 'clase_' . $i,
			'value'       => $fila->hospital,
			'checked'     => FALSE,
			'style'       => 'margin:10px',	
			'class'        => 'clase_' . $i,						
		);
		
		if($k == 0){echo '<tr>';}				
		echo '<td colspan="3">';		
		echo $fila2->hospital;
		echo form_checkbox($caja_establecimiento);
		echo '<script>';
			echo '$(document).ready(function(){';
				echo '$("#clase_'.$i.'").click(function() {  ';
				
					echo 'if($("#clase_'.$i.'").is(":checked")) {  '; 
						
						echo '$((".clase_'. $i . $i .'")).css("display", "table-row");';
						echo '$((".clase_'. $i . $i . $i .'")).css("display", "table-cell");';
					echo '} else {  ';       
						echo '$((".clase_'. $i . $i .'")).css("display", "none");';
					echo'}  ';
   				echo '});';	
			echo '});';
		echo '</script>';
	$i = $i + 1;
		echo '</td>';		
		if($k == 1){echo '</tr>'; $k = 0;}
		else {$k = 1;}
	}}
echo '</tbody>';
echo '</table>';
//FIN DE TABLA DE OPCIONES DE REPORTE 

//seguimientos table
echo '<h2>Reporte de Seguimientos </h2>';
if ($reporte != FALSE){
$attributes = array('target' => 'blank', 'id' => 'FormularioExportacion');
echo form_open('inicio/test', $attributes);
echo '<p>Exportar a Excel  <img src="' . base_url()  . '/application/views/export_to_excel.gif" class="botonExcel" /></p>';
echo '<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />';
echo form_close();
}
echo '<table class="sortable" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">';
	echo '<thead>';
            echo '<tr>';
                echo '<td>Fecha</td>';                
                echo '<td>Objetivo</td>';
                echo '<td>Clasificacion</td>';
				echo '<td>Fecha de Seguimiento</td>';				
            echo '</tr>';
        echo '</thead>';
	echo '<tbody>';	
$i = 0;	
if ($reporte == FALSE){echo '<h2>Sin resultados obtenidos</h2>';}
else{
foreach($result as $establecimiento){
	foreach ($reporte ->result()  as $fila) {
        
	
		if($establecimiento == $fila->hospital)
		{
		if (((($fila->clasificacion)>=0) and (($fila->clasificacion)<60) and ($cb == TRUE)) OR ((($fila->clasificacion)>=60) and (($fila->clasificacion)<80) and ($cm == TRUE)) OR ((($fila->clasificacion)>80) and (($fila->clasificacion)<=100) and ($ca == TRUE))){
		echo '<tr class= "clase_'.$i . $i . '" style="display:none;">';
		echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;width:80px">'. $fila->fechaseguimiento.'</td>';
       /* $nombres = $this->select_model->select_from('hospital', 'hospitales', 'WHERE id = '. $establecimiento);
		foreach ($nombres ->result()  as $fila2) { $nombre = $fila2 -> hospital;} 
        echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $nombre.'</td>';*/
		if ($fila->objetivo == 100){$objetivo = 'Estandares de Calidad';}
		else if ($fila->objetivo == 101){$objetivo = 'Areas de Atencion y Gobiernos Hospitalarios';}
		else if ($fila->objetivo == 102){$objetivo = 'Monitoreo Plan de Desastres';}
		else if ($fila->objetivo == 103){$objetivo = 'Monitoreo plan de Reduccion MM';}
		else if ($fila->objetivo == 104){$objetivo = 'Seguimiento a los planes de Mejora Auditorias';}
		else if ($fila->objetivo == 105){$objetivo = 'Supervision Consulta Especializada';}
		else if ($fila->objetivo == 106){$objetivo = 'Supervision de Cirugias Electivas';}
        echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $objetivo .'</td>';
		if((($fila->clasificacion)>=0) and (($fila->clasificacion)<60)){
			echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;background-Color: #FE2E2E">'. $fila->clasificacion.'</td>';	
		}
		else if((($fila->clasificacion)>=60) and (($fila->clasificacion)<80)){
			echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;background-Color: #D7DF01">'. $fila->clasificacion.'</td>';	
		}
		else if((($fila->clasificacion)>80) and (($fila->clasificacion)<=100)){
			echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;background-Color: #04B404">'. $fila->clasificacion.'</td>';	
		}
		else{
			echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $fila->clasificacion.'</td>';	
		}
		echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $fila->fechaseguimiento .'</td>';
        echo '</tr>';}
		 }      
}
$i = $i +1;
}
}
echo '</tbody>';
echo '</table>';

//SEGUIMIENTOS TABLEN END
?>
