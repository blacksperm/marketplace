<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class File extends CI_Model{

    public function guardar($datos){
        $this->db->insert('imagenes',$datos);
        if($this->db->affected_rows()>0){
            return "success";
        }
    }
    
}