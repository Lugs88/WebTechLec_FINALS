<?php
    session_start();
    include_once 'php/db-inc.php';
  //  include_once 'php/log-in-inc.php';
  //  include_once 'php/sign-up-inc.php';
 ?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Webtech: Course Website</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
      if(isset($_SESSION['logged_in']))
      {
        include_once 'user-header.php';
      }
      else
      {
        include_once 'general-header.php';
      }

    ?>
   
   <div class="cover">
        <div class="bg-item-lg" style="background-image: url(img/bg1.jpg)"></div>  
        <h1 class="cover-text">Learn Web Technologies</h1>
        <a href="./html/lessons.php"><button class="btn btn-outline-dark" type="button">Start Now</button></a>
    </div>    
    
    <div class="container pt-10 mb-10">
        <div class="row">
            <div class="col-sm-9 text-justify">
                <h1>About the Site</h1>
                <p class="lead">
                    This website aims to provide knowledge about various server side scipting web technologies and web securities. It also tests your knowledge about what you've learned through reading the website's various topics. The contents in the websites come from many sources and documentation then summarized for easier reading.
                </p>
                <a href="./html/lessons.php"><button class="btn btn-primary" type="button">Start Now</button></a>
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
            <a href="index.php"><img src="img/webtech2.png" alt="logo"></a>
            <p>Copyright &copy; 2018 Webtech. All rights reserved.</p>  
            </div>
        </div>
    </footer>
    
    <script src="js/jquery.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    
</body>
</html>