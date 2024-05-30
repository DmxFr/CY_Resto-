<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Inclure l'autoloader de Composer
require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $mail = new PHPMailer(true);
    try {
        // Paramètres du serveur SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'deosamuntu@gmail.com'; 
        $mail->Password = 'hyud skth lpmb ydhl';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Destinataires
        $mail->setFrom($email, $name);
        $mail->addAddress('zantokograce@gmail.com'); // Remplacez par l'adresse de l'administrateur

        // Contenu de l'email
        $mail->isHTML(true);
        $mail->Subject = "Nouveau message de contact de $name";
        $mail->Body    = "<p><strong>Nom:</strong> $name</p>
                          <p><strong>Email:</strong> $email</p>
                          <p><strong>Message:</strong><br>$message</p>";

        $mail->send();
        echo "Merci pour votre message, $name. Nous vous contacterons bientôt.";
    } catch (Exception $e) {
        echo "Désolé, une erreur est survenue. Veuillez réessayer. Erreur: {$mail->ErrorInfo}";
    }
}
?>


