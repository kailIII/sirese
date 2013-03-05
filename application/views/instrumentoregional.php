<?php
$data['hospital'] = $hospital;
$data['fecha']= $fecha;
$data['fecha2']= $fecha2;
$data['subobjetivo']= $subobjetivo;
$data['objetivo']= $objetivo;
if ($this->session->userdata('tipo')==5){	
	
$data['problemas'] = $problemas;
$data['compromiso'] = $compromiso;
$data['responsable'] = $responsable;
$data['tiempo2'] = $tiempo;	
$data['area'] = $area;	}
if ($objetivo == 100){
	echo '<h2>Instrumento de Monitoreo y Supervision</h2>';
		$this -> load -> view('objetivo_100.php', $data);	
}
else if ($objetivo == 101){
	echo '<h2>Areas de Atencion y Gobierno Hospitalario</h2>';
		$this -> load -> view('objetivo_101.php', $data);	
}
else if ($objetivo == 102){
	echo '<h2>Monitoreo Plan de Desastres</h2>';
		$this -> load -> view('objetivo_102.php', $data);	
}
else if ($objetivo == 103){
	echo '<h2>Monitoreo Plan de Reducción MM</h2>';
		$this -> load -> view('objetivo_103.php', $data);	
}
else if ($objetivo == 104){
	echo '<h2>Seguimiento a los Planes de Mejora Auditorias</h2>';
		$this -> load -> view('objetivo_104.php', $data);	
}
else if ($objetivo == 105){
	echo '<h2>Supervision Consulta Especializada</h2>';
		$this -> load -> view('objetivo_105.php', $data);	
}
else if ($objetivo == 106){
	echo '<h2>Supervision de Cirugias Electivas</h2>';
		$this -> load -> view('objetivo_106.php', $data);	
}
else if ($objetivo == 201){
	echo '<h2>Componente Administrativo</h2>';
		$this -> load -> view('objetivo_201.php', $data);	
}
else if ($objetivo == 202){
	echo '<h2>Componente Atencion Directa</h2>';
		$this -> load -> view('objetivo_202.php', $data);	
}
else if ($objetivo == 203){
	echo '<h2>Componente Docencia-Investigacion</h2>';
		$this -> load -> view('objetivo_203.php', $data);	
}
else if ($objetivo == 204){
	echo '<h2>MCC, Enfermeria</h2>';
		$this -> load -> view('objetivo_204.php', $data);	
}
else if ($objetivo == 205){
	echo '<h2>Guia de Monitoreo de Mortalidad y Morbilidad Extrema Materna Perineonatal</h2>';
		$this -> load -> view('objetivo_205.php', $data);	
}

?>


