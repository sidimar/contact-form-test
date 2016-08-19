<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['surname']) 		||
   empty($_POST['company'])	||
   empty($_POST['role'])	||
   empty($_POST['state'])	||
   empty($_POST['city'])	||


$name = $_POST['name'];
$surname = $_POST['surname'];
$company = $_POST['company'];
$role = $_POST['role'];
$state = $_POST['state'];
$city = $_POST['city'];

// Create the email and send the message
$to = 'sidimar@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Website Contact Form:  $name";
$email_body = "Você recebeu uma nova mensagem vinda do formulário de contato Teste.\n\n"."Aqui estão os detalhes: Nome: $name\n\nSobrenome: $surname\n\nEmpresa: $company\n\nCargos:\n$role\n\nEstado: $state\n\nCidade: $city\n\n" ;
$headers = "From: sidimar@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
if(mail($to,$email_subject,$email_body,$headers)){
    return true;
}
else{
    return false;
}?>
