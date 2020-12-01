<?php

if(isset(_$POST['enviar'])){
	if(!empty($_POST['nombre'])  && !empty($_POST['correo']) && !empty($_POST['fono']) && !empty($_POST['mensaje'])){

		$nombre = $_POST['nombre'];
		$correo = $_POST['correo'];
		$fono = $_POST['fono'];
		$mensaje = $_POST['mensaje'];

		$header = 'From: ' . $correo . " \r\n";
		$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
		$header .= "Mime-Version: 1.0 \r\n";
		$header .= "Content-Type: text/plain";

		$mensaje = "Nombre Contacto: " . $nombre . ",\r\n";
		$mensaje .= "E-Mail Contacto: " . $correo . " \r\n";
		$mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
		$mensaje .= "Enviado el " . date('d/m/Y', time());

		$para = 'rorro.mix@gmail.com';
		$asunto = 'Contacto Web';

		$mail = @mail($correo, $asunto, utf8_decode($mensaje), $header);
		if($mail){
			echo "<h4>Mensaje Enviado!</h4>";
		}


	}
}

?>
