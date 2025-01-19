<?php
session_start();

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
$tipo_utente = 'cliente';

//HASH PASSWORD
$hash = password_hash($password, PASSWORD_BCRYPT);

//CONTROLLO SE EMAIL GIA' ESISTENTE PER LA REGISTRAZIONE
$sql2 = "SELECT * FROM utenti WHERE email = '$email'";

if ($connessione->query($sql2)->num_rows > 0) {
    $_SESSION['login'] = false;
    $_SESSION['status'] = 'Email già esistente!';
    header('Location: ../index.php');
} else {
    //QUERY DI INSERIMENTO
    $sql = "INSERT INTO utenti (nome, email, password, tipo_utente) VALUES ('$nome', '$email', '$hash', 'cliente')";

    //CONTROLLO SE ESEGUITA QUERY
    if ($connessione->query($sql) == true) {
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        $_SESSION['tipo_utente'] = $tipo_utente;
        $_SESSION['login'] = true;
        $_SESSION['status'] = 'Registrazione avvenuta con successo!';
        header('Location: ../index.php');
    } else {
        $_SESSION['login'] = false;
        $_SESSION['status'] = 'Registrazione non valida!';
        echo 'Errore di registrazione: '.$connessione->error;
        header('Location: ../index.php');
    }
}


?>