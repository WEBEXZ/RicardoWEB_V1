<?php

//$secret = "6LfViQ4UAAAAALHt_V2D88o_Qr-B3gsSw5DmkeBq";
// 
//// respuesta vacía
//$response = null;
// 
//// comprueba la clave secreta
//$reCaptcha = new ReCaptcha($secret);
//      
//// si se detecta la respuesta como enviada
//if ($_POST["g-recaptcha-response"]) {
//$response = $reCaptcha->verifyResponse(
//        $_SERVER["REMOTE_ADDR"],
//        $_POST["g-recaptcha-response"]
//    );
//}
$clave_del_sitio = "6LfViQ4UAAAAAM9AAaWAfrejmpU8O1E8rRtuCBtR";
$clave_secreta = "6LfViQ4UAAAAALHt_V2D88o_Qr-B3gsSw5DmkeBq";
if($_POST['accion'] == 'contact'){
    $recaptcha = new ReCaptcha($clave_secreta);
    $respuesta = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
    if($respuesta->isSuccess()){
        echo 'El formulario ha sido validado';
    }else{
        echo 'Se ha devuelto el siguiente error:';
        foreach ($respuesta->getErrorCodes() as $error_code) {
            echo '<tt>' . $error_code . '</tt> ';
        }
    }
}

  // Validar parametros
  if ($_REQUEST['nombre'] == '' || $_REQUEST['email'] == '' || $_REQUEST['mensaje'] == '') {
    //die('Parámetros incorrectos');
    echo '<script type="text/javascript">alert("LOS CAMPOS NO DEBEN ESTAR VACÍOS");</script>';
    die("<script language='javascript'>window.location='http://somostalentos.com/#contacto'</script>;");
}

$WAGLOBAL_Email_Server = "" ;

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
  $retval = \mail($to, $subject, $message, $headers);
  if( $retval == true )  
  {
     echo "Mensaje enviado correctamente...";
     echo "<script language='javascript'>window.location='http://somostalentos.com/#contacto'</script>;";
  }
  else
  {
     echo "El mensaje no se pudo enviar...";
     echo "<script language='javascript'>window.location='http://somostalentos.com/#contacto'</script>;";
  }
  
  


