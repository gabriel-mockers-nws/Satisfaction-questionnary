<?php
require_once 'dbConnect.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../vendor/autoload.php'; // Charge PHPMailer

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
        $mail->Host       = 'mail.infomaniak.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'gabriel.mockers@odcvl.org'; // Adresse autorisée
        $mail->Password   = 'G@bri3!25'; // Ton mot de passe SMTP
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

        // En-têtes de l'email
        $mail->setFrom('gabriel.mockers@odcvl.org', 'Formulaire ODCVL');
        $mail->addAddress('bilans@odcvl.org', 'Destinataire');

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
