<?php
  include_once '../php/sign-up-inc.php';
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sign Up</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
  </head>

  <body>
    <?php
      include_once '../general-header.php';
    ?>

    <div class="cover">
        <div class="bg-item-sm" style="background-image: url(../img/bg3.jpg)"></div>
    </div>

    <div class="container">
          <div class="row" style="margin-bottom: 15%;">
              <div class="col-md-12">
                  <form class="needs-validation"role="form" method="POST" action="../php/sign-up-inc.php">
                      <fieldset>
                          <legend><h3 class='mt-4'>Account Details</h3></legend>

                          <div class="form-group col-md-6">
                              <label for="firstname">First name</label>
                              <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Enter Firstname" required>
                          </div>

                          <div class="form-group col-md-6">
                              <label for="lastname">Last name</label>
                              <input type="text" class="form-control" name="lastname" id="lastname" placeholder="Enter Lastname" required>
                          </div>

                          <div class="form-group col-md-6">
                            <label for="username">Username </label>
                            <input type="text" class="form-control" name="username" id="username" placeholder="Enter Username" required>
                            <div class="invalid-feedback">
                              Please enter a username
                            </div>
                          </div>

                          <div class="form-group col-md-6">
                              <label for="gender">Gender</label>
                               <div class="radio" class="col-md-4">
                                  <label for="gender-0">
                                  <input type="radio" name="gender" id="gender-0" value="Male" checked="checked">
                                  Male
                                  </label>
                                  <label for="gender-1">
                                  <input type="radio" name="gender" id="gender-1" value="Female">
                                  Female
                                  </label>
                              </div>
                          </div>

                          <div class="form-group col-md-6">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email Address" required>
                              <div class="invalid-feedback">
                                Please enter a valid email address
                              </div>
                          </div>

                          <div class="form-group col-md-6">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password" required>
                              <div class="invalid-feedback">
                                  Please enter a password
                              </div>
                          </div>

                          <div class="form-group col-md-6">
                              <label for="confirm_password">Confirm Password</label>
                              <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required>
                          </div>

                      </fieldset>

                      <div class="form-group">
                          <div class="col-md-12">
                              <button type="submit" name="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <footer>       
        <div class="row"> 
          <div class="col-xl-6 text-left">
            <p>Saint Louis University, Maryheights Campus</p>  
            <p>School of Computing and Information Sciences</p> 
            <p>Web Systems and Technologies</p> 
        </div>
        <div class="col-xl-6 text-right">    
            <a href="../index.php"><img src="../img/webtech2.png" alt="logo"></a>
            <p>Copyright &copy; 2018 Webtech. All rights reserved.</p>  
          </div>
        </div>
      </footer>

    <script>
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');
        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
    </script>
  
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
  </body>
</html>
