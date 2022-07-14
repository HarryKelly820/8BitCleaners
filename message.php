<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['mail'];
    $windows = $_POST['windows'];
    $message = $_POST['message'];

    $mailTo = "info@8bitcleaners.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have reveived an e-mail from ".$name.".\n\n".$message;
    $subject = "8bitcleaners: ". $name

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
}