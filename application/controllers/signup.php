<?php 
defined('BASEPATH') OR exit('No script access allowed');

class signup extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('signup_model');
	}

	public function index(){
		// $data = array('title' => 'Marketplace || Registrarse');
		$this->load->view('signup_view');
	}

	public function Registrarse(){
		$this->load->view('signup_view');

		$data['nombre'] = $this->input->post('nombre');
		$data['apellido'] = $this->input->post('apellido');
		$data['edad'] = $this->input->post('edad');
		$data['usuario'] = $this->input->post('usuario');
		$data['password'] = md5($this->input->post('pass'));
		$data['rol'] = 2;
		$data['correo'] = $this->input->post('correo');
		$data['contacto'] = $this->input->post('contacto');

		$resp = $this->signup_model->Registrarse($data);
		echo json_encode($resp);

	}

}

?>