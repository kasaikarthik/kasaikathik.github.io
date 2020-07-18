<?php 
if(isset($_POST['submit'])){
    $to = "hello@thesaikatrist.com"; // this is my Email address
    $from = $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = "Katrist Website - Message from" . $name;
    $subject2 = "Copy of your Message to Sai Karthik";
    $message = $name . " wrote the following:" . "\n\n" . $_POST['message'];
    $message2 = "Hey there! Here is a copy of the message that you sent to me:" . "\n" . $name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $name . ", I'll contact you shortly.";
    }
?>