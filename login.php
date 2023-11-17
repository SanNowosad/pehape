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
            <form action=".php" method="get">
                <label for="nick">nickname</label>
                <input type="text" name="nick" id="nick" placeholder="your nickname" value="<?php echo $_GET['nick'];?>">
                <span><?php if ($_GET['nick']==""){
                        echo "No nickname";} ?></span>
                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="your secret password">
                <span><?php if ($_GET['password']==""){
                        echo "No password";} ?></span>
                <br>
                <input type="submit" name="submit" value="log me in">
                <p>Don't have an account? <a href=signup.php>sign up</a></p>
            </form>
        </div>
    </div>
</body>
</html>