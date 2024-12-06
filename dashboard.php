<?php
session_start();
if ($_SESSION['login'] == false) {
    $_SESSION['status'] = 'Effettua il login per accedere alla dashboard!';
    header('Location: index.php');
    die();
}
$_SESSION['where'] = 'dashboard.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Dashboard</title>
    <link rel="stylesheet" href="includes/style.css">
    </script>
</head>
<body>
    <?php
        if ($_SESSION['login'] == true) {
            if (isset($_SESSION['status'])) {
                ?>
                    <div class="alert alert-success" role="alert">
                    <strong>Hey! </strong> <?php echo $_SESSION['status']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>  
                <?php
            }
        } 
        unset($_SESSION['status']);
    ?>

<body>
    <div class="topnav">
        <a href="dashboard.php">Home</a>
        <a>News</a>
        <a>Contattaci</a>
        <a>Chi siamo</a>
        <a href="dashboardutenti.php">Dashboard Utenti</a>
        
        <a id="logout"><?php echo $_SESSION['nome']; ?></a>
        <button onclick="window.location='includes/logout.php';" value="Logout" id="logoutB"><a>Logout</a></button>
        
    </div>
    
    <br><br><br>
    <button class="collapsible">Don't open this</button>
    <div class="content">
    
    <button onclick="window.location='secret.php';" value="Logout" id="button2"><img src="resources/download.jpg"></button>
    </div>
    

    <script>
    var coll = document.getElementsByClassName("collapsible");
    var i;

    for (i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var content = this.nextElementSibling;
        if (content.style.maxHeight){
        content.style.maxHeight = null;
        } else {
        content.style.maxHeight = content.scrollHeight + "px";
        } 
    });
    }
    </script>
</body>
</html>