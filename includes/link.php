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
            <a href="index.php">Dashboard Utenti</a>
            <?php 
            if ($_SESSION['where'] == 'dashboard.php') {
                ?>
                </b>
                <?php
        }
        ?>
        <?php
        if ($_SESSION['login'] == true) {
            ?>
            <a href="includes/logout.php" id="logout">Logout</a>
            <?php
        } else if ($_SESSION['login'] == false) {
            ?>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal" id="logout">Login</a>
            <?php
        }
        ?>
    </div>