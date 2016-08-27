<?php
class My_Controller extends CI_Controller {
    public function My_Controller(){
        parent::Controller();
        $this->load->library('my_phpmailer');
    }
 public function send_mail() {
        $mail = new PHPMailer();
        $mail->IsSMTP(); // we are going to use SMTP
        $mail->SMTPAuth   = true; // enabled SMTP authentication
        $mail->SMTPSecure = "ssl";  // prefix for secure protocol to connect to the server
        $mail->Host       = "smtp.gmail.com";      // setting GMail as our SMTP server
        $mail->Port       = 465;                   // SMTP port to connect to GMail
        $mail->Username   = "myusername@gmail.com";  // user email address
        $mail->Password   = "password";            // password in GMail
        $mail->SetFrom('phalcon@boschauto.com.ua', 'Firstname Lastname');  //Who is sending the email
        
        $mail->Subject    = "Email subject";
        $mail->Body      = "HTML message";
        $mail->AltBody    = "Plain text message";
        $destino = "bar_deniska@mail.ru"; // Who is addressed the email to
        $mail->AddAddress($destino);


        if(!$mail->Send()) {
            $data["message"] = "Error: " . $mail->ErrorInfo;
        } else {
            $data["message"] = "Message sent correctly!";
        }
        $this->load->view('sent_mail',$data);
    }
}