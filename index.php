<?php

//CONNESSIONE AL DATABASE
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
    echo 'Connessione riuscita';
}

//INSERIMENTO DATI NEL DATABASE
$nome = $_POST['nome'];
$email = $_POST['email'];
$password = $_POST['password'];

//QUERY DI INSERIMENTO
$sql = "INSERT INTO utenti (nome, email, password) VALUES ('$nome', '$email', '$password')";

//CONTROLLO SE ESEGUITA QUERY
if ($connessione->query($sql) == true) {
    echo 'Registrazione avvenuta con successo';
} else {
    echo 'Errore di registrazione: '.$connessione->error;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto Agrario</title>
</head>
<body>
    AAAAAAAAAAAAAAAA
</body>
</html>