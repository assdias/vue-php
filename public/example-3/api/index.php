<?php

$filename = __DIR__ . '/../storage/database.json';
if (!file_exists($filename)) {
    file_put_contents($filename, '{}');
}

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'GET') {
    $database = json_decode(file_get_contents($filename), true);
    $id = $_GET['id'] ?? null;
    if (!$id) {
        echo json_encode(array_values($database));
        return;
    }
    if (isset($database[$id])) {
        echo json_encode($database[$id]);
        return;
    }
    echo "{}";
}

if (strtoupper($_SERVER['REQUEST_METHOD']) === 'POST') {
    $database = json_decode(file_get_contents($filename), true);
    $payload = json_decode(file_get_contents('php://input'), true);
    $id = $payload['id'] ?? null;
    $name = $payload['name'] ?? null;
    $phone = $payload['phone'] ?? null;
    if (!$id) {
        $id = uniqid();
    }
    $record = ['id' => $id, 'name' => $name, 'phone' => $phone];
    $database[$id] = $record;
    file_put_contents($filename, json_encode($database, JSON_PRETTY_PRINT));
    echo json_encode(['id' => $id, 'name' => $name, 'phone' => $phone]);
}
