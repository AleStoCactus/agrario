    <div class="topnav">
        <?php 
        if ($_SESSION['where'] == 'index.php') {
            ?>
            <b>
            <?php
        }
        ?>
            <a href="index.php">Home</a>
            <?php 
            if ($_SESSION['where'] == 'index.php') {
                ?>
                </b>
                <?php
        }
        ?>
        
        <?php ?><?php ?>
            <a>News</a>
        <?php ?><?php ?>
        <?php ?><?php ?>
            <a>Contattaci</a>
        <?php ?><?php ?>
        <?php ?><?php ?>
            <a>Chi siamo</a>
        <?php ?><?php ?>
        <?php 
        if ($_SESSION['where'] == 'dashboard.php') {
            ?>
            <b>
            <?php
        }
        ?>
        <?php
        if ($_SESSION['login'] == true && $_SESSION['tipo_utente'] == 'admin') {
        ?>
            <a href="dashboard.php">Dashboard</a>
            <?php 
            if ($_SESSION['where'] == 'dashboard.php') {
                ?>
                </b>
                <?php
            }
        }
        ?>
        <?php
        if ($_SESSION['login'] == true) {
            ?>
            
            <a href="includes/logout.php" id="logout">Logout</a>
            <a data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight" id="logout">Carrello</a>
            <?php
        } else if ($_SESSION['login'] == false) {
            ?>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="logout">Login</a>
            <?php
        }
        ?>
    </div>