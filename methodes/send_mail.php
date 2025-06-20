<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Dotenv\Dotenv;  // On utilise Dotenv pour charger les variables d'environnement

require_once __DIR__ . '/../vendor/autoload.php'; // Charge PHPMailer

// Charge les variables d'environnement à partir du fichier .env
$dotenv = Dotenv::createImmutable(__DIR__ . '/../');  // Charge .env depuis la racine du projet (modifie le chemin si nécessaire)
$dotenv->load();  // Charge les variables dans le code

function sendMailWithMultipleCSVs(array $attachments): bool {
    $mail = new PHPMailer(true);

    try {
        // Configuration SMTP
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST'];
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME'];
        $mail->Password   = $_ENV['MAIL_PASSWORD'];
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['MAIL_PORT'];
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']);
        $mail->addAddress($_ENV['MAIL_TO'], 'Destinataire');

        $mail->isHTML(true);
        $mail->Subject = 'Nouveaux rapports soumis';
        $mail->Body    = 'Bonjour,<br><br>Veuillez trouver ci-joint les rapports au format CSV.<br>.';

        // On boucle sur chaque pièce jointe
        foreach ($attachments as $file) {
            if (!empty($file['content']) && !empty($file['filename'])) {
                $mail->addStringAttachment($file['content'], $file['filename'], 'binary', 'text/csv');
            }
        }

        $mail->send();
        return true;

    } catch (Exception $e) {
        echo "Erreur mail : " . $mail->ErrorInfo;
        return false;
    }
}
