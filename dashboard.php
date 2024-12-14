<?php
session_start();
if ($_SESSION['login'] == false) {
    $_SESSION['status'] = 'Effettua il login per accedere alla <i>dashboard</i>!';
    header('Location: index.php');
    die();
}
if ($_SESSION['login'] == true && $_SESSION['tipo_utente'] != 'admin') {
    $_SESSION['status'] = 'Devi essere utente di tipo <i>admin</i> per accedere a questa pagina!';
    header('Location: index.php');
    die();
}
$_SESSION['where'] = 'dashboard.php';


?>

<?php include 'includes/header.php';?>  
    <title>Dashboard</title>
    <link rel="stylesheet" href="includes/style.css">

    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: linear-gradient(45deg, #609966, #9DC08B);
        }
    </style>
</head>
<body>
    <?php include 'includes/link.php';?>
    <br><br><br>
    <div class="Utenti">
    <h3>Lista utenti</h3>
    <?php
    //Dare privilegi di amministratore agli utenti

    $connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

    if ($connessione->connect_error) {
        die('Errore di connessione: '.$connessione->connect_errno);
    } else {
    }

    $sql = "SELECT * FROM utenti";
    $result = $connessione->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo 'Nome: ' . $row['nome'] . '<br>';
            echo 'Email: ' . $row['email'] . '<br>';
            echo 'Tipo utente: ' . $row['tipo_utente'] . '<br>';
            echo '<br>';
            echo '<br>';
        }
    } else {
        echo 'Nessun utente trovato!';
    }

    $sql = "SELECT * FROM utenti";
    $result = $connessione->query($sql);
    ?>
    
    <h3>Modifica tipo utente</h3>
    <form action="includes/changeusertype.php" method="post">
        <select name="email" id="tipo_utente">
            <?php
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<option value="' . $row['email'] . '">' . $row['email'] . '</option>';
                    }
                }
            ?>
        </select>
        <br>
        <select name="tipo_utente" id="tipo_utente">
            <option value="cliente">cliente</option>
            <option value="admin">admin</option>
        </select>
        <button id="conferma" type="submit">Conferma</button>
    </form>
    <?php
    if (isset($_SESSION['status'])) {
    ?>
        <br>
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Well done!</h4>
        <p>Il tipo di utente è stato cambiato con successo.</p>
        <hr>
        <p class="mb-0">Adesso l'utente avrà/non avrà i privilegi di amministratore.</p>
        <br>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        <?php
    } 
    ?>
    </div>
    <div class="Utenti">
    <h3>Crea un prodotto</h3>
    <form action="includes/creategood.php" method="post">
        <input type="text" name="nome" id="nome" placeholder="Nome" required>
        <input type="text" name="descrizione" id="descrizione" placeholder="Descrizione" required>
        <input type="text" name="prezzo" id="prezzo" placeholder="Prezzo" required>
        <input type="text" name="quantita" id="quantita" placeholder="Quantità" required>
        <br>
        <button id="conferma" type="submit">Crea</button>
    </form>
    <?php
    unset($_SESSION['status']); 
    ?>
    </div>
    <img src="resources/PEPPER.png" id="pepper">
</body>
</html>