<?php
session_start();

echo $_SESSION['nome'] . '<br>';

$_SESSION['login'] = false;
$_SESSION['nome'] = 'guest';
$_SESSION['email'] = 'guest';
$_SESSION['password'] = 'guest';

echo $_SESSION['nome'] . '<br>';

session_abort();

header('Location: ../index.php');
?>