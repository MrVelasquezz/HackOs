<?php
require 'connect.php';

$nick = $_POST['nick'];
$pin = $_POST['pass'];
$prom = $_POST['prom'];

if(strlen($nick) > 10 || strlen($nick) < 4){
    echo  'Wrong nick';
    exit();
}
if(strlen($pin) > 7 || strlen($pin) < 3 || !is_numeric($pin)){
    echo  'Wrong pin';
    exit();
}
if(strlen($prom) != 8){
    echo 'Wrong prom';
    exit();
}
else{
    if($prom == 81992345){
        global $if_admin;
        $if_admin = 1; #roleplayer
    }
    elseif($prom == 20198461){
        global $if_admin;
        $if_admin = 2; #spectator
    }
    else{
        echo 'Wrong promocode';
        exit();
    }
}

$check = "SELECT nickname FROM u_data WHERE nickname = '$nick'";
$result = $conn->query($check);

if($result->num_rows > 0){
    echo 'Это имя уже занято';
    exit();
}
else{
    $new_register = "INSERT INTO u_data (nickname, pin, if_admin)
    VALUES ('$nick', '$pin', '$if_admin')";

    $conn->query($new_register);
}

$conn->close();
exit();


