<?php
    if (isset($_POST['submit'])) {
        $name = $_POST['fullName'];
        $subject = $_POST['subject'];
        $mailFrom = $_POST['email'];
        $phone = $_POST['phone'];
        $message = $_POST['message'];

        $mailTo = "theroofguys@outlook.com";
        $headers = "From: ".$mailFrom;
        $txt = "Message recieved from ".$name.".\n\n".$message;

        mail($mailTo, $subject, $txt, $headers);
        header("Location: index.html?mailsend");
    }
?>