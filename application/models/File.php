<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{
//metodo de guardar el nombre de las imagenes en la base de daatos
	public function guardar($datos){
		$this->db->insert('imagenes',$datos);
		if($this->db->affected_rows()>0){
			return "add";
		}
    }//fin del metodo guardars
    
}//fin de la clase File