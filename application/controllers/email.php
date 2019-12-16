<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class email extends CI_Controller{

    function  __construct(){
        parent::__construct();
        $this->load->model('email_model');
    }


    public function Account_reset(){
        $data['title'] = 'Recuperar cuenta';
        $this->load->view('template/header', $data);
        $this->load->view('rec_cueview');
        $this->load->view('template/footer');
    }

    
    function send(){


        $data['correo'] = $_POST['correo'];
        $correus = $_POST['correo'];
        $correus2 = $_POST['correo'];
        $test = $this->email_model->val_correo($data);

        if($test){
            if($test->correo == $correus){
                $data['msj2'] = "Correo correcto";
                $data['compr'] =  $correus;
                $apll = $test->apellido;
                $nmb = $test->nombre;
                $nomb = '$nmb $apll';
                $usuario = $test->usuario;
                
                $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#%^&*_,./?;:[]{}\|=+';

                $charactersLength = strlen($characters);
                $randomString = '';

                for ($i = 0;  $i < 10; $i++) {

                    $randomString .= $characters[rand(0, $charactersLength - 1)];

                    $data['pwgen'] = $randomString;
                    $newpw = $randomString;

                    
                }
                
                $this->load->view('rec_cueview', $data);
                $this->email_model->ch_pw($randomString, $correus);
                
            }


        // Load PHPMailer library
            $this->load->library('phpmailer_lib');

        // PHPMailer object
            $mail = $this->phpmailer_lib->load();

        // SMTP configuration
            $mail->isSMTP();
            $mail->Host     = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'antonjosephwd@gmail.com';
            $mail->Password = 'joeverasv';
            $mail->SMTPSecure = 'ssl';
            $mail->Port     = 465;

            $mail->setFrom('info@example.com', 'Antonio Torres');

            // $mail->addAttachment("base_url('/props/img/congrats.jpg')", "enhorabuena.jpg");

        // Add a recipient
            $mail->addAddress($correus2);

        // Add cc or bcc 
        // $mail->addCC('cc@example.com');
        // $mail->addBCC('bcc@example.com');

        // Email subject
            $mail->Subject = 'Recuperación de cuenta';

        // Set email format to HTML
            $mail->isHTML(true);

        // Email body content
            $mailContent = "<h1>Estimado, $nomb</h1>
            <p>Su usuario es: $usuario <br> 
            Su nueva contraseña es: $newpw </p> <br>";
            $mail->Body = $mailContent;
            $mail->CharSet = 'UTF-8';

        // Send email


            if(!$mail->send()){

            }else{
               redirect('login_cont/index','refresh');

           }
       }else{
        $data['msj'] = "Error";
        $this->load->view('rec_cueview', $data);
    }

}

}