<?php 
include_once __DIR__ . '/classes/Dipendente.php';

try {
    $dipendente = new Dipendente('Michael', 'Johnson', 'Employee', 'H825', '1', '2017-01-02', 'active', '123456789', 'email@email.com');
    var_dump($dipendente);
} catch (Exception $e) {
    echo "Eccezione: {$e -> getMessage()}";
}

