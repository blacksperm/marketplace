<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model{

	public function get_usuario(){
		$this->db->select('u.id_usuario,u.nombre,u.apellido,u.edad,u.usuario,r.rol,u.correo');
		$this->db->from('usuarios u');
		$this->db->join('rol r','r.id_rol=u.id_rol');
		$exe = $this->db->get();

		return $exe->result();
	}

	public function eliminar($id){
		$this->db->where('id_usuario',$id);
		$this->db->delete('usuarios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function get_rol(){
		$exe = $this->db->get('rol');
		return $exe->result();
	}

}
