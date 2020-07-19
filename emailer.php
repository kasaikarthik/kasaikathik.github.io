<?php 
if(isset($_GET['submit'])){
    $to = "hello@thesaikatrist.com"; // this is my Email address
    $from = $_GET['email']; // this is the sender's Email address
    $name = $_GET['name'];
    $subject = "Katrist Website - Message from" . $name;
    $subject2 = "Copy of your Message to Sai Karthik";
    $message1 = $name . " wrote the following:" . "\n\n" . $_GET['message'];
    $message2 = "Hey there! Here is a copy of the message that you sent to me:" . "\n" . $name . "\n\n" . $_GET['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message1,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", I'll contact you shortly.";
    }
?>