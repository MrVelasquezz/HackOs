<?php
    session_start();

    if(!$_SESSION['user']){
        require 'signin.php';
    }
    else{
        require 'os.php';
    }
