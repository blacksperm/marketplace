<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class user_comps extends CI_Controller{
	public function __construct(){
		parent:: __construct();
		$this->load->model('chpw_model');
	}

	public function cambiar_clave(){
		$data['title'] = "Cambiar Contraseña";
		$this->load->view('template/header', $data);
		$this->load->view('pwchange_view');
		$this->load->view('template/footer');
	}
	public function change_pw(){
		$data['usuario'] = $_POST['usuario'];
		$data['clave'] = md5($_POST['contra_master']);
		$this->chpw_model->change_pass($data);

		if($this->session->userdata('logged') == true) {
			$u_data = array('logged' => false);
			$this->session->set_userdata($u_data);
			$this->session->sess_destroy();
		}
		redirect('login_cont/index', 'refresh');
	}
	public function validar_clave(){
		$res = $this->chpw_model->validar_clave();
		echo json_encode($res);
	}
}
?>