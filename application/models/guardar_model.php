<?php
Class guardar_model extends CI_Model
{
	
	
	 
	 function __construct() {
		parent::__construct();
	}
	 function guardar($tabla, $datos)
	 {	 		
		$guardar = $this->db->insert_string($tabla, $datos);	
		$result= $this->db->query($guardar);		
		return true;	    
	 }
	 
	 
	 
	  function insert_ignore($tabla, array $data) {
        $_prepared = array();

        foreach ($data as $col => $val)
            $_prepared[$this->db->_escape_identifiers($col)] = $this->db->escape($val);

        $this->db->query('INSERT IGNORE INTO ' . $tabla . ' ('.implode(',',array_keys($_prepared)).') VALUES('.implode(',',array_values($_prepared)).');');
    }
	 	
}
?>

<?php
