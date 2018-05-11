<?php
  include_once '../php/log-in-inc.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body style="background: linear-gradient(-90deg, #27ab9b, #00baad)">
   <div class="login-message">
            <h4>Learn web technologies</h4>
    </div>
    <div class="login-form">
        <img src="../img/logo.png" alt="Webtech Logo">
        <form method="POST" role="form" action="../php/log-in-inc.php"  class="login">
          <label for="username">Username </label>
          <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>

          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>

          <input type="submit" value="Login">
          <p class="lead">Don't have an account? <a href="sign-up.php">Sign up</a></p>
        </form>
    </div>

    <!--
    <div class="container">
          <div class="row" style="margin-bottom: 15%;">
              <div class="col-md-12">
                  <form class="needs-validation"role="form" method="POST" action="../php/sign-up-inc.php">
                      <div class="form-group col-md-6">
                        <label for="username">Username </label>
                        <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
                        <div class="invalid-feedback">
                          Please enter a username
                        </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>
    -->
</body>
</html>
