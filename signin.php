<?php session_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/login.css">
    <link rel="stylesheet" href="styles/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
        body {
            height: 100vh;
            width: 100vw;
            width: 100%;
            background: url('bg.png'), #000;
            background-position: center center;
            background-repeat: no-repeat;
        }

        .section {
            height: 100vh;
            background: rgba(45, 52, 54, 0.7);
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="section d-flex justify-content-center align-items-center">

        <div class="auth_window flex-column justify-content-center align-items-center">
            <input type="text" placeholder="Nickname" class="nick mx-3 my-3 border-0" maxlength="10"
                minlength="4" autofocus>
            <input type="password" maxlength="6" minlength="6" class="pass mx-3 border-0 " placeholder="Pin-code">
            <p class="err_msg text-white text-center mx-2 mb-0 mt-2"></p>
            <div class="btns">
                <button class="submit my-3 border-0" id="auth">Enter</button>
                <button class="to-register my-3 border-0">To Sign in</button>
            </div>
            
        </div>

        <div class="reg_window flex-column justify-content-center align-items-center">
            <input type="text" placeholder="Nickname" class="rnick mx-3 border-0 border-bottom border-white border-right-0 border-left-0 border-top-0" maxlength="10" minlength="4" autofocus>
            <input type="password" maxlength="6" minlength="6" class="rpass mx-3 border-0  my-3 border-bottom border-white border-right-0 border-left-0 border-top-0" placeholder="Pin-code">
            <input type="text" placeholder="Promocode" class="rprom mx-3 border-0 border-bottom border-white border-right-0 border-left-0 border-top-0" maxlength="8" minlength="8">
            <p class="err_msg text-white text-center mx-2 mb-0 mt-2"></p>
            <div class="btns">
                <button class="submit my-3 border-0" id="sign">Enter</button>
                <button class="to-login my-3 border-0">To Login</button>
            </div>
        </div>

    </div>

    <script src="scripts/signin.js"></script>
    <script src="scripts/login_windows.js"></script>
    <script src="scripts/outlines.js"></script>
</body>

</html>