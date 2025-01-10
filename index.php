<?php
session_start();
$_SESSION['where'] = 'index.php';
if ($_SESSION['login'] == false) {
    $_SESSION['login'] = false;
} else if ($_SESSION['login'] == true) {
    $_SESSION['login'] = true;
}
?>

<?php include 'includes/header.php';?> 
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
        } else if ($_SESSION['login'] == true) {
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

     <?php include 'includes/link.php';?>

    <br><br><br>
    <?php
    if ($_SESSION['login'] == false) {
        include 'includes/test.php';
        }
    if ($_SESSION['login'] == true) {
        include 'includes/shop.php';
    }
    ?>
    <div class="placeholderAgrario">
    <?php include 'includes/placeholder.php';?>
    </div>
</body>
</html>