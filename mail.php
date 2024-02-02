<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $project_name = trim($_POST["project_name"]);
    $admin_email = trim($_POST["admin_email"]);
    $form_subject = trim($_POST["form_subject"]);
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);

    $headers = "From: $name <$email>";

    $mail_body = "Name: $name\n";
    $mail_body .= "Email: $email\n";
    $mail_body .= "Message:\n$message";

    mail($admin_email, $form_subject, $mail_body, $headers);
}
?>