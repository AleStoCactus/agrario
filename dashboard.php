<?php
session_start();
if ($_SESSION['login'] == false) {
    $_SESSION['status'] = 'Effettua il login per accedere alla <i>home</i>!';
    header('Location: index.php');
    die();
}
$_SESSION['where'] = 'dashboard.php';
?>

<?php include 'includes/header.php';?>  
    <title>Dashboard</title>
    <link rel="stylesheet" href="includes/style.css">
</head>
<body>
    <?php include 'includes/link.php';?>
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