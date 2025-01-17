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

$numero = 1;
$nomeprodotto = $row['nome'];
$prezzoprodotto = $row['prezzo'];

echo $nomeprodotto . '<br>';
echo $prezzoprodotto . '<br>';

//Ottenere ID utente dalla email
$email = $_SESSION['email'];
$sql2 = "SELECT * FROM utenti WHERE email = '$email'";
$result2 = $connessione->query($sql2);
$row2 = $result2->fetch_assoc();

$ID_utente = $row2['ID_utente'];


//QUERY DI INSERIMENTO

//DATA ORDINE E STATO ORDINE
$data = date('Y-m-d H:i:s');

$stato_ordine = 'carrello';


$sql3 = "INSERT INTO ordini (utente_ID, dataordine, statoordine) VALUES ('$ID_utente', '$data', '$stato_ordine')";
if ($connessione->query($sql3) == true) {
    $_SESSION['status'] = 'Prodotto aggiunto all\'ordine!';
    header('Location: ../index.php');
} else {
    $_SESSION['status'] = 'Prodotto non aggiunto all\'ordine!';
    echo 'Errore di aggiunta: '.$connessione->error;
    header('Location: ../index.php');
}

//QUERY DI PRENDERE ID ORDINE

$sql4 = "SELECT * FROM ordini WHERE utente_ID = $ID_utente AND statoordine = 'carrello' AND dataordine = '$data'";
$result4 = $connessione->query($sql4);
$row4 = $result4->fetch_assoc();

$ID_ordine = $row4['ID_ordine'];

//QUERY DI INSERIMENTO SU DETTAGLI ORDINE



$sql5 = "INSERT INTO dettagli_ordini (ordine_ID, prodotto_ID, quantità_ordinata) VALUES ('$ID_ordine', '$ID_prodotto', '$numero')";

if ($connessione->query($sql5) == true) {
    $_SESSION['status'] = 'Prodotto aggiunto all\'ordine!';
    header('Location: ../index.php');
} else {
    $_SESSION['status'] = 'Prodotto non aggiunto all\'ordine!';
    echo 'Errore di aggiunta: '.$connessione->error;
    header('Location: ../index.php');
}


?>