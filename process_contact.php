<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Remplacer par votre adresse email
    $to = "votre_email@example.com";
    $subject = "Nouveau message de contact de $name";
    $body = "Nom: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message, $name. Nous vous contacterons bientôt.";
    } else {
        echo "Désolé, une erreur est survenue. Veuillez réessayer.";
    }
}
?>
