<?php

$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Por Favor Informe um Nome ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Por Favor Informe um E-mail";
} else {
    $email = $_POST["email"];
}

// MSG SUBJECT
if (empty($_POST["msg_subject"])) {
    $errorMSG .= "Por Favor Informe um Assunto ";
} else {
    $msg_subject = $_POST["msg_subject"];
}


// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Escreva alguma mensagem ";
} else {
    $message = $_POST["message"];
}


$EmailTo = "contato@wmwork.com.br";
$Subject = "Nova Mensagem do Site";

// prepare email body text
$Body = "";
$Body .= "Nome: ";
$Body .= $name;
$Body .= "\n";
$Body .= "E-mail: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Assunto: ";
$Body .= $msg_subject;
$Body .= "\n";
$Body .= "Mensagem: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Sucesso";
}else{
    if($errorMSG == ""){
        echo "Algo deu Errado :(";
    } else {
        echo $errorMSG;
    }
}

?>