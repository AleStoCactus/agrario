<?php
session_start();

echo $_SESSION['nome'] . '<br>';

$_SESSION['login'] = false;
$_SESSION['nome'] = 'guest';
$_SESSION['email'] = 'guest';
$_SESSION['password'] = 'guest';
$_SESSION['status'] = 'Logout avvenuto con successo!';
$_SESSION['itemcarrello'] = false;

echo $_SESSION['nome'] . '<br>';

header('Location: ../index.php');
?>