<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class req_model extends CI_Model {


	public function get_datos(){
		$this->db->select('r.id_requerimiento,r.nombre_producto,t.tipo_producto,m.id_marca,m.n_marca,r.descripcion,r. precio,u.id_usuario,u.usuario,tr.transaccion');
		$this->db->from('requerimiento r');
		$this->db->join('tipo_producto t', 't.id_tipo_producto=r.id_tipo_producto');
		$this->db->join('marca m', 'm.id_marca=t.id_marca');
		$this->db->join('usuarios u', 'u.id_usuario=r.id_usuario');
		$this->db->join('transaccion tr', 'tr.id_transaccion=r.id_transaccion');
		$exe=$this->db->get();
		return $exe->result();
	}
	public function eliminar($id){
		$this->db->where('id_requerimiento', $id);
		$this->db->delete('requerimiento');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}
	public function producto(){
		$exe = $this->db->get('tipo_producto');
		return $exe->result();
	}

	public function usuarios(){
		$exe = $this->db->get('usuarios');
		return $exe->result();
	}
}



?>