<?php 
include_once __DIR__ . '/classes/Dipendente.php';
include_once __DIR__ . '/classes/Manager.php';

$employees_to_add = [
    ['Johann', 'Cruyff'],
    ['Franz', 'Beckenbauer'],
    ['Alfredo', 'Di Stefano'],
    ['Michel', 'Platini'],
    ['Zinedine', 'Zidane'],
    ['Ferenc', 'Puskàs'],
    ['Diego Armando', 'Maradona']
];

$managers_to_add = [
    ['Michael', 'Jordan'],
    ['Magic', 'Johnson'],
    ['Larry', 'Bird'],
    ['Kareem', 'Abdul-Jabbar'],
    ['Wilt', 'Chamberlain'],
    ['Reggie', 'Miller'],
    ['Scottie', 'Pippen']
];

$dipendenti = [];

foreach ($employees_to_add as $employee) {
    try {
        $dipendenti[] = new Dipendente(...$employee);
    } catch (Exception $e) {
        echo "Eccezione: {$e -> getMessage()}";
    }   
}

foreach ($managers_to_add as $manager) {
    try {
        $managers[] = new Manager(...$manager);
    } catch (Exception $e) {
        echo "Eccezione: {$e -> getMessage()}";
    }   
}

var_dump($dipendenti);
var_dump($managers);