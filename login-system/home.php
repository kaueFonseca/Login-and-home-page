<?php
    session_start();
    include("php/config.php");
    if (!isset($_SESSION['valid'], $_SESSION['Id'])) {
        header("Location: index.php");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--estilo -->
    <link rel="stylesheet" href="style/estilo/home.css">
    <!--icones -->
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    
    <title>home</title>
</head>
<body>
    <main>
        <?php include "cabecalho.php" ?>

        <?php include "sidebar.php" ?>

        <p>olá</p>
    </main>
    
   
</body>
</html>