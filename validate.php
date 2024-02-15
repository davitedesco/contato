<?php

$nome = htmlspecialchars ($_POST ['nome']);
$telefone = htmlspecialchars ($_POST ['tel']);
$msg =  htmlspecialchars ($_POST ['msg']);
#enviar as informaçoes para o email 
$to = "davitedesco2022@gmail.com";
$subject = "novo ctt pelo site";
$messege = "Nome: $nome 
            Telefone: $tel
             Mensagem $msg";
$headers = "from : davitedesco2022@gmail.com";

try{
    mail($to, $subject, $msg, $headers);
    echo"obrigado, em breve entraremos em contato";
 }catch(Exception $error){
    echo "Tente novamente mais tarde";
 }
