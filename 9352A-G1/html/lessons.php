<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Java Servlets</title>
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
        <div class="bg-item-sm" style="background-image: url(../img/bg2.jpg)">
        </div>
    </div>
    
    <div class="container pt-5 mb-10 text-justify">
        <h1 class="text-center">Learning Paths</h1>
        <div class="row mt-8">
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/servlets.png" alt="Java Servlet Logo">
                        <h5 class="card-title">Java Servlets</h5>
                        <p class="card-text">Java Servlets are programs that can be run on the Web Server or Application Server...</p>
                        <a href="java-servlets.php" class="btn btn-dark">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/php.svg" alt="PHP Logo">
                        <h5 class="card-title">PHP</h5>
                        <p class="card-text">A is a very popular scripting language. PHP can easily create a dynamic content...</p>
                        <a href="php.php" class="btn btn-dark">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/nodejs.png" alt="NodeJS Logo">
                        <h5 class="card-title">NodeJS</h5>
                        <p class="card-text">An open source and was developed by Ryan Dahl. Node.js has different software...</p>
                        <a href="nodejs.php" class="btn btn-dark">Learn more...</a>
                    </div>
                </div>
            </div>
        </div>  
        <div class="row mt-3">
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/jsp.svg" alt="JSP Logo">
                        <h5 class="card-title">Java Server Pages</h5>
                        <p class="card-text">A technology that was based on a famous language, Java, and enables every development of websites which are dynamic and not static...</p>
                        <a href="jsp.php" class="btn btn-dark">Learn more...</a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 mb-3">
                <div class="card">
                    <div class="card-body">
                        <img src="../img/web-security.svg" alt="Web Security Logo">
                        <h5 class="card-title">Web Security</h5>
                        <p class="card-text">Insert some text here...</p>
                        <a href="web-security.php" class="btn btn-dark">Learn more...</a>
                    </div>
                </div>
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
            <a href="index.html"><img src="../img/webtech2.png" alt="logo"></a>
            <p>Copyright &copy; 2018 Webtech. All rights reserved.</p>  
            </div>
        </div>
    </footer>
    
    <script src="../js/jquery.slim.min.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>