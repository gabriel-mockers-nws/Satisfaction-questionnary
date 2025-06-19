<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(403);
    die('Accès interdit');
}

require_once '../methodes/createDATA.php';
?>