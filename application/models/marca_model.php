<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class marca_model extends CI_model{
	public function get_marca(){
		$this->db->select('id_marca,n_marca');
		$this->db->from('marca');
		$exe = $this->db->get();
		return $exe->result();
	}


	public function eliminar($id){
		$this->db->where('id_marca',$id);
		$this->db->delete('marca');

		if($this->db->affected_rows()>0){
			return true;
		}

		else{
			return false;
		}
	}

	public function set_marca($datos){
		$this->db->set('n_marca',$datos["marca"]);

		$this->db->insert('marca');
		if($this->db->affected_rows()>0){
			return "add";
		}
	}



	public function get_datos($id){
		$this->db->where('id_marca',$id);
		$exe = $this->db->get('marca');
		if($this->db->affected_rows()>0){
			return $exe->row();
		}
		else{
			return false;
		}
	}


	public function actualizar($datos){
		$this->db->set('n_marca',$datos['marca']);
		$this->db->where('id_marca',$datos)
	}





}
?>