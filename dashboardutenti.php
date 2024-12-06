<?php
session_start();
if ($_SESSION['login'] == false) {
    $_SESSION['status'] = 'Effettua il login per accedere alla <i>dashboard utenti</i>!';
    header('Location: index.php');
    die();
}
if ($_SESSION['tipo_utente'] != 'admin') {
    $_SESSION['status'] = 'Non hai i permessi per accedere alla <i>dashboard utenti</i>!';
    $where = $_SESSION['where'];
    header("Location: $where");
    die();
} else if ($_SESSION['tipo_utente'] == 'admin') {
    $_SESSION['status'] = 'Benvenuto nella <i>dashboard utenti</i>!';
}
$_SESSION['where'] = 'dashboardutenti.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Dashboard Utenti
    
</body>
</html>