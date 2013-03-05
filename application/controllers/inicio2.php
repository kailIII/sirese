<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class inicio extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	
	function index() {			
		$this -> login();
	}

	function test(){

	

	$this -> load -> view('ficheroExcel.php');			

	}
	function main_page(){
		if ($this->session->userdata('logged_in')){
			$data = $this->variables();
			$this -> load -> view('header.php', $data);			
			
			
			if ($this->session->userdata('tipo')==0){
				$data['sibasi'] =  $this->select_model->select_sibasi();
				$this -> load -> view('menu_view_admin.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				//$this -> load -> view('regional_view.php', $data);			
			}
			elseif ($this->session->userdata('tipo')==2){
				$data['sibasi'] =  $this->select_model->select_sibasi();
				$this -> load -> view('menu_view_regional.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$this -> load -> view('regional_view.php', $data);			
			}
			elseif ($this->session->userdata('tipo')==3){
				$data['microred'] =  $this->select_model->select_microred('');
				$this -> load -> view('menu_view_sibasi.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$this -> load -> view('sibasi_view.php', $data);
			}
			
			elseif ($this->session->userdata('tipo')==4){
				$data['sibasi'] =  $this->select_model->select_sibasi();
				$this -> load -> view('menu_view_regional.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$data['hospitales'] = $this->select_model->select_from('*', 'hospitales', '');
				$this -> load -> view('regional_hospital_view.php', $data);			
			}
			elseif ($this->session->userdata('tipo')==5){
				$data['sibasi'] =  $this->select_model->select_sibasi();
				$this -> load -> view('menu_view_regional.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$data['hospitales'] = $this->select_model->select_from('*', 'hospitales', '');
				$this -> load -> view('regional_enfermeria_view.php', $data);
				
	
			}
			else 
				{
				redirect('/inicio/login', 'refresh');	
				}
			$this -> load -> view('footer_view.php', $data);			
		}
			
		else {
			redirect('/inicio/login', 'refresh');
		}
	}
	
	public function usuarios()
	{
		
		if ($this->session->userdata('logged_in')){
			$data = $this->variables();
			/* validaciones*/				
			$this->form_validation->set_rules('usuario', 'Usuario', 'required|max_length[20]|xss_clean');
 			$this->form_validation->set_rules('clave', 'Clave', 'required|max_length[30]|xss_clean');	
			$this->form_validation->set_rules('clave2', 'Repetir Clave', 'required|max_length[30]|xss_clean');
			$this->form_validation->set_message('required', 'El Campo %s es requerido');
			$this->form_validation->set_message('max_length', 'El Campo %s ha excedido el maximo de caracteres');
			/*Fin de Validaciones*/			
			if ($this -> form_validation -> run() == FALSE) {
				if ($this->session->userdata('tipo')==0){
				$this -> load -> view('header.php', $data);
				$this -> load -> view('menu_view_admin.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$this -> load -> view('create_usuario.php', $data);
				$this -> load -> view('footer_view.php', $data);			
			}
			}
			else {
				extract($_POST);				
				if ($clave != $clave2){						
					$this -> load -> view('header.php', $data);
					$this -> load -> view('menu_view_admin.php', $data);
					$this -> load -> view('pitch_view.php', $data);					
					$this -> load -> view('create_usuario.php', $data);
					$this -> load -> view('footer_view.php', $data);	
				}
				else {
					$datos = array(
				'usuario' => $usuario, 
				'contrasena' => sha1($clave),	
				'tipo'=> $opciones,
				'nombres'=> $nombres,
				'apellidos'=> $apellidos			
				);
				$this->guardar_model->insert_ignore('usuarios', $datos);
				}
				$this -> load -> view('header.php', $data);
				$this -> load -> view('menu_view_admin.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				if ($opciones == 2 OR $opciones == 4 OR $opciones == 5){
					$data['matriz'] =  $this->select_model->select_cargo('regional');
					$data['usuario'] = $usuario;
					$data['tipo'] = 'regional';		
					$this -> load -> view('asignarcargo.php', $data);
				}
				else if($opciones == 3){
					$data['matriz'] =  $this->select_model->select_cargo('sibasi');
					$data['usuario'] = $usuario;
					$data['tipo'] = 'sibasi';	
					$this -> load -> view('asignarcargo.php', $data);
				}				
				$this -> load -> view('footer_view.php', $data);	
				
			}
			
			}
		 	
		}		
	
	

	public function cargos()
	{
		
		if ($this->session->userdata('logged_in')){
			extract($_POST);
			if ($tipo == 'regional'){
				$datos = array(
				'usuario' => $usuario, 
				'regional' => $opciones,	
				'sibasi'=> 0 			
				);
			}
			else {
				$regional = $this->select_model->select_from('regional', 'sibasi', 'WHERE id = '.  $opciones);
				foreach ($regional->result() as $row){
							$valor = $row->regional;       										
					}
				$datos = array(
				'usuario' => $usuario, 
				'regional' => $valor,	
				'sibasi'=> 	$opciones		
				);
			}
			
				$this->guardar_model->insert_ignore('cargos', $datos);
			$data = $this->variables();
			$this -> load -> view('header.php', $data);
			$this -> load -> view('menu_view_admin.php', $data);
			$this -> load -> view('pitch_view.php', $data);			
			$this -> load -> view('footer_view.php', $data);			
			}
		else 
			{
				redirect('/inicio/login', 'refresh');	
			}
			
			}
	
	function login() {					
		$data = $this->variables();
		/* validaciones*/
				
		$this->form_validation->set_rules('usuario', 'Usuario', 'required|max_length[20]|xss_clean');
 		$this->form_validation->set_rules('clave', 'Clave', 'required|max_length[30]|xss_clean');	
		$this->form_validation->set_message('required', 'El Campo %s es requerido');
		$this->form_validation->set_message('max_length', 'El Campo %s ha excedido el maximo de caracteres');
		/*Fin de Validaciones*/			
		if ($this -> form_validation -> run() == FALSE) {
			$this -> load -> view('header.php', $data);
			$this -> load -> view('menu_view.php', $data);
			$this -> load -> view('pitch_view.php', $data);
			$this -> load -> view('inicio.php', $data);
			$this -> load -> view('footer_view.php', $data);
			
		}
		 else {
			extract($_POST);
			$user_id = $this->select_model->login($usuario, $clave);
			
			if (! $user_id){
				//Login Failed
				$this->session->set_flashdata('login_error', TRUE);
				redirect('/inicio/login', 'refresh');
			}		
			else {
				//Login OK				
				$this->session->set_userdata('logged_in', TRUE);
				$this->session->set_userdata('user_id', $user_id[0]);
				$this->session->set_userdata('tipo', $user_id[1]);
				redirect('/inicio/main_page/', 'refresh');
			}
		}

	}

	function logout(){
		
		$this->session->sess_destroy();
		redirect('/inicio/login/', 'refresh');
	}
	
	function variables(){
		include ('url');
		$data['url'] = $url;
		$data['css'] = $css;
		$data['js'] = $js;
		$data['images'] = $images;
		$data['title'] = 'SIRESE';
		
		return $data;
	}
	
	function recovery_pass(){
		include('url');
		extract($_POST);
		if (isset($usuario)){
			redirect($url.'index.php/inicio/error');				
		}
		else {
			$data = $this->variables();					
		$this -> load -> view('header.php', $data);
		$this -> load -> view('menu_view.php', $data);
		$this -> load -> view('pitch_view.php', $data);
		$this -> load -> view('recovery_view.php', $data);
		$this -> load -> view('footer_view.php', $data);
		}
				
	}
	
	function microred(){
		extract($_POST);
		if ($this->session->userdata('logged_in')){
			$data = $this->variables();
				
			if (($this->session->userdata('tipo')==2) OR ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){
				
				
				if (isset($sibasi)){
				$data['microred'] =  $this->select_model->select_microred($sibasi);}
								
			
				$this -> load -> view('regional_view.php', $data);
				$data['sibasi_rango'] =$sibasi;
				$this->load->view('seleccion.php', $data);
	
			}
			else if ($this->session->userdata('tipo')==3){
			$this -> load -> view('header.php', $data);
			$this -> load -> view('menu_view_sibasi.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$this -> load -> view('sibasi_view.php', $data);
				$this -> load -> view('seleccion.php', $data);
			}
			else 
				{
				redirect('/inicio/login', 'refresh');	
				}
			
		}
	}
	
	function municipio(){
			
		extract($_POST);
		
		if ($this->session->userdata('logged_in')){
			
			$data = $this->variables();				
							
				$data['microred_consulta'] = $microred;				
				$data['municipio'] =  $this->select_model->select_municipio($microred);				
				if (($this->session->userdata('tipo')==2) OR ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){
				$this -> load -> view('regional_view.php', $data);
				$data['microred_rango'] =$microred;
				$this->load->view('seleccion.php', $data);	
				}
				else{								
					
					$this -> load -> view('sibasi_view.php', $data);	
					$data['microred_rango'] =$microred;
					$this->load->view('seleccion.php', $data);	
				}		
			
			}
			else 
				{
				redirect('/inicio/login', 'refresh');	
				}
			
			
		}
	
	function centro(){
		extract($_POST);
		
		if ($this->session->userdata('logged_in')){
			$data = $this->variables();
			
			/*	if (($this->session->userdata('tipo')==2) OR ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){	
				//$data['sibasi'] =  $this->select_model->select_sibasi();
				}*/
				if (isset($microred)){
					
				$data['centro'] =  $this->select_model->select_centro($microred, $municipio);}				
				
				if (($this->session->userdata('tipo')==2) OR ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){
				
				$this -> load -> view('regional_view.php', $data);
				$data['municipio_rango'] =$municipio;				
				$this->load->view('seleccion.php', $data);	
				}
				else{
					
					$this -> load -> view('sibasi_view.php', $data);	
					$data['municipio_rango'] =$municipio;				
					$this->load->view('seleccion.php', $data);
				}			
			
			}
			else 
				{				
				redirect('/inicio/login', 'refresh');	
				}
			
		}
	
	function objetivo(){
		extract($_POST);				
		if ($this->session->userdata('logged_in')){
			$data = $this->variables();
			
				
				if (isset($microred)){
				$data['centro'] =  $this->select_model->select_centro($microred, $municipio);}
				
				if (($this->session->userdata('tipo')==2) OR ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){
				$this -> load -> view('regional_view.php', $data);
				$data['centro_rango'] =$centro;
				$this -> load -> view('seleccion.php', $data);
				}
				
						
				
				else{
					
					$this -> load -> view('sibasi_view.php', $data);
					$data['centro_rango'] =$centro;
				$this -> load -> view('seleccion.php', $data);
					
					$this -> load -> view('objetivos.php', $data);	
				}			
			
			}
			else 
				{				
				redirect('/inicio/login', 'refresh');	
				}
			
		}
	
	function opciones(){
		extract($_POST);
		$campos = 'seguimientos.actividad, seguimientos.puntaje, seguimientos.comentario, seguimientos.fecha_seguimiento, (centros.nombre) as nombre, microred.microred, (sibasi.nombre) as sibasi, municipios.Municipio';
		
		if(isset($sibasi_rango)){			
			$where = '			
			Left JOIN centros ON seguimientos.centro = centros.id 
			LEFT JOIN microred ON microred.id=centros.microred 
			Left JOIN sibasi ON sibasi.id = microred.sibasi
			Left JOIN municipios ON municipios.id = centros.municipio
			where (microred.sibasi = '. $sibasi_rango . ')';			
		}
		
		elseif(isset($microred_rango)){
			$where = '	
			Left JOIN centros ON seguimientos.centro = centros.id 
			LEFT JOIN microred ON microred.id=centros.microred 
			Left JOIN sibasi ON sibasi.id = microred.sibasi
			Left JOIN municipios ON municipios.id = centros.municipio
			where (microred.id = '. $microred_rango . ')';
		}
		
		elseif(isset($municipio_rango)){
			$where = '					
			Left JOIN centros ON seguimientos.centro = centros.id	 
			LEFT JOIN microred ON microred.id=centros.microred 
			Left JOIN sibasi ON sibasi.id = microred.sibasi
			Left JOIN municipios ON municipios.id = centros.municipio
			where (centros.municipio = '. $municipio_rango . ')';
		}

		elseif(isset($centro_rango)){
			$where = '			
			Left JOIN centros ON seguimientos.centro = centros.id 
			LEFT JOIN microred ON microred.id=centros.microred 
			Left JOIN sibasi ON sibasi.id = microred.sibasi
			Left JOIN municipios ON municipios.id = centros.municipio
			where (centros.id = '. $centro_rango . ')';	
		}
		
		//$reporte = $this->select_model->select_from($campos, 'seguimientos', $where . 'Order by seguimientos.fecha_seguimiento');
		//ORDER by seguimientos.fecha_seguimiento ASC
		$data = $this->variables();
		$this -> load -> view('header.php', $data);
		$this -> load -> view('menu_view_regional.php', $data);
		$this -> load -> view('pitch_view.php', $data);		
		$data['campos'] = $campos;
		$data['tabla'] = 'seguimientos';
		$data['where'] = $where;
		$this -> load -> view('opciones.php', $data);		
		$this -> load -> view('footer_view.php', $data);
	}

	function opcionesregional(){
		extract($_POST);
		$campos = '*';
		
		if(isset($hospital_rango)){			
			$where = 'WHERE hospital = '. $hospital_rango ;			
		}
		
		
		
		//$reporte = $this->select_model->select_from($campos, 'seguimientos', $where . 'Order by seguimientos.fecha_seguimiento');
		//ORDER by seguimientos.fecha_seguimiento ASC
		$data = $this->variables();
		$this -> load -> view('header.php', $data);
		$this -> load -> view('menu_view_regional.php', $data);
		$this -> load -> view('pitch_view.php', $data);		
		$data['campos'] = $campos;
		$data['tabla'] = 'resultados_objetivo_regional';
		$data['where'] = $where;
		$this -> load -> view('opcionesregional.php', $data);		
		$this -> load -> view('footer_view.php', $data);
	}

	function reporte(){
		extract($_POST);		
		$data = $this->variables();
		$this -> load -> view('header.php', $data);
		if (($this->session->userdata('tipo')==2) OR ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){
			$this -> load -> view('menu_view_regional.php', $data);
		}
		else {
			$this -> load -> view('menu_view_sibasi.php', $data);
		}
		$this -> load -> view('pitch_view.php', $data);
		$data['fecha_1'] = $fecha_1 ;
		$data['fecha_2'] = $fecha_2;
		if (isset($clasificacion_baja)){
			$data['clasificacion_baja'] = $clasificacion_baja;	
		}
		else {
			$data['clasificacion_baja'] = FALSE;
		}
		if(isset($clasificacion_media)){
			$data['clasificacion_media'] = $clasificacion_media;
		}
		else {
			$data['clasificacion_media'] = FALSE;
		}
		if (isset($clasificacion_alta)){
			$data['clasificacion_alta'] = $clasificacion_alta;	
		}
		else {
			$data['clasificacion_alta'] = FALSE;
		}		
		$data['tabla'] = 'seguimientos';
		$data['campos'] = $campos;		
		$data['where'] = $where;		
		$this -> load -> view('reporte.php', $data);		
		$this -> load -> view('footer_view.php', $data);
		
	}
	
	function reporteregional(){
		extract($_POST);		
		$data = $this->variables();
		$this -> load -> view('header.php', $data);
		if ( ($this->session->userdata('tipo')==4) OR ($this->session->userdata('tipo')==5)){
			$this -> load -> view('menu_view_regional.php', $data);
		}
		
		$this -> load -> view('pitch_view.php', $data);
		$data['fecha_1'] = $fecha_1 ;
		$data['fecha_2'] = $fecha_2;
		if (isset($clasificacion_baja)){
			$data['clasificacion_baja'] = $clasificacion_baja;	
		}
		else {
			$data['clasificacion_baja'] = FALSE;
		}
		if(isset($clasificacion_media)){
			$data['clasificacion_media'] = $clasificacion_media;
		}
		else {
			$data['clasificacion_media'] = FALSE;
		}
		if (isset($clasificacion_alta)){
			$data['clasificacion_alta'] = $clasificacion_alta;	
		}
		else {
			$data['clasificacion_alta'] = FALSE;
		}		
		$data['tabla'] = 'resultados_objetivo_regional';
		$data['campos'] = $campos;		
		$data['where'] = $where;		
		$this -> load -> view('reporteregional.php', $data);		
		$this -> load -> view('footer_view.php', $data);
		
	}

	function hospital(){
		extract($_POST);
		if ($this->session->userdata('logged_in')){
			
			$data = $this->variables();
			$this -> load -> view('header.php', $data);	
			if (($this->session->userdata('tipo')==4)){
				$data['sibasi'] =  $this->select_model->select_sibasi();
				$this -> load -> view('menu_view_regional.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$data['hospital'] =  $hospital;
				$this -> load -> view('objetivos_hospitales.php', $data);
				$data['hospital_rango'] =$hospital;
				$this->load->view('seleccionregional.php', $data);
			}
						
			else 
				{
				redirect('/inicio/login', 'refresh');	
				}
			$this -> load -> view('footer_view.php', $data);
			}
		
		}
	
	function enfermeria(){
		extract($_POST);
		if ($this->session->userdata('logged_in')){
			
			$data = $this->variables();
			$this -> load -> view('header.php', $data);	
			if (($this->session->userdata('tipo')==5)){
				$data['sibasi'] =  $this->select_model->select_sibasi();
				$this -> load -> view('menu_view_regional.php', $data);
				$this -> load -> view('pitch_view.php', $data);
				$data['hospital'] =  $hospital;
				$this -> load -> view('objetivos_enfermeria.php', $data);
				$data['hospital_rango'] =$hospital;				
				$this->load->view('seleccionregional.php', $data);
			}
						
			else 
				{
				redirect('/inicio/login', 'refresh');	
				}
			$this -> load -> view('footer_view.php', $data);
			}
		
		}
	
}

?>
