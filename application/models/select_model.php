<?php
Class select_model extends CI_Model
{	
	 function __construct() {
		parent::__construct();
	}
	 
	  function login($usuario, $clave)
	 {
	   $username = $usuario;
	   $password = sha1($clave);
	   
	 
	   $query = 'SELECT usuario, tipo FROM usuarios WHERE usuario = ? and contrasena = ?';
	   $result= $this->db->query($query, array($username, $password ));
	    
	 
	   if($result -> num_rows==1)
	   {
	   	$row[0] = $result->row(0)->usuario;
		$row[1] = $result->row(0)->tipo;
	    return $row;
	   }
	   else
	   {
	   	return false;
	   }
	 }
	 
	 function select_cargo($cargo)
	 {
	 	$query = 'Select * FROM ' . $cargo . ' ORDER BY nombre';		
	   	$result= $this->db->query($query);
	    if($result -> num_rows>0){
						
			return $result;
		}
		else {
			return false;
		}
		
		
	 }
	 
	 function select_sibasi()
	 {
	 	$username = $this->session->userdata('user_id');
		$query = 'Select usuario, regional FROM cargos where usuario = ?';		
	   	$result= $this->db->query($query, array($username));
	    if($result -> num_rows==1){
			$regional =  $result->row(0)->regional;
		}
		$query = 'Select nombre FROM sibasi Where regional = ? ORDER BY nombre';	
		$result= $this->db->query($query, array($regional));  	
	   if ($result->num_rows() > 0)
	   {
	   	return $result;	
		}
		else {
			return false;
		}
		
	 }
	 
	 function select_microred($sibasi){
	 	if ($this->session->userdata('tipo')==3){
			$username = $this->session->userdata('user_id');
			$query = 'Select usuario, sibasi FROM cargos where usuario = ?';		
	   		$result= $this->db->query($query, array($username));
	    	if($result -> num_rows==1){
				$sibasi =  $result->row(0)->sibasi;}
		}
		if ($sibasi ==1){$sibasi = 'SAN MIGUEL';}
		if ($sibasi ==2){$sibasi = 'USULUTAN';}
		if ($sibasi ==3){$sibasi = 'MORAZÁN';}
		if ($sibasi ==4){$sibasi = 'LA UNION';}
		$query = 'Select microred FROM establecimientos Where sibasi  like "%' . $sibasi .  '%" GROUP BY microred ORDER BY microred';	
			$result= $this->db->query($query);  	
	   		if ($result->num_rows() > 0){	   			
	   			return $result;	
			}
			else {
				return false;
			}	 	
	 }
	 
	
	function select_establecimiento($microred){	 	
		$query = 'SELECT  id, establecimiento
		from establecimientos 
		WHERE `microred` = "'.$microred.'" 
		ORDER BY establecimiento';	
			$result= $this->db->query($query, array());  	
	   		if ($result->num_rows() > 0){
	   			return $result;	
			}
			else {
				return false;
			}
	 }

	function select_from($campos, $tabla, $where){
        $query = 'Select ' . $campos . ' FROM '. $tabla .' '. $where;		
	   	$result= $this->db->query($query);
	    if($result -> num_rows>0){
						
			return $result;
		}
		else {
			return false;
		}
	}
	
}
?>
