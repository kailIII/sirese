<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class subobjetivo extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	function variables(){
				
		$data['url'] = 'http://sirese.site90.net';
		$data['css'] = 'http://sirese.site90.net/css/';
		$data['js'] = 'http://sirese.site90.net/css/';
		$data['images'] = 'http://sirese.site90.net/images';
		$data['title'] = 'SIRESE';		
		return $data;
	}
		
	
	public function datosgenerales()
	{								
		if ($this->session->userdata('logged_in')){
			if (isset($_POST)){
			extract($_POST);
			$data = $this->variables();
			
			$this -> load -> view('header.php', $data);
			
						
				if ($this->session->userdata('tipo')==2){
					$this -> load -> view('menu_view_regional.php', $data);					
					$this -> load -> view('pitch_view.php', $data);
				}				
				else{
					$this -> load -> view('menu_view_sibasi.php', $data);
					$this -> load -> view('pitch_view.php', $data);					
					$this -> load -> view('sibasi_view.php', $data);	
					$data['subobjetivo'] = $info['opcion'];
					$data['objetivo'] = $info['objetivo'];
					$data['centro'] = $info['centro'];						
					$datestring = "%Y-%m-%d";			
					$time = time();					
					$data['tiempo'] =  mdate($datestring, $time);
					$where = 'WHERE id = ' . $data['centro'];
					$data['nombre_centro'] = $this->select_model->select_from('id, establecimiento', 'establecimientos', $where);							
					foreach ($data['nombre_centro']->result() as $row){$data['nombre']=$row->establecimiento;}
					$data['niveles_participantes'] = $this->select_model->select_from('id, nombre', 'niveles_participantes', '');				
					$this -> load -> view('datosgenerales.php', $data);	
				}
			}			
			
			}
			else 
				{				
				redirect('/inicio/login', 'refresh');	
				}
			$this -> load -> view('footer_view.php', $data);
			
	}

	public function instrumento()
	{
		if ($this->session->userdata('tipo')==3){
		if(isset($_POST))
		{						
			extract($_POST);
			$data = $this->variables();			
			$data['centro'] = $centro;
			$data['fecha']= $fecha;
			echo $data['subobjetivo']= $subobjetivo;
			$data['objetivo']= $objetivo;
			$data['niveles_participantes'] =  $niveles_participantes;
			$this -> load -> view('header.php', $data);
			if ($this->session->userdata('tipo')==3){
				$this -> load -> view('menu_view_sibasi.php', $data);
				$this -> load -> view('pitch_view.php', $data);				
				$datestring = "%Y-%m-%d";			
				$time = time();					
				$data['tiempo'] =  mdate($datestring, $time);
				$this -> load -> view('instrumento.php', $data);
				$this -> load -> view('footer_view.php', $data);
			}			
			else 
			{				
				redirect('/inicio/login', 'refresh');	
			}
			
		}
		
		else {
			redirect('/inicio/login', 'refresh');
		}
		}
	}
	
	public function verificar()
	{
		if (($this->session->userdata('tipo')==3)and (isset($_POST))){
			extract($_POST);
			$data = $this->variables();			
			$data['centro'] = $centro;
			$data['fecha']= $fecha;
			$data['subobjetivo']= $subobjetivo;
			$data['objetivo']= $objetivo;
			$data['niveles_participantes'] =  $niveles_participantes;
			$data['informacion'] = $_POST;
			$this -> load -> view('header.php', $data);
			$this -> load -> view('menu_view_sibasi.php', $data);
			$this -> load -> view('pitch_view.php', $data);			
			$this -> load -> view('verificar.php', $data);
			$this -> load -> view('footer_view.php', $data);
			}			
			else 
			{				
				redirect('/inicio/login', 'refresh');	
			}
			
	}
	
	public function guardar()
	{
	
	extract($_POST);
	$j = 0;
	$i = 0;
	$k = 0;
	$totalSubobjetivo = 0;
	$contador = 0;
	//DATOS GENERALES DE OBJETIVO
	foreach ($informacion AS $key => $value){
		if($j<=4){	
			if (preg_match("/centro/i", $key)){$centro = $value;}
			elseif (preg_match("/subobjetivo/i", $key)){$subobjetivo = $value;}
			elseif (preg_match("/objetivo/i", $key)){$objetivo = $value;}
			elseif (preg_match("/fecha/i", $key)){$fecha = $value;}
			elseif (preg_match("/niveles_participantes/i", $key)){$niveles_participantes = $value;}			
		if ($j==4){echo '<br>';}
		$j = $j + 1;		
	}	
	//ACTIVIDADES
	else {
		//LEYENDO VALORED DE ACTIVIDADES
		if (preg_match("/actividad/i", $key)){$actividad = $value;}
		elseif (preg_match("/opciones/i", $key)){$resultado = $value;}
		elseif (preg_match("/comentario/i", $key)){$comentario = $value;}		
		elseif (preg_match("/total/i", $key)){
			$total = $value; $clasificacion = round((($resultado/$total) * 100),2);
			
			}
		elseif (preg_match("/fecha_/i", $key)){
			$fecha_seguimiento = $value;
			if ($resultado== -1){$clasificacion = -1;}
			else{$contador = $contador + 1;}						
			if (!isset($total)){$clasificacion = $resultado;}
			$datos = array(
				'centro' => $centro, 
				'subobjetivo' => $subobjetivo, 
				'fecha' => $fecha,
				'actividad' => $actividad,
				'resultado' => $resultado,
				'puntaje' => $clasificacion,
				'comentario' => $comentario,
				'fecha_seguimiento' => $fecha_seguimiento
			);
			$this->guardar_model->guardar('seguimientos', $datos);
			if ($clasificacion != -1){
			$totalSubobjetivo = $totalSubobjetivo +$clasificacion;}	
		}
		 		
	}
	}
	$clasificacionSubobjetivo = $totalSubobjetivo/$contador;
	$datos_subobjetivos = array(
		'centro' => $centro, 
		'subobjetivo' => $subobjetivo, 
		'fecha' => $fecha,
		'clasificacion' => $clasificacionSubobjetivo,
		'niveles_participantes' => $niveles_participantes,
		'fecha_seguimiento' => $fecha_seguimiento
	);
	$this->guardar_model->guardar('resultados_subobjetivos', $datos_subobjetivos);
	$data = $this->variables();
	$this -> load -> view('header.php', $data);
	if ($this->session->userdata('tipo')==3){
		$this -> load -> view('menu_view_sibasi.php', $data);
		$this -> load -> view('pitch_view.php', $data);					
		$this -> load -> view('sibasi_view.php', $data);			
		$data['objetivo'] = $informacion['objetivo'];
		$data['centro'] = $informacion['centro'];						
		$datestring = "%Y-%m-%d";			
		$data['tiempo'] =  mdate($datestring, $time);
		$where = 'WHERE id = ' . $data['centro'];
		$data['nombre_centro'] = $this->select_model->select_from('id, establecimiento', 'establecimientos', $where);							
		foreach ($data['nombre_centro']->result() as $row){$data['nombre']=$row->establecimiento;}
		$data['niveles_participantes'] = $this->select_model->select_from('id, nombre', 'niveles_participantes', '');				
		$this -> load -> view('datosgenerales.php', $data);		
				}
		$this -> load -> view('footer_view.php', $data);			
	
	}
	
	/* -------------------
	 * HOSPITALES
	 * ------------------*/
	 
	 public function datosgeneralesregional()
	{								
		if ($this->session->userdata('logged_in')){
			if (isset($_POST)){
			extract($_POST);
			$data = $this->variables();
			
			$this -> load -> view('header.php', $data);
			
				
					$this -> load -> view('menu_view_regional.php', $data);
					$this -> load -> view('pitch_view.php', $data);				
						
					$data['subobjetivo'] = $info['opcion'];
					$data['objetivo'] = $info['objetivo'];
					$data['hospital'] = $info['hospital'];	
					$datestring = "%Y-%m-%d";			
					$time = time();					
					$data['tiempo'] =  mdate($datestring, $time);					
					$where = 'WHERE id = ' . $info['hospital'];	
					$hospitales = $this->select_model->select_from('id, hospital', 'hospitales', $where);							
					foreach ($hospitales->result() as $row){$data['nombre']=$row->hospital;}
					if ($this->session->userdata('tipo')==4){
					$this -> load -> view('datosgeneralesregionalhospital.php', $data);
					}
					else {
						$this -> load -> view('datosgeneralesregional.php', $data);
					}	
				
			}			
			
			}
			else 
				{				
				redirect('/inicio/login', 'refresh');	
				}
			$this -> load -> view('footer_view.php', $data);
			
	}
	
	public function verificarregional()
	{
		if (($this->session->userdata('tipo')==4 Or $this->session->userdata('tipo')==5)and (isset($_POST))){
			extract($_POST);
			$data = $this->variables();			
			$data['hospital'] = $hospital;
			$data['fecha']= $fecha;
			$data['subobjetivo']= $subobjetivo;
			$data['objetivo']= $objetivo;
			$data['fecha2'] =  $fecha2;
			if ($this->session->userdata('tipo')==5){
				$data['problemas'] = $problemas;
				$data['compromiso'] = $compromiso;
				$data['responsable'] = $responsable;
				$data['tiempo2'] = $tiempo2;	
			}
			$data['informacion'] = $_POST;
			$this -> load -> view('header.php', $data);
			$this -> load -> view('menu_view_sibasi.php', $data);
			$this -> load -> view('pitch_view.php', $data);			
			$this -> load -> view('verificarregional.php', $data);
			$this -> load -> view('footer_view.php', $data);
			}			
			else 
			{				
				redirect('/inicio/login', 'refresh');	
			}
			
	}
	
	/* -------------------
	 * ENFERMERIA
	 -------------------*/
	
	public function datosgeneralesenfermeria()
	{								
		if ($this->session->userdata('logged_in')){
			if (isset($_POST)){
			extract($_POST);			
			$data = $this->variables();
			
			$this -> load -> view('header.php', $data);
			
				
					$this -> load -> view('menu_view_regional.php', $data);
					$this -> load -> view('pitch_view.php', $data);				
						
					$data['subobjetivo'] = $info['opcion'];
					$data['objetivo'] = $info['objetivo'];
					$data['hospital'] = $info['hospital'];	
					$datestring = "%Y-%m-%d";			
					$time = time();					
					$data['tiempo'] =  mdate($datestring, $time);					
					$where = 'WHERE id = ' . $info['hospital'];	
					$hospitales = $this->select_model->select_from('id, hospital', 'hospitales', $where);							
					foreach ($hospitales->result() as $row){$data['nombre']=$row->hospital;}
					if ($this->session->userdata('tipo')==4){
					$this -> load -> view('datosgeneralesregionalhospital.php', $data);
					}
					else {
						$this -> load -> view('datosgeneralesenfermeria.php', $data);
					}	
				
			}			
			
			}
			else 
				{				
				redirect('/inicio/login', 'refresh');	
				}
			$this -> load -> view('footer_view.php', $data);
			
	}
	
	public function instrumentoregional()
	{
		if (($this->session->userdata('tipo')==4)OR ($this->session->userdata('tipo')==5)){
		if(isset($_POST))
		{						
			extract($_POST);
			$data = $this->variables();			
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
				$data['area'] = $area;	
			}
			$this -> load -> view('header.php', $data);
			if (($this->session->userdata('tipo')==4)OR ($this->session->userdata('tipo')==5)){
				$this -> load -> view('menu_view_regional.php', $data);
				$this -> load -> view('pitch_view.php', $data);				
				$datestring = "%Y-%m-%d";			
				$time = time();					
				$data['tiempo'] =  mdate($datestring, $time);
				$this -> load -> view('instrumentoregional.php', $data);
				$this -> load -> view('footer_view.php', $data);
			}			
			else 
			{				
				redirect('/inicio/login', 'refresh');	
			}
			
		}
		
		else {
			redirect('/inicio/login', 'refresh');
		}
		}
	}
	
	public function guardarregional()
	{
	
	extract($_POST);
	$j = 0;
	$i = 0;
	$k = 0;
	$totalSubobjetivo = 0;
	$contador = 0;
	foreach ($informacion AS $key => $value){
		if($j<=4){	
			if (preg_match("/hospital/i", $key)){$hospital = $value;}
			elseif (preg_match("/subobjetivo/i", $key)){$subobjetivo = $value;}
			elseif (preg_match("/objetivo/i", $key)){$objetivo = $value;}
			elseif (preg_match("/fecha/i", $key)){$fecha = $value;}
			elseif (preg_match("/fecha2/i", $key)){$fecha2 = $value;}			
		if ($j==5){echo '<br>';}
		$j = $j + 1;		
	}	
	else {
		
		if (preg_match("/totalrecursos/i", $key)){$totalrecursos = $value;}
		elseif (preg_match("/total105/i", $key)){$total105 = $value;}
		elseif (preg_match("/muestra/i", $key)){$muestra = $value;}
		elseif (preg_match("/actividad/i", $key)){$actividad = $value;}
		elseif (preg_match("/opciones/i", $key)){$resultado = $value;}
		elseif (preg_match("/comentario/i", $key)){
			$comentario = $value;	
			if (isset($totalrecursos)){
				if ($muestra == '-'){$texto = ''; $muestra = '';}
				else {$texto = 'No. Capacitados:';}
					$actividad =  $actividad . $totalrecursos . $texto . $muestra ;	
					unset($totalrecursos);
			}
			if (isset($total105)){
				
					$actividad =  $actividad . $total105 ;	
					unset($total105);
			}					
			$datos = array(
				'hospital' => $hospital, 
				'objetivo' => $subobjetivo, 
				'fecha' => $fecha,
				'actividad' => $actividad,
				'resultado' => $resultado,
				'puntaje' => $resultado,				
				'comentario' => $comentario,				
			);
			$this->guardar_model->guardar('seguimientos_regional', $datos);
			$totalSubobjetivo = $totalSubobjetivo +$resultado;
			$contador = $contador + 1;
		}
		
		 		
	}
	}
	$clasificacionSubobjetivo = $totalSubobjetivo/$contador;
	$datos_subobjetivos = array(
		'hospital' => $hospital,		 
		'fecha' => $fecha,
		'clasificacion' => $clasificacionSubobjetivo,
		'objetivo' => $subobjetivo,
		'fechaSeguimiento' => $informacion["fecha2"]
	);
	$this->guardar_model->guardar('resultados_objetivo_regional', $datos_subobjetivos);
	$data = $this->variables();	
	$this -> load -> view('header.php', $data);		
	$this -> load -> view('menu_view_regional.php', $data);
	$this -> load -> view('pitch_view.php', $data);
	$data['hospitales'] = $this->select_model->select_from('*', 'hospitales', '');
	$this -> load -> view('regional_hospital_view.php', $data);	
	$this -> load -> view('footer_view.php', $data);			
	}
	
	public function guardarenfermeria()
	{
	
	extract($_POST);
	
	$j = 0;
	$i = 0;
	$k = 0;
	$totalSubobjetivo = 0;
	$contador = 0;
	foreach ($informacion AS $key => $value){
		if($j<=8){	
			if (preg_match("/hospital/i", $key)){$hospital = $value;}
			elseif (preg_match("/subobjetivo/i", $key)){$subobjetivo = $value;}
			elseif (preg_match("/objetivo/i", $key)){$objetivo = $value;}
			elseif (preg_match("/fecha/i", $key)){$fecha = $value;}
			elseif (preg_match("/fecha2/i", $key)){$fecha2 = $value;}			
			elseif (preg_match("/problemas/i", $key)){$problemas = $value;}
			elseif (preg_match("/compromiso/i", $key)){$compromiso = $value;}
			elseif (preg_match("/responsable/i", $key)){$responsable = $value;}
			elseif (preg_match("/tiempo2/i", $key)){$tiempo2 = $value;}
			elseif (preg_match("/area/i", $key)){$area = $value;}
		if ($j==8){echo '<br>';}
		$j = $j + 1;		
	}	
	else {
		
		if (preg_match("/totalrecursos/i", $key)){$totalrecursos = $value;}
		elseif (preg_match("/total105/i", $key)){$total105 = $value;}
		elseif (preg_match("/muestra/i", $key)){$muestra = $value;}
		elseif (preg_match("/actividad/i", $key)){$actividad = $value;}
		elseif (preg_match("/opciones/i", $key)){$resultado = $value;}
		elseif (preg_match("/comentario/i", $key)){
			$comentario = $value;	
			if (isset($totalrecursos)){
				if ($muestra == '-'){$texto = ''; $muestra = '';}
				else {$texto = 'No. Capacitados:';}
					$actividad =  $actividad . $totalrecursos . $texto . $muestra ;	
					unset($totalrecursos);
			}
			if (isset($total105)){
				
					$actividad =  $actividad . $total105 ;	
					unset($total105);
			}							
			$datos = array(
				'hospital' => $hospital, 
				'objetivo' => $objetivo, 
				'fecha' => $fecha,
				'actividad' => $actividad,
				'resultado' => $resultado,
				'puntaje' => $resultado,				
				'comentario' => $comentario,				
			);
			$this->guardar_model->guardar('seguimientos_enfermeria', $datos);
			$totalSubobjetivo = $totalSubobjetivo +$resultado;
			$contador = $contador + 1;
		}
		
		 		
	}
	}
	
	$clasificacionSubobjetivo = $totalSubobjetivo/$contador;
	$datos_subobjetivos = array(
		'hospital' => $hospital,		 
		'fecha' => $fecha,
		'clasificacion' => $clasificacionSubobjetivo,
		'objetivo' => $objetivo,
		'fechaSeguimiento' => $informacion["fecha2"],
		'problemas' => $informacion["problemas"],
		'compromisos' => $informacion["compromiso"],
		'responsable' => $informacion["responsable"],
		'tiempo' => $informacion["tiempo2"],
		'area' => $informacion["area"]
		
	);
	$this->guardar_model->guardar('resultados_objetivos_enfermeria', $datos_subobjetivos);
	$data = $this->variables();
	$this -> load -> view('header.php', $data);
	$this -> load -> view('menu_view_regional.php', $data);
	$this -> load -> view('pitch_view.php', $data);				
	$data['subobjetivo'] = $subobjetivo;
	$data['objetivo'] = $objetivo;
	$data['hospital'] = $hospital;	
	$datestring = "%Y-%m-%d";			
	$time = time();					
	$data['tiempo'] =  mdate($datestring, $time);					
	$where = 'WHERE id = ' . $hospital;	
	$hospitales = $this->select_model->select_from('id, hospital', 'hospitales', $where);							
	foreach ($hospitales->result() as $row){$data['nombre']=$row->hospital;}
		if ($this->session->userdata('tipo')==4){
			$this -> load -> view('datosgeneralesregionalhospital.php', $data);
		}
		else {
			$this -> load -> view('datosgeneralesenfermeria.php', $data);
			}				
	$this -> load -> view('footer_view.php', $data);
	}
	
		
}
