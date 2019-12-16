<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Upload_files extends CI_Controller
{
    function  __construct() {
        parent::__construct();
        $this->load->model('File');
    }


    public function index(){
        $this->load->view('upload_files');
    }
    
    function subir(){

       $this->load->library('upload');
       $config = array( 
        'upload_path' => 'uploads/files/',
        'allowed_types' => 'jpg|png'
    );
       $variableFile = $_FILES;
       $filesCount = count($_FILES['userFiles']['name']);
       for($i = 0; $i < $filesCount; $i++){
        $_FILES['userFiles']['name']     = $variableFile['userFiles']['name'][$i];
        $_FILES['userFiles']['type']     = $variableFile['userFiles']['type'][$i];
        $_FILES['userFiles']['tmp_name'] = $variableFile['userFiles']['tmp_name'][$i];
        $_FILES['userFiles']['error']    = $variableFile['userFiles']['error'][$i];
        $_FILES['userFiles']['size']     = $variableFile['userFiles']['size'][$i];
        $this->upload->initialize($config);
        if($this->upload->do_upload('userFiles')){
            $data = array("upload_data" => $this->upload->data());
            $datos = array("imagen" => $data['upload_data']['file_name'],
        );

            $resultado = $this->File->guardar($datos);
            if($resultado = "success"){
                echo "Subido exitosamente";
            }else{
                echo "Error al guardar registro";
            }

        }


    }
    $this->load->view('upload_files');
}


}

