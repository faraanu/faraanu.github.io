<?php
    $name = $_POST['name'];
    $senderEmail = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $to = ''; /* my email */
    $emailBody = 'Name: $name \n'.'Email: $senderEmail \n'.'Message:\n $message \n';
    mail($to, $subject, $emailBody);
    header("Location: index.html");
    
?>