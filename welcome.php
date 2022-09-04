<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Rhognarok | Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Inconsolata&display=swap" rel="stylesheet"> 
</head>
<body>
    <div class="wrapper">
        <h2>Hello, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. 
        <br>Welcome to Rhognarok!</h2>
        <p>
            <a href="src/rhognarok-client.zip" class="btn btn-dark download" download >Download!</a>
        </p>
        <p>
            <a href="reset-password.php" class="welcome-link">Reset Your Password‎‎‎‎‎‎‎‎‎</a><br>
            <a href="logout.php" class="welcome-link">Sign Out of Your Account</a>
        </p>

        <img src="imgs/bard.png" alt="Group of adventurers." class="group">
    </div>
</body>
</html>