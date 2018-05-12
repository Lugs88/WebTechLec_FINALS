<?php
    session_start();
    include_once '../php/db-inc.php';
 ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Quiz - PHP </title>
        <link rel="stylesheet" href="../css/bootstrap.css">
        <link rel="stylesheet" href="../css/quiz.css">
        <link rel="stylesheet" href="../css/style.css"> 
        <link rel="icon" href="../favicon.ico" type="image/x-icon">   
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
            <div class="bg-item-sm" style="background-image: url(../img/bg-php.png)"></div>
        </div>

        <h2 class="mt-5"> QUIZ </h2>
        <p class="display-4 mt-0 mb-5 text-center">PHP</p>
        <div class="quiz-form">
            <form method="post" action="../php/phpchecker.php" class="quiz">
                <ol id="quiz-list"></ol>

                <button type="submit" class="btn btn-outline-success btn-lg" id="submitBtn">Submit</button>
            </form>
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
        <script src="../js/jquery-3.3.1.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="../js/phpquiz.js"></script>
        <script src="../js/script.js"></script>
    </body>
</html>