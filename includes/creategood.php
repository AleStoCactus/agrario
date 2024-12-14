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
$nome = $_POST['nome'];
$descrizione = $_POST['descrizione'];
$prezzo = $_POST['prezzo'];
$quantità = $_POST['quantita'];

$sql = "INSERT INTO prodotti (nome, descrizione, prezzo, quantità) VALUES ('$nome', '$descrizione', '$prezzo', '$quantità')";
$result = $connessione->query($sql);

if ($result == true) {
    header('Location: ../dashboard.php');
} else {
    header('Location: ../dashboard.php');
}

?>