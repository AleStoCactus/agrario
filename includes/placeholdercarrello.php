<?php
//prende i dati dei prodotti in base all'id
$connessione = new mysqli('localhost', 'root', '', 'progettoagrario');

if ($connessione->connect_error) {
    die('Errore di connessione: '.$connessione->connect_errno);
} else {
}

$email = $_SESSION['email'];
echo $email;


//ciclo per verificare se l'id del prodotto esiste nel database
for($i = 1; $i <= 100; $i++) {
    $sql69 = "SELECT * FROM utenti WHERE email = '$email'";
    $result69 = $connessione->query($sql69);
    $row69 = $result69->fetch_assoc();
    
    $ID_utente = $row69['ID_utente'];
    echo $ID_utente;

    if ($row69 == NULL) {
    } else {
        $sql = "SELECT * FROM ordini WHERE utente_ID = $ID_utente AND ID_ordine = $i";
        $result = $connessione->query($sql);
        $row = $result->fetch_assoc();

        if ($row == NULL) {
        } else {
            $ID_ordine = $row['ID_ordine'];

            $sql2 = "SELECT * FROM dettagli_ordini WHERE prodotto_ID = $ID_ordine";
            $result2 = $connessione->query($sql2);
            $row2 = $result2->fetch_assoc();
        
        if ($row2 == NULL) {
        } else {
            $prodotto_ID = $row2['prodotto_ID'];

            $sql3 = "SELECT * FROM prodotti WHERE ID_prodotto = $prodotto_ID";
            $result3 = $connessione->query($sql3);
            $row3 = $result3->fetch_assoc();
            if ($row3 != NULL) {
                //echo 'ID: ' . $row3['ID_prodotto'] . '<br>';
                //echo 'Nome: ' . $row3['nome'] . '<br>';
                //echo 'Prezzo: ' . $row3['prezzo'] . '€' . '<br>';
                ?>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $row3['nome']; ?>
                        </h5>
                        <p class="card-text">
                            <?php echo $row3['descrizione']; ?>
                        </p>
                    </div>
                </div>
                <?php
            } else {
            }
            }
        }
    }
}

?>