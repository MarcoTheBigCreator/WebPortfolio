<?php
    include "../public/email/class.email.php";
    $ref = new Email();
    $subject = $_POST["subject"];
    $message = "Enviado desde: ".$_POST["email"].
    " Mensaje: ".$_POST["message"].
    " Autor: ".$_POST["name"];

    $ref->SendEmail('email',"Admin",$subject,$message);
    header("Location: es.php");
?>