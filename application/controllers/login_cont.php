<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login_cont extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('login_model');
	}
	public function index(){
		$data['title'] = 'Iniciar Sesión';
		$this->load->view('template/header', $data);
		$this->load->view('login_view');
		$this->load->view('template/footer');
	}

	public function Ingresar(){
		$data['usuario']     = $_POST['usr'];
		$data['clave']      = md5($_POST['pw']);
		$dat_lg = $this->login_model->validar($data);

		if($dat_lg){
			$u_data = array('id' => $dat_lg->id_usuario, 'usuario' => $dat_lg->usuario, 'nombre' => $dat_lg->nombre, 'apellido' => $dat_lg->apellido, 'logged' => TRUE, 'rol' => $dat_lg->id_rol);
			$this->session->set_userdata($u_data);
			redirect('propuesta_controller/index', 'refresh');

		}else{
			$data['invalid'] = "Error";
			$data['title'] = 'Iniciar Sesión';
			$this->load->view('template/header', $data);
			$this->load->view('login_view');
			$this->load->view('template/footer');
		}
	}

	public function cerrar_sesion(){
		$user_data = array('logged' => FALSE);
		$this->session->set_userdata($user_data);
		$this->session->sess_destroy();
		redirect('login_cont/index', 'refresh');
	}

	public function cons_account(){
		$data['usr'] = $this->input->post('usr');
		$respuesta = $this->login_model->cons_account($data);
		echo json_encode($respuesta);
	}

	public function cons_pass(){
		$data['pw'] = $this->input->post('pw');
		$respuesta = $this->login_model->cons_pass($data);
		echo json_encode($respuesta);
	}

}

?>