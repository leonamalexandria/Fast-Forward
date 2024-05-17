<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

	class Email{
		private $mailer;

		public function __construct($host,$username,$senha,$name){
			
				$this->mailer = new PHPMailer;

			    $this->mailer->isSMTP();                                          //Send using SMTP
			    $this->mailer->Host       = $host;                                //smtp.titan.email
			    $this->mailer->SMTPAuth   = true;                                 //Enable SMTP authentication
			    $this->mailer->Username   = $username;                            //SMTP username
			    $this->mailer->Password   = $senha;                               //SMTP password
			    $this->mailer->SMTPSecure = ssl;                                  //criptografia: SSL
			    $this->mailer->Port       = 465;                                  //porta: 465

			    //Recipients
			    $this->mailer->setFrom($username,$name);
			    $this->mailer->IsHTML(true);
			    $this->mailer->CharSet = 'UTF-8';
			}

		    public function addAddress($email,$nome){
		    	$this->mailer->addAddress($email,$nome);
		    }

			public function formatarEmail($info){
				$this->mailer->Subject = $info['assunto'];
				$this->mailer->Body    = $info['corpo'];
				$this->mailer->AltBody = strip_tags($info['corpo']);
			}

			public function enviarEmail(){
				if(this->mailer->send()){
					return true;
				}else{
					return false;
				}
			}
	}
?>