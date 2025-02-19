<?php
	$to = "contato@icb.la";
	$subject = "Contato";
	
	if( isset($_POST["nome"]) && $_POST["nome"]!="" &&
		isset($_POST["email"]) && $_POST["email"]!="" &&
		isset($_POST["mensagem"]) && $_POST["mensagem"]!=""){
		$nome = $_POST["nome"] ;
		$email = $_POST["email"] ;
		$telefone = $_POST["telefone"];
		$mensagem = addslashes($_POST["mensagem"]) ;
		
		$body = "Equipe ICB,".chr(10).chr(10)."Seguem meus dados: ".chr(10).chr(10)." Nome: ".$nome.chr(10)."Email: ".$email.chr(10)."Telefone: ".$telefone.chr(10).chr(10).$mensagem.chr(10).chr(10);
		
		//echo "Email enviado com sucesso!";
		
		if (mail($to, $subject, $body)) {
			echo "Email enviado com sucesso!";
		} else {
			echo "Erro: Email não enviado!";
		}
	}else{
		echo "Erro: Formulário inválido!";
	}	
?>
