<?php
  include_once '../php/log-in-inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>    
    <link rel="stylesheet" href="../css/bootstrap.css">    
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
</head>

<body class="body-login">
    <div class="login-form">
        <img src="../img/logo1.png" alt="Webtech Logo">
        <form method="POST" role="form" action="../php/log-in-inc.php"  class="login">
            <input type="text" class="form-control" name="username" placeholder="Username or Email" required>
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <input type="submit" value="Login">
            <p class="lead">Don't have an account? <a href="sign-up.php">Sign up</a></p>
            <p class="white-text text-left ml-10">&larr; Back to <a href="../index.php">Webtech</a></p>
        </form>
    </div>
</body>
</html>