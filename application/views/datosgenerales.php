<div id="main">
<div class="blog-body">
<?php	
	echo '<div class="clear"></div>';
	echo '<div id="page">'; 
	echo form_open('subobjetivo/instrumento');	
	echo form_hidden('objetivo', $objetivo);
	echo form_hidden('centro', $centro);
	echo '<table class="table">';
		echo '<tr>';
			echo '<td>Establecimiento</td><td>';
			echo $nombre;
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Fecha en que se realiza el instrumento</td><td>';		
			echo form_input(array('class'=>'fechador', 'name'=>'fecha', 'style'=>'width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;', 'readonly'=>'readonly', 'value' => $tiempo));
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
			echo '<td>Niveles Participantes</td><td>';		
			foreach ($niveles_participantes->result() as $row){
				$niveles_participantes_matriz[$row->id] = ($row->nombre);       										
			}										
			echo form_dropdown('niveles_participantes', $niveles_participantes_matriz, '1', 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
			echo '</td>';			
		echo '</tr>';
		echo '<tr>';
		echo '<td>Instrumento</td><td>';
		if ($objetivo == 1){
			$subobjetivos = array( '1' => 'Consolidado del Instrumento de Monitoreo y Supervision',
						 '2' => 'Infraestructura',
						 '3' => 'Insumos, Medicamentos',
						 '4' => 'Aplicacion de Nuevo Modelo',
						 '5' => 'Recursos Humanos'
						 );			
			echo form_dropdown('subobjetivo', $subobjetivos, NULL, 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
			}
		if ($objetivo == 2){
			echo 'Promocion de la Salud a Nivel de UCSF';
			echo form_hidden('subobjetivo', 6);
			}
		if ($objetivo == 3){
			$subobjetivos = array( '7' => 'Gerencia',
						 '8' => 'Calidad de la Informacion',
						 '9' => 'Cadena de Frio',
						 '10' => 'Actividades de Vacunacion',
						 '11' => 'Vigilancia Epidemiologica',
						 '12' => 'Abastecimiento',
						 '13' => 'Coberturas'
						 );			
			echo form_dropdown('subobjetivo', $subobjetivos, NULL, 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
			}
		if ($objetivo == 4){
			$subobjetivos = array( '14' => 'Principios Inspiradores',
						 '15' => 'Deberes y Drechos de los Ciudadanos',
						 '16' => 'SO de Acciones e Instrumentos para la Calidad en la Gestión Pública'
						 );			
			echo form_dropdown('subobjetivo', $subobjetivos, NULL, 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
			}
			
		if ($objetivo == 5){
			echo 'Estandares de Calidad';
			echo form_hidden('subobjetivo', 17);
			
			}
		if ($objetivo == 6){
			$subobjetivos = array( '28' => 'Guia para evaluar la capacidad instalada',
						 '29' => 'Guia de Supervision de Campo',
              			'Aspectos Generales de los Programas' => array( '27' => 'Aspectos  Generales de los Programas' ),
						'Aspectos Especificos de los Programas' => array( '18' => 'Calidad de Agua del Consumo Humano',
																		 '19' => 'Protección e Higiene de Alimentos',
																		 '20' => 'Disposición Sanitaria de Excretas',
																		 '21' => 'Desechos Solidos',
																		 '22' => 'Desechos Bioinfeccioso',
																		 '23' => 'Aguas Residuales de Tipo Ordinario'
																		)								 
								 );
			echo form_dropdown('subobjetivo', $subobjetivos, NULL, 'style="width: 250px;padding: 5px;	border: 0;	border: 1px solid #ddd;	margin: 0 0 3px;"');
			}
		if ($objetivo == 7){
			echo 'Monitoreos de Laboratorio Clinico';
			echo form_hidden('subobjetivo', 24);
			}
		if ($objetivo == 8){
			echo 'Salud Mental';
			echo form_hidden('subobjetivo', 25);
			}
		if ($objetivo == 9){
			echo 'Supervision de Enfermeria';
			echo form_hidden('subobjetivo', 26);
			}

		
		

			echo '</td>';			
		echo '</tr>';
	echo '<tbody>';	
	echo '</table>';
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Ir al Instrumento');
	echo '</p>';
	echo form_close();
	echo '</div>';
	echo form_open('inicio/objetivo');
	echo form_hidden('centro', $centro);
	echo form_submit(array('name' => 'Aceptar', 'class' => 'submit'), 'Atras');
	echo form_close();
?>
</div>
</div>

<div class="clear"></div>
