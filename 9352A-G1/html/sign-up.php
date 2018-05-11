<?php
  include_once '../php/sign-up-inc.php';
?>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <script type="text/javascript" src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../js/jquery.min.js"></script>
    <script src="../js/jquery.slim.min.js"></script>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title></title>
    <style type="text/css">
      .bg-dark {
          background: linear-gradient(to left, #2a7b9b, #00baad) !important;
          box-shadow: 0.5rem 0.1rem 0.5rem 0.1rem rgba(108, 117, 125, 0.5);
      }
      nav {
        position: static !important;
      }
    </style>
  </head>

  <body>
    <header>

        <nav id="scroll-nav" class="navbar navbar-expand-lg navbar-dark bg-dark pl-10">
            <a href="../index.php" class="navbar-brand">
                <img src="../img/webtech2.png" alt="logo">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapse-btn" aria-controls="collapse-btn" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="collapse-btn">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="../html/lessons.html" class="nav-link dropdown-toggle mr-3" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Lessons</a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="./java-servlets.html" class="dropdown-item">Lesson 1: Servlets</a>
                            <a href="php.html" class="dropdown-item">Lesson 2: PHP</a>
                            <a href="nodejs.html" class="dropdown-item">Lesson 3: Node.js</a>
                       </div>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link mr-3">Self-Assessment</a>
                   </li>
                   <li class="nav-item">
                       <a href="#" class="nav-link">About Us</a>
                   </li>
               </ul>
           </div>
        </nav>
    </header>

    <div class="container">
          <div class="row" style="margin-bottom: 15%;">
              <div class="col-md-12">
                  <form class="needs-validation"role="form" method="POST" action="../php/sign-up-inc.php">
                      <fieldset>
                          <legend>Account Details</legend>

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
              <div class="col-sm-5 mr-10">
                 <div class="nav-footer mb-3">
                      <a href="index.html">Home</a>
                      <a href="../html/lessons.html">Lessons</a>
                      <a href="#">Self-Assessment</a>
                      <a href="#">About Us</a>
                 </div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
              </div>
              <div class="col-sm-5 r-0">
                  <a href="index.html"><img src="../img/webtech2.png" alt="logo"></a>
                  <p class="text-copyright">Copyright &copy; 2018 Webtech. All rights reserved.</p>
                  <div class="links mt-4">
                      <a href="#"><img src="../img/github.svg" alt="Github Logo"></a>
                      <a href="http://www.oracle.com/technetwork/java/javaee/servlet/index.html"><img src="../img/servlets.png" alt="Java Servlets Logo"></a>
                      <a href="http://php.net/manual/en/tutorial.php"><img src="../img/php.svg" alt="PHP Logo"></a>
                      <a href="https://nodejs.org/api/"><img src="../img/nodejs.png" alt="NodeJS Logo"></a>
                  </div>
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

  </body>
</html>
