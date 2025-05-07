<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Charge PHPMailer

function sendMailWithRawCSV(string $csvContent, string $fileName = 'rapport.csv'): bool {
    $mail = new PHPMailer(true);

    try {
        $mail->isSMTP();
        $mail->Host       = 'mail.infomaniak.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'gabriel.mockers@odcvl.org';      // adresse autorisée
        $mail->Password   = 'G@bri3!25';           // ton mot de passe SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        $mail->setFrom('bilan@odcvl.org', 'Formulaire ODCVL');
        $mail->addAddress('bilan@odcvl.org', 'Destinataire');

        $mail->isHTML(true);
        $mail->Subject = 'Nouveau rapport soumis';
        $mail->Body    = 'Bonjour,<br><br>Veuillez trouver ci-joint le rapport au format CSV.<br><br>Cordialement.';

        // Ajouter la pièce jointe à partir du contenu en mémoire
        $mail->addStringAttachment($csvContent, $fileName, 'base64', 'text/csv');

        $mail->send();
        return true;

    } catch (Exception $e) {
        echo "Erreur mail : " . $mail->ErrorInfo;
        return false;
    }
}

