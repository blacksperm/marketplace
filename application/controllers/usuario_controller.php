<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('usuario_model');
	}
	public function index()
	{
		$data = array('title' => 'Marketplace || Usuarios' );
		$this->load->view('template/header',$data);
		$this->load->view('usuario_view');
		$this->load->view('template/footer');
	}

	public function get_usuario(){
		$respuesta = $this->usuario_model->get_usuario();
		echo json_encode($respuesta);
	}
}
