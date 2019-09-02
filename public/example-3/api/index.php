<?php

require_once 'JSON.php';
require_once 'Router.php';

$filename = __DIR__ . '/../storage/database.json';

$router = Router::instance($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI']);

$router->get('.*api\/(?<id>\w+)', function ($args) use ($filename) {
    $database = JSON::instance($filename)->read();
    $id = $args['id'] ?? null;
    if (!isset($database[$id])) {
        return [];
    }
    return $database[$id];
});

$router->get('.*api', function () use ($filename) {
    $database = JSON::instance($filename)->read();
    return array_values($database);
});

$router->post('.*api', function ($args, $payload) use ($filename) {
    $json = JSON::instance($filename);

    $database = $json->read();

    $id = $payload['id'] ?? null;
    $name = $payload['name'] ?? null;
    $phone = $payload['phone'] ?? null;

    if (!$id) {
        $id = uniqid();
    }
    $record = ['id' => $id, 'name' => $name, 'phone' => $phone];
    $database[$id] = $record;

    $json->write($database);

    return $record;
});

$result = $router->run();
echo json_encode($result);
