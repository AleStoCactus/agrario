<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Progetto Agrario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="topnav">
        <a>Home</a>
        <a>News</a>
        <a>Contattaci</a>
        <a>Chi siamo</a>
    </div> 
    <div class="login-form">
    <h2>Login</h2>
    <form action="login.php" method="post">
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
    <form action="register.php" method="post">
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