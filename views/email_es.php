<?php
    include "../public/email/class.email.php";
    $ref = new Email();
    $subject = $_POST["subject"];
    $email = $_POST["email"];
    $messagedes = $_POST["message"];
    $name = $_POST["name"];
    
    $message= "
    <body>
    <p>Enviado desde: <span>$email<span></p>
    <p>Mensaje: <span>$messagedes<span></p>
    <p>Autor: <span>$name<span></p>
    </body>";

    $ref->SendEmail('email',"Admin",$subject,$message,);
    header("Location: index-es.php");
?>