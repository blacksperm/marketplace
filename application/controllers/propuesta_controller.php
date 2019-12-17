<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class propuesta_controller extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('propuesta_model');
		}
	
	public function index(){
		$data= array('title' => 'MarketPlace || Propuesta');
		$this->load->view('template/header',$data);
		$this->load->view('propuesta_view');
		$this->load->view('template/footer');
	}

	public function get_propuesta(){
		$respuesta = $this->propuesta_model->get_propuesta();
		echo json_encode($respuesta);
	}

	public function eliminar(){
		$id= $this->input->post('id');
		$respuesta = $this->propuesta_model->eliminar($id);
		echo json_encode($respuesta);
		}


		public function get_estado(){
		$respuesta= $this->propuesta_model->get_estado();
		echo json_encode($respuesta);

	}





	public function get_datos(){
		$id = $this->input->post('id');
		$respuesta = $this->propuesta_model->get_datos($id);
		echo json_encode($respuesta);
	}

	public function actualizar(){
		$datos['id_propuesta']=$this->input->post('id_propuesta');
		$datos['id_usuario']= $this->input->post('usuario');
		$datos['producto']= $this->input->post('producto');
		$datos['descripcion']= $this->input->post('descripcion');
		$datos['estado']= $this->input->post('estado');
		$datos['img']= $this->input->post('img');
		$datos['precio']=$this->input->post('precio');


		$respuesta = $this->propuesta_model->actualizar($datos);
		echo json_encode($respuesta);
	}
}

?>