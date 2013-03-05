
<?php


echo '<h3>';
if (isset($sibasi_rango)){
	echo '<div id="seleccion_sibasi">';
	echo form_open('inicio/opciones');
	$campos = 'nombre';
	$where = 'WHERE nombre = "' . $sibasi_rango . '"';
	$nombre = $this->select_model->select_from($campos, 'sibasi', $where  );	
	echo 'SIBASI: ';
	foreach ($nombre->result() as $row){
		echo $row->nombre;       										
	}
	echo form_hidden('sibasi_rango', $sibasi_rango);
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Reporte');
	echo form_close();
}
if(isset($microred_rango)){
	echo '<div id="seleccion_microred">';
	echo form_open('inicio/opciones');
	$campos = 'microred';
	$where = 'WHERE microred = "' . $microred_rango . '" LIMIT 1';
	$nombre = $this->select_model->select_from($campos, 'establecimientos', $where  );	
	echo 'Microred: ';
	foreach ($nombre->result() as $row){
		echo $row->microred;       										
	}
	echo form_hidden('microred_rango', $microred_rango);
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Reporte');
	echo form_close();
}


if(isset($centro_rango)){
	echo '<div id="seleccion_centro">';
	echo form_open('inicio/opciones');
	$campos = 'id, establecimiento';
	$where = 'WHERE id = "' . $centro_rango . '"';
	$nombre = $this->select_model->select_from($campos, 'establecimientos', $where  );	
	echo 'Establecimiento: ';
	foreach ($nombre->result() as $row){
		echo $row->establecimiento;       										
	}	
	
	echo form_hidden('centro_rango', $centro_rango);
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Reporte');
	echo form_close();	
}
echo '</div>';
echo '</h3>';

		
/*
echo '<div class="clear"></div>';
echo '</div>';
echo '</div>';**/
?>

