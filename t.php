<?php 
    $name =$_POST['name'];
    $visitor_email = $_POST['email'];
    $message =$_POST['message'];

    $email_form = "rajppatel8128@gmail.com";
    $email_subject = "New Form Submisson";
    $email_body = "User Name: $name.\n".
                    "User Email: $visitor_email.\n".
                        "User Message: $message.\n";
    $to = "rajphx299@gamil.com";
    $headers = "Form: $email_form \r\n" ;
    $headers .="Repply-To: $visitor_email \r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location: index.html");
?>