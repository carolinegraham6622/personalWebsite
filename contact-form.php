<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $message = $_POST['msg'];
    $email = $_POST['email'];

    $mailTo = "carolinegraham6622@gmail.com";
    $headers = "From: My website- ".$email;
    $txt = "You have recieved an email from: ".$name.".\n\n".$message;

    mail($mailTo,$name, $txt, $headers);
}

/*
if(empty($_POST['submit'])) {
    echo "Form is not submitted."
    exit;
}

if(empty($_POST["name"]) || empty($_POST["email"])) {
    echo "Please fill the form"
    exit;
}

$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["msg"]

mail('carolinegraham6622@gmail.com', 'New form submission', "New form submission: Name: $name, Email:$email, Message:$message");
*/
?>