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
	
}

?>