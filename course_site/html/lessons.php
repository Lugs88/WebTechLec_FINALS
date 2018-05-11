<<?php
    session_start();
    include_once '../php/db-inc.php';
  //  include_once 'php/log-in-inc.php';
  //  include_once 'php/sign-up-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Lessons</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <?php
    if(isset($_SESSION['logged_in']))
    {
      include_once '../user-header.php';
    }
    else
    {
      include_once '../general-header.php';
    }

  ?>
    <div class="cover">
        <div class="bg-item" style="background-image: url(../img/bg1.jpg)">
        </div>
    </div>

    <div class="container pt-5 mb-10 text-justify">
        <h1>Lesson Path</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
        <div class="row mt-3">
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/servlets.png" alt="Java Servlet Logo">
                        <h5 class="card-title">Java Servlets</h5>
                        <p class="card-text">Insert some text here...</p>
                        <a href="java-servlets.html" class="btn btn-dark">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/php.svg" alt="PHP Logo">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">Insert some text here...</p>
                        <a href="php.html" class="btn btn-dark">Read more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/nodejs.png" alt="NodeJS Logo">
                        <h5 class="card-title">NodeJS</h5>
                        <p class="card-text">Insert some text here...</p>
                        <a href="nodejs.html" class="btn btn-dark">Read more...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="row">
            <div class="col-sm-5 mr-10">
               <div class="nav-footer mb-3">
                    <a href="../index.html">Home</a>
                    <a href="lessons.html">Lessons</a>
                    <a href="#">Self-Assessment</a>
                    <a href="#">About Us</a>
               </div>
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent tristique ac diam in vestibulum. Vivamus vitae vestibulum ligula. Duis facilisis ut sapien at tincidunt. Nunc vel rhoncus quam, sit ametimg aliquam neque</p>
            </div>
            <div class="col-sm-5 r-0">
                <a href="../index.html"><img src="../img/webtech2.png" alt="logo"></a>
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

    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>
