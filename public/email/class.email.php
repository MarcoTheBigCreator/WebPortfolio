<?php 

include "class.phpmailer.php";
include "class.smtp.php";

class Email{
    public function __construct()
    {
        $this->email = "email";
        $this->password = "password";
    }

    public function sendEmail($recipient, $title, $subject, $message)
    {
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = "tls";
        $mail->Host = "smtp.gmail.com";
        $mail->Port = "587";

        $mail->Username = $this->email;
        $mail->Password = $this->password;

        $mail->From = $this->email;
        $mail->FromName = "Host";
        $mail->Subject = $subject;
        $mail->WordWrap = 50;

        $mail->IsHTML(true);
        $mail->MsgHTML($message);
        $mail->WordWrap = 15;
        $mail->AddAddress("$recipient",$title);
        $mail->CharSet = "UTF-8";

        if(!$mail->Send()){
            echo "Error".$mail->ErrorInfo;
        }
        else{
            echo "Your email has been sent!";
        }
    }
}

?>