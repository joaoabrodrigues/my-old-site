<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	if($name == null || $email == null || $message == null ){
		echo "<script>alert('Espertinho(a), não é pra enviar o formulário vazio!'); </script>";
		echo "<script>location.href='http://www.joaoabrodrigues.pe.hu/#contato'</script>";
	} else  {

	$headers = "Formulário enviado.\r\n";
	$headers .= "Responder para: $email\r\n";	
	$headers .= "Mensagem: $message\r\n";	

	$corpo = "Formulário enviado\n";
   	$corpo .= "Nome: " . $name . "\n";
    	$corpo .= "Email: " . $email . "\n";
    	$corpo .= "Mensagem: " . $message . "\n";

	$email_to = 'contato@joaoabrodrigues.pe.hu';

    	$status = mail($email_to, $corpo, $headers);

	 if($status){
		echo "<script>alert('Formulário enviado com sucesso!'); </script>"; // Página que será redirecionada	
	 }
	 else{
		echo "<script> alert('Falha de envio!'); </script>"; // Página que será redirecionada
	 }
		echo "<script>location.href='http://www.joaoabrodrigues.pe.hu'</script>"; // Página que será redirecionada
  }
?>
	