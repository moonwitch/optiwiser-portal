<?php
// index.php

// Laad alle Composer packages
require __DIR__ . '/vendor/autoload.php';

// Initialiseer de router
$router = new \Bramus\Router\Router();

// Stel de response header in op JSON
header('Content-Type: application/json');

// Definieer je API routes
$router->get('/', function() {
    echo json_encode(['message' => 'Welcome to the Optiwiser API root!']);
});

$router->get('/api/clients', function() {
    // Hier komt later je logica om klanten uit de database te halen
    $dummyClients = [
        ['id' => 1, 'name' => 'Loop Earplugs'],
        ['id' => 2, 'name' => 'Een Ander Bedrijf'],
    ];
    echo json_encode($dummyClients);
});

// Een custom 404 voor als de route niet bestaat
$router->set404(function() {
    header('HTTP/1.1 404 Not Found');
    echo json_encode(['error' => 'Route not found']);
});

// Start de router
$router->run();