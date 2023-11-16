<?php 
	$nombre = $_POST['first-name'];
    $apellido = $_POST['last-name'];
	$email = $_POST['email'];
    $tel = $_POST['phone-number'];
	$asunto = 'Formulario Rellenado';
	$mensaje = "Nombre: ".$nombre."<br> Apellido: ".$apellido."<br> Email: $email Telefono: ".$tel."<br><br> Mensaje:".$_POST['mensaje'];


	if(mail('junavi2@gmail.com', $asunto, $mensaje)){
		echo "Correo enviado";
	}
 ?>