<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario_controller extends CI_Controller {//inicio de la clase usuario_controller

	public function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
	}
	//metodo index se carga la vista y el template
	public function index()
	{
		$data = array('title' => 'Marketplace || Usuarios');
		$this->load->view('template/header',$data);
		$this->load->view('usuario_view');
		$this->load->view('template/footer');
	}//fin del metodo index

//metodo obtener usuarios para mostrar los registros
	public function get_usuario(){
		$respuesta = $this->usuario_model->get_usuario();
		echo json_encode($respuesta);
	}//fin del metodo obtener usuarios


//metodo de eliminar registros
	public function eliminar(){
		$id = $this->input->post('id');
		$respuesta = $this->usuario_model->eliminar($id);
		echo json_encode($respuesta);
	}//fin del metodo eliminar 


	public function get_rol(){
		$respuesta = $this->usuario_model->get_rol();
		echo json_encode($respuesta);
	}



//inicio de metdod ingresar usuario
	public function ingresar(){
		$datos['nombre'] = $this->input->post('nombres');
		$datos['apellido'] = $this->input->post('apellidos');
		$datos['edad']   = $this->input->post('edad');
		$datos['usuario']= $this->input->post('usuario');
		$datos['clave']  = md5($this->input->post('clave'));
		$datos['rol']    = $this->input->post('rol');
		$datos['correo'] = $this->input->post('correo');

		$respuesta = $this->usuario_model->set_usuario($datos);
		echo json_encode($respuesta);
	}//fin del metodo ingresar usuario


//metodo de obtener datos para el metodo actualizar
	public function get_datos(){
		$id = $this->input->post('id');
		$respuesta = $this->usuario_model->get_datos($id);
		echo json_encode($respuesta);
	}//fin del metodo actualizar

//inicio del metodo actualizar
	public function actualizar(){
		$datos['nombre']   = $this->input->post('nombres');
		$datos['apellido'] = $this->input->post('apellidos');
		$datos['edad']     = $this->input->post('edad');
		$datos['usuario']  = $this->input->post('usuario');
		$datos['clave']    = md5($this->input->post('clave'));
		$datos['rol']      = $this->input->post('rol');
		$datos['correo']   = $this->input->post('correo');
		$datos['id_usuarios'] = $this->input->post('id_usuarios');

		$respuesta = $this->usuario_model->actualizar($datos);
		echo json_encode($respuesta);
	}//fin del metodo actualizar

}//fin de la clase usuario_controller
