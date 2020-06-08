<?php

include_once __DIR__ . '/partials/data/classes/Dipendente.php';

try {
    $dipendente = new Dipendente('22', 'Johnson', 'Employee', 'H825', '1', '2017-01-02', 'active', '123456789', 'email@email.com');
    var_dump($dipendente);
} catch (Exception $e) {
    echo "Eccezione: {$e -> getMessage()}";
}

?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP Dipendenti</title>
</head>
<body>
    <header>

    </header>

    <main>

    </main>

    <footer>
    
    </footer>
</body>
</html>