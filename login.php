<?php
    session_start();

    $_SESSION['no_nick'] = "";
    $_SESSION['no_pass'] = "";
    $_SESSION['saved_nick'] = "";

    if ($_POST['nick']==""){
        $_SESSION['no_nick'] = "no nick povided";}
    if ($_POST['password']==""){
        $_SESSION['no_pass'] = "no password privided";
        if ($_POST['nick']!=""){
            $_SESSION['saved_nick'] = $_POST['nick'];
        }  
    }
    if ($_SESSION['no_nick']!="" or $_SESSION['no_pass']!=""){
        $_SESSION['no_user_found'] = "";
        header('Location: loginpage.php');
    }
    
    require_once "config.php";

    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    $userNick = $_POST['nick'];
    $userPassword = $_POST['password'];

    //echo $connection -> connect_errno; // kod błędu - 0 jeżeli wszystko jest OK
    //echo $connection -> connect_error; // opis błędu

    $sql = "SELECT * FROM users WHERE nick='$userNick' AND password='$userPassword'";
    // $result = $connection -> query($sql);

    if($result = $connection -> query($sql)) {
        // jeżeli ilość zwróconych wierszy jest większa niż 0
        if($result -> num_rows > 0) {
        // zwraca dane w tabicy asocjacyjnej, które odpowiadają wierszowi z bazy danych
            $data = $result -> fetch_assoc();
            $_SESSION['nick'] = $data['nick'];
            $_SESSION['password'] = $data['password'];
            $_SESSION['email'] = $data['email'];
            $result -> close();
            $_SESSION['logged_user'] = $data['id'];
            header('Location: profile.php');
        } else {
            $_SESSION['no_user_found'] = "we couldn't find any user with that data";
            header('Location: loginpage.php');
        }
    }

    $connection -> close();
?>