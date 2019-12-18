<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login_model extends CI_Model{


	public function validar($data){
		$this->db->where('usuario',$data['usuario']);
		$this->db->where('password',$data['clave']);
		$exe = $this->db->get('usuarios');
		$resu = $exe->row();
		return $resu;
	}

	public function cons_account($data){
		$this->db->where('usuario', $data['usr']);
		$this->db->get('usuarios');

		if($this->db->affected_rows() >0){
			return 'usr_exists';
		}else{
			return false;
		}
	}


	public function cons_pass($data){
		$this->db->where('password', $data['pw']);
		$this->db->get('usuarios');

		if($this->db->affected_rows() >0){
			return 'pw_exists';
		}else{
			return false;
		}
	}
}

?>