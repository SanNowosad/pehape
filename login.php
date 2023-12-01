<?php
    require_once "config.php";

    $connection = new mysqli($host, $db_user, $db_password, $db_name);

    $userNick = $_POST['nick'];
    $userPassword = $_POST['password'];

    echo $connection -> connect_errno; // kod błędu - 0 jeżeli wszystko jest OK
    echo $connection -> connect_error; // opis błędu

    $sql = "SELECT * FROM users WHERE nick='$userNick' AND password='$userPassword'";
    $result = $connection -> query($sql);

    if($result = $connection -> query($sql)) {
        // jeżeli ilość zwróconych wierszy jest większa niż 0
        if($result -> num_rows > 0) {
        // zwraca dane w tabicy asocjacyjnej, które odpowiadają wierszowi z bazy danych
        $data = $result -> fetch_assoc();
        $user = $data['user'];
        $email = $data['email'];
        $result -> close();
        } else {
        echo "Taki użytkownik nie istnieje";
        }
        }

    $connection -> close();
?>