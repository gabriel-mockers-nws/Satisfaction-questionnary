<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;  // On utilise Dotenv pour charger les variables d'environnement

require_once __DIR__ . '/../vendor/autoload.php'; // Charge PHPMailer

// Charge les variables d'environnement à partir du fichier .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../', 'log.env');  // Charge .env depuis la racine du projet (modifie le chemin si nécessaire)
$dotenv->load();  // Charge les variables dans le code

function sendMailWithRawCSV(string $csvContent, string $fileName = 'rapport.csv'): bool {
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP avec les variables d'environnement
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];  // Utilisation de la variable d'environnement pour le serveur SMTP
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];  // Utilisation de la variable d'environnement pour l'username
        $mail->Password   = $_ENV['MAIL_PASSWORD'];  // Utilisation de la variable d'environnement pour le mot de passe
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['MAIL_PORT'];  // Utilisation de la variable d'environnement pour le port SMTP

        // Utilisation des variables d'environnement pour l'expéditeur et le destinataire
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($_ENV['MAIL_TO'], 'Destinataire');

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

