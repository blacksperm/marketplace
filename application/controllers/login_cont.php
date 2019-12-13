<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class login_cont extends CI_Controller{

	public function __construct(){
		parent:: __construct();
		$this->load->model('login_model');
	}
	public function index(){
		$data['title'] = 'Iniciar Sesión';
		$this->load->view('templates/header', $data);
		$this->load->view('login_view');
		$this->load->view('templates/footer');
	}

	public function Ingresar(){
		$data['usuario']     = $_POST['usr'];
		$data['clave']      = md5($_POST['pw']);
		$dat_lg = $this->login_model->validar($data);

		if($dat_lg){
			$u_data = array('id' => $dat_lg->id_usuario, 'usuario' => $dat_lg->usuario, 'nombre' => $dat_lg->nombre, 'logged' => TRUE, 'rol' => $dat_lg->id_rol);
			$this->session->set_userdata($u_data);
			redirect('usuario_cont/index', 'refresh');

		}else{
			$data['invalid'] = "Error";
			$data['title'] = 'Iniciar Sesión';
			$this->load->view('templates/header', $data);
			$this->load->view('login_view');
			$this->load->view('templates/footer');
		}
	}

	public function cerrar_sesion(){
		$user_data = array('logged' => FALSE);
		$this->session->set_userdata($user_data);
		$this->session->sess_destroy();
		redirect('login_cont/index', 'refresh');
	}

}

?>