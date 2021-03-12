<?php
    session_start();
    require 'connect.php';

    $nick = $_POST['nick'];
    $pin = $_POST['pass'];

    $check = "SELECT id, nickname, pin, if_admin FROM u_data WHERE nickname = '$nick' and pin = '$pin'";
    $result = $conn->query($check);

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $_SESSION['user'] = [
                'id' => $row['id'],
                'nick' => $row['nickname'],
                'pin' => $row['pin'],
                'admin' => $row['if_admin'],
                'os' => 'HackOs'
            ];

        }

    }
    else{
        session_unset();
        session_destroy();
        echo 'Неверный логин или пароль';
    }
    $conn->close();
    exit();