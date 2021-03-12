<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="styles/window.css">
    <link rel="stylesheet" href="styles/brut_win.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        .tmsgbox .tmsg code {
            color: greenyellow;
        }

        .tmsg code {
            color: greenyellow;
        }

        .ip {
            color: red;
        }
    </style>
    <title>Hack OS</title>

</head>

<body class="p-0 m-0">

    <?php 
        require 'page-parts/top-bar.php';
    ?>

    <main class="container-fluid d-flex p-0 m-0">

        <?php 
            require 'page-parts/nav-bar.php';
            require 'page-parts/desktop.php';
            require 'programs-php/terminal.php';
            require 'programs-php/brutforce.php';
        ?>

    </main>
    <script src="scripts/clock.js"></script>
    <script src="scripts/outlines.js"></script>
    <script src="scripts/shutdown.js"></script>
    <?php
        if($_SESSION['user']['admin'] == 1 || $_SESSION['user']['admin'] == 2){
            echo '<script src="scripts/win_manipulation.js"></script>';
        }
    ?>
    <?php
    if($_SESSION['user']['admin'] == 1 ){
        echo '<script type="module" src="terminal/terminal.js"></script>';
    }
    ?>
</body>

</html>