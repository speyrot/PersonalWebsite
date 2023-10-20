<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "speyrot2112@gmail.com"; // Replace with your email address
    $subject = "New message from $name";
    $headers = "From: $email\r\n";
    $send_email = mail($to,$subject,$message,$headers);

    if($send_email) {
        echo "Thank you for contacting us!";
    } else {
        echo "Error sending email!";
    }
}
?>
