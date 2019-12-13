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
}

?>