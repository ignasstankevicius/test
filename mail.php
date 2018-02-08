<?php 
if(isset($_POST['submit'])){
    $to = "akmav@protonmail.com"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['name'];
    $subject = "Pranešimas";
    $message =  "Informuojame, kad Mano VMI portale gavote naują pranešimą.:" . "\n\n" . $_POST['message'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    header('Location: portfolio.html');
    }
?>