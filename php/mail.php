<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);

$to = "contato@wmwork.com.br";
$subject = "contato - Site WM Work Service";
$body = "Nome: ".$nome.  "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header ="From: postmaster@wmwork.com.br"."\r\n".
            "Reply-To:".$email."\r\n".
            "X=Mailer:PHP/".phpversion();


if(mail($to,$subjet,$body,$header)){

    echo("Email Enviado com Sucesso!");
}else{
    echo("O Email não pode ser Enviado");
}
}
?>