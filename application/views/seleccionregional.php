
<?php


echo '<h3>';
if (isset($hospital_rango)){
	echo '<div id="seleccion_sibasi">';
	echo form_open('inicio/opcionesregional');
	$campos = 'hospital';
	$where = 'WHERE id = "' . $hospital_rango . '"';
	$nombre = $this->select_model->select_from($campos, 'hospitales', $where  );
	
	foreach ($nombre->result() as $row){
		echo $row->hospital;       										
	}
	echo form_hidden('hospital_rango', $hospital_rango);
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

