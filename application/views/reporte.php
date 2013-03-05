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
$reporte = $this->select_model->select_from($campos, 'resultados_subobjetivos', $where  . ' and resultados_subobjetivos.fecha_seguimiento between "' . $fecha_1 . '" and  "'. $fecha_2 .'" Order by resultados_subobjetivos.fecha_seguimiento');
$i = 0;
$tabla = array();
if ($reporte == FALSE){echo '<h2>Sin resultados obtenidos</h2>';}
else{
foreach ($reporte ->result()  as $fila) {
	$row["fecha_seguimiento"] = $fila->fecha;
	$fecha[$i] =  $fila->fecha;
	$row["actividad"] = $fila->actividad;
	$row["nombre"] = $fila->nombre;
        $establecimiento[$i] =  $fila->nombre;
	$row["puntaje"] = $fila->clasificacion;
	$tabla[$i] = $row;	
	$i = $i + 1;				
}
$result = array_unique($establecimiento);
//ESTABLECIMIENTOS END
}
//TABLA DE OPCIONES DE REPORTE
echo form_open('inicio/reporte');
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

echo '<thead ><tr ><td colspan="6" style="background-Color: #1175CE; color:white">Establecimientos</td></tr></thead>';
echo '<tbody>';	
	$i = 0;
	$k = 0;
	if ($reporte == FALSE){echo '<h2>Sin resultados obtenidos</h2>';}
else{
	foreach($result as $establecimiento){
		$caja_establecimiento = array(
			'name'        => $establecimiento,
			'id'          => 'clase_' . $i,
			'value'       => $establecimiento,
			'checked'     => FALSE,
			'style'       => 'margin:10px',	
			'class'        => 'clase_' . $i,						
		);
		
		if($k == 0){echo '<tr>';}				
		echo '<td colspan="3">';		
		echo $establecimiento;
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
echo '<h2>Reporte de Seguimientos </h2>';
//seguimientos table
if ($reporte != FALSE){
$attributes = array('target' => 'blank', 'id' => 'FormularioExportacion');
echo form_open('inicio/test', $attributes);
echo form_button(array( 'class'=>'botonExcel', 'content'=>'Exportar', 'id'=>"botonExcel", 'name'=>"botonExcel")) . '</p>';
echo '<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />';
echo form_close();
}
echo '<table class="sortable" border="1" cellpadding="10" cellspacing="0" bordercolor="#666666" id="Exportar_a_Excel" style="border-collapse:collapse;">';
	echo '<thead>';
            echo '<tr>';
                echo '<td>Fecha Seguimiento</td>';
                echo '<td>Establecimiento</td>';
                echo '<td>Actividad</td>';
                echo '<td>Clasificacion</td>';				
            echo '</tr>';
        echo '</thead>';
	echo '<tbody>';	
$i = 0;	
if ($reporte == FALSE){echo '<h2>Sin resultados obtenidos</h2>';}
else{
foreach($result as $establecimiento){
	foreach ($reporte ->result()  as $fila) {
        
	
		if($establecimiento == $fila->nombre)
		{
		if (((($fila->clasificacion)>=0) and (($fila->clasificacion)<60) and ($cb == TRUE)) OR ((($fila->clasificacion)>=60) and (($fila->clasificacion)<80) and ($cm == TRUE)) OR ((($fila->clasificacion)>80) and (($fila->clasificacion)<=100) and ($ca == TRUE))){
		echo '<tr class= "clase_'.$i . $i . '" style="display:none;">';
		echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;width:80px">'. $fila->fecha.'</td>';
        echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $fila->nombre.'</td>';
switch ($fila->actividad) {
    case 1:
        $actividad =  "Consolidado del Instrumento de Monitoreo y Supervision";
        break;
    case 2:
        $actividad =  "Infraestructura";
        break;
    case 3:
        $actividad =  "Insumos, Medicamentos";
        break;
    case 4:
        $actividad ="Aplicacion de Nuevo Modelo";
        break;
    case 5:
        $actividad = "Recursos Humanos";
        break;
    case 6:
        $actividad ="Promocion de la Salud a Nivel de UCSF";
        break;
    case 7:
        $actividad ="Gerencia";
        break;
    case 8:
        $actividad ="Calidad de la Informacion";
        break;
    case 9:
        $actividad ="Cadena de Frio";
        break;
    case 10:
        $actividad ="Actividades de Vacunacion";
        break;
    case 11:
        $actividad ="Vigilancia Epidemiologica";
        break;
    case 12:
        $actividad= "Abastecimiento";
        break;
    case 13:
        $actividad ="Coberturas";
        break;
    case 14:
        $actividad ="Principios Inspiradores";
        break;
    case 15:
        $actividad ="Deberes y Derechos de los Ciudadanos";
        break;
    case 16:
        $actividad="SO de Acciones e Instrumentos para la Calidad en la Gestión Pública";
        break;
    case 17:
        $actividad ="Estandares de Calidad";
        break;
    case 18:
        $actividad ="Calidad de Agua del Consumo Humano";
        break;
    case 19:
        $actividad ="Protección e Higiene de Alimentos";
        break;
    case 20:
        $actividad ="Disposición Sanitaria de Excretas";
        break;
    case 21:
        $actividad ="Desechos Solidos";
        break;
    case 22:
        $actividad ="Desechos Bioinfeccioso";
        break;
    case 23:
        $actividad= "Aguas Residuales de Tipo Ordinario";
        break;
    case 24:
        $actividad= "Monitoreos de Laboratorio Clinico";
        break;
    case 25:
        $actividad ="Salud Mental";
        break;
    case 26:
        $actividad ="Supervision de Enfermeria";
        break;
    case 27:
        $actividad= "Aspectos  Generales de los Programas";
        break;
    case 28:
        $actividad= "Guia para evaluar la capacidad instalada";
        break;
    case 29:
        $actividad= "Guia de Supervision de Campo";
        break;        
}			
        echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $actividad.'</td>';
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
			echo '<td class= "clase_'.$i . $i . $i .'" style="display:none;">'. $fila->puntaje.'</td>';	
		}
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
