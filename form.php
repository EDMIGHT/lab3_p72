<?php

if(isset($_Post['submit'])){
    $to = "latyshevskiymail@gmail.com";
    $from ="MySite@mail.com";
    $subject = "zayavka";
    $name = $_Post['nameField'];
    $email = $_Post['emailField'];
    $message = "qq, " . $name . "\n" . "email: " . $email;
    $headers = "From: " . $from;
    mail($to,$subject,$message, $headers);
}

?>