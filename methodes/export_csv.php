<?php
require_once 'dbConnect.php';

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

    // === ENVOI PAR MAIL (optionnel si tu veux juste tester depuis l’URL) ===
    $to = 'bilan@odcvl.org';
    $subject = 'Export CSV - Formulaire ' . $formType;
    $boundary = md5(uniqid());

    $headers = "From: export@tonsite.com\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"";

    $message = "--$boundary\r\n";
    $message .= "Content-Type: text/plain; charset=\"UTF-8\"\r\n\r\n";
    $message .= "Veuillez trouver ci-joint le fichier exporté.\r\n";

    $attachment = chunk_split(base64_encode($csvContent));
    $filename = "export_" . $formType . "_" . date("Y-m-d_H-i-s") . ".csv";

    $message .= "--$boundary\r\n";
    $message .= "Content-Type: text/csv; name=\"$filename\"\r\n";
    $message .= "Content-Disposition: attachment; filename=\"$filename\"\r\n";
    $message .= "Content-Transfer-Encoding: base64\r\n\r\n";
    $message .= $attachment . "\r\n";
    $message .= "--$boundary--";

    if (mail($to, $subject, $message, $headers)) {
        echo "E-mail envoyé avec succès.";
    } else {
        echo "Échec de l'envoi de l'e-mail.";
    }
}
