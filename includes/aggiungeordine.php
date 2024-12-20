<?php
session_start();

//CONNESSIONE AL DATABASE
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
    echo 'Connessione riuscita <br>';
}

$ID_prodotto = $_POST['id'];

echo $ID_prodotto . '<br>';

$sql = "SELECT * FROM prodotti WHERE ID_prodotto = $ID_prodotto";
$result = $connessione->query($sql);
$row = $result->fetch_assoc();

$nome = $row['nome'];
$prezzo = $row['prezzo'];

echo $nome . '<br>';
echo $prezzo . '<br>';




?>