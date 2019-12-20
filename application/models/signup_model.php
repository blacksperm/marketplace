<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class signup_model extends CI_Model{

	public function Registrarse($data){
		$this->db->set('nombre',  $data['nombre']);
		$this->db->set('apellido', $data['apellido']);
		$this->db->set('edad',     $data['edad']);
		$this->db->set('usuario',  $data['usuario']);
		$this->db->set('password', $data['password']);
		$this->db->set('id_rol',   $data['rol']);
		$this->db->set('correo',   $data['correo']);
		$this->db->set('contacto', $data['contacto']);

		$this->db->insert('usuarios');

		if($this->db->affected_rows() >0){
			return 'added';
		}else{
			return false;
		}
	}


}

?>