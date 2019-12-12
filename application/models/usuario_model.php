<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_model extends CI_Model{ //inicio de la clase usuario_model

//metodo de mostrar usuarios
	public function get_usuario(){
		$this->db->select('u.id_usuario,u.nombre,u.apellido,u.edad,u.usuario,r.rol,u.correo');
		$this->db->from('usuarios u');
		$this->db->join('rol r','r.id_rol=u.id_rol');
		$exe = $this->db->get();

		return $exe->result();
	}//fin del metodo mostrar usuarios

//metodo de eliminar registros
	public function eliminar($id){
		$this->db->where('id_usuario',$id);
		$this->db->delete('usuarios');

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}//fin del metodo eliminar

	public function get_rol(){
		$exe = $this->db->get('rol');
		return $exe->result();
	}


//metodo de inngresar un nuevo usuario 
	public function set_usuario($datos){
		$this->db->set('nombre', $datos["nombre"]);
		$this->db->set('apellido', $datos["apellido"]);
		$this->db->set('edad', $datos["edad"]);
		$this->db->set('usuario', $datos["usuario"]);
		$this->db->set('password', md5($datos["clave"]));
		$this->db->set('id_rol', $datos["rol"]);
		$this->db->set('correo', $datos["correo"]);

		$this->db->insert('usuarios');
//se hace una condicion para contar las filas afecatadas y rerornar un resultado
		if($this->db->affected_rows()>0){
			return "add";
		}
	}//fin del metodo ingresar

//metodo obtener datos para el metodo actualizar
	public function get_datos($id){
		$this->db->where('id_usuario',$id);
		$exe = $this->db->get('usuarios');
//se hace condicion que obtenga un resultado y si es mayor a cero retornara $exe->row(); , sino false
		if($exe->num_rows()>0){
			return $exe->row();
		}else{
			return false;
		}
	}//fin del metodo get_datos

//metodo de inngresar un nuevo usuario 
	public function actualizar($datos){
		$this->db->set('nombre', $datos["nombre"]);
		$this->db->set('apellido', $datos["apellido"]);
		$this->db->set('edad', $datos["edad"]);
		$this->db->set('usuario', $datos["usuario"]);
		$this->db->set('password', $datos["clave"]);
		$this->db->set('id_rol', $datos["rol"]);
		$this->db->set('correo', $datos["correo"]);
		$this->db->where('id_usuario',$datos['id_usuarios']);
		$this->db->update('usuarios');
//se hace una condicion para contar las filas afecatadas y rerornar un resultado
		if($this->db->affected_rows()>0){
			return "add";
		}
	}//fin del metodo actualizar

}//fin de la clase usuario_model
