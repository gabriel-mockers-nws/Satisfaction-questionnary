<?php
require_once 'dbConnect.php';

$fieldLabels = include('field_labels.php');

function reorderArray(array $array, string $targetKey, string $afterKey, string $beforeKey): array {
    if (!isset($array[$targetKey]) || !isset($array[$afterKey]) || !isset($array[$beforeKey])) {
        return $array;
    }

    $newArray = [];
    foreach ($array as $key => $value) {
        if ($key === $targetKey) continue;
        $newArray[$key] = $value;
        if ($key === $afterKey) {
            $newArray[$targetKey] = $array[$targetKey];
        }
    }

    return $newArray;
}

function exportCSVContent($pdo, string $table, int $id): string {
    global $fieldLabels;

    $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (!$data) return '';

    $row = $data[0];

    $row = reorderArray($row, 'acpeintervtext', 'acpeintervnote', 'disecadjointnote');

    $renamedRow = [];
    foreach ($row as $key => $value) {
        $renamedRow[$fieldLabels[$key] ?? $key] = $value;
    }

    $headers = array_keys($renamedRow);

    $csv = fopen('php://temp', 'r+');
    fputs($csv, "\xEF\xBB\xBF");
    fputcsv($csv, $headers, ';');
    fputcsv($csv, array_values($renamedRow), ';');
    rewind($csv);

    return stream_get_contents($csv);
}
