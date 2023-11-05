<?php
    $noemail = "";
    $nonick = "";
    $nopassword = "";

    if(isset($_POST['submit'])){
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
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>KTopper</title>
</head>
<body>
    <div class="form">
        <div class="form__container">
            <a href="/pehap/ufo/" class="form__logo">KTopper</a>
            <h1>sign up</h1>
            <!-- <form action="form.php" method="post"> -->
            <form method="post">
                <label for="email">e-mail</label>
                <input type="email" name="email" id="email" placeholder="your e-mail address">
                <span><?php echo $noemail ?></span>
                <label for="nick">nickname</label>
                <input type="text" name="nick" id="nick" placeholder="your nickname">
                <span><?php echo $nonick ?></span>
                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="your secret password">
                <span><?php echo $nopassword ?></span>
                <!-- <input type="checkbox" value="I have read Privacy Policy of KTopper and agree to all of it."> -->
                <br>
                <input type="submit" value="sign me up">
                <!-- <button class="form__container--btn"><a href="/pehap/ufo/">Sign Up</a></button> -->
            </form>
        </div>
    </div>
</body>
</html>