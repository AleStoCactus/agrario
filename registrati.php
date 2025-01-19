<?php
session_start();
$_SESSION['where'] = 'registrati.php';
?>

<?php include 'includes/header.php';?> 
    <title>Registrati</title>
    <link rel="stylesheet" href="includes/style.css">
    <link rel="stylesheet" href="includes/style2.css">
    <style>
        body {
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-image: linear-gradient(45deg, #609966, #9DC08B);
        }
    </style>
    
</head>
<body>
    <div class="topnav">
        <a href="index.php">Home</a>
    </div> 

    <br><br><br>
    <div class="register-form">
    <h2>Register</h2>
    <br>
    <form action="includes/register.php" method="post">
        <input type="text" class="textbox2 shadow" id="nome" name="nome" placeholder="Nome" required>
        <br>
        <br>
        <input type="email" class="textbox2 shadow" id="email" name="email" placeholder="E-mail" required>
        <br>
        <br>
        <input type="password" class="textbox2 shadow" id="password" name="password" placeholder="Password" required>
        <br><br><br>
        <button class="text" id="registrati2" type="submit">
            <span>
                Register
            </span>
        </button>
    </form>
    </div>

    <img src="resources/ruby.webp" id="ruby">
</body>
</html>