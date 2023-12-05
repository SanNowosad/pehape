<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <title>KTopper</title>
</head>
<body>
    <div class="content">
        <?php
            session_start();
            echo "<h2>hi ".$_SESSION['nick']."<br/> here you can see all your data we hold</h2>";
            echo "<p>your nick is ".$_SESSION['nick']."</p>";
            echo "<p>your email is ".$_SESSION['email']."</p>";
            echo "<p>And your password is... a secret!</p>";
        ?>
    </div>
</body>
</html>