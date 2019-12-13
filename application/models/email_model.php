<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email_model extends CI_Model {

	public function val_correo($datos){
		$this->db->where('correo', $datos['correo']);
		$exe = $this->db->get('usuarios');
		$resul= $exe->row();
		return $resul;
	}

	public function ch_pw($randomString, $correus){
		$this->db->set('password',  md5($randomString));
		$this->db->where('correo',   $correus);
		$this->db->update('usuarios');
	}


}

?>