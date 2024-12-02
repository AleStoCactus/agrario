<?php

//CONNESSIONE AL DATABASE
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
    echo 'Connessione riuscita <br>';
}


//CONTROLLO DATI LOGIN ESISTENTI
$email = $_POST['email'];
$password = $_POST['password'];


$sql2 = "SELECT password FROM utenti WHERE email = '$email'";
$result2 = $connessione->query($sql2);

//CONVERTIRE ARRAY IN STRINGA
$result3 = $result2->fetch_assoc()['password'];

//VERIFICA PASSWORD SE E' UGUALE A QUELLA INSERITA
$hash = password_verify($password, $result3);
echo $hash . '<br>';
echo $result3 . '<br>';

$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$result3'";
$result = $connessione->query($sql);



//CONTROLLO SE ESEGUITA QUERY
if ($result->num_rows > 0) {
    echo 'Login avvenuto con successo <br>';
} else {
    echo 'Errore di login: '.$connessione->error;
}

//SE LOGIN AVVENUTO CON SUCCESSO
if ($result->num_rows > 0) {
    session_start();
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['login'] = true;
    $_SESSION['status'] = 'Login avvenuto con successo';
} else {
    echo 'Errore di login: '.$connessione->error;
}


header('Location: ../index.php'); //RITORNO LINK
?>