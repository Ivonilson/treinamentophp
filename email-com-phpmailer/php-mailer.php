<?php
	require '../../../mailer/PHPMailerAutoload.php';

	$email = new PHPMailer();
	$email->isSMTP();
	//$email->SMTPDebug = 1;
	$email->Host = 'smtp.novolarimobiliariaunai.com.br';
	$email->SMTPAuth = true;
	$email->SMTPSecure = false;
	$email->SMTPAutoTLS = false;
	$email->Username = 'novolar=novolarimobiliariaunai.com.br';
	$email->Password = '#novolaralisson';
	$email->Port = 587;
	$email->CharSet = 'UTF-8';
	

	$email->setFrom('novolar@novolarimobiliariaunai.com.br');
	$email->addReplyto('novolar@novolarimobiliariaunai.com.br');
	$email->addAddress('novolar@novolarimobiliariaunai.com.br', 'NOVO LAR IMOBILIARIA');
	//$email->addAddress('novolar@novolarimobiliariaunai.com.br', '61 999684943');
	//$email->addCC('', ''); //email com cópia
	$email->addBCC('abgsoftdf@gmail.com', ''); //email com cópia oculta

	$email->isHTML(true);
	$email->Subject = 'Email de Teste'; //assunto do email
	$email->Body = 'Conteúdo da Mensagem'; // aqui vai o conteúdo da mensagem
	$email->AltBody = 'Mensagem opcional'; // mensagem opcional caso o cliente não suporte HTML
	$email->addAttachment('../../../images/imginterna.jpg'); // anexos da mensagem

	//enviando a mensagem
	if(!$email->send()){
		echo "Não foi possível enviar a mensagem.<br>";
		echo "Erro: ".$email->ErrorInfo;
	} else {
		echo "Mensagem enviada com sucesso.";
	}
	
?>