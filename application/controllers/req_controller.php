<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class req_controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('req_model');
	}

	public function index(){
		$data = array(
		'title' =>'requerimientos || Ajax');
		$this->load->view('template/header',$data);
		$this->load->view('req_view');
		$this->load->view('template/footer');
	}

	public function requerimiento(){
		$res = $this->req_model->get_datos();
		echo json_encode($res);
	}

	public function eliminar(){
		$id = $this->input->post('id');
		$res = $this->req_model->eliminar($id);
		echo json_encode($res);
	}

	public function producto(){
		$res = $this->req_model->producto();
		echo json_encode($res);
	}

	public function usuario(){
		$res = $this->req_model->usuarios();
		echo json_encode($res);
	}

	public function ingresar(){
		$datos[''] = $this->input->post('');
		$datos[''] = $this->input->post('');
		$datos[''] = $this->input->post('');
		$datos[''] = $this->input->post('');

		$res = $this->req_model->set_alumno($datos);
		echo json_encode($res);
	}

	public function get_datos(){
		$id = $this->input->post('id');
		$res = $this->req_model->datos($id);
		echo json_encode($res);
	}

	public function actualizar(){
		$datos[''] = $this->input->post('');
		$datos['']    = $this->input->post('');
		$datos['']  = $this->input->post('');
		$datos['']      = $this->input->post('');
		$datos['']     = $this->input->post('');

		$res = $this->req_model->actualizar($datos);

		echo json_encode($res);
	}


}
