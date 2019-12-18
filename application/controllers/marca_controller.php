<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class marca_controller extends CI_Controller{
		public function __construct(){
		parent:: __construct();
		$this->load->model('marca_model');
	}

		public function index(){
		$data= array ('title' => 'MarketPlace || ajax');
		$this->load->view('template/header',$data);
		$this->load->view('marca_view');
		$this->load->view('template/footer');

		
	}

	public function get_marca(){
		$respuesta = $this->marca_model->get_marca();
		echo json_encode($respuesta);
	}


	public function eliminar(){
		$id =$this->input->post('id');
		$respuesta = $this->marca_model->eliminar($id);
		echo json_encode($respuesta);
	}


	public function ingresar(){
		$datos['marca']=$this->input->post('marca');
		$respuesta = $this->marca_model->set_marca($datos);
		echo json_encode($respuesta);
	}




	public function get_datos(){
		$id = $this->input->post('id_marca');
		$respuesta = $this->marca_model->get_datos($id);
		echo json_encode($respuesta);
	}


	public function actualizar(){
		$datos['id_marca']=$this->input->post('id_marca');
		$datos['n_marca']=$this->input->post('marca');
		$respuesta = $this->marca_model->actualizar($datos);
		echo json_encode($respuesta);
	}



}

?>