<?php
	// VALUES FROM THE FORM
	$fname		= $_POST['fname'];
	$lname		= $_POST['lname']
	$email		= $_POST['email'];
	$subject	= $_POST['subject']
	$message	= $_POST['msg'];

	// ERROR & SECURITY CHECKS
	if ( ( !$email ) ||
		 ( strlen($_POST['email']) > 200 ) ||
	     ( !preg_match("#^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$#", $email) )
       ) 
	{ 
		print "Ingrese un Correo Electr&oacute;nico Correcto"; 
		exit; 
	} 
	if ( ( !$fname ) ||
		 ( strlen($fname) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $fname) ) 
	   )
	{ 
		print "No Puede Utilizar Numeros o S&iacute;mbolos"; 
		exit; 
	}
	if ( ( !$lname ) ||
		 ( strlen($lname) > 100 ) ||
		 ( preg_match("/[:=@\<\>]/", $lname) ) 
	   )
	{ 
		print "No Puede Utilizar Numeros o S&iacute;mbolos"; 
		exit; 
	}
	if ( preg_match("#cc:#i", $message, $matches) )
	{ 
		print "Error"; 
		exit; 
	} 
	if ( !$message )
	{
		print "Ingrese un Mensaje"; 
		exit; 
	} 
	if (eregi("\r",$email) || eregi("\n",$email)){ 
		print "Ingrese un Correo Electr&oacute;nico Correcto"; 
		exit; 
	} 
	if (FALSE) { 
		print "Error"; 
		exit; 
	} 


	// CREATE THE EMAIL
	$headers	= "Content-Type: text/plain; charset=iso-8859-1\n";
	$headers	.= "From: $name <$email>\n";
	$recipient	= "dinosawrssayrawwr@gmail.com";
	$subject	= "Contact From Your Website";
	$message	= wordwrap($message, 1024);

	// SEND THE EMAIL TO YOU
	mail($recipient, $subject, $message, $headers);

	// REDIRECT TO THE THANKS PAGE
	header("location: thanks.php");
?>