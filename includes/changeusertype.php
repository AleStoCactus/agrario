<?php
session_start();

//CONNESSIONE AL DATABASE
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
    echo 'Connessione riuscita <br>';
}


//CONTROLLO DATI ESISTENTI
$email = $_POST['email'];
$tipo_utente = $_POST['tipo_utente'];

$sql = "UPDATE utenti SET tipo_utente = '$tipo_utente' WHERE email = '$email'";
$result = $connessione->query($sql);

if ($result == true) {
    $_SESSION['status'] = 'Tipo utente modificato con successo!';
    header('Location: ../dashboard.php');
} else {
    $_SESSION['status'] = 'Errore di modifica tipo utente!';
    header('Location: ../dashboard.php');
}
?>