<?php
 defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {


                                
	public function index()
	{  
          if($this->input->post('enviar'))
          {
            $this->load->helper(array('form'));	
            $this->load->library('form_validation');
	   //$this->form_validation->set_rules('nombre','Nombre','trim|required');
            $this->form_validation->set_rules('g-recaptcha-response','Captcha','callback_recaptcha');
		if($this->form_validation->run()==TRUE)
		{     //AQUI ENTRA AL INICIO
                   $data = array();
                   $data['captchaexito'] = "Mensaje enviado correctamente..."; 
		   print $this->load->view('index',$data,true);
                }
		elseif($this->form_validation->run()==FALSE)
		{ $data = array();
	          $data['captchamsn'] = "Si no eres un robot, completa el captcha por favor."; 
                  print $this->load->view('index',$data,true);
                  
		}
          }else
                 {
                   $this->load->view('index');
                 }

	}

	public function recaptcha($str='')
	{ 
		$google_url="https://www.google.com/recaptcha/api/siteverify";
		$secret='6LfViQ4UAAAAALHt_V2D88o_Qr-B3gsSw5DmkeBq';
		$ip=$_SERVER['REMOTE_ADDR'];
		$url=$google_url."?secret=".$secret."&response=".$str."&remoteip=".$ip;
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_TIMEOUT, 10);
		curl_setopt($curl, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 6.1; en-US; rv:1.9.2.16) Gecko/20110319 Firefox/3.6.16");
		$res = curl_exec($curl);
		curl_close($curl);
		$res= json_decode($res, true);
		//reCaptcha success check
		if($res['success'])
		{		
			$nombre = $this->input->post('nombre');
		        $email = $this->input->post('email');
		        $mensaje = $this->input->post('mensaje');
			
			//$WAGLOBAL_Email_Server = "" ;

			ini_set('SMTP','servidor3336.tl.controladordns.com'); 
			ini_set('smtp_port','465');
			  // Email
			  $to = 'atencion@somostalentos.com';
			  $subject = 'CONTACTO';   
			  $headers = 'From: '.$_REQUEST['email'];
			  // Mensaje   
			  $message = 'Mensaje de '.$_REQUEST['nombre'].'('.$_REQUEST['email'].') '."\n\n";
			  $message .= $_REQUEST['mensaje'];
			  // Enviar
			  $retval = @mail($to, $subject, $message, $headers);
                          
			  if( $retval == true )  
			  {
                            return true;

			  }
			  else
			  {
                             return false;
  			  }
		}
		else
		{ 
                   return false;
		}
	}
	
}