<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class propuesta_model extends CI_Model{

public function get_propuesta(){
	$this->db->select('rp.id_requerimiento_propuesta,r.id_requerimiento,u.usuario,r.nombre_producto,r.descripcion,u.contacto,concat("$",r.precio)as precio');
	$this->db->from('requerimiento_propuesta rp');
	$this->db->join('requerimiento r','r.id_requerimiento = rp.id_requerimiento');
	$this->db->join('usuarios u','u.id_usuario = r.id_usuario');
	$this->db->join('propuesta p','p.id_propuesta = rp.id_propuesta');
	$this->db->where('p.id_usuario',3);
	$exe =$this->db->get();
	return $exe->result();


}

	public function eliminar($id){
		$this->db->where('id_requerimiento_propuesta', $id);
		$this->db->delete('requerimiento_propuesta');


		if($this->db->affected_rows() > 0){
			return true;
		}
		else{
			return false;
		}
	}


	public function get_estado(){
		$exe= $this->db->get('estado');
		return $exe->result();
	}

	public function set_propuesta($datos){

		$this->db->set('id_usuario',$datos["usuario"]);
		$this->db->set('producto',$datos["producto"]);
		$this->db->set('descripcion',$datos["descripcion"]);
		$this->db->set('id_estado',$datos["estado"]);
		$this->db->set('id_propuesta_imagen',$datos["img"]);
		$this->db->set('precio',$datos["precio"]);

		$this->db->insert('propuesta');
		if($this->db->affected_rows()>0){
			return "add";
		}

	}




}
?>