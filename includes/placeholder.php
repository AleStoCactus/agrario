<?php
//prende i dati dei prodotti in base all'id
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
}

//ciclo per verificare se l'id del prodotto esiste nel database
for($i = 1; $i <= 25; $i++) {
    $sql = "SELECT * FROM prodotti WHERE ID_prodotto = $i";
    $result = $connessione->query($sql);
    $row = $result->fetch_assoc();
    if ($row != NULL) {
        //echo 'ID: ' . $row['ID_prodotto'] . '<br>';
        //echo 'Nome: ' . $row['nome'] . '<br>';
        //echo 'Prezzo: ' . $row['prezzo'] . '€' . '<br>';
        ?>
        <div class="card">
            <img src="resources/uwu.jpg" class="card-img-top" alt="..." width="200px" height="200px">
            <div class="card-body">
                <h5 class="card-title">
                    <?php echo $row['nome']; ?>
                </h5>
                <p class="card-text">
                    <?php echo $row['descrizione']; ?>
                </p>
                <?php
                if ($_SESSION['login'] == true) {
                    ?>
                    <form action="includes/aggiungeordine.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['ID_prodotto'] ?>"/>
                        <button class="btn btn-primary" id="aggiungi" type="submit">
                            <?php echo $row['prezzo']; ?>€
                        </button>
                    </form>
                    <?php
                } else if ($_SESSION['login'] == false) {
                    ?>
                    <button data-bs-toggle="modal" data-bs-target="#exampleModal">Login</button>
                    <?php
                }
                ?>
            </div>
        </div>
        <?php
    } else {
    }
}

?>
