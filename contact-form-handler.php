<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['message'];


    $email_from = 'Obsttaxi.tk';
    
    $email_subject = "New Form Submission";

    $email_body = "User Name: $name.\n".
                     "User Email: $visitor_email.\n"
                         "User Message: $message.\n";


    $to = "xelopis448@whyflkj.com";

    $headers = "From: $email_from \r\n";
    
    $headers .= "Reply-to: $visitor:email \r\n";

    mail($to, $email_subject,$email_body,$headers);

    header("Location: index.html");

?>
