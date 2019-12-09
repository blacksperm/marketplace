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


	public function eliminar(){
		$id = $this->input->post('id');
		$respuesta = $this->usuario_model->eliminar($id);
		echo json_encode($respuesta);
	}


	public function get_rol(){
		$respuesta = $this->usuario_model->get_rol();
		echo json_encode($respuesta);
	}


	public function ingresar(){
		$datos['nombre'] = $this->input->post('nombres');
		$datos['apellido'] = $this->input->post('apellidos');
		$datos['edad'] = $this->input->post('edad');
		$datos['usuario'] = $this->input->post('usuario');
		$datos['clave'] = $this->input->post('clave');
		$datos['rol'] = $this->input->post('rol');
		$datos['correo'] = $this->input->post('correo');

		$respuesta = $this->usuario_model->set_usuario($datos);
		echo json_encode($respuesta);
	}

}//fin de la clase usuario_controller
