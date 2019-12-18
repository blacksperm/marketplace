
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class req_controller extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model('req_model');
		$this->load->model('propuesta_model');
	}

	public function index(){
		$data = array(
			'title' =>'requerimientos || Ajax');
		$this->load->view('template/header',$data);
		$this->load->view('req_view');
		$this->load->view('welcome');
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
	public function marca(){
		$res = $this->req_model->marca();
		echo json_encode($res);
	}
	public function transaccion(){
		$res = $this->req_model->transaccion();
		echo json_encode($res);
	}

	public function usuario(){
		$res = $this->req_model->usuarios();
		echo json_encode($res);
	}

	public function ingresar(){
		$datos['nproducto'] = $this->input->post('nproducto');
		$datos['producto'] = $this->input->post('producto');
		$datos['marca']=$this->input->post('marca');//
		$datos['precio'] = $this->input->post('precio');
		$datos['usuario'] = $this->input->post('usuario');
		$datos['descripcion'] = $this->input->post('descripcion');
		$datos['transaccion'] = $this->input->post('transaccion');

		$res = $this->req_model->set_requerimiento($datos);
		echo json_encode($res);
	}

	public function get_datos(){
		$id = $this->input->post('id');
		$res = $this->req_model->datos($id);
		echo json_encode($res);
	}

	public function actualizar(){
		$datos['id'] = $this->input->post('id_reque');
		$datos['nproducto'] = $this->input->post('nproducto');
		$datos['producto'] = $this->input->post('producto');
		$datos['marca']= $this->input->post('marca');
		$datos['precio'] = $this->input->post('precio');
		$datos['usuario'] = $this->input->post('usuario');
		$datos['descripcion'] = $this->input->post('descripcion');
		$datos['transaccion'] = $this->input->post('transaccion');

		$res = $this->req_model->actualizar($datos);

		echo json_encode($res);
	}


	public function ingresarP(){
		$datos['idR'] = $this->input->post('id_requerimiento');//
		$datos['usuario']= $this->input->post('usuario');
		$datos['producto']= $this->input->post('producto');
		$datos['descripcion']= $this->input->post('descripcion');
		$datos['estado']= $this->input->post('estado');
		//$datos['img']= $this->input->post('img');
		$datos['precio']=$this->input->post('precio');


		$respuesta = $this->req_model->set_propuesta($datos);//
		echo json_encode($respuesta);
	}





}

