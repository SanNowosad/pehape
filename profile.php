<?php
session_start();
if (!isset($_SESSION['logged_user'])) {
    header("Location: index.html");
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
     <!-- Navbar section -->
     <nav class="navbar">
        <a href="/pehap/ufo/" class="navbar__logo">KTopper</a>
        <div class="navbar__bars">
            <i class="fas fa-bars">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                <path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/></svg>
            </i>
        </div>
        <div class="navbar__menu">
            <a href="/" class="navbar__menu--links">home</a>
            <a href="/" class="navbar__menu--links">news</a>
            <a href="/" class="navbar__menu--links">contact</a>
            <a href="/pehap/ufo/#" class="navbar__menu--links" id="button">log out</a>
        </div>
    </nav>

    <div class="content">
        <div class="content__container">
            <?php
                echo "<h2>hi ".$_SESSION['nick']."<br/> here you can see all your data we hold</h2>";
                echo "<p>your nick is ".$_SESSION['nick']."</p>";
                echo "<p>your email is ".$_SESSION['email']."</p>";
                echo "<p>and your password is... a secret!</p>";
            ?>
        </div>
    </div>
</body>
</html>