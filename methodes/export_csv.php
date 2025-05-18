<?php
require_once 'dbConnect.php';

$fieldLabels = include('field_labels.php');

function reorderArray(array $array, string $targetKey, ?string $afterKey = null, ?string $beforeKey = null): array {
    if (!isset($array[$targetKey])) {
        return $array;
    }

    $newArray = [];

    // Si on veut mettre la colonne tout au début
    if ($afterKey === null && $beforeKey !== null) {
        $newArray[$targetKey] = $array[$targetKey];
        foreach ($array as $key => $value) {
            if ($key !== $targetKey) {
                $newArray[$key] = $value;
            }
        }
        return $newArray;
    }

    // Sinon, on insère après une clé précise
    foreach ($array as $key => $value) {
        if ($key === $targetKey) continue;
        $newArray[$key] = $value;
        if ($key === $afterKey && isset($array[$targetKey])) {
            $newArray[$targetKey] = $array[$targetKey];
        }
    }

    return $newArray;
}

function exportCSVContent($pdo, string $table, ?int $id = null): string {
    global $fieldLabels;

    if ($id !== null) {
        $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
        $stmt->execute(['id' => $id]);
    } else {
        $stmt = $pdo->query("SELECT * FROM $table");
    }

    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$data) return '';

    $csv = fopen('php://temp', 'r+');
    fputs($csv, "\xEF\xBB\xBF");

    $first = true;
    foreach ($data as $row) {
        date_default_timezone_set('Europe/Paris');
        $row['date_export'] = date('d/m/Y - H\hi');

        $colonnesDevant = [
            'nom_ecole',
            'nom_ville',
            'enseignants',
            'date_debut',
            'date_fin',
            'centre',
            'niveau',
            'effectif'
        ];

        $row = reorderArray($row, 'date_soumission', 'id');
        $row = reorderArray($row, 'date_export', 'date_soumission');
        foreach (array_reverse($colonnesDevant) as $colonne) {
            $row = reorderArray($row, $colonne, 'date_export');
        }
        $row = reorderArray($row, 'acpeintervtext', 'acpeintervnote', 'disecadjointnote');

        $renamedRow = [];
        foreach ($row as $key => $value) {
            $renamedRow[$fieldLabels[$key] ?? $key] = $value;
        }

        if ($first) {
            fputcsv($csv, array_keys($renamedRow), ';');
            $first = false;
        }

        fputcsv($csv, array_values($renamedRow), ';');
    }

    rewind($csv);
    return stream_get_contents($csv);
}

