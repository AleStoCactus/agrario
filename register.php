<?php

//CONNESSIONE AL DATABASE
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
    echo 'Connessione riuscita <br>';
}

//INSERIMENTO DATI NEL DATABASE
$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];

//HASH PASSWORD
$hash = password_hash($password, PASSWORD_BCRYPT);

//CONTROLLO SE EMAIL GIA' ESISTENTE PER LA REGISTRAZIONE
$sql2 = "SELECT * FROM utenti WHERE email = '$email'";

if ($connessione->query($sql2)->num_rows > 0) {
    die('Email già esistente');
}


//QUERY DI INSERIMENTO
$sql = "INSERT INTO utenti (nome, email, password, tipo_utente) VALUES ('$nome', '$email', '$hash', 'cliente')";

//CONTROLLO SE ESEGUITA QUERY
if ($connessione->query($sql) == true) {
    echo 'Registrazione avvenuta con successo';
} else {
    echo 'Errore di registrazione: '.$connessione->error;
}

header('Location: index.php'); //RITORNO LINK
?>