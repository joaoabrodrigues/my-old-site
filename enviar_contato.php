<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$subject = $_POST['subject'];
	date_default_timezone_set('America/Sao_Paulo');
	$data = date('d/m/Y H:i');
	
	if($name == null || $email == null || $message == null || $subject == null ){
		echo "<script>alert('Espertinho(a), não é pra enviar o formulário vazio!'); </script>";
		echo "<script>location.href='http://www.joaoabrodrigues.com/#contato'</script>";
	} else  {

	$assunto = "Contato - ";
	$assunto .= "Assunto: $subject\r";

	$corpo = "Contato enviado através do site.<br><br>";
   	$corpo .= "<b>Nome: </b>" . $name . "<br>";
    $corpo .= "<b>E-mail: </b>" . $email . "<br>";
    $corpo .= "<b>Assunto: </b>" . $subject . "<br>";
    $corpo .= "<b>Mensagem: </b>" . $message . "<br><br>";
    $corpo .= "<b>Data: </b>" . $data . "<br>";
    $corpo .= "<b>IP de Origem da Mensagem: </b>".$_SERVER['REMOTE_ADDR'];

  	$headers =  "Content-Type:text/html; charset=UTF-8\n";
  	$headers .= "X-Mailer: PHP  v".phpversion()."\n";
  	$headers .= "X-IP:  ".$_SERVER['REMOTE_ADDR']."\n";
  	$headers .= "MIME-Version: 1.0\n";

	$email_to = 'contato@joaoabrodrigues.com';

    $status = mail($email_to, $assunto, $corpo, $headers);

	 if($status){
		echo "<script>alert('Formulário enviado com sucesso! Obrigado :D'); </script>"; // Página que será redirecionada	
	 }
	 else{
		echo "<script> alert('Falha de envio! Desculpe :('); </script>"; // Página que será redirecionada
	 }
	 echo "<script>location.href='http://www.joaoabrodrigues.com'</script>"; // Página que será redirecionada
  }
?>
	