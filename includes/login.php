<?php
session_start();

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
$sql3 = "SELECT nome FROM utenti WHERE email = '$email'";
$result2 = $connessione->query($sql2);
$result4 = $connessione->query($sql3);

//CONVERTIRE ARRAY IN STRINGA
$result3 = $result2->fetch_assoc()['password'];
$nome = $result4->fetch_assoc()['nome'];
echo $nome . '<br>';

//VERIFICA PASSWORD SE E' UGUALE A QUELLA INSERITA
$hash = password_verify($password, $result3);
echo $hash . '<br>';
echo $result3 . '<br>';

$sql = "SELECT * FROM utenti WHERE email = '$email' AND password = '$result3'";
$result = $connessione->query($sql);



//CONTROLLO SE ESEGUITA QUERY
if ($result->num_rows > 0) {
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;
    $_SESSION['password'] = $password;
    $_SESSION['login'] = true;
    $_SESSION['status'] = 'Login avvenuto con successo!';
    header('Location: ../dashboard.php');
} else {
    $_SESSION['login'] = false;
    $_SESSION['status'] = 'Email o passowrd errati!';
    echo 'Errore di login: '.$connessione->error;
    header('Location: ../index.php');
}
?>