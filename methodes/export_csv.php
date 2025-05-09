<?php
require_once 'dbConnect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // Charge PHPMailer
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..', 'log.env'); // Assure-toi que ton fichier est bien nommé log.env
$dotenv->load();  // Charge les variables d'environnement

// Fonction pour générer le contenu CSV
function exportCSVContent($pdo, string $table, int $id): string {
    $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$data) return '';

    $row = $data[0];

    $headers = array_keys($row);

    $csv = fopen('php://temp', 'r+');
    fputcsv($csv, $headers);
    fputcsv($csv, array_values($row));
    rewind($csv);
    return stream_get_contents($csv);
}

// Si le script est exécuté directement via l’URL (et non require/include)
if (basename(__FILE__) === basename($_SERVER['SCRIPT_FILENAME'])) {
    $pdoManager = new DBManager('odcvl');
    $pdo = $pdoManager->getPDO();

    $formType = $_GET['form_type'] ?? null;
    $lastInsertId = $_GET['lastInsertId'] ?? null;

    if (!$lastInsertId || !$formType) {
        echo "ID ou type de formulaire manquant.";
        exit;
    }

    $allowedTables = ['classe', 'groupes'];
    if (!in_array($formType, $allowedTables)) {
        echo "Type de formulaire inconnu.";
        exit;
    }

    $csvContent = exportCSVContent($pdo, $formType, (int)$lastInsertId);

    // === ENVOI PAR MAIL ===
    try {
        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host       = $_ENV['MAIL_HOST']; // Chargé depuis .env
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['MAIL_USERNAME']; // Chargé depuis .env
        $mail->Password   = $_ENV['MAIL_PASSWORD']; // Chargé depuis .env
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = $_ENV['MAIL_PORT']; // Chargé depuis .env

        // En-têtes de l'email
        $mail->setFrom($_ENV['MAIL_FROM_ADDRESS'], $_ENV['MAIL_FROM_NAME']); // Chargé depuis .env
        $mail->addAddress($_ENV['MAIL_TO'], 'Destinataire'); // Chargé depuis .env

        $mail->isHTML(true);
        $mail->Subject = 'Export CSV - Formulaire ' . $formType;
        $mail->Body    = 'Bonjour,<br><br>Veuillez trouver ci-joint le fichier exporté.<br><br>Cordialement.';

        // Ajouter la pièce jointe
        $mail->addStringAttachment($csvContent, "export_" . $formType . "_" . date("Y-m-d_H-i-s") . ".csv", 'base64', 'text/csv');

        $mail->send();
        echo "E-mail envoyé avec succès.";
    } catch (Exception $e) {
        echo "Erreur mail : " . $mail->ErrorInfo;
    }
}
