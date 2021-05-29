<?php
$remitente = $_POST['email'];
$destinatario = 'tomasgelvez8@gmail.com'; // en esta línea va el mail del destinatario.
$asunto = '602 crossfit'; // acá se puede modificar el asunto del mail
if (!$_POST){
?>

<?php
}else{
	 
    $cuerpo = "Nombre y Apellido: " . $_POST["nombre"] . "\r\n"; 
    $cuerpo .= "Email: " . $_POST["email"] . "\r\n";
	$cuerpo .= "Deja tu mensaje: " . $_POST["message"] . "\r\n";
	//las líneas de arriba definen el contenido del mail. Las palabras que están dentro de $_POST[""] deben coincidir con el "name" de cada campo. 
	// Si se agrega un campo al formulario, hay que agregarlo acá.

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/plain; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$_POST['nombre']." \" <".$remitente.">\n";

    mail($destinatario, $asunto, $cuerpo, $headers);
    
    include 'graciasKinesiologia.html'; //se debe crear un html que confirma el envío
}
?>