<?php
session_start();
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
    <title>Progetto Agrario</title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <?php
        if ($_SESSION['login'] == false) {
            if (isset($_SESSION['status'])) {
                ?>
                    <div class="alert alert-danger" role="alert">
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
    <link rel="stylesheet" href="style.css">
<body>
    <div class="topnav">
        <a>Home</a>
        <a>News</a>
        <a>Contattaci</a>
        <a>Chi siamo</a>
    </div> 

    <br><br><br>
    <div class="login-form">
    <h2>Login</h2>
    <form action="includes/login.php" method="post">
        <input type="email" class="textbox" id="email" name="email" placeholder="E-mail" required>
        <br>
        <br>
        <input type="password" class="textbox" id="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Login</button>
    </form>
    </div>
    <div class="register-form">
    <h2>Register</h2>
    <form action="includes/register.php" method="post">
        <input type="text" class="textbox" id="nome" name="nome" placeholder="Nome" required>
        <br>
        <br>
        <input type="email" class="textbox" id="email" name="email" placeholder="E-mail" required>
        <br>
        <br>
        <input type="password" class="textbox" id="password" name="password" placeholder="Password" required>
        <br>
        <button type="submit">Register</button>
    </form>
    </div>
</body>
</html>