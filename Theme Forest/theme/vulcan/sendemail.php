<?php
$mailto   = $_POST['sendto'];
$nome     = ucwords($_POST['nome']); 
$empresa  	  = $_POST['empresa'];
$ramo 		= $_POST['ramo'];	
$telefone  	  = $_POST['telefone'];
$celular  	  = $_POST['celular'];
$email  	  = $_POST['email'];
$duvidas    = $_POST['duvidas'];
$marcas  = $_POST['marcas'];

	if(strlen($_POST['nome']) < 1 ){
		echo  'email_error';
	}
	
  else if(strlen($email) < 1 ) {
		echo 'email_error';
	}

  else if(!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) { 
    echo 'email_error';
  }

	else if(strlen($marcas) < 1 ){
		echo 'email_error';

  } else {

	// NOW SEND THE ENQUIRY

	$email_message="\n\n" .
		"Empresa: " .
		$empresa . "\n" .
		"Ramo: " .
		$ramo . "\n" .
		"Nome:" . 
		ucwords($nome) . "\n" .
		"Telefone: " .
		$telefone . "\n" .
		"Celular: " .
		$celular . "\n" .
		"E-mail: " .
		$email . "\n\n" .
		"Dúvidas: " .
		$duvidas .
		"\n" .
		"Marcas: " .
		"\n" .
		$marcas .
		"\n" .
		"\n\n" ;

		$email_message = utf8_decode(trim(stripslashes($email_message)));
		mail($mailto, $subject, $email_message, "From: \"$name\" <".$email.">\nReply-To: \"".ucwords($nome)."\" <".$email.">\nX-Mailer: PHP/" . phpversion() );
    
    echo 'Thanks, your message was successfully sent!';
}
?>