<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class chpw_model extends CI_Model{

	public function change_pass($data){
		$this->db->set('contraseña', $data['clave']);
		$this->db->where('id_usuario', $data['usuario']);
		$this->db->update('usuario');
	}

	public function validar_clave(){
		$contra = md5($this->input->post('contra'));
		$user = $this->input->post('user');
		$this->db->where('contraseña', $contra);
		$this->db->where('id_usuario', $user);
		$this->db->get('usuario');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		} 
	}
}

?>