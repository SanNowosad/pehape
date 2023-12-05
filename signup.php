<?php
    require_once "config.php";

    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    $userMail = $_GET['email'];
    $userNick = $_GET['nick'];
    $userPassword = $_GET['password'];

    echo $connection -> connect_errno; // kod błędu - 0 jeżeli wszystko jest OK
    echo $connection -> connect_error; // opis błędu

    $sql = "INSERT INTO users VALUES(email='$userMail', nick='$userNick', password='$userPassword'";
    $result = $connection -> query($sql);

    $connection -> close();
?>