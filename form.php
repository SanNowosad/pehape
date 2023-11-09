<?php


if ($_SERVER["REQUEST_METHOD"]=="POST"){

    $noemail = "";
    $nonick = "";
    $nopassword = "";

    // if(isset($_POST['submit'])){
        $email = htmlspecialchars($_POST['email']);
        $nick = htmlspecialchars($_POST['nick']);
        $password = htmlspecialchars($_POST['password']);

        if(empty($email)){
            $noemail = "type in your email";
        }
        if(empty($nick) or empty($password)){
            $nonick = "type in your nickname";
        }
        if(empty($password)){
            $nopassword = "type in your password";
        }
        echo "email $email; nick $nick; pass $password";
        header("Location: signup.php");
    // }
}
else {
    header("Location: index.html");
}
?>