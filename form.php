<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $email = htmlspecialchars($_POST['email']);
    $nick = htmlspecialchars($_POST['nick']);
    $password = htmlspecialchars($_POST['password']);

    if(empty($email)){
        $noemail = 1;
    }
    else if(empty($nick) or empty($password)){
        $nonick = 1;
    }
    else if(empty($password)){
        $nopassword = 1;
    }
    else {
        $noemail = 0;
        $nonick = 0;
        $nopassword = 0;
    }

}
else {
    header("Location: index.html");
}
?>