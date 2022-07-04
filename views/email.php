<?php
    include "../public/email/class.email.php";
    $ref = new Email();
    $subject = $_POST["subject"];
    $message = "Sent from: ".$_POST["email"].
    " Message: ".$_POST["message"].
    " Author: ".$_POST["name"];

    $ref->SendEmail('email',"Admin",$subject,$message);
    header("Location: index.php");
?>